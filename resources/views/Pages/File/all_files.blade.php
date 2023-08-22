@extends('layouts.backend.app')
@section('css-links')
{{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
{{--    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
{{--<link rel="stylesheet" href="{{asset('theme-assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/fontawesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/metisMenu/dist/metisMenu.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/toastr/build/toastr.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/select2-3.5.2/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/select2-bootstrap/select2-bootstrap.css')}}"/>
    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/helper.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/styles/style.css')}}">
@endsection
@section('section')

    <div class="normalheader">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="#">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="{{route('dashboard.v1')}}">Dashboard</a></li>
                        <li>
                            <span>All Files</span>
                        </li>

                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Files
                </h2>
                <small>upload your file here.</small>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
{{--                        <input type="text" class="form-control input-sm m-b-md" id="filter"--}}
{{--                               placeholder="Search in table">--}}
                        <table class="table table-bordered data-table" id="yajra_table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Extension</th>
                                <th>Size</th>
                                <th >action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-script')
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#example1').footable();--}}
{{--        });--}}


{{--    </script>--}}

    <script type="text/javascript">
        $(function () {

            {{--var table = $('.data-table').DataTable({--}}
            {{--    processing: true,--}}
            {{--    serverSide: true,--}}
            {{--    ajax: "{{ route('file.index') }}",--}}
            {{--    columns: [--}}
            {{--        {data: 'id', name: 'No'},--}}
            {{--        {data: 'name', name: 'name'},--}}
            {{--        {data: 'email', name: 'email'},--}}
            {{--        {data: 'username', name: 'username'},--}}
            {{--        {data: 'action', name: 'action', orderable: false, searchable: false},--}}
            {{--    ]--}}
            {{--});--}}

            var table = $('#yajra_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('all_files') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'file_original_name', name: 'Name'},
                    {data: 'file_extension', name: 'Extension',searchable: true},
                    {data: 'file_size', name: 'Size'},
                    {data: 'action',name: 'action',orderable: true,searchable: true},
                ],
                "pageLength": 5
            });


        });
    </script>
@endsection
