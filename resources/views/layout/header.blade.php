<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- style  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

@if (Request::is('login'))
    <link rel="stylesheet" href="{{ asset('/assets/css/login_style.css') }}">
@endif

@if (Request::is('register'))
    <link rel="stylesheet" href="{{ asset('/assets/css/register_style.css') }}">
@endif

@if (Request::is('showAddForm'))
    <link rel="stylesheet" href="{{ asset('/assets/css/login_style.css') }}">
@endif
<title>Book bus, boat and private taxi in Cambodia | BookMeBus</title>
<!-- tab logo -->
<link rel="icon" href="{{ asset('assets/images/bookmebus.ico') }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
