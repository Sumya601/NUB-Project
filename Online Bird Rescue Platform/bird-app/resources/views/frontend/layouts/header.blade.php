<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BD Birds</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logoM.png" rel="icon">
  <link href="assets/img/logoM.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="assets/css/brdimg.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  
  <link href="assets/css/style.css" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/readBook.css">
  <script src="assets/js/readBook.js"></script>
  <!-- Script -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>



  <!-- Header-->
  <header id="header" class="fixed-top">
    <div class="container con1 d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{url('/')}}"><img src="assets/img/logo.png" alt=""></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active2" href="{{url('/')}}" style="color: #1d6c3a;">Home</a></li>
          <li><a href="{{url('/about')}}">About</a></li>
          <li><a href="{{url('/birds')}}">Explore Brids</a></li>    
          <li class="dropdown"><a href="#"><span>Features</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/vets')}}">Find Vets</a></li>
              <li><a href="{{url('/articles')}}">Articles</a></li>
              <li><a href="{{url('/gallery')}}">Bird Images</a></li>
              <li><a href="#">News</a></li>
              <li><a style="cursor:pointer;" onclick="modalOpen()">Share your Image of Birds</a></li>
              <li><a style="cursor:pointer;" onclick="modalOpen2()">Send Feedback</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Contact</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                <li><a class="hotline-btn2">Hotline: <p class="hotline-btn"><i class="ri-phone-fill"></i> 01345 678 910</p></a></li>
                <li><a href="{{url('/rescue')}}" class="rescue-btn">
                    <p>Contact for<br>Rescue Team</p></a></li>
            </ul>
          </li>
          <li><a href="{{url('/donate')}}" class="donate-btn">Donate</a></li>
          
 @if (Route::has('login'))
    <div style="display:flex">
         @auth
            <!--<a style="padding-right:10px">
            <span> {{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a> -->

            <!-- Settings Dropdown -->
            <div class="hidden hdn1 sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div style="font-weight:bold">{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('dashboard')">
                            {{ __('Dashboard') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            
         @else
             <li><a href="{{ route('login') }}" >Sign in</a></li>
         @if (Route::has('register'))
             <li><a href="{{ route('register') }}" >Register</a></li>
         @endif
         @endauth
    </div>
@endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
