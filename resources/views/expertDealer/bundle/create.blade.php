@extends('partials.layout')
@section('title')
    Obaya - Dashboard
@endsection

@section('content')
    <!-- Start Page Content -->
    {{-- <main class="page-content bg-light"> --}}
    @include('partials.top-header')

    <div class="container-fluid">
        <div class="layout-specing">
            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-soft-dark   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4">إضافة حزمة جديدة</h6>
                </div>
                <div class="p-4">
                    <!-- Start Form -->
                    <form action="#" method="POST" id="add_product">
                        @csrf
                        <input type="hidden" name="product_type" value="ready_made">
                        <div class="row mt-3 mt-md-5">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="product_name" class="col-3 col-form-label"> اسم  <span
                                                    class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" class="form-control" id="product_name_ar"
                                                               name="product_name_ar" placeholder="اسم الحزمة بالعربية">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control" id="product_name_en"
                                                               name="product_name_en" placeholder="اسم الحزمة بالانجليزية">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- / End Product Name -->
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="product_serial_number" class="col-3 col-form-label"> الرقم التسلسلي
                                                <span class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="product_serial_number"
                                                       name="product_serial_number" placeholder="الرقم التسلسلي">
                                            </div>
                                        </div>
                                    </div> <!-- / End Serial Number -->

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="product_category" class="col-3 col-form-label"> تصنيف حزمة <span
                                                    class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <select name="product_category" id="" class='form-control form-select'>
                                                    <option value="1">رجالي</option>
                                                    <option value="2">نسائي</option>
                                                    <option value="3">أطفال</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / End bundle -->
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="in_stock" class="col-3 col-form-label"> في المتجر </label>
                                            <div class="col-9">
                                                <select name="in_stock" id="in_stock" class='form-control form-select'>
                                                    <option value="1"> نعم </option>
                                                    <option value="0"> لا </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- / End In Store -->
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="product_price" class="col-3 col-form-label"> سعر البيع <span
                                                    class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="product_price"
                                                       name="product_price" placeholder="سعر البيع ">
                                            </div>
                                        </div>
                                    </div> <!-- / End bundle Price -->
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="product_price" class="col-3 col-form-label"> سعر العمولة <span
                                                    class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="plus_price"
                                                       name="product_price" placeholder="سعر العمولة ">
                                            </div>
                                        </div>
                                    </div> <!-- / End bundle Price -->

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="product_3d_image" class="col-3 col-form-label"> صورة ثلاثية
                                                الابعاد </label>
                                            <div class="col-9">
                                                <div class="input-group mb-3" dir='ltr'>
                                                    <input type="file" class="form-control" id="product_3d_image"
                                                           name="product_3d_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- / End Uploade 3D -->

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="product_images" class="col-3 col-form-label"> صور الحزمة </label>
                                            <div class="col-9">
                                                <div class="input-group mb-3" dir='ltr'>
                                                    <input type="file" multiple class="form-control"
                                                           id="product_images" name="product_images[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- / End Uplodes Images -->


                                    <div class="col-12 mt-4">
                                        <h3 class='h5'> تفاصيل الحزمة </h3>
                                        <hr>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row mb-3 align-items-center">
                                            <label for="productDetails" class="col-2 col-form-label"> وصف الحزمة <span
                                                    class='text-danger'> * </span> </label>
                                            <div class="col-7">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <textarea class="form-control" id="custom_made_description" name="product_description_ar"
                                                                  placeholder="وصف الباقة بالعربية "></textarea>
                                                    </div>
                                                    <div class="col-6">
                                                        <textarea class="form-control" id="custom_made_description_en" name="product_description_en"
                                                                  placeholder="وصف الباقة بالانجليزية "></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 align-self-end">
                                                <label for="" class='font-sm mb-2'> إضافة صورة </label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="description_image"
                                                           name="description_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class='mt-3'>
                                    <div class="col-md-4">
                                        <button class='btn btn-dark px-4 mx-4 py-2' type="submit" id="add_product_sbtn"> إضافة الباقة </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- End  Form -->
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
@endsection


