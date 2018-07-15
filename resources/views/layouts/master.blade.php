<!DOCTYPE html>
<html>

<head>
  <title>{{ $titl or 'Олег Погожев' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'Олег Погожев' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'Олег Погожев8' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $titl or 'Олег Погожев' }}" />
  <meta property="og:description" content="{{ $meta or 'Олег Погожев' }}" />
  <meta property="og:image" href="storage/{{ $img or 'pages/Logo.png' }}" content="storage/{{ $img or 'pages/Logo.png' }}"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="СМЕНА 2018" />

      
      <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
		
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
