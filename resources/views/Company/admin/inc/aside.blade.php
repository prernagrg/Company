
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->
  
          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="/" class="app-brand-link">
                <span class="app-brand-logo demo">
                 
                </span>
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Company</span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item active">
                <a href="/admin/dashboard" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>
  
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">File Manager</span>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Account Settings">Files</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Files.create')}}" class="menu-link">
                      <div data-i18n="Account">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Files.index')}}" class="menu-link">
                      <div data-i18n="Notifications">Index</div>
                    </a>
                  </li>
                 
                </ul>
              </li>
           
             
              <!-- Components -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Pages</span></li>
             
              <!-- User interface -->
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Carousel</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Carousel.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Carousel.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">About</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('About.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('About.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Team</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Team.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Team.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Testimonials</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Testimonials.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Testimonials.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Skills</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Skills.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Skills.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Services</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Services.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Services.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Features</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Feature.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Feature.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Client</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Client.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Client.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">App</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('App.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('App.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Card</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Card.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Card.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Web</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Web.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Web.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Pricing</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Pricing.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Pricing.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">FAQS</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Faqs.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Faqs.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Portfolio image</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Portfolio_img.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Portfolio_img.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Portfolio Details</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Portfolio_details.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Portfolio_details.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface"> Blogs</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Blogs.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Blogs.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface"> Blog-single</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Blog_single.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Blog_single.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface"> Comments</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Comments.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Comments.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface"> Comment Replies</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Cmnt_rly.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Cmnt_rly.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface"> Recent Posts</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Recent_posts.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Recent_posts.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
             
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div data-i18n="User interface">Settings</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{route('Settings.create')}}" class="menu-link">
                      <div data-i18n="Accordion">Create</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{route('Settings.index')}}" class="menu-link">
                      <div data-i18n="Alerts">Index</div>
                    </a>
                  </li>
                </ul>
              </li>
  
              
  
            </ul>
          </aside>
          <!-- / Menu -->
  
          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->