@extends('layouts.backend.app')
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
                            <span>Logs</span>
                        </li>

                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Users Logs
                </h2>
                <small>All users logs.</small>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Search User Logs
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control input-sm m-b-md" id="filter"
                               placeholder="Search in table">
                        <table id="example1" class="footable table table-hover table-bordered toggle-arrow-tiny"
                               data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>
                                <th data-toggle="true">Name</th>
                                <th>Action</th>
                                <th data-toggle="true">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($logs as $log)
                                <tr>
                                    <td>{{$log->user->name}}</td>
                                    <td>{{$log->action}}</td>
                                    <td>{{\Carbon\Carbon::parse($log->action_date)->format('d/M/Y - h:m:s A')}}</td>
                                    @empty
                                        <td></td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('page-script')
    <script>
        $('#example1').footable();
    </script>
@endsection
