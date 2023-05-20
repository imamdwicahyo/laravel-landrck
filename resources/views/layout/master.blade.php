
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        @include('layout.meta')

        @include('layout.style')
    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->

        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            @include('layout.sidebar')
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                @include('layout.header')

                <div class="container-fluid">
                    @yield('content')
                </div><!--end container-->

                @include('layout.footer')
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        @include('layout.script')
    </body>

</html>
