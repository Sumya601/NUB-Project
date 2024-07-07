    <!--share image modal-->
    <div id="id02" class="modal1">
      <span onclick="modalClose()" class="close" title="Close Modal">&times;</span>
      <div class="modal-content">
        <div class="container1">
    
          <form id="contact-form" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            <div class="form-group mt-3" style="color: rgb(135, 135, 135);font-size: 14px;">
              <h1 style="color: #4dbf77;">Upload Bird Image</h1>
              <p><br>Attach a photo (required):</p>
              <input style="cursor:pointer;" type="file" name="photo" id="photo" required>
                <p>Attach more photo (optional):</p>
                <input style="cursor:pointer;" type="file" name="photo1" id="photo1">
                <input style="cursor:pointer;" type="file" name="photo2" id="photo2">
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject (Optional)">
            </div>
            <div class="form-group mt-3">
              <textarea type="text" class="form-control" name="message" rows="5"
                placeholder="Message (Optional)"></textarea>
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

    <!--share feedback-->
    <div id="id03" class="modal1">
      <span onclick="modalClose2()" class="close" title="Close Modal">&times;</span>
      <div class="modal-content2">
        <div class="container2">
    
          <form id="contact-form2" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            <div class="form-group mt-3" style="color: rgb(135, 135, 135);font-size: 14px;">
              <h1 style="color: #573b25;">Feedback</h1>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control form-control2" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control form-control2" name="email" id="email" placeholder="Your Email (Optional)">
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea type="text" class="form-control form-control2" name="message" rows="5"
                placeholder="Write feedback..." required></textarea>
            </div>
            <div class="my-3">
              <div id="loading" class="loading">Sending</div>
              <div id="error-message" class="error-message"></div>
              <div id="sent-message" class="sent-message"></div>
            </div>
            <div class="text-center"><button type="submit" name="send">Send Feedback</button></div>
          </form>
        </div>
      </div>
    </div>


      <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about')}}">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/articles')}}">Articles</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Contact</h4>
        <p style="color: rgb(117, 117, 117);">
          <strong>Phone:</strong> +880 1234 567 890<br>
          <strong>Email:</strong> bdbirds@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3 style="color: rgb(117, 117, 117);"><strong>BD Birds</strong></h3>
        <p>
          A1/218, Baridhara <br>
          Dhaka North, Dhaka <br>
          Bangladesh <br><br>
          
        </p>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>BD Birds</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
      Designed by Nobel</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://kit.fontawesome.com/f7a25bfa79.js" crossorigin="anonymous"></script>
<script src="forms/PHPemail.js"></script>
<script src="forms/PHPemail2.js"></script>
<script src="assets/js/heroM.js"></script>
<script src="assets/js/brdimg.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<style>
    .toast-success {
        height: 120px;
        width: 150px;
        margin-top: -5px !important;
        background-color: #FFFFFF !important;
        color: #536759 !important;
        font-size: 16px;
        padding: 10px;
        opacity: 1 !important;
        text-align: center !important;
    }

    #toast-container>.toast-success{
      background-image: none !important;
    }

    #toast-container>div{
      padding: 20px 40px !important;
    }
    
</style>

@if(Session::has('success'))
    <script>
        toastr.options = {
            closeButton: false,
            debug: false,
            newestOnTop: true,
            progressBar: false,
            positionClass: 'toast-top-center',
            preventDuplicates: false,
            onclick: null,
            showDuration: '300',
            hideDuration: '300',
            timeOut: '3000',
            extendedTimeOut: '2000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'slideDown',
            hideMethod: 'slideUp'
        };
        toastr.success('{{ Session::get('success') }}', 'Success');
    </script>
@endif

@if(Session::has('reg_success'))
    <script>
        toastr.success('{{ Session::get('reg_success') }}', 'Verify Email', {
          closeButton: false,
            debug: false,
            newestOnTop: true,
            progressBar: false,
            positionClass: 'toast-top-center',
            preventDuplicates: false,
            onclick: null,
            showDuration: '300',
            hideDuration: '300',
            timeOut: '5000',
            extendedTimeOut: '2000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'slideDown',
            hideMethod: 'slideUp'
        });
    </script>
@endif

@if(Session::has('success_pay'))
    <script>
        toastr.success('{{ Session::get('success_pay') }}', 'Thanks for Donation!', {
          closeButton: false,
            debug: false,
            newestOnTop: true,
            progressBar: false,
            positionClass: 'toast-top-center',
            preventDuplicates: false,
            onclick: null,
            showDuration: '300',
            hideDuration: '300',
            timeOut: '5000',
            extendedTimeOut: '2000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'slideDown',
            hideMethod: 'slideUp'
        });
    </script>
@endif

@if(Session::has('error_pay'))
    <script>
        toastr.success('{{ Session::get('error_pay') }}', 'Error!', {
          closeButton: false,
            debug: false,
            newestOnTop: true,
            progressBar: false,
            positionClass: 'toast-top-center',
            preventDuplicates: false,
            onclick: null,
            showDuration: '300',
            hideDuration: '300',
            timeOut: '5000',
            extendedTimeOut: '2000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'slideDown',
            hideMethod: 'slideUp'
        });
    </script>
@endif

@if(Session::has('fail_pay'))
    <script>
        toastr.success('{{ Session::get('fail_pay') }}', 'Failed!', {
          closeButton: false,
            debug: false,
            newestOnTop: true,
            progressBar: false,
            positionClass: 'toast-top-center',
            preventDuplicates: false,
            onclick: null,
            showDuration: '300',
            hideDuration: '300',
            timeOut: '5000',
            extendedTimeOut: '2000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'slideDown',
            hideMethod: 'slideUp'
        });
    </script>
@endif



<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Start of LiveChat (www.livechat.com) code -->
<script>
  window.__lc = window.__lc || {};
  window.__lc.license = 16573332;
  ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/16573332/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
