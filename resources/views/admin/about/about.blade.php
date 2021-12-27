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
                                    <li class="breadcrumb-item active">About</li>
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
                                    <h4>About Settings</h4>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    @endif
                                    <div class="basic-form">
                                        <form action="{{ route('about_update') }}" method="POST">
                                            @csrf
                                            @error('birthday')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input type="date" value="{{ $about['birthday'] }}" name="birthday" class="form-control" placeholder="Birthday">
                                            </div>
                                            @error('age')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" value="{{ $about['age'] }}" name="age" class="form-control" placeholder="Age">
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" value="{{ $about['website'] }}" name="website" class="form-control" placeholder="Website">
                                            </div>
                                            <div class="form-group">
                                                <label>Degree</label>
                                                <input type="text" value="{{ $about['degree'] }}" name="degree" class="form-control" placeholder="Degree">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" value="{{ $about['phone'] }}" name="phone" class="form-control" placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" value="{{ $about['email'] }}" name="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" value="{{ $about['city'] }}" name="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-group">
                                                <label>Freelance</label>
                                                <select class="form-control" name="freelance">
                                                    <option selected>{{ $about['freelance'] }}</option>
                                                    <option>Available</option>
                                                    <option>Not Available</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea name="about" id="" cols="30" rows="50" class="form-control" placeholder="About Me">{{ $about['about'] }}</textarea>
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
