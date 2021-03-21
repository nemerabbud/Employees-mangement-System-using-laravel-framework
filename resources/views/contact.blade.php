@extends('layouts.app')

@section('content')
<a href="{{url('/Inbox')}}" class="notification">
    <span>Inbox</span>
    <span class="badge" >4</span>
  </a>

<body>

<section class="container mt-5">
    <!--Contact heading-->
    <div class="row">
      <!--Grid column-->
      <div class="col-sm-12 mb-4 col-md-5">
        <!--Form with header-->
        <div class="card border-primary rounded-0">
          <div class="card-header p-0">
            <div class="bg-primary text-white text-center py-2">
              <h3><i class="fa fa-envelope"></i> Write to us:</h3>
              <p class="m-0">We’ll Replay to you as soon as possible</p>
            </div>
          </div>
          <div class="card-body p-3">
            <form method="POST" action="{{ url('contact') }}">
                @csrf
            <div class="form-group">
              <label> Your name </label>
              <div class="input-group">
                <input value="" type="text" name="data[name]" class="form-control" id="name" placeholder="{{ Auth::user()->name }}" disabled>
              </div>
            </div>
            <div class="form-group">
              <label>Your email</label>
              <div class="input-group mb-2 mb-sm-0">
                <input type="email" value="" name="data[email]" class="form-control" id="email" placeholder="{{ Auth::user()->email }}" disabled>
              </div>
            </div>
            <div class="form-group">
              <label>Title</label>
              <div class="input-group mb-2 mb-sm-0">
                <input type="text" name="data[subject]" class="form-control" id="subject" placeholder="Title">
              </div>
            </div>
            <div class="form-group">
              <label>Message</label>
              <div class="input-group mb-2 mb-sm-0">
                <textarea type="text" class="form-control" name="mesg" id="message" style="height: 0.8in" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="text-center">
              <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block rounded-0 py-2">
            </div>
        </form>

          </div>
          </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-sm-12 col-md-7">
        <!--Google map-->
        <div class="mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.5324720129083!2d34.429855385517435!3d31.5095323548313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDMwJzM0LjMiTiAzNMKwMjUnMzkuNiJF!5e0!3m2!1sar!2s!4v1616323641530!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        </div>
        <!--Buttons-->
        <div class="row text-center">
          <div class="col-md-4">
            <a class="bg-primary px-5 py-1 rounded text-white mb-1 d-inline-block"><i class="fa fa-map-marker"></i></a>
            <p> al senaa St </p>
          </div>
          <div class="col-md-4">
            <a class="bg-primary px-5 py-1 rounded text-white mb-1 d-inline-block"><i class="fa fa-phone"></i></a>
            <p> +970597683083 </p>
          </div>
          <div class="col-md-4">
            <a class="bg-primary px-5 py-1 rounded text-white mb-1 d-inline-block"><i class="fa fa-envelope" ></i></a>
            <p> nemr.aboud@gmail.com </p>
          </div>
        </div>
      </div>
      <!--Grid column-->
    </div>
  </section>

</body>
<style>
    body {
  height: 100%;
  margin-bottom: 60px;
  background: linear-gradient(to bottom, #8e9eab, #eef2f3);
  background-attachment: fixed;
  background-repeat: no-repeat;
}
.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 12px 26px;
  position: relative;
  display: inline-block;
  border-radius: 10px;
  font-weight: bold;
  margin-left: 195px;
}

.notification:hover {
    background-color: #3490dc;
    color: #eef2f3;

}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -12px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
  font-size: 18px;
}
</style>

@endsection
