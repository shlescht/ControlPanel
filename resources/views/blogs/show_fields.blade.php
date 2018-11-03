
<section class="col-md-12">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
      <meta name="author" content="WowThemez">

      <title>Cryptocoin || Currency Html5 Template</title>

  <link rel="shortcut icon" type="image/x-icon" href="http://www.sircoin.cc/img/favicon.png">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="http://www.sircoin.cc/css/bootstrap.min.css">
      <!-- animate CSS -->
      <link rel="stylesheet" href="http://www.sircoin.cc/css/animate.min.css">
      <!-- Nivo Slider CSS -->
      <link rel="stylesheet" href="http://localhost:8000/css/main.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="http://www.sircoin.cc/css/responsive.css">

      <script src="http://www.sircoin.cc/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body>
      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

      <div id='preloader' >
          <div class='loader' >
              <img src="http://www.sircoin.cc/img/preloader.gif" width="50" alt="">
          </div>
      </div><!-- Preloader -->

      <header id="header" class="header_section bd-bottom">
          <div class="top_header">
              <div class="container">
                  <div class="top_content_wrap row">
                      <div class="col-sm-8">
                          <ul class="left_info">
                              <li><a href="#"><i class="ti-email"></i>{!! $blog->email !!}</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="bottom_header">
             <div class="container">
                 <div class="bottom_content_wrap row">
                     <div class="col-sm-4">
                        <a href="#"><img src="http://www.sircoin.cc/img/logo.png" alt="Brand" width="211" height="50"></a>
                     </div>
                 </div>
             </div>
          </div>
      </header><!-- Header Section -->
      <!-- Ticker -->

      <section class="page_header padding" style="background-image: url( {!! 'http://localhost:8000/img/blogs/'.md5($blog->Title).'/'.$blog->img_1 !!} );">
          <div class="display-table">
              <div class="table-cell">
                  <div class="container">
                     <div class="page_content">
                         <h2>Latest <span>News</span></h2>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active">News</li>
                          </ol>
                     </div>
                  </div>
              </div>
          </div>
      </section><!-- Page Header -->

      <section id="news" class="blog_section bd-bottom padding">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 sm-padding">
                      <div class="blog_wrapper">
                          <div class="blog_single">
                              <img class="mb-20" src="{!! 'http://localhost:8000/img/blogs/'.md5($blog->Title).'/'.$blog->img_2 !!}" width="800" height="500" alt="image">
                              <h2 class="mb-15">{!! $blog->Title !!}</h2>
                              <div class="meta-info mb-25">
                                  <span>
                                      <i class="ti-user"></i> Autor <a href="#">{!! $blog->p_name . ' ' . $blog->ap_pa . ' ' . $blog->ap_ma !!}</a>
                                  </span>
                                  <span>
                                      <i class="ti-bookmark"></i> Creado <a href="#">{!! $blog->created_at !!}</a>
                                  </span>
                                  </span>
                                  <span>
                                      <i class="ti-bookmark"></i> Actualizado <a href="#">{!! $blog->updated_at !!}</a>
                                  </span>
                              </div><!-- Meta Info -->
                              <p>{{ $blog->bBody }}</p>
                              <div class="share_wrap">
                                  <h4>Share This Article</h4>
                                  <ul class="share_icon">
                                      <li><a href="#"><i class="ti-facebook"></i> Facebook</a></li>
                                      <li><a href="#"><i class="ti-twitter"></i> Twitter</a></li>
                                      <li><a href="#"><i class="ti-google"></i> Google+</a></li>
                                  </ul>
                              </div><!-- Share Wrap -->
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 sm-padding">
                      <div class="sidebar_box">
                          <div class="sidebar_widget mb-30">
                              <h3 class="mb-20">Search</h3>
                              <form action="" class="search-form">
                                  <input type="text" class="form-control" placeholder="Type here">
                                  <button class="search-btn" type="button"><i class="ti-search"></i></button>
                              </form>
                          </div><!-- widget 1 -->
                          <div class="sidebar_widget mb-30">
                              <h3 class="mb-20">Category</h3>
                              <ul class="cat_list">
                                  <li><a href="#">Wed Design</a></li>
                                  <li><a href="#">Graphics Design</a></li>
                                  <li><a href="#">Wordpress</a></li>
                                  <li><a href="#">Joomla</a></li>
                                  <li><a href="#">Marketing</a></li>
                              </ul>
                          </div><!-- widget 2 -->
                          <div class="sidebar_widget mb-30">
                              <h3 class="mb-20">Recent Post</h3>
                              <ul class="recent_post">
                                  <li class="mb-10">
                                      <h4><a href="#">This Is Recent Post From Blog.</a></h4>
                                      <span class="fz-13 text-grey">September 23, 2015</span>
                                  </li>
                                  <li class="mb-10">
                                      <h4><a href="#">This Is Recent Post From Blog.</a></h4>
                                      <span class="fz-13 text-grey">September 23, 2015</span>
                                  </li>
                                  <li class="mb-10">
                                      <h4><a href="#">This Is Recent Post From Blog.</a></h4>
                                      <span class="fz-13 text-grey">September 23, 2015</span>
                                  </li>
                              </ul>
                          </div><!-- widget 3 -->
                          <div class="sidebar_widget mb-30">
                              <h3 class="mb-20">Tags</h3>
                              <ul class="tag_list">
                                  <li><a href="#">Business</a></li>
                                  <li><a href="#">Photography</a></li>
                                  <li><a href="#">Startup</a></li>
                                  <li><a href="#">Environment</a></li>
                                  <li><a href="#">Life</a></li>
                                  <li><a href="#">Tech</a></li>
                                  <li><a href="#">Interface</a></li>
                                  <li><a href="#">Tourism</a></li>
                              </ul>
                          </div><!-- widget 3 -->
                      </div>
                  </div>
              </div>
          </div>
      </section><!-- /.blog_section -->

      <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

      <!-- jQuery Lib -->
      <script src="http://www.sircoin.cc/js/vendor/jquery-1.12.4.min.js"></script>

      <!-- Main JS -->
      <script src="http://www.sircoin.cc/js/main.js"></script>

      </body>
</section>
