@extends('layouts.main')
@section('container')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
     
        <div class="d-flex justify-content-between align-items-center">
        
          <h2>Portfolio</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
           
                  <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-app">App</li>
                      <li data-filter=".filter-card">Card</li>
                      <li data-filter=".filter-web">Web</li>
                  </ul>
          
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          @foreach ($apps as $app)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('uploads/'. $app->img)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$app->title}}</h4>
              <p>{{$app->sub_title}}</p>
              <a href="{{asset('uploads/'. $app->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach

          @foreach ($webs as $web )
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('uploads/' . $web->img)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$web->title}}</h4>
              <p>{{$web->sub_title}}</p>
              <a href="{{asset('uploads/' . $web->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          @endforeach
         
          @foreach ($cards as $card )
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('uploads/' . $card->img)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$card->title}}</h4>
              <p>{{$card->sub_title}}</p>
              <a href="{{asset('uploads/' . $card->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="/portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach
          
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection