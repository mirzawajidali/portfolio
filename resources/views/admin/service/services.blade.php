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
                                    <li class="breadcrumb-item active">Service</li>
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
                                    <h4>Add Service</h4>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    @endif
                                    <div class="basic-form">
                                        <form action="{{ route('service_add') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Icons</label>
                                                @error('icon')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="icon" class="form-control" placeholder="Icons: e.g: fad fa-php For Icons visit: www.fontawesome.com">
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <label>Detail</label>
                                                @error('detail')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="text" name="detail" class="form-control" placeholder="Detail">
                                            </div>
                                            <button type="submit" class="btn btn-default">Add Service</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Services </h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Service</th>
                                                    <th>Detail</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($services as $key=>$service)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>{{ $service->title }}</td>
                                                    <td>{{ $service->detail }}</td>
                                                    <td>
                                                        <a href="{{ URL::to('admin/service_delete/'.$service->id) }}" class="btn btn-sm btn-danger"><i class="ti-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
