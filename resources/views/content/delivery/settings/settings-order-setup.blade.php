@extends('layouts/layoutMaster')

@section('title', 'Delivery Pos-system settings')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
@endsection

@section('content')
    <h5 class="py-3 mb-4"><span class="text-muted fw-light">Delivery / Settings / </span>Order Setup</h5>

    <div class="row g-4">

        <!-- Navigation -->
        <div class="col-12 col-lg-3 card p-2">
            <div class="d-flex justify-content-between flex-column">
                <ul class="nav nav-align-left nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-buildings me-2"></i>
                            <span class="align-middle">Company</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-basketball me-2"></i>
                            <span class="align-middle">Site</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-store me-2"></i>
                            <span class="align-middle">Branches</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-envelope me-2"></i>
                            <span class="align-middle">Mail</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                            <i class="bx bx-package me-2"></i>
                            <span class="align-middle">Order Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-key me-2"></i>
                            <span class="align-middle">OTP</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-bell me-2"></i>
                            <span class="align-middle">Notification</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-id-card me-2"></i>
                            <span class="align-middle">Notification Alert</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-polygon me-2"></i>
                            <span class="align-middle">Social Media</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-cookie me-2"></i>
                            <span class="align-middle">Cookies</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-pie-chart-alt-2 me-2"></i>
                            <span class="align-middle">Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-brush me-2"></i>
                            <span class="align-middle">Theme</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-timer me-2"></i>
                            <span class="align-middle">Time Slots</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-food-menu me-2"></i>
                            <span class="align-middle">Sliders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-money me-2"></i>
                            <span class="align-middle">Currencies</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-category-alt me-2"></i>
                            <span class="align-middle">Item Categories</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Navigation -->

        <!-- Options -->
        <div class="col-12 col-lg-9 pt-4 pt-lg-0">

            <div class="tab-content p-0">
                <!-- Store Details Tab -->
                <div class="tab-pane fade show active" id="store_details" role="tabpanel">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Order Setup</h5>
                        </div>
                        <div class="card-body mt-3">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-6 col-md-6">
                                        <label class="form-label mb-0" for="ecommerce-settings-details-email">FREE
                                            FOOD PREPARATION TIME ( IN MINUTE )
                                            *</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control"
                                                id="ecommerce-settings-details-email" placeholder="" name="email"
                                                aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label class="form-label mb-0" for="ecommerce-settings-details-email">BASIC
                                            SCHEDULE ORDER SLOT DURATION ( IN MINUTE )
                                            *</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control"
                                                id="ecommerce-settings-details-email" placeholder="" name="DURATION"
                                                aria-label="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6 col-md-6">
                                        <label class="form-label mb-0" for="ecommerce-settings-details-email">BASIC
                                            TAKEAWAY
                                            *</label>
                                        <div class="form-group  p-2 mt-3">
                                            <label class="me-2"> <input type="radio" id="active" class="me-2"
                                                    value="Active"> Enable
                                            </label>
                                            <label> <input type="radio" id="inactive" class="me-2" value="">
                                                Disable
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label class="form-label mb-0" for="ecommerce-settings-details-email">BASIC
                                            DELIVERY
                                            *</label>
                                        <div class="form-group  p-2 mt-3">
                                            <label class="me-2"> <input type="radio" id="active" class="me-2"
                                                    value="Active"> Enable
                                            </label>
                                            <label> <input type="radio" id="inactive" class="me-2" value="">
                                                Disable
                                            </label>

                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="bx bxs-save me-2"></i>Save</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Options-->
    </div>

@endsection
