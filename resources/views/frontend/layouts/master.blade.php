<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MyHome</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
@include('frontend.includes.css')


</head>
<body>
<div id="wrapper" class="home-page">
  @include('frontend.includes.topbar')
	<!-- start header -->
	@include('frontend.includes.header')
	<!-- end header -->


    @yield('content')
@include('frontend.includes.footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@include('frontend.includes.js')
</body>
</html>