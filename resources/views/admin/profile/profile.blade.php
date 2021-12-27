@extends('admin.admin-layout')
@section('style')
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
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
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">App-Profile</li>
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
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                  <div class="user-profile">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" src="{{ asset($user['image']) }}" alt="" />
                        </div>
                        <div class="user-work">
                          <h4>work</h4>
                          <div class="work-content">
                            <h3>It Solution </h3>
                            <p>123, South Mugda</p>
                            <p>New York, 1214</p>
                          </div>
                          <div class="work-content">
                            <h3>Unix</h3>
                            <p>123, South Mugda</p>
                            <p>New York, 1214</p>
                          </div>
                        </div>
                        <div class="user-skill">
                          <h4>Skill</h4>
                          <ul>
                            <li>
                              <a href="#">Branding</a>
                            </li>
                            <li>
                              <a href="#">UI/UX</a>
                            </li>
                            <li>
                              <a href="#">Web Design</a>
                            </li>
                            <li>
                              <a href="#">Wordpress</a>
                            </li>
                            <li>
                              <a href="#">Magento</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="user-profile-name">{{ $user['name'] }}</div>
                        <div class="user-Location">
                          <i class="ti-location-pin"></i> New York, New York</div>
                        <div class="user-job-title">Product Designer</div>
                          <a href="" class="btn btn-success btn-addon"><i class="ti-align-right"></i> Change Password</a>
                        <div class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <form action="{{ route('profile_update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" class="btn btn-primary btn-addon" name="image">
                                    <div class="phone-content">
                                        <span class="contact-title">Name:</span>
                                        <input type="text" value="{{ $user['name'] }}" name="name" class="form-control" placeholder="Name">
                                      </div>
                                      <div class="email-content">
                                        <span class="contact-title">Email:</span>
                                        <input type="email" value="{{ $user['email'] }}" name="email" class="form-control" placeholder="Email">
                                      </div>
                                      <div class="phone-content">
                                        <span class="contact-title">Phone:</span>
                                        <input type="text" value="{{ $user['phone'] }}" name="phone" class="form-control" placeholder="Phone">
                                      </div>
                                      <div class="address-content">
                                        <span class="contact-title">Address:</span>
                                        <input type="text" value="{{ $user['address'] }}" name="address" class="form-control" placeholder="Address">
                                      </div>
                                      <div class="website-content">
                                        <span class="contact-title">Twitter:</span>
                                        <input type="text" value="{{ $user['twitter'] }}" name="twitter" class="form-control" placeholder="Twitter">
                                      </div>
                                      <div class="skype-content">
                                        <span class="contact-title">Facebook:</span>
                                        <input type="text" value="{{ $user['facebook'] }}" name="facebook" class="form-control" placeholder="Facebook">
                                      </div>
                                      <div class="skype-content">
                                        <span class="contact-title">Instagram:</span>
                                        <input type="text" value="{{ $user['instagram'] }}" name="instagram" class="form-control" placeholder="Instagram">
                                      </div>
                                      <div class="skype-content">
                                        <span class="contact-title">Linkedin:</span>
                                        <input type="text" value="{{ $user['linkedin'] }}" name="linkedin" class="form-control" placeholder="Linkedin">
                                      </div>
                                      <br>
                                       <button class="btn btn-primary btn-addon" type="submit"><i class="ti-save"></i>Save</button>
                                </form>
                              </div>
                              <div class="basic-information">
                                <h4>Basic information</h4>
                                <div class="birthday-content">
                                  <span class="contact-title">Birthday:</span>
                                  <span class="birth-date">January 31, 1990 </span>
                                </div>
                                <div class="gender-content">
                                  <span class="contact-title">Gender:</span>
                                  <span class="gender">Male</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
    <script src="{{ asset('public/assets/js/scripts.js')}}"></script>
@endsection
