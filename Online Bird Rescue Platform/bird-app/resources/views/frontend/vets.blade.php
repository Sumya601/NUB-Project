@extends('frontend.layouts.main')

@section('main-container')

<style>
  .sectionDnt {
      font-family: 'Poppins', sans-serif;
      margin-top: 89px;
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

    #td3{
      margin-left: 20px;
      width: 80px;
      height: 80px;
      overflow: visible;
    }

    #td2{
      margin-left: 20px;
    }

    #td1{
      margin-right: 20px;
    }

    .dnt-outro{
      display:flex;
      width: 100%;
      max-height: 800px;
      padding: 10px;
      justify-content: center;
      margin-top: 40px;
    }

    .dnt-outro p{
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
<h1 style="text-align:center;font-size:40px">Find Vets</h1>

<div class="sectionDnt">

  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Donation')">All</button>
    <button class="tablinks" onclick="openTab(event, 'Gallery')">Dhaka</button>
    <button class="tablinks" onclick="openTab(event, 'Feedback')">Chittagong</button>
    <button class="tablinks" onclick="openTab(event, 'Sylhet')">Sylhet</button>
    <button class="tablinks" onclick="openTab(event, 'Mymensingh')">Mymensingh</button>
    <button class="tablinks" onclick="openTab(event, 'Others')">Others</button>
  </div>

  <div id="Donation" class="tabcontent">

  <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Dhaka</strong></h2>

    <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
    <p class="font_8"><span style="color: #000000;"><strong>01. Obhoyaronno &#8211; Bangladesh Animal Welfare Foundation, Dhaka </strong></span></p>
<p class="font_8"><span style="color: #000000;">Location: Mohakhali DNCC Market</span></p>
<p class="font_8"><span style="color: #000000;">​Dhaka , Bangladesh </span></p>
<p class="font_8"><span style="color: #000000;">Phone: +8801718643497 or inbox.</span></p>
<p class="font_8"><span style="color: #000000;">Facebook Account:</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>02. .Dr. Md. Luthfor Rahman: </strong></span></p>
<p class="font_8"><span style="color: #000000;">Veterinary Surgeon,</span></p>
<p class="font_8"><span style="color: #000000;">Central Veterinary Hospital, Dhaka.</span></p>
<p class="font_8"><span style="color: #000000;">Cell # 01552457085, 01731492093</span></p>
<p class="font_8"><span style="color: #000000;">Residene: Nikunja-2, Khilkhet, Dhaka.</span></p>
<p class="font_8"><span style="color: #000000;">He attends house Calls.</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>03 . PAW Life Care:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Vet Md. Shaddam Patwary</span></p>
<p class="font_8"><span style="color: #000000;">Address: 1/12, Block-G, Lalmatia, Dhaka, Bangladesh</span></p>
<p class="font_8"><span style="color: #000000;">Phone: +8801909617994</span></p>
<p class="font_8"><span style="color: #000000;">Clinic hours: 9AM to 11AM and 4PM to 8PM</span></p>
</div>

  </div>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>04.Vet and Pet care</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dr. K. B. M. Saiful Islam</span></p>
<p class="font_8"><span style="color: #000000;">Address: House# 68/10,</span></p>
<p class="font_8"><span style="color: #000000;">Europa International School Lane, </span></p>
<p class="font_8"><span style="color: #000000;">Zigatola Post Office Road,</span></p>
<p class="font_8"><span style="color: #000000;">Dhanmondi, Dhaka, Bangladesh.</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01835666696 </span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>05. Dr. Kazi Mujibur Rahman:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Chief vet,Central Veterinary Hospital,Dhaka</span></p>
<p class="font_8"><span style="color: #000000;">Phone 01715016218</span></p>
<p class="font_8"><span style="color: #000000;">Has a clinic in Bashundhara</span></p>
<p class="font_8"><span style="color: #000000;">Residential Area</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>06. Dr.Siamak :</strong></span></p>
<p class="font_8"><span style="color: #000000;">Address: H- 56,</span></p>
<p class="font_8"><span style="color: #000000;">R- 9/B, Sector: 5, Uttara.</span></p>
<p class="font_8"><span style="color: #000000;">Phone      8917249; </span></p>
<p class="font_8"><span style="color: #000000;">                 01711561155</span></p>
</div>
  </div>

  <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>07. Dr.Azmat Ali and</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dr. Chowdhury Sultana Sabrina: </span></p>
<p class="font_8"><span style="color: #000000;"><strong>Address </strong></span></p>
<p class="font_8"><span style="color: #000000;"><strong>Gulshan Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Gulshan Pet-Animal Clinic</span></p>
<p class="font_8"><span style="color: #000000;">A-Z Pet Animal Solution, </span></p>
<p class="font_8"><span style="color: #000000;">4-5 DCC Super MarketGulshan-2, Dhaka-1212</span></p>
<p class="font_8"><span style="color: #000000;">Visiting Hours: Call the vet before going</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 9883486,</span></p>
<p class="font_8"><span style="color: #000000;">              01912-013615,</span></p>
<p class="font_8"><span style="color: #000000;">              01715-078434</span></p>
  </div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong> Dr.Azmat Ali and</strong></span></p>
<p class="font_8"><span style="color: #000000;"><strong>Khilkhet Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">9, Eastern Shopping Complex,</span></p>
<p class="font_8"><span style="color: #000000;">Pink City Xenovalley Model Town,</span></p>
<p class="font_8"><span style="color: #000000;">300 Feet Road, Khilkhet, Dhaka</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01715078434,</span></p>
<p class="font_8"><span style="color: #000000;">              01701666151,</span></p>
<p class="font_8"><span style="color: #000000;">              01981890948</span></p>
<p class="font_8"><span style="color: #000000;">He attends House calls</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>08. Dr. Motahar Hossain: </strong></span></p>
<p class="font_8"><span style="color: #000000;">Enlisted vet of USA embassy </span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711541070 </span></p>
<p class="font_8"><span style="color: #000000;">              01971541070 </span></p>
<p class="font_8"><span style="color: #000000;">Gulshan 2 Dcc Market, 2nd floor. </span></p>
<p class="font_8"><span style="color: #000000;">Visitng House : 10/11 to 2pm</span></p>
<p class="font_8"><span style="color: #000000;">Call the vet before Coming</span></p>
<p class="font_8"><span style="color: #000000;">He attends house calls.</span></p>
</div>

</div>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>01. CFP (Care for Paws):</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone no. 01635817270</span></p>
<p class="font_8"><span style="color: #000000;">                   01635817271</span></p>
<p class="font_8"><span style="color: #000000;">                   01635817272</span></p>
<p class="font_8"><span class="wixGuard" style="color: #000000;">​</span></p>
<p class="font_8"><span style="color: #000000;"><strong>Banani Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">23/10, Banani 2no. Road,</span></p>
<p class="font_8"><span style="color: #000000;">near Baitun-Nur Jamey Masjid</span></p>
<p>&nbsp;</p>
<p class="font_8"><span style="color: #000000;"><strong>Dhanmondi Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">House no. 68/3C,Europa school lane, Zigatola Post Office Road, Dhanmondi.Go to Google Map and search &#8220;Care For Paws&#8221; for direction.</span></p>
  </div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>02. DR. Mir Md. Afzal Hossain</strong></span></p>
<p class="font_8"><span style="color: #000000;">Veterinary Surgeon,</span></p>
<p class="font_8"><span style="color: #000000;">DVM (CVASU), MS(Surgery) </span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01635817270 </span></p>
<p class="font_8"><span style="color: #000000;">              01635817271</span></p>
<p class="font_8"><span style="color: #000000;">              01635817272 </span></p>

</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>03. Animal Care Bangladesh</strong></span></p>
<p class="font_8"><span style="color: #000000;">to RobinHood the animal rescuer</span></p>
<p class="font_8"><span style="color: #000000;">Phoe: 01763672169</span></p>
<p class="font_8"><span style="color: #000000;">           01622444069 </span></p>
<p class="font_8"><span class="wixGuard" style="color: #000000;">​</span></p>
</div>

</div>

<h2 style="margin: 30px 0 !important;font-size:30px"><strong>Chittagong</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>01. Chittagong Veterinary and Animal Science University:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Address: Zakir Hossain Road,</span></p>
<p class="font_8"><span style="color: #000000;">Khulshi. Chittagong-4202</span></p>
<p class="font_8"><span style="color: #000000;">Website: <a style="color: #000000;" href="http://cvasu.ac.bd/" target="_blank" rel="nofollow noopener">Click here</a></span></p>
<p class="font_8"><span style="color: #000000;">Phone 031-659492 </span></p>
<p class="font_8"><span style="color: #000000;">              88-031-659153 </span></p>
<p class="font_8"><span style="color: #000000;">              88-031-659154 </span></p>
<p class="font_8"><span style="color: #000000;">              88-031-659093 </span></p>
  </div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>02. Dr. Bibek Chandra:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone 01711057533 (Sutradhar)</span></p>

<div class="col-lg-4 col-md-6 align-items-stretch" style="margin-top:15px;">
<p class="font_8"><span style="color: #000000;"><strong>04. Dr. Morshed</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone 01192046813</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch" style="margin-top:15px;">
<p class="font_8"><span style="color: #000000;"><strong>03. Dr.Monowar Sayeed:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone 01736930901 (Pallab)</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch" style="margin-top:15px;">
<p class="font_8"><span style="color: #000000;"><strong>05. Dr. Farhad</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711172139</span></p>
</div>

</div>


<h2 style="margin: 30px 0 !important;font-size:30px"><strong>Sylhet</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>01. Dr. A T M Mahbub E Elahi</strong></span></p>
<p class="font_8"><span style="color: #000000;">Professor</span></p>
<p class="font_8"><span style="color: #000000;">Dept of Microbiology, SAU</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711301042</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>02. Dr. Syed Sayem Uddin Ahmed</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dept of Public Health</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01947706956</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>03. DR. Animesh Roy</strong></span></p>
<p class="font_8"><span style="color: #000000;">VS, SAU Vet Clinics</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01717896167</span></p>
  </div>

  </div>

  <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>04. DR. Mahbub</strong></span></p>
<p class="font_8"><span style="color: #000000;">VS, District Vet. Hospital, Sylhet</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711287533 </span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>05. Dr. Rofiqul Islam</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dept of Medicine, SAU</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01199008496</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>06. Dr. MD Siddiqul Islam</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dept of Pharmacology, SAU</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711148450</span></p>
  </div>

  </div>

  <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Mymensingh</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>10. Dr. Md. Karim Uddin</strong></span></p>
<p class="font_8"><span style="color: #000000;">Additional Veterinary Surgeon,</span></p>
<p class="font_8"><span style="color: #000000;">Dhaka Metro.</span></p>
<p class="font_8"><span style="color: #000000;">Emergency Centre for Transboundary Animal Diseases(ECTAD)</span></p>
<p class="font_8"><span style="color: #000000;">Food and Agriculture Organization of the United Nations</span></p>
<p class="font_8"><span style="color: #000000;">Bangladesh</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01814287986</span></p>
<p class="font_7"><span style="color: #000000;">Mymensing</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>01. Mymensing Iron Hide Vet</strong></span></p>
<p class="font_8"><span style="color: #000000;">Layla Yeasmin</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01774477688</span></p>
<p class="font_8"><span style="color: #000000;">Mymensingh Vet Hospital </span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>02. Md. Abdul Kader</strong></span></p>
<p class="font_8"><span style="color: #000000;">Contact person: Doctor Md. Neon </span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01717610621 </span></p>
<p class="font_8"><span style="color: #000000;">Address: 133D, AHH,</span></p>
<p class="font_8"><span style="color: #000000;">BAU, Mymensingh-2202,</span></p>
<p class="font_8"><span style="color: #000000;">Mymensingh, Bangladesh, 2202 </span></p>
  </div>

  </div>


  <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>04. Current affiliation:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Assistant professor of microbiology,</span></p>
<p class="font_8"><span style="color: #000000;">Department of Microbiology and Hygiene,</span></p>
<p class="font_8"><span style="color: #000000;">Faculty of Veterinary Science,</span></p>
<p class="font_8"><span style="color: #000000;"><a href="https://www.bau.edu.bd/">Bangladesh Agricultural University</a>,</span></p>
<p class="font_8"><span style="color: #000000;">Mymensingh-2202, Bangladesh. </span></p>
  </div>

  </div>


  <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Khulna</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>Dr. Abdullah-Al-Mujahid:</strong></span></p>
<p class="font_8"><span style="color: #000000;">(Ex vet. of Obhoyaronno)</span></p>
<p class="font_8"><span style="color: #000000;">Research Officer,</span></p>
<p class="font_8"><span style="color: #000000;">Disease Monitoring, WildTeam.</span></p>
<p class="font_8"><span style="color: #000000;">Sonadanga R/A, Phase-2,Sonadanga,Khulna.</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01715728760</span></p>
  </div>

  </div>

  <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Barishal</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<p class="font_8"><span style="color: #000000;"><strong>Veterinary Care</strong></span></p>
<p class="font_8"><span style="color: #000000;">Address:</span></p>
<p class="font_8"><span style="color: #000000;">Kehya Ghat to Bus stand Rd, Banaripara Union, Bangladesh</span></p>
<p class="font_8"><span style="color: #000000;">Phone: +880 1919-555734 </span></p>

  </div>

  <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Kishoreganj</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;">Kishoreganj Veterinary Hospital</span></p>
<p class="font_8"><span style="color: #000000;">Bottrish, Bhairab Rd, Kishoreganj </span></p>
  </div>

  </div>


  </div>
  </div>


  


  <div id="Gallery" class="tabcontent">


    <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 align-items-stretch">
    <p class="font_8"><span style="color: #000000;"><strong>01. Obhoyaronno &#8211; Bangladesh Animal Welfare Foundation, Dhaka </strong></span></p>
<p class="font_8"><span style="color: #000000;">Location: Mohakhali DNCC Market</span></p>
<p class="font_8"><span style="color: #000000;">​Dhaka , Bangladesh </span></p>
<p class="font_8"><span style="color: #000000;">Phone: +8801718643497 or inbox.</span></p>
<p class="font_8"><span style="color: #000000;">Facebook Account:</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>02. .Dr. Md. Luthfor Rahman: </strong></span></p>
<p class="font_8"><span style="color: #000000;">Veterinary Surgeon,</span></p>
<p class="font_8"><span style="color: #000000;">Central Veterinary Hospital, Dhaka.</span></p>
<p class="font_8"><span style="color: #000000;">Cell # 01552457085, 01731492093</span></p>
<p class="font_8"><span style="color: #000000;">Residene: Nikunja-2, Khilkhet, Dhaka.</span></p>
<p class="font_8"><span style="color: #000000;">He attends house Calls.</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>03 . PAW Life Care:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Vet Md. Shaddam Patwary</span></p>
<p class="font_8"><span style="color: #000000;">Address: 1/12, Block-G, Lalmatia, Dhaka, Bangladesh</span></p>
<p class="font_8"><span style="color: #000000;">Phone: +8801909617994</span></p>
<p class="font_8"><span style="color: #000000;">Clinic hours: 9AM to 11AM and 4PM to 8PM</span></p>
</div>

  </div>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>04.Vet and Pet care</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dr. K. B. M. Saiful Islam</span></p>
<p class="font_8"><span style="color: #000000;">Address: House# 68/10,</span></p>
<p class="font_8"><span style="color: #000000;">Europa International School Lane, </span></p>
<p class="font_8"><span style="color: #000000;">Zigatola Post Office Road,</span></p>
<p class="font_8"><span style="color: #000000;">Dhanmondi, Dhaka, Bangladesh.</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01835666696 </span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>05. Dr. Kazi Mujibur Rahman:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Chief vet,Central Veterinary Hospital,Dhaka</span></p>
<p class="font_8"><span style="color: #000000;">Phone 01715016218</span></p>
<p class="font_8"><span style="color: #000000;">Has a clinic in Bashundhara</span></p>
<p class="font_8"><span style="color: #000000;">Residential Area</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>06. Dr.Siamak :</strong></span></p>
<p class="font_8"><span style="color: #000000;">Address: H- 56,</span></p>
<p class="font_8"><span style="color: #000000;">R- 9/B, Sector: 5, Uttara.</span></p>
<p class="font_8"><span style="color: #000000;">Phone      8917249; </span></p>
<p class="font_8"><span style="color: #000000;">                 01711561155</span></p>
</div>
  </div>

  <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>07. Dr.Azmat Ali and</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dr. Chowdhury Sultana Sabrina: </span></p>
<p class="font_8"><span style="color: #000000;"><strong>Address </strong></span></p>
<p class="font_8"><span style="color: #000000;"><strong>Gulshan Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Gulshan Pet-Animal Clinic</span></p>
<p class="font_8"><span style="color: #000000;">A-Z Pet Animal Solution, </span></p>
<p class="font_8"><span style="color: #000000;">4-5 DCC Super MarketGulshan-2, Dhaka-1212</span></p>
<p class="font_8"><span style="color: #000000;">Visiting Hours: Call the vet before going</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 9883486,</span></p>
<p class="font_8"><span style="color: #000000;">              01912-013615,</span></p>
<p class="font_8"><span style="color: #000000;">              01715-078434</span></p>
  </div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong> Dr.Azmat Ali and</strong></span></p>
<p class="font_8"><span style="color: #000000;"><strong>Khilkhet Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">9, Eastern Shopping Complex,</span></p>
<p class="font_8"><span style="color: #000000;">Pink City Xenovalley Model Town,</span></p>
<p class="font_8"><span style="color: #000000;">300 Feet Road, Khilkhet, Dhaka</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01715078434,</span></p>
<p class="font_8"><span style="color: #000000;">              01701666151,</span></p>
<p class="font_8"><span style="color: #000000;">              01981890948</span></p>
<p class="font_8"><span style="color: #000000;">He attends House calls</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>08. Dr. Motahar Hossain: </strong></span></p>
<p class="font_8"><span style="color: #000000;">Enlisted vet of USA embassy </span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711541070 </span></p>
<p class="font_8"><span style="color: #000000;">              01971541070 </span></p>
<p class="font_8"><span style="color: #000000;">Gulshan 2 Dcc Market, 2nd floor. </span></p>
<p class="font_8"><span style="color: #000000;">Visitng House : 10/11 to 2pm</span></p>
<p class="font_8"><span style="color: #000000;">Call the vet before Coming</span></p>
<p class="font_8"><span style="color: #000000;">He attends house calls.</span></p>
</div>

</div>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>01. CFP (Care for Paws):</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone no. 01635817270</span></p>
<p class="font_8"><span style="color: #000000;">                   01635817271</span></p>
<p class="font_8"><span style="color: #000000;">                   01635817272</span></p>
<p class="font_8"><span class="wixGuard" style="color: #000000;">​</span></p>
<p class="font_8"><span style="color: #000000;"><strong>Banani Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">23/10, Banani 2no. Road,</span></p>
<p class="font_8"><span style="color: #000000;">near Baitun-Nur Jamey Masjid</span></p>
<p>&nbsp;</p>
<p class="font_8"><span style="color: #000000;"><strong>Dhanmondi Branch:</strong></span></p>
<p class="font_8"><span style="color: #000000;">House no. 68/3C,Europa school lane, Zigatola Post Office Road, Dhanmondi.Go to Google Map and search &#8220;Care For Paws&#8221; for direction.</span></p>
  </div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>02. DR. Mir Md. Afzal Hossain</strong></span></p>
<p class="font_8"><span style="color: #000000;">Veterinary Surgeon,</span></p>
<p class="font_8"><span style="color: #000000;">DVM (CVASU), MS(Surgery) </span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01635817270 </span></p>
<p class="font_8"><span style="color: #000000;">              01635817271</span></p>
<p class="font_8"><span style="color: #000000;">              01635817272 </span></p>

</div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>03. Animal Care Bangladesh</strong></span></p>
<p class="font_8"><span style="color: #000000;">to RobinHood the animal rescuer</span></p>
<p class="font_8"><span style="color: #000000;">Phoe: 01763672169</span></p>
<p class="font_8"><span style="color: #000000;">           01622444069 </span></p>
<p class="font_8"><span class="wixGuard" style="color: #000000;">​</span></p>
</div>

</div>

</div>
  </div>

  <div id="Feedback" class="tabcontent">

    
    <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>01. Chittagong Veterinary and Animal Science University:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Address: Zakir Hossain Road,</span></p>
<p class="font_8"><span style="color: #000000;">Khulshi. Chittagong-4202</span></p>
<p class="font_8"><span style="color: #000000;">Website: <a style="color: #000000;" href="http://cvasu.ac.bd/" target="_blank" rel="nofollow noopener">Click here</a></span></p>
<p class="font_8"><span style="color: #000000;">Phone 031-659492 </span></p>
<p class="font_8"><span style="color: #000000;">              88-031-659153 </span></p>
<p class="font_8"><span style="color: #000000;">              88-031-659154 </span></p>
<p class="font_8"><span style="color: #000000;">              88-031-659093 </span></p>
  </div>

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>02. Dr. Bibek Chandra:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone 01711057533 (Sutradhar)</span></p>

<div class="col-lg-4 col-md-6 align-items-stretch" style="margin-top:15px;">
<p class="font_8"><span style="color: #000000;"><strong>04. Dr. Morshed</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone 01192046813</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch" style="margin-top:15px;">
<p class="font_8"><span style="color: #000000;"><strong>03. Dr.Monowar Sayeed:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone 01736930901 (Pallab)</span></p>
</div>

<div class="col-lg-4 col-md-6 align-items-stretch" style="margin-top:15px;">
<p class="font_8"><span style="color: #000000;"><strong>05. Dr. Farhad</strong></span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711172139</span></p>
</div>

</div>

</div>
  </div>


  <div id="Sylhet" class="tabcontent">

    
    <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>01. Dr. A T M Mahbub E Elahi</strong></span></p>
<p class="font_8"><span style="color: #000000;">Professor</span></p>
<p class="font_8"><span style="color: #000000;">Dept of Microbiology, SAU</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711301042</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>02. Dr. Syed Sayem Uddin Ahmed</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dept of Public Health</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01947706956</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>03. DR. Animesh Roy</strong></span></p>
<p class="font_8"><span style="color: #000000;">VS, SAU Vet Clinics</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01717896167</span></p>
  </div>

  </div>

  <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>04. DR. Mahbub</strong></span></p>
<p class="font_8"><span style="color: #000000;">VS, District Vet. Hospital, Sylhet</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711287533 </span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>05. Dr. Rofiqul Islam</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dept of Medicine, SAU</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01199008496</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>06. Dr. MD Siddiqul Islam</strong></span></p>
<p class="font_8"><span style="color: #000000;">Dept of Pharmacology, SAU</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01711148450</span></p>
  </div>

  </div>


  </div>


<div id="Mymensingh" class="tabcontent">

    
    <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>10. Dr. Md. Karim Uddin</strong></span></p>
<p class="font_8"><span style="color: #000000;">Additional Veterinary Surgeon,</span></p>
<p class="font_8"><span style="color: #000000;">Dhaka Metro.</span></p>
<p class="font_8"><span style="color: #000000;">Emergency Centre for Transboundary Animal Diseases(ECTAD)</span></p>
<p class="font_8"><span style="color: #000000;">Food and Agriculture Organization of the United Nations</span></p>
<p class="font_8"><span style="color: #000000;">Bangladesh</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01814287986</span></p>
<p class="font_7"><span style="color: #000000;">Mymensing</span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>01. Mymensing Iron Hide Vet</strong></span></p>
<p class="font_8"><span style="color: #000000;">Layla Yeasmin</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01774477688</span></p>
<p class="font_8"><span style="color: #000000;">Mymensingh Vet Hospital </span></p>
  </div>

  <div class="col-lg-4 col-md-6 align-items-stretch">
  <p class="font_8"><span style="color: #000000;"><strong>02. Md. Abdul Kader</strong></span></p>
<p class="font_8"><span style="color: #000000;">Contact person: Doctor Md. Neon </span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01717610621 </span></p>
<p class="font_8"><span style="color: #000000;">Address: 133D, AHH,</span></p>
<p class="font_8"><span style="color: #000000;">BAU, Mymensingh-2202,</span></p>
<p class="font_8"><span style="color: #000000;">Mymensingh, Bangladesh, 2202 </span></p>
  </div>

  </div>


  <div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>04. Current affiliation:</strong></span></p>
<p class="font_8"><span style="color: #000000;">Assistant professor of microbiology,</span></p>
<p class="font_8"><span style="color: #000000;">Department of Microbiology and Hygiene,</span></p>
<p class="font_8"><span style="color: #000000;">Faculty of Veterinary Science,</span></p>
<p class="font_8"><span style="color: #000000;"><a href="https://www.bau.edu.bd/">Bangladesh Agricultural University</a>,</span></p>
<p class="font_8"><span style="color: #000000;">Mymensingh-2202, Bangladesh. </span></p>
  </div>

  </div>


  </div>

  <div id="Others" class="tabcontent">

    
    <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Khulna</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;"><strong>Dr. Abdullah-Al-Mujahid:</strong></span></p>
<p class="font_8"><span style="color: #000000;">(Ex vet. of Obhoyaronno)</span></p>
<p class="font_8"><span style="color: #000000;">Research Officer,</span></p>
<p class="font_8"><span style="color: #000000;">Disease Monitoring, WildTeam.</span></p>
<p class="font_8"><span style="color: #000000;">Sonadanga R/A, Phase-2,Sonadanga,Khulna.</span></p>
<p class="font_8"><span style="color: #000000;">Phone: 01715728760</span></p>
  </div>

  </div>

  <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Barishal</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<p class="font_8"><span style="color: #000000;"><strong>Veterinary Care</strong></span></p>
<p class="font_8"><span style="color: #000000;">Address:</span></p>
<p class="font_8"><span style="color: #000000;">Kehya Ghat to Bus stand Rd, Banaripara Union, Bangladesh</span></p>
<p class="font_8"><span style="color: #000000;">Phone: +880 1919-555734 </span></p>

  </div>

  <h2 style="margin: 30px 0 !important;font-size:30px"><strong>Kishoreganj</strong></h2>

<div class="row" style="margin-bottom:40px;" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 align-items-stretch">
<p class="font_8"><span style="color: #000000;">Kishoreganj Veterinary Hospital</span></p>
<p class="font_8"><span style="color: #000000;">Bottrish, Bhairab Rd, Kishoreganj </span></p>
  </div>

  </div>


  </div>
</div>


</div>
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