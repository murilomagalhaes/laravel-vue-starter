<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>

    <div id="app">

        <div class="d-flex" id="wrapper">

            <!-- Sidebar Menu -->
            @include('layout.sidebar')

            <div id="page-content-wrapper" class="bg-white">

                <!-- Top Navbar -->
                @include('layout.navbar')

                <!-- Page content-->
                <div class="container-fluid">
                    @yield('page')
                </div>


            </div>


        </div>

                        <!-- Page Footer-->
                        @include('layout.footer')

    </div>

    <!-- Gloabl JS Scripts -->
    @include('layout.scripts')

    <!-- Per Page Scripts-->
    @yield('scripts')

</body>

</html>
