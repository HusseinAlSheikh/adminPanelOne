<x-admin.main-layout >
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    @foreach($labels as $label)
                        @if($loop->index == 0)
                            <th width="10px">#</th>
                        @endif
                        <th>{{ $label }}</th>
                        @if($loop->last)
                            <th width="50">Edit</th>
                        @endif
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($data as $obj)
                    @php( $i = $loop->index+1)
                    <tr>
                        @foreach($obj as $index)
                            @if($loop->index == 0)
                                <td>{{ $i }}</td>
                            @endif
                            <td>{{ $index }}</td>
                            @if($loop->last)
                                <th width="50">Edit</th>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
{{--                <tfoot>--}}
{{--                <tr>--}}
{{--                    <th>Rendering engine</th>--}}
{{--                    <th>Browser</th>--}}
{{--                </tr>--}}
{{--                </tfoot>--}}
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</x-admin.main-layout>