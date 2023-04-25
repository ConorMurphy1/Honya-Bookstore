@extends('welcome')
@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Books</a></li>
        <li class="breadcrumb-item active" aria-current="page">Author</li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>
<!-- /Breadcrumb -->
<div class="container-fluid px-xxl-65 px-xl-20">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Create Book</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Custom Bootstrap Form Validation</h5>
                <p class="mb-40">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your form. For server side validation <a href="https://getbootstrap.com/docs/4.1/components/forms/#server-side" target="_blank">read full documentation</a>.</p>
                <div class="row">
                    <div class="col-sm">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom01">First name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustom02">Last name</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-10">
                                    <label for="validationCustomUsername">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-10">
                                    <label for="validationCustom03">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-10">
                                    <label for="validationCustom04">State</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-10">
                                    <label for="validationCustom05">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input custom-control-input" id="invalidCheck" required>
                                    <label class="form-check-label custom-control-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>
@endsection
