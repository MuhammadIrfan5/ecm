@extends('layouts.backend.app')
@section('css-links')
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/fontawesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/metisMenu/dist/metisMenu.css')}}" />
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/sweetalert/lib/sweet-alert.css')}}" />--}}
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/animate.css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap/dist/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/toastr/build/toastr.min.css')}}" />
{{--    <link rel="stylesheet" href="{{asset('theme-assets/styles/static_custom.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/jquery-ui/themes/base/all.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/codemirror/style/codemirror.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap-star-rating/css/star-rating.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap-tour/build/css/bootstrap-tour.min.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/select2-3.5.2/select2.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/select2-bootstrap/select2-bootstrap.css')}}" />--}}
    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/helper.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/styles/style.css')}}">
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/ladda/dist/ladda-themeless.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('theme-assets/vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('theme-assets/vendor/fooTable/css/footable.core.min.css') }}" />--}}
{{--    <link rel="stylesheet" href="{{ asset('theme-assets/vendor/xeditable/bootstrap3-editable/css/bootstrap-editable.css') }}" />--}}
    <link href="hello/world.css" />
@endsection
@section('section')

    <div class="content animate-panel">

        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">$1 206,90</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                            All Income
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200">
                        <div class="stats-title pull-left">
                            <h4>Users Activity</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-share fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
                            <h3 class="m-b-xs">4 210,160</h3>
                            <span class="font-bold no-margins">
                        Social users
                    </span>
                            <div class="progress m-t-xs full progress-small">
                                <div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" role="progressbar" class=" progress-bar progress-bar-success">
                                    <span class="sr-only">35% Complete (success)</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stats-label">Pages / Visit</small>
                                    <h4>7.80</h4>
                                </div>

                                <div class="col-xs-6">
                                    <small class="stats-label">% New Visits</small>
                                    <h4>76.43%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200">
                        <div class="stats-title pull-left">
                            <h4>Page Views</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-monitor fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
                            <h1 class="text-success">860k+</h1>
                            <span class="font-bold no-margins">
                        Social users
                    </span>
                            <br/>
                            <small>
                                Lorem Ipsum is simply dummy text of the printing and <strong>typesetting industry</strong>. Lorem Ipsum has been.
                            </small>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200">
                        <div class="stats-title pull-left">
                            <h4>Today income</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-cash fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-income-chart"></div>
                        </div>
                        <div class="m-t-xs">

                            <div class="row">
                                <div class="col-xs-5">
                                    <small class="stat-label">Today</small>
                                    <h4>$230,00 </h4>
                                </div>
                                <div class="col-xs-7">
                                    <small class="stat-label">Last week</small>
                                    <h4>$7 980,60 <i class="fa fa-level-up text-success"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200">
                        <div class="stats-title pull-left">
                            <h4>Page Views</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-credit fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-bar-chart"></div>
                        </div>
                        <div class="m-t-xs">

                            <div class="row">
                                <div class="col-xs-5">
                                    <small class="stat-label">Today</small>
                                    <h4>$230,00 </h4>
                                </div>
                                <div class="col-xs-7">
                                    <small class="stat-label">Last week</small>
                                    <h4>$7 980,60 <i class="fa fa-level-up text-success"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200 list">
                        <div class="stats-title pull-left">
                            <h4>Users Activity</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-science fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
                            <span class="font-bold no-margins">
                                Social users
                            </span>
                            <br/>
                            <small>
                                Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                            </small>
                        </div>
                        <div class="row m-t-sm">
                            <div class="col-lg-6">
                                <h3 class="no-margins font-extra-bold text-success">300,102</h3>
                                <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="no-margins font-extra-bold text-success">280,200</h3>
                                <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div></div>

                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph2 fa-4x"></i>
                        <h1 class="m-xs">$802,40</h1>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum consectetur adipiscing elit.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200">
                        <div class="stats-title pull-left">
                            <h4>Today income</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-shuffle fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-pie-chart" style="height: 112px"></div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200">
                        <div class="stats-title pull-left">
                            <h4>Page Views</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-battery fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <div class="m-t-xs">

                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Today</small>
                                    <h4>$170,20 <i class="fa fa-level-up text-success"></i></h4>
                                </div>
                                <div class="col-xs-6">
                                    <small class="stat-label">Last week</small>
                                    <h4>$580,90 <i class="fa fa-level-up text-success"></i></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Today</small>
                                    <h4>$620,20 <i class="fa fa-level-up text-success"></i></h4>
                                </div>
                                <div class="col-xs-6">
                                    <small class="stat-label">Last week</small>
                                    <h4>$140,70 <i class="fa fa-level-up text-success"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200">
                        <div class="stats-title pull-left">
                            <h4>Today income</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-gleam fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-line-chart" style="height: 125px"></div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-body h-200 list">
                        <div class="stats-title pull-left">
                            <h4>Users Activity</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-display1 fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
                            <small>
                                Lorem Ipsum is simply dummy text of the printing..
                            </small>
                        </div>

                        <div class="progress m-t-xs full progress-small">
                            <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class=" progress-bar progress-bar-success">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress m-t-xs full progress-small">
                            <div style="width: 35%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" role="progressbar" class=" progress-bar progress-bar-success">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress m-t-xs full progress-small">
                            <div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" role="progressbar" class=" progress-bar progress-bar-success">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress m-t-xs full progress-small">
                            <div style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class=" progress-bar progress-bar-success">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-global fa-4x"></i>
                        <h1 class="m-xs text-success">$1 208,20</h1>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum consectetur adipiscing elit.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
