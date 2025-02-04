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
                            <span>Colors and Buttons </span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Colors and Buttons
                </h2>
                <small>The basic color palette</small>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-body float-e-margins">
                        <div class="wrapper">
                            <div class="row color-demo">
                                <div class="header-line h-bg-navy-blue extreme-color">
                                    <div>Primary<span>Navy Blue</span></div>
                                </div>
                                <div class="header-line h-bg-violet">
                                    <div>Primary 2<span>Violet</span></div>
                                </div>
                                <div class="header-line h-bg-blue">
                                    <div>Info<span>Blue</span></div>
                                </div>
                                <div class="header-line h-bg-green">
                                    <div>Success<span>Green</span></div>
                                </div>
                                <div class="header-line h-bg-yellow">
                                    <div>Warning<span>Yellow</span></div>
                                </div>
                                <div class="header-line h-bg-orange">
                                    <div>Warning 2<span>Orange</span></div>
                                </div>
                                <div class="header-line h-bg-red">
                                    <div>Danger<span>Red</span></div>
                                </div>
                                <div class="header-line h-bg-red-deep extreme-color">
                                    <div>Danger 2<span>Deep red</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Buttons - primary colors
                    </div>
                    <div class="panel-body float-e-margins">
                        <p>
                            Use any of the available button classes to quickly create a styled button.
                        </p>

                        <p>
                            <button type="button" class="btn w-xs btn-default">Default</button>
                            <button type="button" class="btn w-xs btn-primary">Primary</button>
                            <button type="button" class="btn w-xs btn-primary2">Primary2</button>
                            <button type="button" class="btn w-xs btn-info">Info</button>
                            <button type="button" class="btn w-xs btn-success">Success</button>
                            <button type="button" class="btn w-xs btn-warning">Warning</button>
                            <button type="button" class="btn w-xs btn-warning2">Warning2</button>
                            <button type="button" class="btn w-xs btn-danger">Danger</button>
                            <button type="button" class="btn w-xs btn-danger2">Danger2</button>
                            <button type="button" class="btn w-xs btn-link">Simple link</button>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Diferent size
                    </div>
                    <div class="panel-body float-e-margins">
                        <p>
                            If You want larger or smaller buttons You can add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> class.
                        </p>

                        <p>
                            <button type="button" class="btn btn-primary btn-lg">Large button</button>
                            <button type="button" class="btn btn-default btn-lg">Large button</button>
                            <br/>
                            <button type="button" class="btn btn-primary">Default button</button>
                            <button type="button" class="btn btn-default">Default button</button>
                            <br/>
                            <button type="button" class="btn btn-primary btn-sm">Small button</button>
                            <button type="button" class="btn btn-default btn-sm">Small button</button>
                            <br/>
                            <button type="button" class="btn btn-primary btn-xs">Mini button</button>
                            <button type="button" class="btn btn-default btn-xs">Mini button</button>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Outline buttons
                    </div>
                    <div class="panel-body float-e-margins">
                        <p>
                            Create block level buttons or outline buttons, by adding <code>.btn-block</code> or <code>.btn-outline</code>.
                        </p>

                        <p>
                            <button type="button" class="btn btn-outline btn-default">Default</button>
                            <button type="button" class="btn btn-outline btn-primary">Primary</button>
                            <button type="button" class="btn btn-outline btn-primary2">Primary2</button>
                            <button type="button" class="btn btn-outline btn-info">Info</button>
                            <button type="button" class="btn btn-outline btn-success">Success</button>
                            <button type="button" class="btn btn-outline btn-warning">Warning</button>
                            <button type="button" class="btn btn-outline btn-warning2">Warning2</button>
                            <button type="button" class="btn btn-outline btn-danger">Danger</button>
                            <button type="button" class="btn btn-outline btn-danger2">Danger2</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-block btn-outline btn-default">Block button</button>
                        </p>

                    </div>
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
                        Dropdown buttons
                    </div>
                    <div class="panel-body float-e-margins">
                        <p>
                            Droppdowns buttons are avalible with any color and any size.
                        </p>

                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#" class="font-bold">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <br/>

                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-info btn-sm dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <br/>

                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-info btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
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
                        Button gruped
                    </div>
                    <div class="panel-body float-e-margins">
                        <p>
                            This is a group of buttons, ideal for sytuation where many actions are related to same element.
                        </p>

                        <div class="btn-group">
                            <button class="btn btn-default" type="button">Left</button>
                            <button class="btn btn-primary" type="button">Middle</button>
                            <button class="btn btn-default" type="button">Right</button>
                        </div>
                        <br/>
                        <br/>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                            <button class="btn btn-default">1</button>
                            <button class="btn btn-default  active">2</button>
                            <button class="btn btn-default">3</button>
                            <button class="btn btn-default">4</button>
                            <button class="btn btn-default">5</button>
                            <button class="btn btn-default">6</button>
                            <button class="btn btn-default">7</button>
                            <button class="btn btn-default">8</button>
                            <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                        </div>

                    </div>
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
                        Icon Buttons
                    </div>
                    <div class="panel-body float-e-margins">
                        <p>
                            To buttons with any color or any size you can add extra icon on the left or the right side.
                        </p>
                        <button class="btn btn-primary " type="button"><i class="fa fa-check"></i> Submit</button>
                        <button class="btn btn-success " type="button"><i class="fa fa-upload"></i> <span class="bold">Upload</span></button>
                        <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button>
                        <button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i> <span class="bold">Delete</span></button>
                        <button class="btn btn-default " type="button"><i class="fa fa-map-marker"></i> Map</button>

                        <a class="btn btn-default">
                            <i class="fa fa-user-md"></i>
                        </a>
                        <a class="btn btn-default">
                            <i class="fa fa-group"></i>
                        </a>
                        <a class="btn btn-default">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="btn btn-default">
                            <i class="fa fa-exchange"></i>
                        </a>
                        <a class="btn btn-default">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default">
                            <i class="fa fa-road"></i>
                        </a>
                        <a class="btn btn-default">
                            <i class="fa fa-ambulance"></i>
                        </a>
                        <a class="btn btn-default">
                            <i class="fa fa-star"></i> Stared
                        </a>

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
                        Icon Buttons with custom size
                    </div>
                    <div class="panel-body float-e-margins">
                        <p>
                            Buttons with icons are avalible wih custom size.
                        </p>
                        <button class="btn btn-primary" type="button"><i class="fa fa-group"></i> <br/>Users</button>
                        <button class="btn btn-primary2" type="button"><i class="fa fa-volume-up"></i> <br/>Volume</button>
                        <button class="btn btn-info" type="button"><i class="fa fa-print"></i> <br/>Print</button>
                        <button class="btn btn-success" type="button"><i class="fa fa-recycle"></i> <br/>Recycle</button>
                        <button class="btn btn-warning" type="button"><i class="fa fa-music"></i> <br/>Music</button>
                        <button class="btn btn-warning2" type="button"><i class="fa fa-star"></i> <br/>Stars</button>
                        <button class="btn btn-danger2" type="button"><i class="fa fa-medkit"></i> <br/>Medkit</button>
                        <br/>
                        <button class="btn btn-primary btn-xs" type="button"><i class="fa fa-group"></i></button>
                        <button class="btn btn-primary2 btn-xs" type="button"><i class="fa fa-volume-up"></i></button>
                        <button class="btn btn-info btn-xs" type="button"><i class="fa fa-print"></i></button>
                        <button class="btn btn-success btn-xs" type="button"><i class="fa fa-recycle"></i></button>
                        <button class="btn btn-warning btn-xs" type="button"><i class="fa fa-music"></i></button>
                        <button class="btn btn-warning2 btn-xs" type="button"><i class="fa fa-star"></i></button>
                        <button class="btn btn-danger2 btn-xs" type="button"><i class="fa fa-medkit"></i></button>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Buttons miscellaneous
                    </div>
                    <div class="panel-body float-e-margins">
                        <div class="row">
                            <div class="col-lg-3">
                                <p>
                                    Circle buttons
                                </p>
                                <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-list"></i></button>
                                <button class="btn btn-success btn-circle" type="button"><i class="fa fa-link"></i></button>
                                <button class="btn btn-info btn-circle" type="button"><i class="fa fa-check"></i></button>
                                <button class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i></button>
                                <button class="btn btn-danger btn-circle" type="button"><i class="fa fa-heart"></i></button>
                            </div>
                            <div class="col-lg-3">
                                <p>
                                    Single toggle button
                                </p>
                                <button data-toggle="button" class="btn btn-warning" type="button">Single toggle</button>
                            </div>
                            <div class="col-lg-3">
                                <p>
                                    Checkbox buttons
                                </p>

                                <div data-toggle="buttons" class="btn-group">
                                    <label class="btn btn-info active">
                                        <input type="checkbox"> Option 1
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="checkbox"> Option 2
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="checkbox"> Option 3
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <p>
                                    Radio buttons
                                </p>

                                <div data-toggle="buttons" class="btn-group">
                                    <label class="btn btn-success active">
                                        <input type="radio" id="option1" name="options"> Option 1
                                    </label>
                                    <label class="btn btn-success">
                                        <input type="radio" id="option2" name="options"> Option 2
                                    </label>
                                    <label class="btn btn-success">
                                        <input type="radio" id="option3" name="options"> Option 3
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <button class="btn btn-xs btn-primary btn-circle" type="button"><i class="fa fa-list"></i></button>
                                <button class="btn btn-xs btn-success btn-circle" type="button"><i class="fa fa-link"></i></button>
                                <button class="btn btn-xs btn-info btn-circle" type="button"><i class="fa fa-check"></i></button>
                                <button class="btn btn-xs btn-warning btn-circle" type="button"><i class="fa fa-times"></i></button>
                                <button class="btn btn-xs btn-danger btn-circle" type="button"><i class="fa fa-heart"></i></button>
                            </div>
                            <div class="col-lg-3">

                                <button data-toggle="button" class="btn btn-xs btn-warning" type="button">Single toggle</button>
                            </div>
                            <div class="col-lg-3">
                                <div data-toggle="buttons" class="btn-group">
                                    <label class="btn btn-info active btn-xs">
                                        <input type="checkbox"> Option 1
                                    </label>
                                    <label class="btn btn-info btn-xs">
                                        <input type="checkbox"> Option 2
                                    </label>
                                    <label class="btn btn-info btn-xs">
                                        <input type="checkbox"> Option 3
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div data-toggle="buttons" class="btn-group">
                                    <label class="btn btn-success active btn-xs">
                                        <input type="radio" id="option1" name="options"> Option 1
                                    </label>
                                    <label class="btn btn-success btn-xs">
                                        <input type="radio" id="option2" name="options"> Option 2
                                    </label>
                                    <label class="btn btn-success btn-xs">
                                        <input type="radio" id="option3" name="options"> Option 3
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
