<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin.head>
    </x-admin.head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   <x-admin.preloader>

   </x-admin.preloader>

    <x-admin.navbar>

    </x-admin.navbar>

    <x-admin.sidebar>

    </x-admin.sidebar>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <x-admin.content-header>

        </x-admin.content-header>

        <!-- Main content -->
        <section class="content">
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

</x-admin.footer-script>

</body>
</html>

