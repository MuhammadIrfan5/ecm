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
                            <span>Components</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Components
                </h2>
                <small>Tabs, according, collapse and other UI components.</small>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Accordion directive example
                    </div>
                    <div class="panel-body">
                        <div class="text-center m-b-md">
                            <h3>Accordion</h3>
                            <small>The accordion directive builds on top of the collapse directive to provide a list of items, with collapsible bodies that are collapsed or expanded by clicking on the item's header.</small><br/>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Collapsible Group Item #4
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Collapsible Group Item #5
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Collapse  example
                    </div>
                    <div class="panel-body">
                        <div class="text-center m-b-md">
                            <h3>Collapse box</h3>
                            <small>AngularJS version of Bootstrap's collapse plugin. Provides a simple way to hide and show an element with a css transition</small><br/>
                            <button class="btn btn-default btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Toggle collapse
                            </button>
                        </div>
                        <div class="collapse in" id="collapseExample">
                            <div class="well well-lg">
                                <h5 class="font-bold">Lorem ipsum</h5>
                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                <br/>
                                <br/>
                                I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Tooltips
                    </div>
                    <div class="panel-body">
                        <div class="text-center m-b-md">
                            <h3>Tooltips</h3>
                            <small>A lightweight, extensible directive for fancy tooltip creation. The tooltip directive supports multiple placements, optional transition animation, and more.</small>
                        </div>

                        <div class="tooltip-demo text-center">
                            <button type="button" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                            <button type="button" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                            <button type="button" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                            <button type="button" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Popover
                    </div>
                    <div class="panel-body">
                        <div class="text-center m-b-md">
                            <h3>Popover</h3>
                            <small>A lightweight, extensible directive for fancy popover creation. The popover directive supports multiple placements, optional transition animation, and more.</small>
                        </div>

                        <div class="m float-e-margins text-center">
                            <div class="tooltip-demo">
                                <button type="button" class="btn btn-sm btn-default" data-container="body" data-toggle="popover" data-placement="left" data-title="Title example" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on left
                                </button>
                                <button type="button" class="btn btn-sm btn-default" data-container="body" data-toggle="popover" data-placement="top" data-title="Title example" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on top
                                </button>
                                <br/>
                                <button type="button" class="btn btn-sm btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Title example" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on bottom
                                </button>
                                <button type="button" class="btn btn-sm btn-default" data-container="body" data-toggle="popover" data-placement="right" data-title="Title example" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on right
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1"> This is tab</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2">This is second tab</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                    existence in this spot, which was created for the bliss of souls like mine.</p>

                                <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                    the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">
                                <strong>Donec quam felis</strong>

                                <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-3"> <i class="fa fa-laptop"></i></a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4"><i class="fa fa-desktop"></i></a></li>
                        <li class=""><a data-toggle="tab" href="#tab-5"><i class="fa fa-database"></i></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-3" class="tab-pane active">
                            <div class="panel-body">
                                <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                    existence in this spot, which was created for the bliss of souls like mine.</p>

                                <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                    the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">
                                <strong>Donec quam felis</strong>

                                <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane">
                            <div class="panel-body">
                                <strong>Donec quam felis</strong>

                                <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">

                    <div class="tabs-left">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-6"> This is tab</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-7">This is second tab</a></li>
                        </ul>
                        <div class="tab-content ">
                            <div id="tab-6" class="tab-pane active">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                        existence in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                        the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                        and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                        sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="tabs-right">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-8"> This is tab</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-9">This is second tab</a></li>
                        </ul>
                        <div class="tab-content ">
                            <div id="tab-8" class="tab-pane active">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                        existence in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                        the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                        and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                        sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Progressbar
                    </div>
                    <div class="panel-body">
                        <div class="text-center m-b-md">
                            <h3>Progressbar</h3>
                            <small>A progress bar directive that is focused on providing feedback on the progress of a workflow or action.</small>
                        </div>
                        <h5>Basic ProgressBars</h5>
                        <small>Light version of progress bar</small>

                        <div class="m">

                            <div class="progress m-t-xs">
                                <div style="width: 15%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" role="progressbar" class=" progress-bar progress-bar-warning">
                                    15%
                                </div>
                            </div>
                            <div class="progress m-t-xs">
                                <div style="width: 30%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" role="progressbar" class=" progress-bar progress-bar-success">
                                    30%
                                </div>
                            </div>
                            <div class="progress m-t-xs">
                                <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class=" progress-bar progress-bar-info">
                                    45%
                                </div>
                            </div>
                            <div class="progress m-t-xs">
                                <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class=" progress-bar progress-bar-danger">
                                    60%
                                </div>
                            </div>
                        </div>

                        <h5>Striped Progressbars</h5>
                        <small>Add <code>.full</code> class to get full background. Add <code>.progress-striped</code> to get striped version.</small>

                        <div class="m">
                            <div class="progress m-t-xs full progress-striped">
                                <div style="width: 75%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class=" progress-bar progress-bar-warning">
                                    75%
                                </div>
                            </div>
                        </div>
                        <h5>Active Progressbars</h5>
                        <small>Add <code>.active</code> to get active striped.</small>

                        <div class="m">
                            <div class="progress m-t-xs full progress-striped active">
                                <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class=" progress-bar progress-bar-success">
                                    90%
                                </div>
                            </div>
                        </div>
                        <h5>Mini version</h5>
                        <small>Add <code>.progress-small</code> class to get mini version</small>
                        <div class="m">

                            <div class="progress m-t-xs full progress-small">
                                <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class=" progress-bar progress-bar-warning">
                                </div>
                            </div>
                            <div class="progress m-t-xs full progress-small">
                                <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class=" progress-bar progress-bar-success">
                                </div>
                            </div>
                            <div class="progress m-t-xs full progress-small">
                                <div style="width: 75%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class=" progress-bar progress-bar-info">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Dropdown
                    </div>
                    <div class="panel-body h-200">
                        <div class="text-center m-b-md">
                            <h3>Dropdown</h3>
                            <small>Dropdown is a simple directive which will toggle a dropdown menu on click or programmatically. </small>
                        </div>
                        <div class="row">
                            <div class="dropdown dropdown-example">
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href>Action</a></li>
                                    <li><a href>Another action</a></li>
                                    <li><a href>Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href>Separated link</a></li>
                                </ul>
                            </div>
                            <div class="dropdown dropdown-example">
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href><strong>Action</strong></a></li>
                                    <li><a href ><span class="text-success">Another action</span></a></li>
                                    <li><a href>Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href><span class="text-muted">Separated link</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown dropdown-example">
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href><i class="fa fa-pencil"> </i> Edit</a></li>
                                    <li><a href><i class="fa fa-copy"> </i> Copy</a></li>
                                    <li><a href><i class="fa fa-paste"> </i> paste</a></a></li>
                                    <li class="divider"></li>
                                    <li><a href><i class="fa fa-trash"> </i> Remove</a></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Rating
                    </div>
                    <div class="panel-body text-center">
                        <div class="m-b-xs">
                            <h3>Rating</h3>
                            <small>Rating directive that will take care of visualising a star rating bar.</small>
                        </div>
                        <input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" data-show-clear="false">
                        <p class="m-t-xs">
                            More examples and full documentation you can find at: http://plugins.krajee.com/star-rating/demo
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
