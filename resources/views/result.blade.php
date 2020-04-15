@extends('layouts.app')

@section('content')
<style type="text/css">
	img{
		width: 300px;
	}
</style>
    <!-- Icon -->
    <div class="text-center">
      <img src="../img/iconfinder_12-Mask_5929232.png" alt="User Icon" />
      <h1>
          {{ Auth::user()->name }}
      </h1>
  	</div>

	<center>
		@if($survey->yes>-1 & $survey->yes<8)         
        	<p>
        		<label>Risiko anda untuk tertular penyakit COVID-19 adalah</label>
				<b id="status">Rendah</b>
        	</p>     
        	@elseif($survey->yes>7 & $survey->yes<15)
        	<p>
        		<label>Risiko anda untuk tertular penyakit COVID-19 adalah</label>
				<b id="status">Sedang</b>
        	</p>
        	@else
        	<p>
        		<label>Risiko anda untuk tertular penyakit COVID-19 adalah</label>
				<b id="status">Tinggi</b>
        	</p>
        @endif
    

	@guest
    @else
    <a style="margin-top: 15px;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }} </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
	@endguest
</center>

@endsection


