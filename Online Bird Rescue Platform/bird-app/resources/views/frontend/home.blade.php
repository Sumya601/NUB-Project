@extends('frontend.layouts.main')

@section('main-container')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center 
   align-items-center parallax-item">
    <section id="pwrapper">
			<div class="prlx1" data-speed="0.02" data-revert="true"></div>
			<div class="prlx3" data-speed="0.04"></div>
			
		</section>
    <div class="container position-relative get-started" style="z-index: 11 !important;" 
      data-aos="zoom-in" data-aos-delay="100">
        <h1>Explore Birds<br>in Bangladesh</h1>
        <h2>We aim to protect our Birds. Step forward to save them.</h2>
      <a href="{{url('/birds')}}" class="btn-get-started">Start Exploring</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img style="border-radius: 5px;" src="assets/img/about/about2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>We are volunteering to protect Bird habitats in Bangladesh</h3>
            <p class="fst-italic">
              Birds are important part of our Ecosystem. They are essential as pollinators and seed dispersal
              of many plants, especially native plants. We aim to protect their habitats for their existance,
              as ours.
            </p>
            <ul>
              <li><i class="bi bi-chevron-right"></i> We are volunteering at field level.</li>
              <li><i class="bi bi-chevron-right"></i> This website is to spread knowledge about our existing Bird species.</li>
              <li><i class="bi bi-chevron-right"></i> We are collecting fund to spend on saving Birds. We are working alongside other 
              Bird conservation organizations in Bangladesh</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Featured Images ======= -->
    <section id="featured">
    <div id="full">
      <img src="assets/img/birds/11.jpg" id="fullImg">
      <span onclick="closeFullImg()"><i class='bx bx-x'></i></span>
    </div>

    <div class="container" data-aos="fade-up">
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><div class="fimg">
            <div class="fi-dbox"><h5>Narcos Uddin</h1>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <br><p style="margin-bottom:0;">এটা আমার পোষা টিয়া 'টাকু'। তাকে
                কোন খাচায় রাখি না। রাস্পবেরি, চেরি ও নানান বীজ তার প্রিয়। 
            বাংলাদেশি পাখিদের নিয়ে এই ওয়েবসাইটটি দেখে খুবই ভালো লাগলো। </p>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </div><img src="assets/img/birds/2.jpg" alt="" onclick="openFullImg(this.src)">
            </div>
          </div>
          <div class="swiper-slide"><div class="fimg">
            <div class="fi-dbox"><h5>Hami Shams Rubon</h1>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <br><p style="margin-bottom:0;">আমাদের বাড়িতে থাকে এই ময়না। তার নাম দিয়েছি 'তাসু'। 
              বাড়ির ছেলেদের সাথে খেলতে খুবই পছন্দ করে </p>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </div><img src="assets/img/birds/myna.jpg" alt="" onclick="openFullImg(this.src)">
            </div>
          </div>
          <div class="swiper-slide"><div class="fimg">
            <div class="fi-dbox"><h5>Mosharof Jashim</h1>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <br><p style="margin-bottom:0;">I took this picture of Kingfisher from my balcony. We have a pond next
              to it. Kingfisher is such a colourful and beautiful bird, isn't it! </p>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </div><img src="assets/img/birds/10.jpg" alt="" onclick="openFullImg(this.src)">
            </div>
          </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
  
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
  
      <!-- If we need scrollbar 
      <div class="swiper-scrollbar"></div>
    -->
  </div>
</div>
</section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Features</h2>
          <p></p>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="collg4 col-lg-3 col-md-4">
            <a class="icon-box hover-2" href="{{url('/gallery')}}">
              <i class="bx bx-images" style="color: #62a234;"></i>
              <h3>Bird Images</h3>
            </a>
          </div>
          <div class="collg4 col-lg-3 col-md-4 mt-4 mt-md-0">
            <a class="icon-box hover-2"href="{{url('/vets')}}">
              <i class="bx bx-first-aid" style="color: #ff5168;"></i>
              <h3>Find Vets</h3>
            </a>
          </div>
          <div class="collg4 col-lg-3 col-md-4 mt-4 mt-md-0">
            <a class="icon-box hover-2 shareimg"  onclick="modalOpen()">
              <i class="bi bi-cloud-arrow-up" style="color: #5578ff;"></i>
              <h3>Share your Image of Birds</h3>
            </a>
          </div>

          <div class="collg4 col-lg-3 col-md-4 mt-4 mt-md-0">
            <a class="icon-box hover-2 shareimg"  onclick="modalOpen2()">
              <i class='bx bx-edit-alt' style="color: #d86f13;"></i>
              <h3>Feedback</h3>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Features Section -->
  

