@extends('frontend.layouts.main')

@section('main-container')

<style>
  .sectionDnt {
    font-family: 'Poppins', sans-serif;
    margin-top: 49px;
  }

  /* Style the tab */
  .tab {
    display: flex;
    justify-content: center;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
    padding: 20px 40px;
    display: none;
    border: 1px solid #ccc;
    border-top: none;
  }

  /* donation table */
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td,
  #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #customers tr:hover {
    background-color: #ddd;
  }

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #568D61;
    color: white;
  }

  .th1 {
    height: 50px;
    background-color: #222923;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    border-radius: 5px;
  }

  .th1 span {
    display: flex;
    position: relative;
    padding: 8px;
  }

  #td3 {
    margin-left: 20px;
    width: 80px;
    height: 80px;
    overflow: visible;
  }

  #td2 {
    margin-left: 20px;
  }

  #td1 {
    margin-right: 20px;
  }

  .dnt-outro {
    display: flex;
    width: 100%;
    max-height: 800px;
    padding: 10px;
    justify-content: center;
    margin-top: 40px;
  }

  .dnt-outro p {
    padding: 20px 10px;
    width: 80%;
    background-color: #FBFCF4;
    text-align: center;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    border-radius: 10px;
  }
</style>

<body>
  <div class="container" style="margin-top:120px;">
    <h1 style="text-align:center;font-size:40px">Contact Volunteers</h1>

    <div class="sectionDnt">

      <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Gallery')">Dhaka</button>
        <button class="tablinks" onclick="openTab(event, 'Feedback')">Chittagong</button>
        <button class="tablinks" onclick="openTab(event, 'Others')">Others</button>
      </div>

      <div id="Gallery" class="tabcontent">

        <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Dhaka</strong></h2>

        <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>1. Aziz Rahman </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Banani </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +880171864349</span></p>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>2. Karim Ahmed </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Uttara sector-5 </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801603473629</span></p>
          </div>
          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>3. Shams Shakil </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Dhanmandi road 5/A </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801605477880</span></p>
          </div>
        </div>

        <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>4. Aditya Rahman</strong></span></p>
            <p class="font_8"><span style="color: #000000;">Khilgaon </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801621569841</span></p>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>5. Shishir Ahmed </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Shegunbagicha </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801974092754</span></p>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>6. Sakib Sheikh </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Mirpur DOHS </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801738546941</span></p>
          </div>

        </div>
      </div>

      <div id="Feedback" class="tabcontent">

        <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Chattogram</strong></h2>

        <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>1. Shabit </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801937564031</span></p>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>2. Musa Akanda </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Patenga </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801746028552</span></p>
          </div>
          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>3. Atik Islam </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801846920563</span></p>
          </div>
        </div>

      </div>

      <div id="Others" class="tabcontent">

        <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Mymensingh</strong></h2>

        <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>1. Sourav Shanto </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801935956304</span></p>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>3. Munia Akhter </strong></span></p>
            <p class="font_8"><span style="color: #000000;">BAU </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801602846734</span></p>
          </div>
        </div>

        <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Sylhet</strong></h2>

        <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>1. Afjal Boshu </strong></span></p>
            <p class="font_8"><span style="color: #000000;">SUST </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801932047523</span></p>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>2. Jinia Jenni </strong></span></p>
            <p class="font_8"><span style="color: #000000;">SAU </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801601946734</span></p>
          </div>
        </div>

        <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Khulna</strong></h2>

        <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>1. Imtiaz Mohammad </strong></span></p>
            <p class="font_8"><span style="color: #000000;">KUET </span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801931836745</span></p>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch">
            <p class="font_8"><span style="color: #000000;"><strong>2. Gazi Pantha </strong></span></p>
            <p class="font_8"><span style="color: #000000;">Phone: +8801609384645</span></p>
          </div>
        </div>

      </div>

    </div>
  </div>

  <main id="main" style="margin-top: 70px;">

    <!-- ======= Featured rescue ======= -->
    <section id="featured">

      <div class="container" data-aos="fade-up">


        <div class="swiper-container" style="box-shadow:none;background:transparent">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="fimg">
                <div class="fi-dbox">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <br>
                  <p style="margin-bottom:0;">Red vented Bulbul kid
                    We rescued a red-vented bulbul about a month ago. She is approximately
                    1 month 20 days old. She is quite healthy and happy but she preens a
                    scratches her feathers and fur and cleans some form of transparent white film.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </div><img src="assets/img/resq/1.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="fimg">
                <div class="fi-dbox">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <br>
                  <p style="margin-bottom:0;">This Juvenile Indian Pond Heron/Striated Heron
                    was found (with its thigh skin missing, unable to stand or fly) by us and then
                    rescued from its cruel handler.
                    The leg was treated and its being looked-after/fed before release. </p>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </div><img src="assets/img/resq/2.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="fimg">
                <div class="fi-dbox">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <br>
                  <p style="margin-bottom:0;">Successfully rescued from a net on January 2021. It's an
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


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <p class="dnt-intro">
          Fastest way to contact rescue team is via <strong>Phone call</strong> using the
          number given below or
          <br> you can chat with <strong>LiveChat</strong> using the chat icon at the bottom-right
          corner of the page.<br> If it's not emergency, you can also drop an email. Sending
          message by filling the form below is same as sending email.
        </p>

        <div class="row mt-5" style="flex-direction:column;align-items:center;justify-content:center;">

          <div style="display:flex;flex-direction:row!important;">
            <div class="info1">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A1/218, Baridhara, Dhaka, Bangladesh</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>bdbirds@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+880 1234 567 890</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form id="contact-form" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject (optional)">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Sending</div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button type="submit" name="send">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
</body>

<script>
  // Function to show the first tab content when the page is loaded
  window.addEventListener('DOMContentLoaded', function() {
    // Get the first tab content and button
    var firstTabContent = document.getElementsByClassName('tabcontent')[0];
    var firstTabButton = document.getElementsByClassName('tablinks')[0];

    // Display the first tab content
    firstTabContent.style.display = 'block';

    // Add the 'active' class to the first tab button
    firstTabButton.className += ' active';
  });

  // Function to handle tab button clicks
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName('tabcontent');
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = 'none';
    }
    tablinks = document.getElementsByClassName('tablinks');
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(' active', '');
    }
    document.getElementById(tabName).style.display = 'block';
    evt.currentTarget.className += ' active';
  }
</script>

@endsection