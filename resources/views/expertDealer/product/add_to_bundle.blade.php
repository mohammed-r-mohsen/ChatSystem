@extends('partials.layout')
@section('title')
    Obaya - Dashboard
@endsection

@section('content')++     <!-- Start Page Content -->
    @include('partials.top-header')
    <div class="container pt-4 pb-3 ">

    <div class="row">
        <!--        one here with discount-->
        <div class="col-md-3 col-6">
            <div class="col-6">
                <div class="comment-btn d-flex mt-3 mt-md-5">
                    <a class="btn btn-outline-dark" href="#" data-target="#Add_to_bundle" data-toggle="modal" >add to bundle</a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Modal Modal Add Comments -->
    <div class="modal fade " id="Add_to_bundle" tabindex="-1" aria-labelledby="Add_to_bundle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header border-bottom bg-soft-dark">
                    <h5 class="modal-title" id="EditDataUserLabel"> Add Product to bundle</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container ">
                                <form action="#" method="post">
                                    @csrf
                                    <label for="bundle-name" class="mb-2"><strong> Bundle Name</strong></label>
                                    <div class="form-group mb-2">
                                        <input id="bundle-name" name="bundle_name" type="text" class="form-control" placeholder="search for bundle name">
                                    </div>
                                    @error('bundle_name')
                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                    @enderror
                                    <div class="dd-menu bg-white shadow rounded border-0 mt-3 p-0" data-simplebar>

                                        <div class="p-3">
{{--                                            loop around this --}}
                                            <div  class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/client/04.jpg') }}"
                                                         class="avatar avatar-md-sm rounded border-0 shadow me-2" alt="">
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">bundle name</h6>
                                                        <small class="text-muted">bundle category</small>
                                                    </div>
                                                </div>
                                            </div>
{{--                                        end loop here                    --}}
                                            <div  class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/client/04.jpg') }}"
                                                         class="avatar avatar-md-sm rounded border-0 shadow me-2" alt="">
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">bundle name</h6>
                                                        <small class="text-muted">bundle category</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/client/04.jpg') }}"
                                                         class="avatar avatar-md-sm rounded border-0 shadow me-2" alt="">
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">bundle name</h6>
                                                        <small class="text-muted">bundle category</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/client/04.jpg') }}"
                                                         class="avatar avatar-md-sm rounded border-0 shadow me-2" alt="">
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">bundle name</h6>
                                                        <small class="text-muted">bundle category</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/client/04.jpg') }}"
                                                         class="avatar avatar-md-sm rounded border-0 shadow me-2" alt="">
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">bundle name</h6>
                                                        <small class="text-muted">bundle category</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/client/04.jpg') }}"
                                                         class="avatar avatar-md-sm rounded border-0 shadow me-2" alt="">
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">bundle name</h6>
                                                        <small class="text-muted">bundle category</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer justify-content-center  mt-3 mb-2">
                                        <button type="submit" class='btn  btn-dark '>Add to bundle</button>
                                        <button type="button" class="btn btn-outline-dark ml-3 " data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Add Comments -->
    </div>

@endsection
