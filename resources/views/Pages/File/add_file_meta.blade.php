@extends('layouts.backend.app')
@section('css-links')
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/fontawesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/metisMenu/dist/metisMenu.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/toastr/build/toastr.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/select2-3.5.2/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/select2-bootstrap/select2-bootstrap.css')}}"/>
    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/helper.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/styles/style.css')}}">
@endsection
@section('section')

    <div class="normalheader">
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
                            <span>Files Meta Data</span>
                        </li>

                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Files Meta
                </h2>
                <small>add your file meta here.</small>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="Post" action="{{route('file.add_meta_value')}}"
                              id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>File</label>
                                    <select id="js-source-filetype" required name="file"
                                            class="js-source-filetype"
                                            style="width: 100%" placeholder="Select document type here">
                                        <option value="0" selected> Select You Document Type here</option>
                                        @foreach($files as $file)
                                            <option value="{{$file->id}}">
                                                {{$file->file_original_name}} -- {{ $file->type->file_type }}
                                                -- {{ $file->policy_no }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="small text-danger"
                                          for="file">{{ $errors->first('file') }}</span>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Meta Key</label>
                                    <input type="text" placeholder="Enter Meta Key here" id="meta_key"
                                           @error('meta_key') is-invalid @enderror class="form-control"
                                           name="meta_key">
                                    <span class="small text-danger"
                                          for="meta_key">{{ $errors->first('meta_key') }}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Meta Value</label>
                                    <input type="text" placeholder="Enter Meta Value here" id="meta_value"
                                           @error('meta_key') is-invalid @enderror class="form-control"
                                           name="meta_value">
                                    <span class="small text-danger"
                                          for="meta_value">{{ $errors->first('meta_value') }}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="text-center">
                                    <input type="submit" name="submit_meta" class="btn btn-success" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-script')
    <script>
        $(document).ready(function () {
            $(".js-source-filetype").select2();
        });
    </script>
@endsection
