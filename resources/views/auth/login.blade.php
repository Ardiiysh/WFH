@extends('layouts.app')
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Survey Now</h2>
		    <form method="POST" action="{{ route('login') }}" class="login-form">
    @csrf
        <div  class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Passowrd">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <button type="submit" class="btn btn-login float-right">login</button>
</form>

<!-- Remind Passowrd -->
<div class="copy-text">  <a class="underlineHover" href="{{route('register')}}">Register</a>
    </div>

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
            <h2>Stay at Home</h2>
            <p>Jangan lupa untuk selalu menjaga kesehatan</p>
            <p>Ayo registrasi dan cek apakah anda rentan terkena virus Corona</p>
    <p>#DiRumahAja</p>
        </div>	
  </div>
    </div>
        
    </div>
</div>
</section>
