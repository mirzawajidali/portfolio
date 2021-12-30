@extends('admin.admin-layout')
@section('style')
     <!-- Standard -->
     <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
     <!-- Retina iPad Touch Icon-->
     <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
     <!-- Retina iPhone Touch Icon-->
     <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
     <!-- Standard iPad Touch Icon-->
     <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
     <!-- Standard iPhone Touch Icon-->
     <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
     <!-- Common -->
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
                <h1>Hello, <span>Welcome Here</span></h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">App-Email</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <div class="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="compose-email">
                    <div class="mail-box">
                      <aside class="sm-side">
                        <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                                                      <img src="{{ asset($user['image']) }}" alt="">
                                                  </a>
                          <div class="user-name">
                            <h5><a href="#">{{ $user['name'] }}</a></h5>
                            <span><a href="#">{{ $user['email'] }}</a></span>
                          </div>
                        </div>
                        <div class="inbox-body text-center">
                          <!-- Modal -->
                          <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                            <div class="modal-dialog">
                              <div class="modal-content text-left">
                                <div class="modal-header">
                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                                  <h4 class="modal-title">Compose</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal">
                                    <div class="form-group">
                                      <label class="col-lg-2 control-label">To</label>
                                      <div class="col-lg-10">
                                        <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-lg-2 control-label">Cc / Bcc</label>
                                      <div class="col-lg-10">
                                        <input type="text" placeholder="" id="cc" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-lg-2 control-label">Subject</label>
                                      <div class="col-lg-10">
                                        <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-lg-2 control-label">Message</label>
                                      <div class="col-lg-10">
                                        <textarea rows="10" cols="30" class="form-control" id="texarea1" name="texarea"></textarea>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
                                                                  <span>Attachment</span>
                                        <input type="file" name="files[]" multiple="">
                                        </span>
                                        <button class="btn btn-primary" type="submit">Send</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </div>
                        <ul class="inbox-nav inbox-divider">
                          <li class="breadcrumb-item active">
                            <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-success pull-right m-t-12">2</span></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                          </li>
                          <li>
                            <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="badge badge-info pull-right m-t-12">30</span></a>
                          </li>
                          <li>
                            <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                          </li>
                        </ul>


                        <div class="inbox-body text-center">
                          <div class="btn-group">
                            <a class="btn mini btn-primary" href="javascript:;">
                                                          <i class="fa fa-plus"></i>
                                                      </a>
                          </div>
                          <div class="btn-group">
                            <a class="btn mini btn-success" href="javascript:;">
                                                          <i class="fa fa-phone"></i>
                                                      </a>
                          </div>
                          <div class="btn-group">
                            <a class="btn mini btn-info" href="javascript:;">
                                                          <i class="fa fa-cog"></i>
                                                      </a>
                          </div>
                        </div>

                      </aside>
                      <aside class="lg-side">
                        <div class="table-responsive">
                          <table class="table table-inbox table-hover table-responsive">
                            <tbody>
                               @foreach ($contacts as $contact)
                               <tr class="unread">
                                <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                <td class="view-message  dont-show">{{ $contact->name }}</td>
                                <td class="view-message ">{{ $contact->message }}</td>
                                <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                <td class="view-message  text-right">{{ $contact->created_at->diffForHumans() }}</td>
                              </tr>
                               @endforeach
                            </tbody>
                          </table>
                        </div>

                      </aside>
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


@endsection
@section('script')
    <!-- Common -->
    <script src="{{ asset('public/assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/preloader/pace.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/scripts.js')}}"></script>
@endsection
