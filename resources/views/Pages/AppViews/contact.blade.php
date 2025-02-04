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
                        <li><a href="{{route('dashboard.v1')}}">Dashboard</a></li>
                        <li>
                            <span>App views</span>
                        </li>
                        <li class="active">
                            <span>Contacts</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Contacts
                </h2>
                <small>Show users list in nice and color panels</small>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel hgreen contact-panel">
                    <div class="panel-body">
                        <span class="label label-success pull-right">NEW</span>
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/profile.jpg')}}">
                        <h3><a href="#"> Bradly Danforth </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hyellow contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a4.jpg')}}">
                        <h3><a href="#"> Tangela Sternberg </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hviolet contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a2.jpg')}}">
                        <h3><a href="#"> Claud Vogan </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hblue contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a3.jpg')}}">
                        <h3><a href="#"> Valda Purdy </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel hblue contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a9.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hgreen contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a5.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hyellow contact-panel">
                    <div class="panel-body">
                        <span class="label label-warning pull-right">SPECIAL</span>
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a6.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hred contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a7.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel hgreen contact-panel">
                    <div class="panel-body">
                        <span class="label label-success pull-right">NEW</span>
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/profile.jpg')}}">
                        <h3><a href="#"> Bradly Danforth </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hyellow contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a4.jpg')}}">
                        <h3><a href="#"> Tangela Sternberg </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hviolet contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a2.jpg')}}">
                        <h3><a href="#"> Claud Vogan </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hblue contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a3.jpg')}}">
                        <h3><a href="#"> Valda Purdy </a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel hblue contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a9.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hgreen contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a5.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hyellow contact-panel">
                    <div class="panel-body">
                        <span class="label label-warning pull-right">SPECIAL</span>
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a6.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hred contact-panel">
                    <div class="panel-body">
                        <img alt="logo" class="img-circle m-b" src="{{asset('theme-assets/images/a7.jpg')}}">
                        <h3><a href="#">Max Simson</a></h3>
                        <div class="text-muted font-bold m-b-xs">California, LA</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="row">
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Projects: </span> <strong>200</strong></div> </div>
                            <div class="col-md-4 border-right"> <div class="contact-stat"><span>Messages: </span> <strong>300</strong></div> </div>
                            <div class="col-md-4"> <div class="contact-stat"><span>Views: </span> <strong>400</strong></div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

