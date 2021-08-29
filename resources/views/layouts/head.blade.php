<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"/>

<!-- Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
@yield('css')

@if (App::getLocale() == 'en')
    <link href="{{ asset('assets/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif
