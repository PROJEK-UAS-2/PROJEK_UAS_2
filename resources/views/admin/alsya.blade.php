@extends('template.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Breadcrum -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="index">Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Profile</a>
            </li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->
    <div class="col-xl-12">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
                        <i class="tf-icons bx bx-user"></i> Profile
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
                        <i class="tf-icons bx bx-link"></i> Connection
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                <div class="button-wrapper">
                                    <h1 class="text-muted">Alsya Majandra</h1>
                                    <p class="text-muted mb-0"> Student of Nurul Fikri College of Integrated Technology majoring in information system</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName" value="Alsya" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName" value="Majandra" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email" value="alsy22277si@student.nurulfikri.ac.id" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" class="form-control" id="organization" name="organization" value="Nurul Fikri College of Integrated Technology" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                    <span class="input-group-text">ID (+62)</span>
                                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="853 5813 4141"/>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input class="form-control" type="text" id="state" name="state" value="Bogor, West Java" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country</label>
                                    <input type="text" id="country" name="country" class="form-control" value="Indonesia" />
                                </div>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->    
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                    <h5 class="card-header">Social Accounts</h5>
                    <div class="card-body">
                        <p>Display content from social accounts on your site</p>
                        <!-- Social Accounts -->
                        <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                <img
                                    src="{{asset('assets/img/icons/brands/facebook.png')}}"
                                    alt="facebook"
                                    class="me-3"
                                    height="30"
                                />
                                </div>
                                <div class="flex-grow-1 row">
                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                        <h6 class="mb-0">Facebook</h6>
                                        <small class="text-muted">Not Connected</small>
                                    </div>
                                    <div class="col-4 col-sm-5 text-end">
                                        <button type="button" class="btn btn-icon btn-outline-secondary" disabled>
                                        <i class="bx bx-link-alt"></i>
                                        </button>
                                    </div>
                                </div>
                        </div>
                        <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <img
                                    src="{{asset('assets/img/icons/brands/twitter.png')}}"
                                    alt="twitter"
                                    class="me-3"
                                    height="30"/>
                                </div>
                                <div class="flex-grow-1 row">
                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                        <h6 class="mb-0">Twitter</h6>
                                        <small class="text-muted">Not Connected</small>
                                    </div>
                                    <div class="col-4 col-sm-5 text-end">
                                        <button type="button" class="btn btn-icon btn-outline-secondary" disabled>
                                        <i class="bx bx-link-alt"></i>
                                        </button>
                                    </div>
                                </div>
                        </div>
                        <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <img
                                    src="{{asset('assets/img/icons/brands/instagram.png')}}"
                                    alt="instagram"
                                    class="me-3"
                                    height="30"/>
                                </div>
                                <div class="flex-grow-1 row">
                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                        <h6 class="mb-0">Instagram</h6>
                                        <a href="https://www.instagram.com/alsyaamjndra/" target="_blank">@alsyaamjndra</a>
                                    </div>
                                    <div class="col-4 col-sm-5 text-end">
                                        <a href="https://www.instagram.com/alsyaamjndra/">
                                        <button type="button" class="btn btn-icon btn-outline-info">
                                        <i class="bx bx-link-alt"></i>
                                        </button></a>
                                    </div>
                                </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <img
                                src="{{asset('assets/img/icons/brands/github.png')}}"
                                alt="instagram"
                                class="me-3"
                                height="30"/>
                            </div>
                            <div class="flex-grow-1 row">
                                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                    <h6 class="mb-0">Github</h6>
                                    <a href="https://github.com/machaalattee" target="_blank">@machaalattee</a>
                                </div>
                                <div class="col-4 col-sm-5 text-end">
                                    <a href="https://github.com/machaalattee">
                                    <button type="button" class="btn btn-icon btn-outline-info">
                                    <i class="bx bx-link-alt"></i>
                                    </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <img
                                src="{{asset('assets/img/icons/brands/google.png')}}"
                                alt="instagram"
                                class="me-3"
                                height="30"/>
                            </div>
                            <div class="flex-grow-1 row">
                                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                    <h6 class="mb-0">Google</h6>
                                    <a href="https://www.google.com/" target="_blank">alsy22277si@student.nurulfikri.ac.id</a>
                                </div>
                                <div class="col-4 col-sm-5 text-end">
                                    <a href="https://www.google.com/">
                                    <button type="button" class="btn btn-icon btn-outline-info">
                                    <i class="bx bx-link-alt"></i>
                                    </button></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Social Accounts -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection