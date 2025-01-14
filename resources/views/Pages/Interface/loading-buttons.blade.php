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
                            <span>Loading buttons</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Ladda
                </h2>
                <small>Loading buttons</small>
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
                        Basic buttons example
                    </div>
                    <div class="panel-body">

                        <strong>Ladda</strong>
                        <p>
                            A UI concept which merges loading indicators into the action that invoked them. Primarily intended for use with forms where it gives users immediate feedback upon submit rather than leaving them wondering while the browser does its thing.
                        </p>

                        <div class="row">
                            <div class="col-sm-3">
                                <h5>expand-left</h5>
                                <button class="ladda-button btn btn-success" data-style="expand-left"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>expand-right</h5>
                                <button class="ladda-button btn btn-success" data-style="expand-right"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>expand-up</h5>
                                <button class="ladda-button btn btn-success" data-style="expand-up"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>expand-down</h5>
                                <button class="ladda-button btn btn-success" data-style="expand-down"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                        </div>
                        <div class="row m-t-md">
                            <div class="col-sm-3">
                                <h5>contract</h5>
                                <button class="ladda-button btn btn-warning" data-style="contract"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>zoom-in</h5>
                                <button class="ladda-button btn btn-warning" data-style="zoom-in"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>zoom-out</h5>
                                <button class="ladda-button btn btn-warning" data-style="zoom-out"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                        </div>
                        <div class="row m-t-md">
                            <div class="col-sm-3">
                                <h5>slide-left</h5>
                                <button class="ladda-button  btn btn-info" data-style="slide-left"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>slide-right</h5>
                                <button class="ladda-button btn btn-info" data-style="slide-right"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>slide-up</h5>
                                <button class="ladda-button btn btn-info" data-style="slide-up"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                            <div class="col-sm-3">
                                <h5>slide-down</h5>
                                <button class="ladda-button btn btn-info" data-style="slide-down"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                            </div>
                        </div>
                        <div class="row m-t-lg">
                            <div class="col-sm-3">
                                <section class="progress-demo">
                                    <h5>expand-right</h5>
                                    <button class="ladda-button btn btn-danger" data-style="expand-right"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                                </section>
                            </div>
                            <div class="col-sm-3">
                                <section class="progress-demo">
                                    <h5>contract</h5>
                                    <button class="ladda-button btn btn-danger" data-style="contract"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
                                </section>
                            </div>
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
                        API Example
                    </div>
                    <div class="panel-body">
                        <h5 class="m-t-none m-b-sm">Demo how to use with api services</h5>
                        <button class="ladda-button ladda-button-demo btn btn-primary btn-block" data-style="zoom-in"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>


                        <div class="m-t-sm">
<pre>&lt;button class="ladda-button ladda-button-demo btn btn-primary"  data-style="zoom-in"&gt;Submit&lt;/button&gt;
</pre>
                            <pre>var l = $( '.ladda-button-demo' ).ladda();
      l.click(function(){

          // Start loading
          l.ladda( 'start' );

          // Do something in backend and then stop ladda
          // setTimeout() is only for demo purpose
          setTimeout(function(){
              l.ladda('stop');
          },2000)

      });
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

