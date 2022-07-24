<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin.head>

    </x-admin.head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   {{--<x-admin.preloader>--}}

   {{--</x-admin.preloader>--}}

    <x-admin.navbar>

    </x-admin.navbar>

    <x-admin.sidebar>

    </x-admin.sidebar>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        {{--<x-admin.content-header>--}}

        {{--</x-admin.content-header>--}}

        <!-- Main content -->
        <section class="content  section main-section ">
            <div class="container-fluid">
                {{$slot}}
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>


    <x-admin.footer>

    </x-admin.footer>


    <x-admin.control-sidebar>

    </x-admin.control-sidebar>
</div>
<!-- ./wrapper -->


<x-admin.footer-script>
    <!-- custom-file-input -->
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</x-admin.footer-script>

</body>
</html>

