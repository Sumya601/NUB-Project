@extends('frontend.layouts.main')

@section('main-container')

  <main id="main">

<!-- ======= features Section ======= -->
<section id="features1" class="features1">
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row gy-4 d-flex">

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <i class="bi bi-command color-red"></i>
            <h4>Aves</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="bi bi-box-seam color-indigo"></i>
            <h4> Archaeornithes</h4>
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <i class="bi bi-command color-red"></i>
            <h4>Neornithes</h4>
          </a>
        </li><!-- End Tab 4 Nav -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Aves</h3>
              <p class="fst-italic">
                All Birds belong to Aves class. The Aves belong to the phylum Chordata of the animal kingdom. It has about 9,000 species. 
                Aves are adapted to fly. They show courtship, parental care, nest building, and territorial behaviour.
              <br>
              <br>
              <br>
              <strong>Characteristics of Aves</strong>
            </p>
              <ul>
                <li><i class="bi bi-chevron-right"></i> Birds are warm-blooded animals.</li>
                <li><i class="bi bi-chevron-right"></i> Their forelimbs are modified into wings.</li>
                <li><i class="bi bi-chevron-right"></i> They have well-developed flight muscles that help during the flight.</li>
                <li><i class="bi bi-chevron-right"></i> Their hind limbs are adapted for walking, hopping, perching, grasping, wading and swimming.</li>
                <li><i class="bi bi-chevron-right"></i> There are epidermal scales on their legs.</li>
                <li><i class="bi bi-chevron-right"></i> The endoskeleton is bony with long hollow bones filled with air cavities. known as pneumatic bones.</li>
                <li><i class="bi bi-chevron-right"></i> Their spindle-shaped body minimizes resistance of the wind.</li>
                <li><i class="bi bi-chevron-right"></i> The feathers help in preventing heat loss and reduce air friction by providing passage to the air.</li>
                <li><i class="bi bi-chevron-right"></i> There is no skin gland except the oil gland.</li>
                <li><i class="bi bi-chevron-right"></i> The lower and upper and jaws are modified into a beak.</li>
                <li><i class="bi bi-chevron-right"></i> They have no teeth.</li>
                <li><i class="bi bi-chevron-right"></i> They have sharp eyesight.</li>
                <li><i class="bi bi-chevron-right"></i> The alimentary canal has a crop and a gizzard. The crops help in softening food, and the gizzard helps in crushing the food.</li>
                <li><i class="bi bi-chevron-right"></i> Pigeons and other seed-eating birds lack a gall bladder.</li>
                <li><i class="bi bi-chevron-right"></i> They have spongy and elastic lungs for respiration.</li>
                <li><i class="bi bi-chevron-right"></i> The special vocal organ called syrinx is present at the base of trachea.</li>
                <li><i class="bi bi-chevron-right"></i> Their heart is four-chambered.</li>
                <li><i class="bi bi-chevron-right"></i> RBCs are oval, nucleated and biconvex.</li>
                <li><i class="bi bi-chevron-right"></i> 12 pairs of cranial nerves are present.</li>
                <li><i class="bi bi-chevron-right"></i> They have a single ovary and oviduct on the left side</li>
                <li><i class="bi bi-chevron-right"></i> All the birds are oviparous and exhibit sexual dimorphism. The eggs have four embryonic membranes- amnion, chorion,  allantois, and yolk sac.</li>
            </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/features-1.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane" id="tab-2">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Archaeornithes</h3>
              <p>
                Informations will be available soon...
              </p>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-2.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 2 -->


        <div class="tab-pane" id="tab-4">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Neornithes</h3>
              <p>
                Informations will be available soon...
              </p>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-4.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 4 -->
      </div>

    </div>
  </section><!-- End Features Section -->

  @endsection