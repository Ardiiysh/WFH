@extends('layouts.app')
@section('content')

<!-- Login Form -->
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Register</h2>
		    <form method="POST" action="{{ route('register') }}" >
    @csrf
        <div  class="form-group">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirm">            
        </div>
        <input type="submit" class="form-control" value="Register">

</form>
</div>
<div class="col-md-8 banner-sec">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          </ol>
    <div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img class="d-block img-fluid" src="../img/termo.jpg" >
<div class="carousel-caption d-none d-md-block">
<div class="banner-text">
    <h2>STAY AT HOME</h2>
    <p>Jangan lupa untuk selalu menjaga kesehatan</p>
    <P>#DiRumahAja</P>
</div>	
</div>
</div>
</div>
</div>

@endsection
