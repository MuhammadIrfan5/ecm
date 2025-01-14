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
                            <span>Panels design</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Panels design
                </h2>
                <small>Many panels design give you many possibilities.</small>
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
                        This is a standard panel (header, content, footer)
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem Ipsum is simply dummy text of the <strong>printing and typesetting</strong> industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            <abbr title="" data-original-title="Sample abbreviation">scrambled it to make</abbr> a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            scrambled it to make a type specimen book.
                        </p>

                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
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
                        Default Panel
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Built panel
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 border-right">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus
                                </p>
                            </div>
                            <div class="col-lg-6 ">
                                <p>
                                    posuere lectus et, fringilla augue.
                                    ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae  accumsan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel hblue">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Built panel colored (blue)
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="hpanel hgreen">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Default green
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel horange">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Panel orange
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel hred">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Panel red
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="hpanel hyellow">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Default yellow
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel hblue">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Panel Blue
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel hviolet">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Panel violet
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="hpanel collapsed">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Initial collapsed basic
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel collapsed">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Initial collapsed built
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="fullscreen"><i class="fa fa-expand"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        With additional full screen button
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="pull-right">
                            <a class="btn btn-default btn-xs">Action 1</a>
                            <a class="btn btn-default btn-xs">Action 2</a>
                        </div>
                        Pannel with custom buttons
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <div class="row">
                            <div class="col-md-6">
                                Panel with search form
                            </div>
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-xs" placeholder="Search something..." name="s"/>
                                        <span class="input-group-btn">
									<button class="btn btn-xs btn-default" type="submit">
                                        <span class="fa fa-search"></span>
                                    </button>
								</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
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
                        Pannel with list group
                    </div>
                    <div class="panel-body no-padding">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge badge-primary">16</span>
                                Lorem ipsum
                            </li>
                            <li class="list-group-item ">
                                <span class="badge badge-info">12</span>
                                Consectetur adipiscing
                            </li>
                            <li class="list-group-item">
                                <span class="badge badge-danger">10</span>
                                Aliquam ornare
                            </li>
                            <li class="list-group-item">
                                <span class="badge badge-success">10</span>
                                Vestibulum tincidunt
                            </li>
                            <li class="list-group-item">
                                <span class="badge badge-warning">7</span>
                                Posuere lectus
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
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
                        Panel with alert
                    </div>
                    <div class="alert alert-success">
                        <i class="fa fa-bolt"></i> Adding action was successful
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
