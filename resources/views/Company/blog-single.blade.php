@extends('layouts.main')
@section('container')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog Single</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li>Blog Single</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src="{{asset('uploads/' . $blog->img)}}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="/blog_single">{{$blog->title}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog_single">{{$blog->name}}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/blog_single"><time datetime="2020-01-01">{{$blog->date}}</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="/blog_single">{{$blog->comment}} Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
              {{$blog->description}}
              </p>

              <blockquote>
                <p>
                  {{$blog_single->quote}}
                </p>
              </blockquote>

              <h3>{{$blog_single->title}}</h3>
              <p>
               {{$blog_single->description}}
              </p>
              <img src="{{asset('uploads/'. $blog_single->img)}}" class="img-fluid" alt="">

            </div>

            <div class="entry-footer">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="#">Business</a></li>
              </ul>

              <i class="bi bi-tags"></i>
              <ul class="tags">
                <li><a href="#">Creative</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div>

          </article><!-- End blog entry -->

          <div class="blog-author d-flex align-items-center">
            <img class="circle" src="{{asset('uploads/' . $testimonial->img)}}" class="rounded-circle float-left" alt="">
            <div>
              <h4>{{$testimonial->name}}</h4>
              <div class="social-links">
                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
              </div>
              <p>
                {{$testimonial->description}}
              </p>
            </div>
          </div><!-- End blog author bio -->

          <div class="blog-comments">

            <h4 class="comments-count">8 Comments</h4>
            @foreach ($comments as $comment )              
            <div id="comment-2" class="comment">
              <div class="d-flex">
                <div class="comment-img"><img src="{{asset('uploads/' . $comment->img)}}" alt=""></div>
                <div>
                  <h5><a href="">{{$comment->name}}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                  <time datetime="2020-01-01">{{$comment->date}}</time>
                  <p>
                    {{$comment->description}}
                  </p>
                </div>
              </div>
              <div id="comment-reply-1" class="comment comment-reply">
                <div class="d-flex">
                  <div class="comment-img"><img src="{{asset('uploads/'.$cmnt_rlys->img)}}" alt=""></div>
                  <div>
                    <h5><a href="">{{$cmnt_rlys->name}}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">{{$cmnt_rlys->date}}</time>
                    <p>
                      {{$cmnt_rlys->description}}
                    </p>
                  </div>
                </div>
                
                
              </div><!-- End comment reply #1-->
            </div><!-- End comment #2-->
            
            @endforeach

            <div class="reply-form">
              <h4>Leave a Reply</h4>
              <p>Your email address will not be published. Required fields are marked * </p>
              <form action="">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>

              </form>

            </div>

          </div><!-- End blog comments -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              @foreach ($recent_posts as $recent_post )
                
              <div class="post-item clearfix">
                <img src="{{asset('uploads/' . $recent_post->img)}}" alt="">
                <h4><a href="blog-single.html">{{$recent_post->title}}</a></h4>
                <time datetime="2020-01-01">{{$recent_post->date}}</time>
              </div>
              
              @endforeach

            </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->



@endsection