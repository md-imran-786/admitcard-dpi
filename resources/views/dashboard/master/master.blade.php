<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    @include('dashboard.layout.partial.header-section')
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<!--main header-->
@include('dashboard.layout.partial.header-top')


<div class="app-body">
   @include('dashboard.layout.partial.sidebar-left')

    <main class="main">
        <!-- Breadcrumb-->
        @include('dashboard.layout.partial.breadcrumb')


        @yield('main-content')


    </main>

    @include('dashboard.layout.partial.sidebar-right')

</div>
@include('dashboard.layout.partial.footer')

@include('dashboard.layout.partial.script')

@stack('scripts')


</body>
</html>