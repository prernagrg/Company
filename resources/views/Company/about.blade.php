@extends('layouts.main')
@section('container')


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>{{$about->title}}</h2>
          <h3>{{$about->subtitle}}</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <p>
           {{$about->description}}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Our <strong>Team</strong></h2>
      </div>

      <div class="row">
       @foreach ($teams as $team)
           
       <div class="col-lg-3 col-md-6 h-50 d-flex align-items-stretch">
         <div class="member " data-aos="fade-up">
           <div class="member-img ">
             <img src="{{asset('uploads/'. $team->img)}}" style="height: 300px; width:300px" class="img-fluid" alt="">
             <div class="social">
               <a href=""><i class="bi bi-twitter"></i></a>
               <a href=""><i class="bi bi-facebook"></i></a>
               <a href=""><i class="bi bi-instagram"></i></a>
               <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{$team->name}}</h4>
              <span>{{$team->position}}</span>
            </div>
          </div>
        </div>
        
        
        @endforeach
      </div>

    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Our Skills Section ======= -->
  <section id="skills" class="skills">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Our <strong>Skills</strong></h2>
      </div>

      <div class="row skills-content">
        @foreach ($skills as $skill)
            
        <div class="col-lg-6" data-aos="fade-up">
          
          <div class="progress">
            <span class="skill">{{$skill->language}} <i class="val">{{$skill->percent}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percent}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          
          
        </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Our Skills Section -->

  <!-- ======= Our Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Clients</h2>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Our Clients Section -->

</main><!-- End #main -->


@endsection