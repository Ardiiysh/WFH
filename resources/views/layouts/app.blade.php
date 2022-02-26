<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SURVEI COVID19</title>
    
   {{-- aaaa --}}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body >

<div class="form-group">
  <div id="formContent">
    <!-- Tabs Titles -->
    <div class="content">
        @yield('content')
    </div>
  </div>
</div>

</body>
</html>

