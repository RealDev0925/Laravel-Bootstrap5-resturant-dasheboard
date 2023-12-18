@extends('layouts/layoutMaster')

@section('title', 'Orders Order Detail')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-ecommerce-order-details.js') }}"></script>
    <script src="{{ asset('assets/js/modal-add-new-address.js') }}"></script>
    <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script>
    <script src="{{ asset('assets/js/forms-pickers.js') }}"></script>

@endsection

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Orders /</span> Order Details
    </h4>



    <!-- Order Details Table -->

    <div class="row">
        <div class="col-12 col-lg-8 card">

            <div class="card-header d-flex justify-content-between align-items-center"
                style="border-bottom: 1px #ccc solid">
                <h5 class="card-title m-0">Order details</h5>
            </div>
            <div class="card-body">
                <div class="mb-4 p-3">
                    <div
                        class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                        <div class="d-flex flex-column justify-content-center p-3">
                            <h5 class="mb-1 mt-3">Order #32543 <span class="badge bg-label-success me-2 ms-2">Paid</span>
                                <span class="badge bg-label-info">Ready to Pickup</span>
                            </h5>
                            <p class="text-body">Aug 17, <span id="orderYear"></span>, 5:48 (ET)</p>
                        </div>
                        <div class="d-flex align-content-center flex-wrap gap-2">
                            <button class="btn btn-label-danger delete-order">Delete Order</button>
                        </div>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title m-0">- Customer details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start align-items-center mb-5">
                            <div class=" avatar me-5">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ url('app/user/view/account') }}" class="text-body text-nowrap w-px-40">
                                    <h5 class="mb-0">Shamus Tuttle</h5>
                                </a>
                                <small class="text-muted">Customer ID: #58909</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start align-items-center mt-4 mb-4">
                            <span
                                class="avatar rounded-circle bg-label-success me-2 d-flex align-items-center justify-content-center"><i
                                    class="bx bx-cart-alt bx-sm lh-sm"></i></span>
                            <h6 class="text-body text-nowrap mb-0">12 Orders</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4>- Contact info</h4>
                            <h6><a href=" javascript:void(0)" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#editUser">Edit</a>
                            </h6>
                        </div>
                        <p class=" mb-1">Email: Shamus889@yahoo.com</p>
                        <p class=" mb-0">Mobile: +1 (609) 972-22-22</p>
                    </div>
                </div>



                <div class="card-datatable table-responsive mt-3">
                    <table class="datatables-order-details table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th class="w-50">products</th>
                                <th class="w-25">price</th>
                                <th class="w-25">qty</th>
                                <th>total</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="d-flex justify-content-end align-items-center m-3 mb-2 p-1">
                        <div class="order-calculations">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">Subtotal:</span>
                                <span class="text-heading">$6398</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">Discount:</span>
                                <span class="text-heading mb-0">$22</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">Tax:</span>
                                <span class="text-heading">$30</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h4 class="w-px-100 mb-0">Total:</h4>
                                <h4 class="mb-0">$6450</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="col-12 col-lg-4">


            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between">
                    <h6 class="card-title m-0">Order Setup</h6>

                </div>
                <div class="card-body">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4>Payment Verification</h4>
                            <p>Please Verify The Payment Before Confirm Order</p>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-danger">Verify Payment</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Change Order Status</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <select type="text" class="form-control" id="basic-default-fullname"
                                placeholder="Pending">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-group" id="basic-default-company" placeholder="Payment Status">
                            </div>
                        </div>
                        <div class="mb-3">
                            <h5> Delivery Date & Time</h5>
                        </div>
                        <div class=" row mb-3">
                            <!-- Date Picker-->
                            <div class="col-6 mb-4">
                                <input type="text" class="form-control" placeholder="YYYY-MM-DD"
                                    id="flatpickr-date" />
                            </div>
                            <!-- /Date Picker -->

                            <!-- Time Picker-->
                            <div class="col-6 mb-4">
                                <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger form-control">Assign Delivery Map</button>
                    </form>
                </div>

            </div>
            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between">
                    <h5>Delivery Informatrion</h5>
                </div>
                <div class="card-body">

                    <div class="d-flex justify-content-start align-items-center m-3 mb-2 p-1">
                        <div class="order-calculations">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">Subtotal:</span>
                                <span class="text-heading">$6398</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">Discount:</span>
                                <span class="text-heading mb-0">$22</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">Tax:</span>
                                <span class="text-heading">$30</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="w-px-100 mb-0">Total:</h4>
                                    <h5 class="mb-0">$6450</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Modals -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-add-new-address')


@endsection
