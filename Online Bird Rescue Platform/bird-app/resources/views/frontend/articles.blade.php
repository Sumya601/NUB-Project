@extends('frontend.layouts.main')

@section('main-container')

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Articles</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Articles</h2>
          <!--SEARCH BAR-->
    <div class="searchcontainer">
      <div class="searchInput">
        <a href="" target="_blank" hidden></a>
        <input class="sinput"  type="text" placeholder="birds, diseases...">
        <div class="resultBox">
          <!-- here list are inserted from javascript -->
        </div>
        <div class="searchicon"><i class="fas fa-search"></i></div>
      </div>
    </div>
    <!--SEARCH BAR ENDS-->
          <p></p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img id="imgav1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/aves1.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>en</h4>
                </div>

                <h3><a href="{{url('/science')}}">Bird Science</a></h3>
                <p>All Birds belong to Aves class. The Aves belong to the phylum 
                  Chordata of the animal kingdom. It has about 9,000 species ....
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img id="imgdo1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/doel1.jpg" class="img-fluid" alt="...">
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
              <img id="imgds1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/ds2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>en</h4>
                </div>

                <h3><a href="{{url('/ds2')}}">Parrot Fever (Psittacosis)</a></h3>
                <p><span lang="bn">Parrot fever is a rare infection caused by Chlamydia psittaci, 
                  a specific type of bacteria. 
                  The infection is also known as parrot disease and psittacosis. ...</span></p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->
          
        </div>
          <br>
          <br>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img id="imgsh1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/shalik1.jpg" class="img-fluid" alt="...">
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
              <img id="imgpa1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/tiya1.jpg" class="img-fluid" alt="...">
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

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img id="imgds3" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/ds3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>en</h4>
                </div>

                <h3><a href="{{url('/ds3')}}">Common Pet Bird Diseases and Solutions</a></h3>
                <p><span lang="en">Birds can be enjoyable pets and loyal companions, but it can be 
            distressing when your feathered friend shows signs of illness and 
            isn't its usual chirpy self ...</span></p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>
        <br>
        <br>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img id="imgki1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/kf1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>en</h4>
                </div>

                <h3><a href="{{url('/kingfisher1')}}">Kingfisher <span lang="bn">(মাছরাঙ্গা)</a></h3>
                <p>Kingfishers are a family, the Alcedinidae, of small to medium-sized, 
                  brightly colored birds in the order Coraciiformes. ...
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img id="imgwo1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/woodp2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>bn</h4>
                </div>

                <h3><a href="{{url('/woodpecker1')}}"><span lang="bn">বাংলা কাঠঠোকরা (Black-rumped flameback)</span></a></h3>
                <p><span lang="bn">বাংলা কাঠঠোকরা (বৈজ্ঞানিক নাম: Dinopium benghalense) Picidae (পিসিডি) 
                  গোত্র বা পরিবারের অন্তর্গত Dinopium (ডাইনোপিয়াম) গণের অন্তর্ভুক্ত এক প্রজাতির অতি পরিচিত পাখি । ...</span></p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img id="imgsp1" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/sparrow1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>bn</h4>
                </div>

                <h3><a href="{{url('/sparrow1')}}"><span lang="bn">পাতি চড়ুই (House sparrow)</span></a></h3>
                <p><span lang="bn">পাতি চড়ুই (বৈজ্ঞানিক নাম: Passer domesticus) বা চড়াই Passeridae (প্যাসারিডি) গোত্র বা 
                  পরিবারের অন্তর্গত Passer (প্যাসার) গণের অন্তর্ভুক্ত ২৫টি প্রজাতির একটি। 
                  অ্যান্টার্কটিকা বাদে সব মহাদেশেই এ পাখিটি কমবেশি দেখা যায়। ...</span></p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>
        <br>
        <br>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img id="imgds2" style="aspect-ratio: 1.5 / 1;" src="assets/img/artcles/ds1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h4>bn</h4>
                </div>

                <h3><a href="{{url('/sdiseases')}}">মানুষের মধ্যে সংক্রমণযোগ্য পাখির কিছু রোগ</a></h3>
                <p>যে কেউ পাখি পালন করে, পোষা প্রাণী বা উৎপাদন প্রাণী হিসাবে, তাদের সচেতন হওয়া 
                  উচিত যে কিছু এভিয়ান রোগগুলি জুনোটিক , অর্থাৎ, সেগুলি মানুষের মধ্যে সংক্রমণ হতে ...
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->   

        </div>

      </div>
    </section><!-- End Courses Section -->

<script>
/* SEARCH BAR */

let suggestions = [
    "magpie Oriental magpie-robin দোয়েল জাতীয় পাখি Copsychus saularis doel",
    "ভাত শালিক common myna Acridotheres tristis moyna ময়না shalik",
    "সবুজ টিয়া tiya Rose-ringed parakeet green parrot Psittacula krameri",
    "Common Pet Bird Diseases and Solutions সংক্রমণযোগ্য পাখির রোগ প্রতিকার cure রোগ প্রতিরোধ Parrot Fever Parrot Wasting Syndrome Psittacine Beak and Feather Disease Polyomavirus Candidiasis Giardiosis Goiters Pacheco's Disease",
    "Kingfisher মাছরাঙ্গা মাছ Alcedo atthis",
    "বাংলা কাঠঠোকরা Bengali Woodpecker Black-rumped flameback Dinopium benghalense",
    "পাতি চড়ুই চড়ুই House sparrow Passer domesticus",
    "মানুষের মধ্যে সংক্রমণযোগ্য পাখির কিছু রোগ cure প্রতিকার রোগ প্রতিরোধ AVIAN INFLUENZA বার্ড ফ্লু CHLAMYDIOSIS ক্ল্যামিডিওসিস SALMONELLOSIS সালমোনেলোসিস COLIBACILLOSIS কোলিবাসিলোসিস ENCEPHALITIS VIRUSES এনসেফালাইটিস ভাইরাস AVIAN TUBERCULOSIS এভিয়ান যক্ষ্মা bird disease",
    "Parrot Fever Psittacosis টিয়া জ্বর",  
];

