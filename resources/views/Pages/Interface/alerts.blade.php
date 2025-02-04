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
                        <li><a href="index-2.html">Dashboard</a></li>
                        <li>
                            <span>Interface</span>
                        </li>
                        <li class="active">
                            <span>Alerts</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Alerts
                </h2>
                <small>Notification and custom alerts</small>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Sweet alert
                    </div>
                    <div class="panel-body">
                        <p>
                            Sweet Alert is a beautiful replacement for standard Javascript's "Alert".
                        </p>
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Examples
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    A basic message
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm demo1">Run example</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    A success message!
                                </td>
                                <td>
                                    <button class="btn btn-success btn-sm demo2">Run example</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    A warning message, with a function attached to the "Confirm"-button
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm demo3">Run example</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ... and by passing a parameter, you can execute something else for "Cancel".
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm demo4">Run example</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="m-t-md">
                            <p>
                                You can easy add sweet alert in your controller by adding code like this:
                            </p>
                            <pre>
swal({
    title: "Good job!",
    text: "You clicked the button!",
    type: "success"
});</pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Toastr notification
                    </div>
                    <div class="panel-body">
                        <p>
                            Minimalistic and extensible notification service for Homer theme.
                        </p>

                        <div class="text-center float-e-margins">
                            <div class="font-bold m">Example with Homer template</div>
                            <button class="homerDemo1 btn btn-info btn-sm">Run example</button>
                            <button class="homerDemo2 btn btn-success btn-sm">Run example</button>
                            <button class="homerDemo3 btn btn-warning btn-sm">Run example</button>
                            <button class="homerDemo4 btn btn-danger btn-sm">Run example</button>
                        </div>

                        <div class="m-t-md">
                            <p>
                                You can easy add any notification in your scripts by adding code like this:
                            </p>
                            <pre>
Command: toastr["success"]("Example message ", "Example title")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
} </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('page-script')

@endsection
