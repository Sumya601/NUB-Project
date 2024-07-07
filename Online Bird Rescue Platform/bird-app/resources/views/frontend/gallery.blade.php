@extends('frontend.layouts.main')

@section('main-container')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <br>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active"></li>
              <li data-filter=".filter-app"></li>
              <li data-filter=".filter-product"></li>
              <li data-filter=".filter-branding"></li>
              <li data-filter=".filter-books"></li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/1.jpg" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/2.jpg" class="img-fluid" alt=""></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/3.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="assets/img/birds/3.jpg" class="img-fluid" alt=""></a>
               
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/4.jpg" class="img-fluid" alt=""></a>
               
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/5.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/5.jpg" class="img-fluid" alt=""></a>
               
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/6.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/6.jpg" class="img-fluid" alt=""></a>
              
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/7.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="assets/img/birds/7.jpg" class="img-fluid" alt=""></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/8.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/8.jpg" class="img-fluid" alt=""></a>
               
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/9.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/9.jpg" class="img-fluid" alt=""></a>
               
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/10.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/10.jpg" class="img-fluid" alt=""></a>
             
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/11.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="assets/img/birds/11.jpg" class="img-fluid" alt=""></a>
               
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/birds/11.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/birds/11.jpg" class="img-fluid" alt=""></a>
             
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    @endsection