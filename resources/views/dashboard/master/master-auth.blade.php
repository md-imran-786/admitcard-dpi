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

<div class="app-body">
    <main class="main">
        <!-- Breadcrumb-->

        @yield('main-content')


    </main>

</div>
@include('dashboard.layout.partial.script')
</body>
</html>