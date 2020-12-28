<!-- Title -->
<title> {{ env('app_name') }} </title>
<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Icons css -->
<link href="{{URL::asset('assets/css-'.LaravelLocalization::getCurrentLocaleDirection().'/icons.css')}}" rel="stylesheet">
<!--  Custom Scroll bar-->
<link href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->
<link rel="stylesheet" href="{{URL::asset('assets/css-'.LaravelLocalization::getCurrentLocaleDirection().'/sidemenu.css')}}">
@stack('css')
<!--- Style css -->
<link href="{{URL::asset('assets/css-'.LaravelLocalization::getCurrentLocaleDirection().'/style.css')}}" rel="stylesheet">
<!--- Dark-mode css -->
<link href="{{URL::asset('assets/css-'.LaravelLocalization::getCurrentLocaleDirection().'/style-dark.css')}}" rel="stylesheet">
<!---Skinmodes css-->
<link href="{{URL::asset('assets/css-'.LaravelLocalization::getCurrentLocaleDirection().'/skin-modes.css')}}" rel="stylesheet">
