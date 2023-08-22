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
                            <span>Upload Files</span>
                        </li>

                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Files
                </h2>
                <small>upload your file here.</small>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="GET" action="{{route('file.policy_files')}}" enctype="multipart/form-data"
                              id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Policy Number</label>
                                    <input type="text" placeholder="Enter policy number here" id="policy_no"
                                           @error('policy_no') is-invalid @enderror class="form-control"
                                           value="{{ $policy_no  }}" name="policy_no">
                                    <span class="small text-danger"
                                          for="policy_no">{{ $errors->first('policy_no') }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <div class="text-center">
                                        <input type="submit" name="load_file" class="btn btn-success" value="Load Files"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{route('file.store')}}" enctype="multipart/form-data"
                              id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="hidden" id="policy_val" name="policy_no" class="form-control">
                                    <label>Select Document Type</label>
                                    <select id="js-source-filetype" required name="file_type"
                                            class="js-source-filetype"
                                            style="width: 100%" placeholder="Select document type here">
                                        <option value="0" selected> Select You Document Type here</option>
                                        @foreach($file_type as $type)
                                            <option value="{{$type->id}}">
                                                {{$type->file_type}}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="small text-danger">{{ $errors->first('file_type') }}</span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Upload File</label>
                                    <input type="file" id="" name="file" class="form-control">
                                    <span class="small text-danger">{{ $errors->first('file') }}</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="create_file" class="btn btn-success" value="Upload"/>
                            </div>
                        </form>
                        @if(!$files->isEmpty())
                        <hr/>
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
                            @if($files->isNotEmpty())
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
                                            <td colspan="5">No Files</td>
                                    </tr>
                                @endforelse
                            @endif
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
        $( document ).ready(function() {
            $(".js-source-filetype").select2();
            $('#example1').footable();

            $("#policy_no").focusout(function () {
                var policy = $('#policy_no').val();
                $('#policy_val').val(policy)
            });
        });
        {{--$('#policy_no').keydown(function (e) {--}}

        {{--    var policy_no = $('#policy_no').val();--}}
        {{--    var code = e.keyCode || e.which;--}}
        {{--    if (e.keyCode == 9) {--}}
        {{--        e.preventDefault();--}}

        {{--        var fields = {--}}
        {{--            "_token": "{{ csrf_token() }}",--}}
        {{--            'policy_no': policy_no,--}}
        {{--        }--}}
        {{--        $.ajax({--}}
        {{--            url: "{{ route('file.policy_files') }}",--}}
        {{--            type: "POST",--}}
        {{--            data: fields,--}}
        {{--            success: function (response) {--}}
        {{--                if (response.code == 403) {--}}
        {{--                    toastr.error(response.message);--}}
        {{--                    // $('#msgs').html("<div class='alert alert-danger'>" + response.message + "</div>");--}}
        {{--                } else {--}}
        {{--                    $('#msgs').html("<div class='alert alert-success'>" + response.message + "</div>");--}}
        {{--                    setTimeout(function () {// wait for 5 secs--}}
        {{--                        location.reload(); // then reload the page--}}
        {{--                    }, 5000);--}}
        {{--                }--}}
        {{--            }--}}
        {{--        });--}}
        {{--    }--}}
        {{--});--}}


    </script>
@endsection
