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
                                    <h4>Add Skills</h4>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    @endif
                                    <div class="basic-form">
                                        <form action="{{ route('skill_add') }}" method="POST">
                                            @csrf
                                            @error('skill')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Skill Name</label>
                                                <input type="text" value="" name="skill" class="form-control" placeholder="Skill">
                                            </div>
                                            @error('percentage')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Progress</label>
                                                <select class="form-control" name="percentage">
                                                    @for ($i = 0; $i <= 100; $i++)
                                                    <option>{{ $i }}</option>
                                                    @endfor
                                                </select>
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
                                    <h4>Skills </h4>

                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Skills</th>
                                                    <th>Progress</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($skills as $key=>$skill)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $skill->name }}</td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$skill->percentage}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-warning"><i class="ti-pencil"></i></a>
                                                            <a href="{{ URL::to('admin/skill_delete/'.$skill->id) }}" class="btn btn-danger"><i class="ti-trash"></i></a>
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
