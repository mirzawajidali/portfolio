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
                                    <h4>Add Testimonial</h4>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    @endif
                                    <div class="basic-form">
                                        <form action="{{ route('testimonial_add') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" value="" name="name" class="form-control" placeholder="Name">
                                            </div>
                                            @error('designation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" value="" name="designation" class="form-control" placeholder="Designation">
                                            </div>
                                            @error('review')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Review</label>
                                                <textarea name="review" placeholder="Review" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-default">Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                </section>
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Testimonials </h4>

                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Designation</th>
                                                    <th>Review</th>
                                                    <th>Image</th>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($testimonials as $key=>$testimonial)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $testimonial->name }}</td>
                                                    <td>{{ $testimonial->designation }}</td>
                                                    <td>{{ $testimonial->review }}</td>
                                                    <td><img src="{{ asset($testimonial->image) }}" class="img-fluid" width="30%" height="30%"  alt=""></td>
                                                    <td>
                                                        <a href="{{ URL::to('admin/testimonial_delete/'.$testimonial->id) }}" class="btn btn-danger"><i class="ti-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
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
