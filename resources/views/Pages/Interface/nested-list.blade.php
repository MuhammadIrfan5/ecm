@extends('layouts.backend.app')
@section('section')

    <div class="normalheader ">
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
                            <span>Nestable list</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Nestable list
                </h2>
                <small>Nestable - Drag & drop hierarchical list.</small>
            </div>
        </div>
    </div>
    <div class="content">

        <div class="row">
            <div class="col-md-4">
                <div id="nestable-menu">
                    <button type="button" data-action="expand-all" class="btn btn-default btn-sm">Expand All</button>
                    <button type="button" data-action="collapse-all" class="btn btn-default btn-sm">Collapse All</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Nestable custom theme list
                    </div>
                    <div class="panel-body">

                        <p class="m-b-lg">
                            Each list you can customize by standard css styles. Each element is responsive so you can add to it any other element to improve functionality of list.
                        </p>

                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="label h-bg-navy-blue"><i class="fa fa-users"></i></span> Cras ornare tristique.
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 12:00 pm </span>
                                                <span class="label h-bg-navy-blue"><i class="fa fa-cog"></i></span> Vivamus vestibulum nulla nec ante.
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 11:00 pm </span>
                                                <span class="label h-bg-navy-blue"><i class="fa fa-bolt"></i></span> Nunc dignissim risus id metus.
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 11:00 pm </span>
                                                <span class="label h-bg-navy-blue"><i class="fa fa-laptop"></i></span> Vestibulum commodo
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle">
                                        <span class="label h-bg-navy-blue"><i class="fa fa-users"></i></span> Integer vitae libero.
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="6">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 15:00 pm </span>
                                                <span class="label h-bg-navy-blue"><i class="fa fa-users"></i></span> Nam convallis pellentesque nisl.
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="7">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 16:00 pm </span>
                                                <span class="label h-bg-navy-blue"><i class="fa fa-bomb"></i></span> Vivamus molestie gravida turpis
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="8">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 21:00 pm </span>
                                                <span class="label h-bg-navy-blue"><i class="fa fa-child"></i></span> Ut aliquam sollicitudin leo.
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="m-t-md">
                            <h5>Serialised Output</h5>
                        </div>
                        <textarea id="nestable2-output" class="form-control"></textarea>

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
                        Nestable basic list
                    </div>
                    <div class="panel-body">

                        <p  class="m-b-lg">
                            <strong>Nestable</strong> is an interactive hierarchical list. You can drag and drop to rearrange the order. It works well on touch-screens.
                        </p>

                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">1 - Lorem ipsum</div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">2 - Dolor sit</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">3 - Adipiscing elit</div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">4 - Nonummy nibh</div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle">5 - Consectetuer</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="6">
                                            <div class="dd-handle">6 - Aliquam erat</div>
                                        </li>
                                        <li class="dd-item" data-id="7">
                                            <div class="dd-handle">7 - Veniam quis</div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="8">
                                    <div class="dd-handle">8 - Tation ullamcorper</div>
                                </li>
                                <li class="dd-item" data-id="9">
                                    <div class="dd-handle">9 - Ea commodo</div>
                                </li>
                            </ol>
                        </div>
                        <div class="m-t-md">
                            <h5>Serialised Output</h5>
                        </div>
                        <textarea id="nestable-output" class="form-control"></textarea>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
