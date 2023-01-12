<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.php">
                <span class="sidebar-colored d-block p-2">
                    <img src="{{ asset('assets/images/Logo.png') }}" height="50" class='m-auto d-block ' alt="">
                </span>
            </a>
        </div>

        <div class="data-user-sidebar text-center mt-3">
            <div class="img">
{{--                <img src="{{ auth()->user()->image }}" class="rounded-circle shadow avatar " alt="">--}}
            </div>
{{--            <h5 class="mt-1 mb-0 h6 text-white">{{ auth()->user()->name }}</h5>--}}
            <span class='main-color '>
                <i class="circle"></i>
                مدير
            </span>
        </div>

        <ul class="sidebar-menu">



{{--            --}}
            <li class="sidebar-dropdown @if (Request::segment(2) == 'bundles') active @endif">
                <a href="javascript:void(0)">
                    <img src="{{ asset('assets/images/icon/icon-3d-design.svg') }}" width='20'
                         class='me-3' alt="">
                    @lang('bundles')
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('expert.index.bundle') }}"> @lang('all bundle') </a></li>
                        <li>
                            <a href="{{ route('expert.create.bundle') }}">@lang('create bundle')</a>
                        </li>
                    </ul>
                </div>
            </li>
{{--            --}}
            <li class="sidebar-dropdown @if (Request::segment(2) == 'products') active @endif">
                <a href="javascript:void(0)">
                    <img src="{{ asset('assets/images/icon/icon-product.svg') }}" width='20'
                         class='me-3' alt="">
                    @lang('adminPanel.products')
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('expert.add_to_bundle.product') }}"> @lang('add product to bundle') </a></li>
                    </ul>
                </div>
            </li>

        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <ul class="sidebar-footer list-unstyled mb-4">
        <li class="d-flex justify-content-center mb-0 icon-help">
            <a href="" target="_blank" class="btn btn-icon btn-soft-light">
                <i class="uil uil-question-circle"></i>
                <small class="ms-1"> @lang('help') </small>
            </a>
        </li>
    </ul>
    <!-- Sidebar Footer -->
</nav>
<!-- sidebar-wrapper -->
