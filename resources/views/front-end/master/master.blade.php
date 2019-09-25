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
    @include('front-end.layout.partial.header-section')
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">



<div class="app-body">
 

    <main class="main">
        


        @yield('main-content')


    </main>

    @include('front-end.layout.partial.sidebar-right')

</div>
<!-- @include('front-end.layout.partial.footer') -->

@include('front-end.layout.partial.script')

@stack('scripts')


</body>
</html>