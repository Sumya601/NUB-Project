@extends('frontend.layouts.main')

@section('main-container')

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img style="border-radius: 5px;" src="assets/img/about/about.png" class="img-fluid" alt="">
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
  </section><!-- End Counts Section -->

  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Members</h2>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Hasan Mahmud</h4>
              <span>Student</span>
              <p>
                I'm a student at Dhaka University. I'm currently working with a few animal welfare 
                organizations and 'BD Birds' is among them.
              </p>
              <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Ahmed Jamil</h4>
              <span>Student</span>
              <p>
                I'm a Bird rescuer and a student at Daffodil University. I enjoy this rescue work. 
                When the bird is saved, nothing else makes me happier.
              </p>
              <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Prodip Howlader</h4>
              <span>Student</span>
              <p>
                I'm studying on Veterinary which helps me be the expert in the team. 
                I only do rescue Birds alongside study at this moment. 
              </p>
              <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Trainers Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                  <h3>John Aziz</h3>
                  <h4>Pianist</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    BD Birds is the beacon of hope for avian conservation, where actions speak louder than words.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                  <h3>Charles Ahmed</h3>
                  <h4>Film-maker</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    BD Birds makes it simple to connect, contribute, and care for our avian friends.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                  <h3>Abbas Khalil</h3>
                  <h4>Photographer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    This website empowers us to be stewards of the skies and give back to nature.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                  <h3>Sakib Ahmed</h3>
                  <h4>Politician</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    BD Birds has made it easy for me to contribute to bird conservation and make a difference.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                  <h3>Shoyeb Shahriar</h3>
                  <h4>Writer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    A wonderful platform for bird lovers to support avian causes through donations.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

@endsection