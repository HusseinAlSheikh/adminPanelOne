<!-- Main Sidebar Container -->
@php( $links = config('constant.links') )
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <x-admin.sidebar-logo>

    </x-admin.sidebar-logo>

    <!-- Sidebar -->
    <div class="sidebar">

        <x-admin.sidebar-user>

        </x-admin.sidebar-user>

        {{--<x-admin.sidebar-search>--}}

        {{--</x-admin.sidebar-search>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @foreach($links as $link)

                    @if($link['headerLabel'])
                        <x-admin.sidebar-header
                                :label="$link['headerLabel']"
                        />
                    @endif

                    <x-admin.sidebar-item
                    :isOpen="false"
                    :isMulti="$link['isMulti']"
                    :mainRouteName="$link['mainRouteName']"
                    :mainLabel="$link['mainLabel']"
                    :mainIcon="$link['mainIcon']"
                    :mainIconSubLabel="''"
                    :mainIconSubClass="''"
                    :subItems="$link['subItems']"
                    />
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