// getting all required elements
const searchInput = document.querySelector(".searchInput");
const input = searchInput.querySelector(".sinput");
const resultBox = searchInput.querySelector(".resultBox");
const icon = searchInput.querySelector(".searchicon");
let linkTag = searchInput.querySelector("a");
let webLink;

// if user press any key and release
input.onkeyup = (e) => {
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if (userData) {
        icon.onclick = () => {
            webLink = `https://www.google.com/search?q=${userData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        if (userData.length >= 1) {
            emptyArray = suggestions.filter((data) => {
                //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
        }
        if (userData.length >= 3) {
            emptyArray = suggestions.filter((data) => {
                //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase()) || data.toLocaleLowerCase().includes(userData.toLocaleLowerCase());
            });
        }
        emptyArray = emptyArray.map((data) => {
            // passing return data inside li tag
            
            if (data === "magpie Oriental magpie-robin দোয়েল জাতীয় পাখি Copsychus saularis doel") {
                let srimg = document.getElementById('imgdo1').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/doel1')}}">Oriental magpie-robin (দোয়েল)<br><p>en</p></a></div></li>`;
            }
            if (data === "ভাত শালিক common myna Acridotheres tristis moyna ময়না shalik") {
                let srimg = document.getElementById('imgsh1').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/shalik1')}}">ভাত শালিক (common myna)<br><p>bn</p></a></div></li>`;
            }
            if (data === "সবুজ টিয়া tiya Rose-ringed parakeet green parrot Psittacula krameri") {
                let srimg = document.getElementById('imgpa1').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/tiya1')}}">সবুজ টিয়া (Rose-ringed parakeet)<br><p>bn</p></a></div></li>`;
            }
            if (data === "Common Pet Bird Diseases and Solutions সংক্রমণযোগ্য পাখির রোগ প্রতিকার cure রোগ প্রতিরোধ Parrot Fever Parrot Wasting Syndrome Psittacine Beak and Feather Disease Polyomavirus Candidiasis Giardiosis Goiters Pacheco's Disease") {
                let srimg = document.getElementById('imgds3').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/ds3')}}">Common Pet Bird Diseases and Solutions<br><p>en</p></a></div></li>`;
            }
            if (data === "Kingfisher মাছরাঙ্গা মাছ Alcedo atthis") {
                let srimg = document.getElementById('imgki1').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/kingfisher1')}}">Kingfisher (মাছরাঙ্গা)<br><p>en</p></a></div></li>`;
            }
            if (data === "বাংলা কাঠঠোকরা Bengali Woodpecker Black-rumped flameback Dinopium benghalense") {
                let srimg = document.getElementById('imgwo1').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/woodpecker1')}}">বাংলা কাঠঠোকরা (Black-rumped flameback)<br><p>bn</p></a></div></li>`;
            }
            if (data === "পাতি চড়ুই চড়ুই House sparrow Passer domesticus") {
                let srimg = document.getElementById('imgsp1').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/sparrow1')}}">পাতি চড়ুই (House sparrow)<br><p>bn</p></a></div></li>`;
            }
            if (data === "মানুষের মধ্যে সংক্রমণযোগ্য পাখির কিছু রোগ cure প্রতিকার রোগ প্রতিরোধ AVIAN INFLUENZA বার্ড ফ্লু CHLAMYDIOSIS ক্ল্যামিডিওসিস SALMONELLOSIS সালমোনেলোসিস COLIBACILLOSIS কোলিবাসিলোসিস ENCEPHALITIS VIRUSES এনসেফালাইটিস ভাইরাস AVIAN TUBERCULOSIS এভিয়ান যক্ষ্মা bird disease") {
                let srimg = document.getElementById('imgds2').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/ds2')}}">মানুষের মধ্যে সংক্রমণযোগ্য পাখির কিছু রোগ<br><p>bn</p></a></div></li>`;
            }
            if (data === "Parrot Fever Psittacosis টিয়া জ্বর") {
                let srimg = document.getElementById('imgds1').src;
                return data = `<li><div class="srLi"><img class="imgPs" src="${srimg}">
                <a class="srA" href="{{url('/ds1')}}">Parrot Fever (Psittacosis)<br><p>en</p></a></div></li>`;
            }
            else {
                return data = `<li><a href="https://www.google.com/search?q=${data}">${data}</a></li>`;
            }
        });
        searchInput.classList.add("sactive"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = resultBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].click();
        }
    } else {
        searchInput.classList.remove("sactive"); //hide autocomplete box
    }

    document.addEventListener("click", function (event) {
        if (!searchInput.contains(event.target)) {
            searchInput.classList.remove("sactive");
        }
    });

}

function select(element) {
    let selectData = element.textContent;
    input.value = selectData;
    icon.onclick = () => {
        webLink = `https://www.google.com/search?q=${selectData}`;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchInput.classList.remove("sactive");
}

function showSuggestions(list) {
    let listData;
    if (!list.length) {
        userValue = input.value;
        listData = '';
    } 
    
    else {
        listData = list.map((data) => {
            let index = data.toLowerCase().indexOf(input.value.toLowerCase());
            let matchedString = data.substring(index, index + input.value.length);
            
            return `${data}`;
        });
        listData = listData.join('');
    }
    resultBox.innerHTML = listData;
}

</script>

    @endsection