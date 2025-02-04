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
                            <span>Modals </span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Modals
                </h2>
                <small>Modal window examples</small>
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
                        Homer modal windows
                    </div>
                    <div class="panel-body">
                        <p>
                            Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
                        </p>
                        <p>
                            Modal contains title, content and footer
                        </p>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                Launch demo modal
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="color-line"></div>
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title">Modal title</h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="m-t-md">
                    <pre>

&lt;button type="button" class="btn btn-success"
        data-toggle="modal" data-target="#myModal"&gt;
        Launch demo modal
&lt;/button&gt;
                    </pre>
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
                        Optional size and colors
                    </div>
                    <div class="panel-body">
                        <p>
                            Modals have two optional sizes, available via modifier classes to be placed on a .modal-dialog
                        </p>

                        <div class="text-center m-b-md">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
                                Large Modal
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
                                Small Modal
                            </button>

                            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="color-line"></div>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="color-line"></div>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>
                            You can add extra class to color your modal window avalible class (<code>hmodal-info</code>, <code>hmodal-warning</code>, <code>hmodal-success</code>, <code>hmodal-danger</code>)
                        </p>
                        <div class="text-center m-t-md">
                            <button class="btn btn-success" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">Success</button>
                            <button class="btn btn-info" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8">Info</button>
                            <button class="btn btn-warning" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal9">Warning</button>
                            <button class="btn btn-danger" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal10">Danger</button>
                        </div>

                        <div class="modal fade hmodal-success" id="myModal7" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="color-line"></div>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                        <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade hmodal-info" id="myModal8" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="color-line"></div>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                        <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade hmodal-warning" id="myModal9" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="color-line"></div>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                        <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade hmodal-danger" id="myModal10" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="color-line"></div>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                        <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="m-t-md">
                    <pre>
var modalInstance = $modal.open({
       templateUrl: 'views/modal/modal_example2.html',
       controller: ModalInstanceCtrl,
       windowClass: "hmodal-success"
}); </pre>
                        </div>
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
                        Options
                    </div>
                    <div class="panel-body">
                        <p>
                            Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-backdrop=""</code>.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 100px;">Name</th>
                                    <th style="width: 50px;">type</th>
                                    <th style="width: 50px;">default</th>
                                    <th>description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>backdrop</td>
                                    <td>boolean or the string <code>'static'</code></td>
                                    <td>true</td>
                                    <td>Includes a modal-backdrop element. Alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>
                                </tr>
                                <tr>
                                    <td>keyboard</td>
                                    <td>boolean</td>
                                    <td>true</td>
                                    <td>Closes the modal when escape key is pressed</td>
                                </tr>
                                <tr>
                                    <td>show</td>
                                    <td>boolean</td>
                                    <td>true</td>
                                    <td>Shows the modal when initialized.</td>
                                </tr>
                                <tr>
                                    <td>remote</td>
                                    <td>path</td>
                                    <td>false</td>
                                    <td>
                                        <p><strong class="text-danger">This option is deprecated since v3.3.0 and will be removed in v4.</strong> We recommend instead using client-side templating or a data binding framework, or calling <a href="http://api.jquery.com/load/">jQuery.load</a> yourself.</p>
                                        <p>If a remote URL is provided, <strong>content will be loaded one time</strong> via jQuery's <code>load</code> method and injected into the <code>.modal-content</code> div. If you're using the data-api, you may alternatively use the <code>href</code> attribute to specify the remote source. An example of this is shown below:</p>
                                        <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">href=</span><span class="s">"remote.html"</span> <span class="na">data-target=</span><span class="s">"#modal"</span><span class="nt">&gt;</span>Click me<span class="nt">&lt;/a&gt;</span></code></pre></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

