<!DOCTYPE html>
<html lang="en">
@include('partials.selfapply.head')

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBSPQDJ6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- PAGE CONTENT -->
    <div id="page" class="page font--poppins">
        <!-- HEADER -->
        @include('partials.selfapply.header-dark')
        <!-- END HEADER -->
        @yield('content')
        <script type="text/javascript" src="{{ asset('front/calc/calccore.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('front/calc/commoncalculator.js') }}"></script>
        <script type="text/javascript" src="{{ asset('front/calc/emicalculator.js') }}"></script>
        @include('partials.selfapply.footer')
    </div>
    @include('stacks.js.selfapply.scripts')
</body>

</html>