@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>CONTENT</th>
                            <th>CATEGORY</th>
                            <th>IMAGE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}"> {{ $post->id }}</a></td>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}"> {{ $post->title }}</a></td>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}"> {{ $post->content }}</a></td>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}"> {{ $post->category_id }}</a>
                                </td>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}"> {{ $post->image }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>CONTENT</th>
                            <th>CATEGORY</th>
                            <th>IMAGE</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
                <!-- /.card-body -->
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create post</a>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            {{ $posts->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </div>

        <!-- /.col -->
    </div>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <!-- Page specific script -->
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

@endsection
