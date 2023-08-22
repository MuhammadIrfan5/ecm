@extends('layouts.backend.app')
@section('css-links')
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/fontawesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/metisMenu/dist/metisMenu.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/animate.css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap/dist/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/toastr/build/toastr.min.css')}}" />
    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/helper.css')}}" />
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
                            <span>Create User</span>
                        </li>

                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    User
                </h2>
                <small>Create new user from here.</small>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="POST" action="{{route('profile.store')}}" enctype="multipart/form-data"
                              id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input type="text" required id="name" class="form-control"
                                           name="name" @error('name') is-invalid @enderror value="{{ Request::old('name') }}"}>
                                    <span class="small text-danger" for="name">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input type="email" name="email" @error('email') is-invalid @enderror value="{{ Request::old('email') }}" id="" class="form-control">
                                    <span class="small text-danger" for="email">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>User Name</label>
                                    <input type="text" id="" @error('username') is-invalid @enderror class="form-control" value="{{ Request::old('username') }}" name="username">
                                    <span class="small text-danger" for="username">{{ $errors->first('username') }}</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="create_user" class="btn btn-success" value="Create"/>
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
        $(".roles").select2();
    </script>
@endsection
