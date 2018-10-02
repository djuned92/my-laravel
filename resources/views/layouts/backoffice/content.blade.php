<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
                Form Controls
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                    <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                    <span class="m-nav__link-text">
                    Forms
                    </span>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                    <span class="m-nav__link-text">
                    Form Validation
                    </span>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                    <span class="m-nav__link-text">
                    Form Controls
                    </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Subheader -->
<div class="m-content">
    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Default Form Validation
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
            <div class="m-portlet__body">
                <div class="m-form__content">
                    <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
                        <div class="m-alert__icon">
                            <i class="la la-warning"></i>
                        </div>
                        <div class="m-alert__text">
                            Oh snap! Change a few things up and try submitting again.
                        </div>
                        <div class="m-alert__close">
                            <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Email *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="text" class="form-control m-input" name="email" placeholder="Enter your email" data-toggle="m-tooltip" title="Tooltip description">
                        <span class="m-form__help">
                        We'll never share your email with anyone else.
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    URL *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="url" placeholder="Enter your url">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                .via.com
                                </span>
                            </div>
                        </div>
                        <span class="m-form__help">
                        Please enter your website URL.
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Digits
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" name="digits" placeholder="Enter digits">
                            <span class="m-input-icon__icon m-input-icon__icon--left">
                            <span>
                            <i class="la la-calculator"></i>
                            </span>
                            </span>
                        </div>
                        <span class="m-form__help">
                        Please enter only digits
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Credit Card
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="creditcard" placeholder="Enter card number">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                <i class="la la-credit-card"></i>
                                </span>
                            </div>
                        </div>
                        <span class="m-form__help">
                        Please enter your credit card number
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    US Phone
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="phone" placeholder="Enter phone">
                            <div class="input-group-append">
                                <a href="#" class="btn btn-brand">
                                <i class="la la-phone"></i>
                                </a>
                            </div>
                        </div>
                        <span class="m-form__help">
                        Please enter your US phone number
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Option *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <select class="form-control m-input" name="option">
                            <option value="">
                                Select
                            </option>
                            <option>
                                1
                            </option>
                            <option>
                                2
                            </option>
                            <option>
                                3
                            </option>
                            <option>
                                4
                            </option>
                            <option>
                                5
                            </option>
                        </select>
                        <span class="m-form__help">
                        Please select an option.
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Options *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <select class="form-control m-input" name="options" multiple size="5">
                            <option>
                                1
                            </option>
                            <option>
                                2
                            </option>
                            <option>
                                3
                            </option>
                            <option>
                                4
                            </option>
                            <option>
                                5
                            </option>
                        </select>
                        <span class="m-form__help">
                        Please select at least one or maximum 4 options
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Memo *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <textarea class="form-control m-input" name="memo" placeholder="Enter a menu"></textarea>
                        <span class="m-form__help">
                        Please enter a menu within text length range 10 and 100.
                        </span>
                    </div>
                </div>
                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Checkbox *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-checkbox-inline">
                            <label class="m-checkbox">
                            <input type="checkbox" name="checkbox">
                            Tick me
                            <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">
                        Please tick the checkbox
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Checkboxes *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-checkbox-list">
                            <label class="m-checkbox">
                            <input type="checkbox" name="checkboxes">
                            Option 1
                            <span></span>
                            </label>
                            <label class="m-checkbox">
                            <input type="checkbox" name="checkboxes">
                            Option 2
                            <span></span>
                            </label>
                            <label class="m-checkbox">
                            <input type="checkbox" name="checkboxes">
                            Option 3
                            <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">
                        Please select at lease 1 and maximum 2 options
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                    Radios *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-radio-inline">
                            <label class="m-radio">
                            <input type="checkbox" name="radio">
                            Option 1
                            <span></span>
                            </label>
                            <label class="m-radio">
                            <input type="checkbox" name="radio">
                            Option 2
                            <span></span>
                            </label>
                            <label class="m-radio">
                            <input type="radio" name="radio">
                            Option 3
                            <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">
                        Please select an option
                        </span>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">
                            Validate
                            </button>
                            <button type="reset" class="btn btn-secondary">
                            Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Portlet-->
    <!--begin::Portlet-->
    <div class="row">
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Inputs Highlighted Validation State
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--state m-form--fit m-form--label-align-right" id="m_form_2">
                    <div class="m-portlet__body">
                        <div class="m-form__content">
                            <div class="m-alert m-alert--icon alert alert-warning m--hide" role="alert" id="m_form_2_msg">
                                <div class="m-alert__icon">
                                    <i class="la la-warning"></i>
                                </div>
                                <div class="m-alert__text">
                                    Oh snap! Change a few things up and try submitting again.
                                </div>
                                <div class="m-alert__close">
                                    <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Email *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control m-input" name="email" placeholder="Enter your email">
                                <span class="m-form__help">
                                We'll never share your email with anyone else.
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            URL *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control m-input" name="url" placeholder="Enter your url">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                        .via.com
                                        </span>
                                    </div>
                                </div>
                                <span class="m-form__help">
                                Please enter your website URL.
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Digits
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" name="digits" placeholder="Enter digits">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                    <span>
                                    <i class="la la-calculator"></i>
                                    </span>
                                    </span>
                                </div>
                                <span class="m-form__help">
                                Please enter only digits
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Credit Card
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control m-input" name="creditcard" placeholder="Enter card number">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                        <i class="la la-credit-card"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="m-form__help">
                                Please enter your credit card number
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            US Phone
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control m-input" name="phone" placeholder="Enter phone">
                                    <div class="input-group-append">
                                        <a href="#" class="btn btn-brand">
                                        <i class="la la-phone"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="m-form__help">
                                Please enter your US phone number
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Option *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <select class="form-control m-input" name="option">
                                    <option value="">
                                        Select
                                    </option>
                                    <option>
                                        1
                                    </option>
                                    <option>
                                        2
                                    </option>
                                    <option>
                                        3
                                    </option>
                                    <option>
                                        4
                                    </option>
                                    <option>
                                        5
                                    </option>
                                </select>
                                <span class="m-form__help">
                                Please select an option.
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Options *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <select class="form-control m-input" name="options" multiple size="5">
                                    <option>
                                        1
                                    </option>
                                    <option>
                                        2
                                    </option>
                                    <option>
                                        3
                                    </option>
                                    <option>
                                        4
                                    </option>
                                    <option>
                                        5
                                    </option>
                                </select>
                                <span class="m-form__help">
                                Please select at least one or maximum 4 options
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Memo *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <textarea class="form-control m-input" name="memo" placeholder="Enter a menu"></textarea>
                                <span class="m-form__help">
                                Please enter a menu within text length range 10 and 100.
                                </span>
                            </div>
                        </div>
                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Checkbox *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="m-checkbox-inline">
                                    <label class="m-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    Tick me
                                    <span></span>
                                    </label>
                                </div>
                                <span class="m-form__help">
                                Please tick the checkbox
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Checkboxes *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="m-checkbox-list">
                                    <label class="m-checkbox">
                                    <input type="checkbox" name="checkboxes">
                                    Option 1
                                    <span></span>
                                    </label>
                                    <label class="m-checkbox">
                                    <input type="checkbox" name="checkboxes">
                                    Option 2
                                    <span></span>
                                    </label>
                                    <label class="m-checkbox">
                                    <input type="checkbox" name="checkboxes">
                                    Option 3
                                    <span></span>
                                    </label>
                                </div>
                                <span class="m-form__help">
                                Please select at lease 1 and maximum 2 options
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                            Radios *
                            </label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="m-radio-inline">
                                    <label class="m-radio">
                                    <input type="checkbox" name="radio">
                                    Option 1
                                    <span></span>
                                    </label>
                                    <label class="m-radio">
                                    <input type="checkbox" name="radio">
                                    Option 2
                                    <span></span>
                                    </label>
                                    <label class="m-radio">
                                    <input type="radio" name="radio">
                                    Option 3
                                    <span></span>
                                    </label>
                                </div>
                                <span class="m-form__help">
                                Please select an option
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-accent">
                                    Validate
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                    Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
        <div class="col-lg-6">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Multi Column Form Validation State
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--state m-form--fit m-form--label-align-right" id="m_form_3">
                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">
                                    Billing Information
                                </h3>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label class="form-control-label">
                                    * Cardholder Name:
                                    </label>
                                    <input type="text" name="billing_card_name" class="form-control m-input" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label class="form-control-label">
                                    * Card Number:
                                    </label>
                                    <input type="text" name="billing_card_number" class="form-control m-input" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4 m-form__group-sub">
                                    <label class="form-control-label">
                                    * Exp Month:
                                    </label>
                                    <select class="form-control m-input" name="billing_card_exp_month">
                                        <option value="">
                                            Select
                                        </option>
                                        <option value="01">
                                            01
                                        </option>
                                        <option value="02">
                                            02
                                        </option>
                                        <option value="03">
                                            03
                                        </option>
                                        <option value="04">
                                            04
                                        </option>
                                        <option value="05">
                                            05
                                        </option>
                                        <option value="06">
                                            06
                                        </option>
                                        <option value="07">
                                            07
                                        </option>
                                        <option value="08">
                                            08
                                        </option>
                                        <option value="09">
                                            09
                                        </option>
                                        <option value="10">
                                            10
                                        </option>
                                        <option value="11">
                                            11
                                        </option>
                                        <option value="12">
                                            12
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-4 m-form__group-sub">
                                    <label class="form-control-label">
                                    * Exp Year:
                                    </label>
                                    <select class="form-control m-input" name="billing_card_exp_year">
                                        <option value="">
                                            Select
                                        </option>
                                        <option value="2018">
                                            2018
                                        </option>
                                        <option value="2019">
                                            2019
                                        </option>
                                        <option value="2020">
                                            2020
                                        </option>
                                        <option value="2021">
                                            2021
                                        </option>
                                        <option value="2022">
                                            2022
                                        </option>
                                        <option value="2023">
                                            2023
                                        </option>
                                        <option value="2024">
                                            2024
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-4 m-form__group-sub">
                                    <label class="form-control-label">
                                    * CVV:
                                    </label>
                                    <input type="number" class="form-control m-input" name="billing_card_cvv" placeholder="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                        <div class="m-form__section">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">
                                    Billing Address
                                    <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="If different than the corresponding address"></i>
                                </h3>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label class="form-control-label">
                                    * Address 1:
                                    </label>
                                    <input type="text" name="billing_address_1" class="form-control m-input" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label class="form-control-label">
                                    Address 2:
                                    </label>
                                    <input type="text" name="billing_address_2" class="form-control m-input" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-5 m-form__group-sub">
                                    <label class="form-control-label">
                                    * City:
                                    </label>
                                    <input type="text" class="form-control m-input" name="billing_city" placeholder="" value="">
                                </div>
                                <div class="col-lg-5 m-form__group-sub">
                                    <label class="form-control-label">
                                    * State:
                                    </label>
                                    <input type="text" class="form-control m-input" name="billing_state" placeholder="" value="">
                                </div>
                                <div class="col-lg-2 m-form__group-sub">
                                    <label  class="form-control-label">
                                    * ZIP:
                                    </label>
                                    <input type="text" class="form-control m-input" name="billing_zip" placeholder="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                        <div class="m-form__section">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">
                                    Delivery Type
                                </h3>
                            </div>
                            <div class="form-group m-form__group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="m-option">
                                        <span class="m-option__control">
                                        <span class="m-radio m-radio--state-brand">
                                        <input type="radio" name="billing_delivery" value="">
                                        <span></span>
                                        </span>
                                        </span>
                                        <span class="m-option__label">
                                        <span class="m-option__head">
                                        <span class="m-option__title">
                                        Standart Delevery
                                        </span>
                                        <span class="m-option__focus">
                                        Free
                                        </span>
                                        </span>
                                        <span class="m-option__body">
                                        Estimated 14-20 Day Shipping 
                                        (&nbsp;Duties end taxes may be due 
                                        upon delivery&nbsp;)
                                        </span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="m-option">
                                        <span class="m-option__control">
                                        <span class="m-radio m-radio--state-brand">
                                        <input type="radio" name="billing_delivery" value="">
                                        <span></span>
                                        </span>
                                        </span>
                                        <span class="m-option__label">
                                        <span class="m-option__head">
                                        <span class="m-option__title">
                                        Fast Delevery
                                        </span>
                                        <span class="m-option__focus">
                                        $&nbsp;8.00
                                        </span>
                                        </span>
                                        <span class="m-option__body">
                                        Estimated 2-5 Day Shipping
                                        (&nbsp;Duties end taxes may be due
                                        upon delivery&nbsp;)
                                        </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-form__help">
                                    <!--must use this helper element to display error message for the options-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-accent">
                                    Validate
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                    Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>