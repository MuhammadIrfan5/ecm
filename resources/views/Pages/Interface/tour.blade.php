@extends('layouts.backend.app')
@section('section')

    <div class="normalheader ">
        <div class="hpanel tour-1">
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
                            <span>Tour</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Tour
                </h2>
                <small>The easiest way to show people how to use your website.</small>
            </div>
        </div>
    </div>
    <div class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel tour-2">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Tour - how it works.
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-lg-4 tour-3">
                                <p>
                                    <strong>Start</strong> tour example!
                                </p>
                                <button class="btn btn-success m-b-lg run-tour">Start Tour!</button>

                                <h5>
                                    Example text for tour purpose
                                </h5>

                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </p>

                                <div class="flot-chart" style="height: 50px">
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
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </p>

                            </div>

                            <div class="col-lg-8 tour-4">
                                <h5>
                                    How to use it
                                </h5>

                                <p>
                                    Tour is very easy to use. All you have to do is to define main tour object
                                    <code>var tour = new Tour</code>. You can add <code>backdrop: true,</code> to add a gray background.
                                    Next you need to define a tour step with array:
                                </p>
                                <strong> Example:</strong>
                                <pre>

// Instance the tour
var tour = new Tour({
  steps: [
  {
    element: ".my-element",
    title: "Title of my step",
    content: "Content of my step"
  },
  {
    element: ".my-other-element",
    title: "Title of my step",
    content: "Content of my step"
  }
]});

// Initialize the tour
tour.init();

// Start the tour
tour.start();

                        </pre>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <h5>
                                    Configuration
                                </h5>
                                <p>
                                    <strong>See full documentation of official tour plugin:</strong> <a href="http://bootstraptour.com/" target="_blank">http://bootstraptour.com/</a>.
                                </p>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
