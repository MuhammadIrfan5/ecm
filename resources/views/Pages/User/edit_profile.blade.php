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
    <link href="hello/worldmy.css" />
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
                            <span>Profile</span>
                        </li>

                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Profile
                </h2>
                <small>Update your profile from here.</small>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
{{--                        {{url('update_profile/'.$user->id)}}--}}
                        <form method="POST" action="{{route('profile.update_profile', ['id' => $user->id ] )}}" enctype="multipart/form-data"
                              id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input type="text" required value="{{$user->name}}" id="name" class="form-control"
                                           name="name">
                                    <span class="small text-danger" for="name">{{ $errors->first('name') }}</span>
{{--                                    @error('name')--}}
{{--                                    <span class="small text-danger" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}

                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input type="email" readonly value="{{$user->email}}" id="" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>User Name</label>
                                    <input type="text" id="" class="form-control" name="username" value="{{$user->username}}">
                                    <span class="small text-danger" for="name">{{ $errors->first('username') }}</span>
{{--                                    @error('username')--}}
{{--                                    <span class="small text-danger" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Hash Key</label>
                                    <input type="text" id="" class="form-control" name="hash_key" value="{{ $user->hash_key != null ? decrypt($user->hash_key) : ''}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Status</label>
                                    <input type="text" id="" readonly class="form-control" name="status" value="{{$user->status}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" id="" class="form-control" name="password">
                                </div>
{{--                                <div class="form-group col-lg-6">--}}
{{--                                    <label>Profile Picture</label>--}}
{{--                                    <input type="file" id="" name="profile_picture" class="form-control">--}}
{{--                                    <span class="small text-danger">{{ $errors->first('profile_picture') }}</span>--}}
{{--                                </div>--}}

                            </div>
                            <div class="text-center">
                                <input type="submit" name="update_profile" class="btn btn-success" value="Update"/>
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
