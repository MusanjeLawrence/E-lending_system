<!DOCTYPE html>
<html lang="en">

{{-- Include Head --}}
@include('common.head')

<body>

    <!-- Page Container -->
    <div class="container-fluid d-flex">

        <!-- Sidebar -->
        @include('common.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Container -->
        <div class="container-fluid d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

                <!-- Topbar -->
                @include('common.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Container -->

    </div>
    <!-- End of Page Container -->
</body>

</html>