<!-- ======= Featured rescue ======= -->
<section id="featured">
  
  <div class="container" data-aos="fade-up">


  <div class="swiper-container" style="box-shadow:none;background:transparent">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><div class="fimg">
          <div class="fi-dbox">
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <br><p style="margin-bottom:0;">Red vented Bulbul kid
              We rescued a red-vented bulbul about a month ago. She is approximately 
              1 month 20 days old. She is quite healthy and happy but she preens a 
              scratches her feathers and fur and cleans some form of transparent white film.
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </div><img src="assets/img/resq/1.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide"><div class="fimg">
          <div class="fi-dbox">
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <br><p style="margin-bottom:0;">This Juvenile Indian Pond Heron/Striated Heron
               was found (with its thigh skin missing, unable to stand or fly) by us and then 
              rescued from its cruel handler. 
              The leg was treated and its being looked-after/fed before release. </p>
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </div><img src="assets/img/resq/2.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide"><div class="fimg">
          <div class="fi-dbox">
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <br><p style="margin-bottom:0;">Successfully rescued from a net on January 2021. It's an 
              Indian Scoops Owl. </p>
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </div><img src="assets/img/resq/3.jpg" alt="">
          </div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar 
    <div class="swiper-scrollbar"></div>
  -->
</div>
</div>
</section>

    <!-- ======= Popular Articles Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Recent Articles</h2>
          <p></p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/artcles/doel1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>en</h4>
                </div>

                <h3><a href="{{url('/doel1')}}">Oriental magpie-robin <span lang="bn">(দোয়েল)</a></h3>
                <p>The oriental magpie-robin is considered the national bird of Bangladesh. 
                  It is a small passerine bird that was formerly 
              classed as a member of the thrush family Turdidae. ...
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/artcles/shalik1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>bn</h4>
                </div>

                <h3><a href="{{url('/shalik1')}}"><span lang="bn">ভাত শালিক (common myna)</span></a></h3>
                <p><span lang="bn">ভাত শালিক (বৈজ্ঞানিক নাম: Acridotheres tristis) Sturnidae (স্টার্নিডি) 
                  গোত্র বা পরিবারের অন্তর্গত Acridotheres (অ্যাক্রিডোথিরিস) গণের অন্তর্গত অত্যন্ত পরিচিত 
                  একটি পাখি। ভাতশালিকের ...</span></p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/artcles/tiya1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>bn</h4>
                </div>

                <h3><a href="{{url('/tiya1')}}"><span lang="bn">সবুজ টিয়া (Rose-ringed parakeet)</span></a></h3>
                <p><span lang="bn">সবুজ টিয়া (বৈজ্ঞানিক নাম:Psittacula krameri) টিয়া প্রজাতির অতিপরিচিত ও সুদর্শন পাখি। সবুজ 
                  টিয়া সহজেই পোষ মানে এবং মানুষের মতো করে কথা বলতে পারে। এরা সাধারণত বন ...</span></p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>
        <button class="sec-button"><a href="{{url('/articles')}}">See more</a></button>
      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $donationNumber }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Number of Donations</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <div style="display: flex; justify-content: center;">
              <p class="tdonate"> &#2547;</p>
            <span data-purecounter-start="0" data-purecounter-end="{{ $allDonatedAmount }}" data-purecounter-duration="1" class="purecounter"></span>
          </div>
            <p>Total Amount</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
            <p>Volunteered</p>
          </div>

        </div>

      </div>

          <!-- ======= Why Us Section ======= -->
    <div id="why-us" class="why-us">
      <div class="why-uss">
      <div class="container">
        <div class="row" style="padding: 30px;">
          <div class="content">
            <div style="display: block;">
              <h3 style="margin-bottom:0!important;padding:12px;">Be a part in our venture to save Birds in Bangladesh</h3>
              
            </div>
              <div class="text-center">
                <a href="{{url('/donate')}}" class="more-btn"><strong>DONATE </strong></a>
              </div>
            </div>
            <p>We are a non-profitable organization. All the funds we collect directly 
              go to rescuing birds, treatment after rescues and making bird feeders at places.
            </p>
        </div>
      </div>
    </div>
    </div><!-- End Why Us Section -->
    </section><!-- End Counts Section -->
    
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection