@extends('layouts.backoffice')

@section('title','This is title')

@section('content')
{!! breadcrumb('Blank',[
		'/blank' => 'Blank',
		'/one' => 'One',
		'/two' => 'Two'

	]) 

!!}
<div class="m-content">
	<!--begin::Portlet-->
	<div class="m-portlet">
	    <div class="m-portlet__head">
	        <div class="m-portlet__head-caption">
	            <div class="m-portlet__head-title">
	                <h3 class="m-portlet__head-text">
	                    Blank
	                </h3>
	            </div>
	        </div>
	    </div>

	    <div class="m-portlet__body">
	    	<h1>Blank Page</h1>
	    </div>

	</div>
</div>
@endsection
