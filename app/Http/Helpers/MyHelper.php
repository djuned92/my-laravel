<?php

use App\Models\Menu;

if ( !function_exists('breadcrumb') ) {
	function breadcrumb($subheader_title, $nav_item = [])
	{
		$breadcrumb = '';
		$breadcrumb .= '
		<div class="m-subheader ">
		    <div class="d-flex align-items-center">
		        <div class="mr-auto">
		            <h3 class="m-subheader__title m-subheader__title--separator">
		                '.$subheader_title.'
		            </h3>

		            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
		                <li class="m-nav__item m-nav__item--home">
		                    <a href="#" class="m-nav__link m-nav__link--icon">
		                    <i class="m-nav__link-icon la la-home"></i>
		                    </a>
		                </li>
		                <li class="m-nav__separator">
		                    -
		                </li>';
		            
			            foreach ($nav_item as $key => $value) {
				            if(count($nav_item) > 1) {
					            $breadcrumb .= '    
					                <li class="m-nav__item">
					                    <a href='.$key.' class="m-nav__link">
					                    <span class="m-nav__link-text">
					                    '.$value.'
					                    </span>
					                    </a>
					                </li>';   
			                	if(next($nav_item)) {
			                		$breadcrumb .= '    
					                <li class="m-nav__separator">
					                    -
					                </li>';
				                } else {
				                	$breadcrumb .= '';
				                }
				            } else {
			                	$breadcrumb .= '    
					                <li class="m-nav__item">
					                    <a href='.$key.' class="m-nav__link">
					                    <span class="m-nav__link-text">
					                    '.$value.'
					                    </span>
					                    </a>
					                </li>';
				            }
			            }
		            
		            
		            	$breadcrumb .= '
		            </ul>
		        </div>
		    </div>
		</div>';

		return $breadcrumb;
	}
}

if( !function_exists('generate_menu') ) {
	function generate_menu()
	{
		$list_menu = '';
		$menus = Menu::GetListMenus('0',null)->get();

		foreach ($menus as $key => $value) {
			$id = $value->id;

			$menus1 = Menu::GetListMenus('1',$id);
			if($menus1->count() > 0) {
				// level 0 with children
				$list_menu .='
					<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
			            <a  href="#" class="m-menu__link m-menu__toggle">
			            <i class="m-menu__link-icon '.$value->icon.'"></i>
			            <span class="m-menu__link-text">
			            '.$value->menu.'
			            </span>
			            <i class="m-menu__ver-arrow la la-angle-right"></i>
			            </a>
			            <div class="m-menu__submenu ">
			                <span class="m-menu__arrow"></span>
			                <ul class="m-menu__subnav">
				';
				foreach ($menus1->get() as $k1 => $v1) {
					$id = $v1->id;
					// level 1 with children 
					$menus2 = Menu::GetListMenus('2',$id);
					if($menus2->count() > 0) {
						$list_menu .='
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
		                        <a  href="#" class="m-menu__link m-menu__toggle">
		                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
		                        <span></span>
		                        </i>
		                        <span class="m-menu__link-text">
		                        '.$v1->menu.'
		                        </span>
		                        <i class="m-menu__ver-arrow la la-angle-right"></i>
		                        </a>
		                        <div class="m-menu__submenu ">
		                            <span class="m-menu__arrow"></span>
		                            <ul class="m-menu__subnav">';
                        foreach ($menus2->get() as $k2 => $v2) {
                        	$id = $v2->id;
                        	// level 2 with children
                        	$menus3 = Menu::GetListMenus('3',$id);
                        	if($menus3->count() > 0) {
                        		$list_menu .= '
                        			<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
				                        <a  href="#" class="m-menu__link m-menu__toggle">
				                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
				                        <span></span>
				                        </i>
				                        <span class="m-menu__link-text">
				                        '.$v2->menu.'
				                        </span>
				                        <i class="m-menu__ver-arrow la la-angle-right"></i>
				                        </a>
				                        <div class="m-menu__submenu ">
				                            <span class="m-menu__arrow"></span>
				                            <ul class="m-menu__subnav">';
	                            foreach ($menus3->get() as $k3 => $v3) {
	                            	$list_menu .='
		                        		<li class="m-menu__item " aria-haspopup="true" >
		                                    <a  href="'.$v3->link.'" class="m-menu__link ">
		                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
		                                    <span></span>
		                                    </i>
		                                    <span class="m-menu__link-text">
		                                    '.$v3->menu.'
		                                    </span>
		                                    </a>
		                                </li>';	
	                            }
                        	} else {
	                        	$list_menu .='
		                        		<li class="m-menu__item " aria-haspopup="true" >
		                                    <a  href="'.$v2->link.'" class="m-menu__link ">
		                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
		                                    <span></span>
		                                    </i>
		                                    <span class="m-menu__link-text">
		                                    '.$v2->menu.'
		                                    </span>
		                                    </a>
		                                </li>';
                        	}
                        }
                        $list_menu .= '</ul></div></li>';
					} else {
						// level 1 without children
						$list_menu .='
							<li class="m-menu__item " aria-haspopup="true">
					            <a  href="'.$v1->link.'" class="m-menu__link ">
		                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
					           	<span></span>
                        		</i>
					            <span class="m-menu__link-text">
		                        '.$v1->menu.'
		                        </span>
		                        </a>
					        </li>
						';
					}
				}

				$list_menu .='</ul></div></li>';
			} else {
				// level 0 without childrem
				$list_menu .='
					<li class="m-menu__item " aria-haspopup="true">
			            <a  href="../../../index.html" class="m-menu__link ">
			            <i class="m-menu__link-icon '.$value->icon.'"></i>
			            <span class="m-menu__link-title">
			                <span class="m-menu__link-wrap">
			                    <span class="m-menu__link-text">
			                        '.$value->menu.'
			                    </span>
			                </span>
			            </span>
			            </a>
			        </li>
				';
			}
		}

		return $list_menu;
	}
}