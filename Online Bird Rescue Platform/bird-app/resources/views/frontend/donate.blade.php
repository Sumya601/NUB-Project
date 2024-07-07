@extends('frontend.layouts.main')

@section('main-container')

<style>

  .containerDnt {
  position: relative;
  padding: 16px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* The Modal (background) */
.modalDnt {
  display: none; /* Hidden by default */
  position: relative; /* Stay in place */
  z-index: 1; /* Sit on top */
  position: fixed;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  backdrop-filter: blur(5px);
}

.clearfix {
  font-family: "Poppins", sans-serif;
}

.proDnt, .regDnt {
  float: left;
  width: 50%;
  height: 200px;
  font-size: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.proDnt:hover {
  background-color: #50B060;
  color: white;
  box-shadow: 0px 1px 5px 0.1px rgba(0, 0, 0, 0.656);
}
.proDnt:hover + .regDnt, .regDnt:hover + .proDnt {
  filter: contrast(0.5);
}
.regDnt:hover{
  background-color: #50ADAC;
  color: white;
  box-shadow: 0px 1px 5px 0.1px rgba(0, 0, 0, 0.656);
}


.proDnt {
  background-color: #66BF75;
  color: white;
  border-radius: 15px 0 0 15px;
}

/* Add a color to the delete button */
.regDnt {
  background-color: #63B7B6;
  color: white;
  border-radius: 0 15px 15px 0;
}

.closeDnt {
  position: absolute;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
  transform: translate(-130%, -20%);
}

.closeDnt:hover,
.closeDnt:focus {
  color: #f44336;
  cursor: pointer;
}
  </style>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style="background:transparent;color:rgb(74, 74, 74);" data-aos="fade-in">
      <div class="container">
        <h2>Donate</h2>
        <p>Be a part in our venture to save Birds in Bangladesh. Step Forward and Donate </p>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= donate Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <p class="dnt-intro">BD Birds are a non-profitable organization. 
          We are volunteering to protect Bird habitats in Bangladesh. 
          <br>We have an active bird-rescue team in Dhaka who will respond
          to your call in need of a rescue.
           <br>All the funds we collect directly go to <strong>rescuing birds, 
          treatment after rescues and making bird feeders at places near homes and streets.</strong> 
          <br>We spend much from our account, yet every donation helps. We will be able to spend 
          more with the help of your donation. So come forward.
          <br>
          <br>
          If you have any question, use LiveChat.</p>

          @if (Route::has('login'))
          @auth
        <div class="row">

      <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="box">
            <div style="display:flex;justify-content:center;">
                <h4><sup>&#2547;</sup></h4><h4 name="dnt" id="donateB">100</h4>
            </div>
            <div class="btn-wrap">
            <a id="donatebtnB" href="javascript:void(0);" class="btn-buy" onclick="processDonations()">Donate</a>
            </div>
        </div>
      </div>

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div style="display:flex;justify-content:center;">
              <h4><sup>&#2547;</sup></h4><h4 name="dnt" id="donateC">500</h4>
            </div>
              <div class="btn-wrap">
              <a id="donatebtnC" href="javascript:void(0);" class="btn-buy" onclick="processDonationss()">Donate</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div style="display:flex;justify-content:center;">
              <h4><sup>&#2547;</sup></h4><h4 name="dnt" id="donateD">1000</h4>
            </div>
              <div class="btn-wrap">
              <a id="donatebtnD" href="javascript:void(0);" class="btn-buy" onclick="processDonationsss()">Donate</a>
              </div>
            </div>
          </div>

          <div class="box1">
            <h4>Donate an amount<span></span></h4>
              <div class="dnt-amount">
                <h4><sup>&#2547;</sup></h4>
                  <input id="donateA" type="number" name="dnt" min="0" required>
              </div>
          <div class="btn-wrap">
          <a id="donatebtn" href="javascript:void(0);" class="btn-buy" onclick="processDonation()">Donate</a>
        </div>
        </div>

        </div>

      </div>
      
      @else
      <div class="row">

      <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="box">
            <div style="display:flex;justify-content:center;">
                <h4><sup>&#2547;</sup></h4><h4 name="dnt" id="donateB">100</h4>
            </div>
            <div class="btn-wrap">
            <button class="btn-buy" 
            onclick="document.getElementById('idDnt2').style.display='block'">Donate
            </button>
            </div>
        </div>
      </div>

    <div id="idDnt2" class="modalDnt">
    <div class="containerDnt">
      <div class="clearfix">
      <a id="donatebtnB" href="javascript:void(0);" class="proDnt" onclick="processDonations()">Proceed without a Profile</a>
      <a href="{{ route('register') }}" class="regDnt">Create a Profile</a>
    <span onclick="document.getElementById('idDnt2').style.display='none'" class="closeDnt"
    title="Close Modal">×</span>
      </div>
    </div>
    </div>

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div style="display:flex;justify-content:center;">
              <h4><sup>&#2547;</sup></h4><h4 name="dnt" id="donateC">500</h4>
            </div>
              <div class="btn-wrap">
              <button class="btn-buy" 
            onclick="document.getElementById('idDnt3').style.display='block'">Donate
            </button>
              </div>
            </div>
          </div>

          <div id="idDnt3" class="modalDnt">
    <div class="containerDnt">
      <div class="clearfix">
      <a id="donatebtnC" href="javascript:void(0);" class="proDnt" onclick="processDonationss()">Proceed without a Profile</a>
      <a href="{{ route('register') }}" class="regDnt">Create a Profile</a>
    <span onclick="document.getElementById('idDnt3').style.display='none'" class="closeDnt"
    title="Close Modal">×</span>
      </div>
    </div>
    </div>

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div style="display:flex;justify-content:center;">
              <h4><sup>&#2547;</sup></h4><h4 name="dnt" id="donateD">1000</h4>
            </div>
              <div class="btn-wrap">
              <button class="btn-buy" 
            onclick="document.getElementById('idDnt4').style.display='block'">Donate
            </button>
              </div>
            </div>
          </div>

          <div id="idDnt4" class="modalDnt">
    <div class="containerDnt">
      <div class="clearfix">
      <a id="donatebtnD" href="javascript:void(0);" class="proDnt" onclick="processDonationsss()">Proceed without a Profile</a>
      <a href="{{ route('register') }}" class="regDnt">Create a Profile</a>
    <span onclick="document.getElementById('idDnt4').style.display='none'" class="closeDnt"
    title="Close Modal">×</span>
      </div>
    </div>
    </div>

          <div class="box1">
            <h4>Donate an amount<span></span></h4>
              <div class="dnt-amount">
                <h4><sup>&#2547;</sup></h4>
                  <input id="donateA" type="number" name="dnt" min="0" required>
              </div>
          <div class="btn-wrap">
          <button class="btn-buy" 
            onclick="document.getElementById('idDnt').style.display='block'">Donate
            </button>
        </div>
        </div>
        </div>

      <div id="idDnt" class="modalDnt">
    <div class="containerDnt">
      <div class="clearfix">
      <a id="donatebtn" href="javascript:void(0);" class="proDnt" onclick="processDonation()">Proceed without a Profile</a>
      <a href="{{ route('register') }}" class="regDnt">Create a Profile</a>
    <span onclick="document.getElementById('idDnt').style.display='none'" class="closeDnt"
    title="Close Modal">×</span>
      </div>
    </div>
    </div>

      @endauth
      @endif 
      </div>
    </section><!-- End Pricing Section -->

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


    <script>
    function processDonation() {
        const donateInput = document.getElementById("donateA");
        const dntValue = donateInput.value;
        const donateBtn = document.getElementById("donatebtn");
        if (dntValue > 0) {
            donateBtn.href = `{{ route('exampleHosted') }}?dnt=${dntValue}`;
        }
    }
    </script>

<script>
    function processDonations() {
        const donateInput = document.getElementById("donateB");
        const dntValue = donateInput.textContent;
        const donateBtn = document.getElementById("donatebtnB");
        if (dntValue > 0) {
            donateBtn.href = `{{ route('exampleHosted') }}?dnt=${dntValue}`;
        }
    }
    </script>

<script>
    function processDonationss() {
        const donateInput = document.getElementById("donateC");
        const dntValue = donateInput.textContent;
        const donateBtn = document.getElementById("donatebtnC");
        if (dntValue > 0) {
            donateBtn.href = `{{ route('exampleHosted') }}?dnt=${dntValue}`;
        }
    }
    </script>



<script>
    function processDonationsss() {
        const donateInput = document.getElementById("donateD");
        const dntValue = donateInput.textContent;
        const donateBtn = document.getElementById("donatebtnD");
        if (dntValue > 0) {
            donateBtn.href = `{{ route('exampleHosted') }}?dnt=${dntValue}`;
        }
    }
    </script>


@endsection