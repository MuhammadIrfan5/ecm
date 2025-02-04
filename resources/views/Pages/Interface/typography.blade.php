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
                            <span>Typography</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Typography
                </h2>
                <small>The basic elements of typography</small>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-lg-4">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Headings
                    </div>
                    <div class="panel-body">
                        <div>
                            <h1>Heading 1
                                <small>Sub-heading</small>
                            </h1>
                            <h2>Heading 2
                                <small>Sub-heading</small>
                            </h2>
                            <h3>Heading 3
                                <small>Sub-heading</small>
                            </h3>
                            <h4>Heading 4
                                <small>Sub-heading</small>
                            </h4>
                            <h5>Heading 5
                                <small>Sub-heading</small>
                            </h5>
                            <h6>Heading 6
                                <small>Sub-heading</small>
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Paragraph text
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 border-right">
                                <p>
                                    Lorem Ipsum is simply dummy text of the <strong>printing and typesetting</strong> industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    <abbr title="" data-original-title="Sample abbreviation">scrambled it to make</abbr> a type specimen book.
                                </p>
                            </div>
                            <div class="col-lg-6 ">
                                <p>
                                    It has survived not only <em>five centuries</em>, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was 1960s with the release of Letraset sheets containing <code>.loremIpsumClass</code>
                                </p>
                            </div>
                        </div>
                        <div class="row m-t-md">
                            <div class="col-lg-3 border-right">
                                <p>
                                    Lorem Ipsum is simply dummy text of the <strong>printing and typesetting</strong> industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                </p>
                            </div>
                            <div class="col-lg-3 border-right">
                                <p>
                                    It has survived not only <em>five centuries</em>, but also the leap into electronic typesetting,
                                    remaining <code>essentially</code> unchanged. .loremIpsumClass, and more recently with
                                </p>
                            </div>
                            <div class="col-lg-3 border-right">
                                <p>
                                    Lorem Ipsum is simply dummy text of the <em>printing and typesetting</em> industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                </p>
                            </div>
                            <div class="col-lg-3 ">
                                <p>
                                    It has survived not only <em>five centuries</em>, typesetting,
                                    remaining essentially unchanged. the release of Letraset sheets containing loremIpsumClass, and more recently with
                                </p>
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
                        Unstyled list
                    </div>
                    <div class="panel-body">
                        <ul class="unstyled">
                            <li>But I must explain</li>
                            <li>To you how all this mistaken</li>
                            <li>Idea of denouncing pleasure</li>
                            <li>Great explorer of the truth</li>
                            <li>To take a trivial example
                                <ul>
                                    <li>Or one who avoids a pain</li>
                                    <li>Indignation and dislike men</li>
                                    <li>Nor again is there anyone</li>
                                    <li>But who has any right</li>
                                </ul>
                            </li>
                            <li>That they cannot foresee</li>
                            <li>Who avoids a pain that produceg</li>
                            <li>Consequences that are extremely</li>
                        </ul>
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
                        Unordered list
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>But I must explain</li>
                            <li>To you how all this mistaken</li>
                            <li>Idea of denouncing pleasure</li>
                            <li>Great explorer of the truth</li>
                            <li>To take a trivial example
                                <ul>
                                    <li>Or one who avoids a pain</li>
                                    <li>Indignation and dislike men</li>
                                    <li>Nor again is there anyone</li>
                                    <li>But who has any right</li>
                                </ul>
                            </li>
                            <li>That they cannot foresee</li>
                            <li>Who avoids a pain that produceg</li>
                            <li>Consequences that are extremely</li>
                        </ul>
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
                        Ordered list
                    </div>
                    <div class="panel-body">
                        <ol>
                            <li>But I must explain</li>
                            <li>To you how all this mistaken</li>
                            <li>Idea of denouncing pleasure</li>
                            <li>Great explorer of the truth</li>
                            <li>To take a trivial example
                                <ol>
                                    <li>Or one who avoids a pain</li>
                                    <li>Indignation and dislike men</li>
                                    <li>Nor again is there anyone</li>
                                    <li>But who has any right</li>
                                </ol>
                            </li>
                            <li>That they cannot foresee</li>
                            <li>Who avoids a pain that produceg</li>
                            <li>Consequences that are extremely</li>
                        </ol>
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
                        Emphasis Classes
                    </div>
                    <div class="panel-body">
                        <p class="text-muted">This is an example of muted text.</p>

                        <p class="text-primary">This is an example of primary text.</p>

                        <p class="text-success">This is an example of success text.</p>

                        <p class="text-info">This is an example of info text.</p>

                        <p class="text-warning">This is an example of warning text.</p>

                        <p class="text-danger">This is an example of danger text.</p>
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
                        Blockquotes
                    </div>
                    <div class="panel-body">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a printing and typesetting ante.</p>
                            <small><strong>Author name</strong> in <cite title="" data-original-title="">Book name</cite></small>
                        </blockquote>
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
                        Alignment
                    </div>
                    <div class="panel-body">
                        <p class="text-left"><strong>LEFT</strong><br/>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <p class="text-center"><strong>CENTER</strong><br/>It is a long established fact that a reader will be distracted by the readable content.</p>

                        <p class="text-right"><strong>RIGHT</strong><br/>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
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
                        Description
                    </div>
                    <div class="panel-body">
                        <dl>
                            <dt>Description lists</dt>
                            <dd>A description list is perfect for defining terms.</dd>
                            <dt>Euismod</dt>
                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                            <dt>Malesuada porta</dt>
                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        </dl>
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
                        Horizontal description
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Description lists</dt>
                            <dd>A description list is perfect for defining terms.</dd>
                            <dt>Euismod</dt>
                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                            <dt>Malesuada porta</dt>
                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                            <dt>Felis euismod semper eget lacinia</dt>
                            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                        </dl>
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
                        Grouped Lists
                    </div>
                    <div class="panel-body no-padding">
                        <div class="list-group ">
                            <a class="list-group-item active" href="#">
                                <h5 class="list-group-item-heading">A wonderful serenity has taken</h5>

                                <p class="list-group-item-text">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. </p>
                            </a>
                            <a class="list-group-item" href="#">
                                <h5 class="list-group-item-heading">Why painful the sixteen how minuter</h5>

                                <p class="list-group-item-text">I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed </p>
                            </a>
                            <a class="list-group-item" href="#">
                                <h5 class="list-group-item-heading">Barton waited twenty always repair</h5>

                                <p class="list-group-item-text">I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Special css class
                    </div>
                    <div class="panel-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <td>
                                    Example text
                                </td>
                                <td>
                                    Class name
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="font-light">Light</span>
                                </td>
                                <td>
                                    <code>.font-light</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-normal">Normal</span>
                                </td>
                                <td>
                                    <code>.font-normal</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-bold">Bold</span>
                                </td>
                                <td>
                                    <code>.font-bold</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-extra-bold">Extra bold</span>
                                </td>
                                <td>
                                    <code>.font-extra-bold</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-uppercase">Uppercase</span>
                                </td>
                                <td>
                                    <code>.font-uppercase</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-trans">Transparent</span>
                                </td>
                                <td>
                                    <code>.font-trans</code>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
