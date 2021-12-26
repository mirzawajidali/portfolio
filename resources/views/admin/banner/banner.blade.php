@extends('admin.admin-layout')
@section('style')
    <!-- Styles -->
    <link href="{{ asset('public/assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css')}}" rel="stylesheet">
@endsection
@section('main')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">

                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Banner</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Banner Settings</h4>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    @endif
                                    <div class="basic-form">
                                        <form action="{{ route('banner_update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="user-photo m-b-30">
                                                <img class="img-fluid" src="{{ asset($banner['banner']) }}" width="30%" height="30%" alt="" />
                                              </div>
                                            @error('designation')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <label>Main Banner</label>
                                                <input type="file" class="form-control" name="banner">
                                            </div>
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" value="{{ $banner['designation'] }}" name="designation" class="form-control" placeholder="Designation">
                                            </div>
                                            <button type="submit" class="btn btn-default">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('public/assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/preloader/pace.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
@endsection
