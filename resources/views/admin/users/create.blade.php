@extends('admin.layout.master2')
@section('title') @endsection
@section('styles') @endsection
@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h3 class="mb-1">
                            Users
                        </h3>
                        <p class="mb-0 font-weight-bold text-sm">
                            Users management
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">Users/Add User</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">Add User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card-sm bg-white">
            <div class="card-body p-3">
                <div class="d-flex flex-row justify-content-center">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-icon btn-outline-secondary mt-1 btn-sm"
                       style="margin: 10px">
                        <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                        <span class="btn-inner--text">Back</span>
                    </a>
                    <h3>Users</h3>
                </div>
                <hr class="text-secondary" style="width: 10%; margin: auto">
                <div class="d-flex flex-row justify-content-center my-2">
                    <button class="btn btn-icon btn-1 btn-primary" type="button">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Add User</span>
                    </button>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('scripts') @endsection
