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
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4">@lang('الحزم')   </h6>
            </div>
            <div class="filter-search">
                <div class="heading d-flex justify-content-between align-items-center pe-3">
                    <h4 class="h5">@lang('adminPanel.filter')  </h4>
                    <i class="uil uil-filter"></i>
                </div>
                <div class="content p-4 border">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <input type="text"  value="" name="name"  class='form-control mb-3' placeholder="@lang('الاسم')">
                        </div>
                        <div class="col-md-4 col-6">
                            <input type="date"  value="" name="date"  class='form-control mb-3' placeholder="@lang('تاريخ الاضافة')">
                        </div>
                        <div class="col-md-4 col-6">
                            <select class="form-select form-control"  id="category"  name="category" aria-label="category">
                                <option value="">@lang('تصنيف الحزمة')</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>  <!-- /. end Filter -->


            <div class="bg-white ">

                <div class="p-4">
                    <div id="kt_datatable_example_buttons" class="d-none"></div>

                    <div class="btns-optons-table mb-3 btns-datatables-export"  id="kt_datatable_example_export_menu">
                        <button class="btn btn-dark"  data-kt-export="print">Print</button>
                        <button class="btn btn-dark"  data-kt-export="pdf">pdf</button>
                        <button class="btn btn-dark"  data-kt-export="excel">Excel</button>
                        <button class="btn btn-dark"  data-kt-export="csv">csv</button>
                        <button class="btn btn-dark"   data-kt-export="copy">copy</button>
                    </div>
                    <div class="table-responsive   rounded-bottom mb-3">
                        <table class="table table-bordered table-center table-hover bg-white mb-0" id="kt_datatable_teachers">
                            <thead>
                            <tr>
                                <th class="text-center"> م </th>
                                <th class="text-center">@lang('اسم الحزمة') </th>
                                <th class="text-center">@lang('صورة غلاف الحزمة')  </th>
                                <th class="text-center">@lang('تصنيف الحزمة')  </th>
                                <th class="text-center">@lang('سعر الحزمة')</th>
                                <th class="text-center">@lang('سعر العمولة')</th>
                                <th class="text-center">@lang('تاريخ الاضافة') </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>تجريب</td>
                                    <td><img style="width: 100px; height: 100px;" src="" alt=""></td>
                                    <td>رجالي</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>1/1/2001</td>
                                </tr>
{{--                            @include('AdminPanel.sales.search')--}}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div> <!--end bg-white-->

        </div>
    </div>
@endsection
