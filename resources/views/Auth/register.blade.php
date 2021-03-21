    <!-- Required meta tags-->
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Employees Registration</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</header>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="card card-4">
            <div class="card-body">
                <div class="login100-form-title"> Employees Registration</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row row-space">
                            <label for="name" class="col-2">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input--style-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input--style-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-2">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="string" class="input--style-4" name="mobile" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-2">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input--style-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-2">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input--style-4" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

<!--
                         <div class="form-group">
                            <input type="file" name="userimage" id="imageUpload1" required class="form-control inputfile"
                                   accept=".png, .jpg, .jpeg">
                            <label for="imageUpload1">
                                <span class="archive-name">@lang('User Picture')</span>
                                <span class="btn-inputfile"><i class="fa fa-image"></i></span>
                            </label>
                        </div>
            employee image area       -->

                        <div class="form-group row mb-0">
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Submit
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-header"> NRA Company 2020    ©</div>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body>

