@extends('layouts.app')
@section('content')
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<body>

<div class="container">

    <div class="row justify-content-left">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="color: rgb(51, 148, 122)">{{ __('Profile Info') }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Welcome Back Employee! : ') }} {{ Auth::user()->name }}
                </div>

                <div class="card-body">
                {{ __('Mobile : ') }}{{ Auth::user()->mobile }}
                </div>

                <div class="card-body">
                {{ __('Email Address : ') }}{{ Auth::user()->email }}
                </div>
                <div class="card-body">
                {{ __('Created at :') }}{{ Auth::user()->created_at }}
                </div>
                <div class="card-body">
                    <img src="https://commsoft.ca/Public/img/uploaded/Employ%C3%A9s_250x250_Petit.png" alt="" align="right" style="width: 0.7in">
                </div>
        </div>
<div>   .   </div>
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-md-10">
                        <div class="d-flex flex-row"></div>
                        <div class="row news-card p-3 bg-white">
                            <div class="col-md-4">
                                <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="https://commsoft.ca/Public/img/uploaded/Employ%C3%A9s_250x250_Petit.png"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-feed-text" >
                                    <h3 style="color: rgb(51, 148, 122)"> NRA Company Exclusive News For You !</h3><span>We work with steady steps to improve the IT services provided to our clients through a specialized team in areas of programming, design and marketing.
                                        We aim to reach the top and are proud of working with a large base of key clients and companies.
                                        {{ Auth::user()->name }}
                                        <br></span>
                                    <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                                        <div class="d-flex creator-profile"><img class="rounded-circle" src="https://commsoft.ca/Public/img/uploaded/Employ%C3%A9s_250x250_Petit.png" alt="IMG" width="50" height="50">
                                            <div class="d-flex flex-column ml-2">
                                                <h6 class="username">{{ Auth::user()->name }}</h6><span class="date">{{ Auth::user()->created_at }}</span>
                                            </div>
                                        </div><i class="fa fa-share share"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>   .   </div>


            {{-- <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Profile Page Tool</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Profile Page Tool</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div> --}}

              {{-- to do task --}}
{{--
              <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
              <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="box box-aqua">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                      <i class="ion ion-clipboard"></i>
                      <h3 class="box-title">To Do List</h3>
                      <div class="box-tools pull-right">
                        <ul class="pagination pagination-sm inline">
                          <li><a href="#">«</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">»</a></li>
                        </ul>
                      </div>
                    </div> --}}
{{--
                    <div class="box-body">
                      <ul class="todo-list ui-sortable">
                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <input type="checkbox" value="" name="">
                          <span class="text">Design a nice theme</span>
                          <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                          <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <input type="checkbox" value="" name="">
                          <span class="text">Make the theme responsive</span>
                          <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                          <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <input type="checkbox" value="" name="">
                          <span class="text">Let theme shine like a star</span>
                          <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                          <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <input type="checkbox" value="" name="">
                          <span class="text">Let theme shine like a star</span>
                          <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                          <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <input type="checkbox" value="" name="">
                          <span class="text">Check your messages and notifications</span>
                          <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                          <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <input type="checkbox" value="" name="">
                          <span class="text">Let theme shine like a star</span>
                          <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                          <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="box-footer clearfix no-border">
                    <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                    </div>
                  </div>
                </div>

 --}}



    </div>
    </div>
</div>
</body>
<style>

@import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

body {
  height: 100%;
  margin-bottom: 60px;
  background: linear-gradient(to bottom, #77828b, #eef2f3);
  background-attachment: fixed;
  background-repeat: no-repeat;
}

.news-card {
    border-radius: 8px
}

.news-feed-image {
    border-radius: 8px;
    width: 90%
}

.date {
    font-size: 12px
}

.username {
    color: blue
}

.share {
    color: blue
}



/* to do task */


.box.box-aqua {
    border-top-color: #00c0ef !important;
}
.box.box-green {
    border-top-color: #00a65a !important;
}
.box.box-success {
    border-top-color: #3c8dbc;
}
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}
.box-header>.ion {
    margin-right: 5px;
}
.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}
.box-header>.box-tools {
    position: absolute;
    right: 10px;
    top: 5px;
}
.inline {
    display: inline;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.todo-list {
    margin: 0;
    padding: 0;
    list-style: none;
    overflow: auto;
}
.todo-list>li {
    border-radius: 2px;
    padding: 10px;
    background: #f4f4f4;
    margin-bottom: 2px;
    border-left: 2px solid #e6e7e8;
    color: #444;
}
.todo-list>li .label {
    margin-left: 10px;
    font-size: 9px;
}
.todo-list>li .tools {
    display: none;
    float: right;
    color: #dd4b39;
}
.todo-list>li:hover .tools{
    display: block;
}
.no-border {
    border: 0 !important;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}
.btn-default {
    background-color: #f4f4f4;
    color: #444;
    border-color: #ddd;
}
.btn {
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid transparent;
}
.btn-default:hover {
    background-color: #3490dc;
    color: #eef2f3;

}






                                            /* To-do-list-style                                     */


</style>
@endsection
{{-- style="background-color: #5454cc" --}}



{{-- <div class="card-body">

    <div class="d-flex flex-column align-items-center text-center">
        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
        <div class="mt-3">
          <h4>John Doe</h4>
          <p class="text-secondary mb-1">Full Stack Developer</p>
          <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
          <button class="btn btn-primary">Follow</button>
          <button class="btn btn-outline-primary">Message</button>
        </div> --}}
