
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
                              <li><a href="#"><i class="ti-email"></i></a></li>
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

      <section class="page_header padding" style="background-image: url( {!! !isset($blog->Title)?'http://www.sircoin.cc/img/page-header-background.jpg':'http://localhost:8000/img/blogs/'.md5($blog->Title).'/'.$blog->img_1 !!} );">
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
                              <img class="mb-20" src="{!! !isset($blog->Title)?'http://www.sircoin.cc/img/blog-single.jpg':'http://localhost:8000/img/blogs/'.md5($blog->Title).'/'.$blog->img_2 !!}" width="800" height="500" alt="image">
                              <h2 class="mb-15">{!! Form::text('Title', null, ['class' => 'form-control', 'placeholder' => 'Titulo']) !!}</h2>
                              <div class="meta-info mb-25">
                                  <span>
                                      <i class="ti-user"></i> Autor <b>{!! !isset($blog->p_name)? Auth::user()->name : $blog->p_name . ' ' . $blog->ap_pa . ' ' . $blog->ap_ma !!}</b>
                                  </span>
                                  <span>
                                      <i class="ti-bookmark"></i> Creado <b>{!! !isset($blog->p_name)?'00-00-0000':$blog->created_at !!}</b>
                                  </span>
                                  <span>
                                      <i class="ti-bookmark"></i> Actualizado <b>{!! !isset($blog->p_name)?'00-00-0000':$blog->updated_at !!}</b>
                                  </span>
                              </div><!-- Meta Info -->
                              <p>
                                <div class="form-group col-sm-12 col-lg-12">
                                    {!! Form::label('bBody', 'Contenido:') !!}
                                    {!! Form::textarea('bBody', null, ['class' => 'form-control','rows' => 4, 'cols' => 54]) !!}
                                </div>
                              </p>
                              <div class="share_wrap">
                                  <h4>Acciones</h4>
                                  <ul class="share_icon">
                                      <li>{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}</li>
                                      <li><a href="{!! route('blogs.index') !!}" class="btn btn-info">Cancel</a></li>
                                      <li>
                                        @if(Auth::user()->role == "Blogger")
                                          {!! $blog->acepted?'Aceptado':'En espera' !!}
                                        @elseif(Auth::user()->role == "Admin" || Auth::user()->role == "dev")
                                          <a href="{!! url('blogs/'.$blog->IDBg.'/change') !!}"
                                            onclick="return confirm('{!! !$blog->acepted ? 'Aceptar' : 'Rechazar' !!} blog no guarda los cambios ¿Est&aacute; seguro?')"
                                            class='btn {!! !$blog->acepted ? "btn-success" : "btn-warning" !!}  btn-xs'>
                                            {!! !$blog->acepted ? 'Aceptar' : 'Rechazar' !!}
                                          </a>
                                        @endif
                                      </li>
                                  </ul>
                              </div><!-- Share Wrap -->
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 sm-padding">
                      <div class="sidebar_box">
                          <div class="sidebar_widget mb-30">
                              <h3 class="mb-20">Imagenes</h3>
                              <ul class="cat_list">
                                  <li><a>
                                  {!! Form::label('img_1', 'Banner (1500 x 596):') !!}
                                  {!! Form::file('img_1', null, ['class' => 'form-control']) !!}</a></li>
                                  <li><a>
                                    {!! Form::label('img_2', 'Imagen de T&iacute;tulo (800 x 500):') !!}
                                    {!! Form::file('img_2', null, ['class' => 'form-control']) !!}
                                  </a></li>
                                  <li><a>
                                  {!! Form::label('img_3', 'Imagen del Grid (400 x 250):') !!}
                                  {!! Form::file('img_3', null, ['class' => 'form-control']) !!}</a></li>
                              </ul>
                          </div><!-- widget 2 -->
                          <div class="sidebar_widget mb-30">
                              <h3 class="mb-20">Comentarios del administrador</h3>
                              <ul class="recent_post">
                                  <li class="mb-10">
                                      <h4><a>{!! !isset($blog->p_name)?form::hidden('note', '&nbsp;'):$blog->note !!}</a></h4>
                                  </li>
                              </ul>
                          </div><!-- widget 3 -->
                          <div class="sidebar_widget mb-30">
                              <h3 class="mb-20">Acciones</h3>
                              <ul class="tag_list">
                                  <li>
                                      {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                </li>
                                  <li><a href="{!! route('blogs.index') !!}" class="btn btn-info">Cancel</a></li>
                                  <li>
                                    @if(Auth::user()->role == "Blogger")
                                      {!! $blog->acepted?'Aceptado':'En espera' !!}
                                    @elseif(Auth::user()->role == "Admin" || Auth::user()->role == "dev")
                                      <a href="{!! url('blogs/'.$blog->IDBg.'/change') !!}"
                                        onclick="return confirm('{!! !$blog->acepted ? 'Aceptar' : 'Rechazar' !!} blog no guarda los cambios ¿Est&aacute; seguro?')"
                                        class='btn {!! !$blog->acepted ? "btn-success" : "btn-warning" !!}  btn-xs'>
                                        {!! !$blog->acepted ? 'Aceptar' : 'Rechazar' !!}
                                      </a>
                                    @endif
                                  </li>
                              </ul>
                          </div><!-- widget 3 -->
                      </div>
                  </div>
              </div>
          </div>
      </section><!-- /.blog_section -->

      <!-- jQuery Lib -->
      <script src="http://www.sircoin.cc/js/vendor/jquery-1.12.4.min.js"></script>

      <!-- Main JS -->
      <script src="http://www.sircoin.cc/js/main.js"></script>

      </body>
</section>

<!-- ----------------------------------------------------------------------- -->

<!-- Submit Field -->


<!-- Acepted Field -->
    {!! Form::hidden('acepted', '0') !!}

<!-- Acepted Field -->
<div class="form-group col-sm-6">

</div>
