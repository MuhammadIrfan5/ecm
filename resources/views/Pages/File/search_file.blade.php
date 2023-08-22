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
                            <span>Search Any file</span>
                        </li>

                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Files Search
                </h2>
                <small>Search your files from here.</small>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="Post" action="{{route('file.search_files')}}"
                              id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Search</label>
                                    <input type="text" placeholder="Enter Meta Key here" id="search"
                                           @error('search') is-invalid @enderror class="form-control"
                                           name="search">
                                    <span class="small text-danger"
                                          for="search">{{ $errors->first('search') }}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <div class="text-center">
                                        <input type="submit" name="submit_search" class="btn btn-success"
                                               value="Search"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr/>
                        @isset($files)
                            <input type="text" class="form-control input-sm m-b-md" id="filter"
                                   placeholder="Search in table">
                            <table id="example1" class="footable table table-hover table-bordered toggle-arrow-tiny"
                                   data-page-size="4" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th data-toggle="true">Name</th>
                                    <th>Extension</th>
                                    <th>Size (Kb's)</th>
                                    <th>File Type</th>
                                    <th>File Path</th>
                                    <th data-toggle="true">Created At</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @if($files->isNotEmpty())--}}
                                    @forelse($files as $file)
                                        <tr>
                                            <td>{{$file->file_original_name}}</td>
                                            <td>{{$file->file_extension}}</td>
                                            <td>{{$file->file_size/1024}}</td>
                                            <td>{{$file->type->file_type}}</td>
                                            <td>
                                                <div class="infont col-md-2">
                                                    <a target="_blank"  href="{{'../storage/app/public/'.$file->file_path }}" download>
                                                        <i class="pe-7s-cloud-download pe-2x"></i> Download File
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{\Carbon\Carbon::parse($file->created_at)->format('d/M/Y - h:m:s A')}}</td>
                                            @empty
                                                <td colspan="6">No Files</td>
                                        </tr>
                                    @endforelse
{{--                                @endif--}}
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        @endif
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
