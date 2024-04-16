<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'Humanr')</title>
		
		<!--Favicon -->
		<link rel="icon" type="image/x-icon" href="images/logo-hr.jpg"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
		<!-- Styles -->
        <!-- Bootstrap css twitter-->
        <!-- Latest compiled and minified CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <!-- Awesome fonts styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <!-- Custom styles -->
		<link rel="stylesheet" href="css/humanr.css" />

        <!-- Example assets jcarousel responsive -->
        <link rel="stylesheet" type="text/css" 
          href="jcarousel/jcarousel.responsive.css" />
         
		
		<!-- Scripts -->
        <!-- jQuery CDN link -->
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
			      crossorigin="anonymous"></script>
        <!-- Latest Bootstrap compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- jCarousel links and code -->
        <!-- jcarousel scripts -->    
        <script type="text/javascript" 
          src="jcarousel/vendor/jquery/jquery.js" ></script>
        <script type="text/javascript" 
          src="jcarousel/dist/jquery.jcarousel.min.js" ></script>
        <script type="text/javascript" 
          src="jcarousel/jcarousel.responsive.js" ></script>

    </head>

    <body>
    @include('shared.navbar_first')
    @include('shared.navbar')

    @yield('content')
    @include('shared.footer')
	@yield('footer_scripts')
	  <script src="{{ asset('js/app.js') }}"></script>
    </body>
    
    
</html>