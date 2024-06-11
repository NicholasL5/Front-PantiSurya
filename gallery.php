<?php
include 'utils.php';

$db = new myDB();
$images = $db->getGambar();
// echo $images;
$path_pictures = [];

// Loop through the result and extract the path_picture values
foreach ($images as $item) {
    $path_pictures[] = $item['path_picture'];
}

$counter = 1;

// var_dump($path_pictures);

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Gallery - Rumah Usiawan Panti Surya</title>

    <link href="images/favicon.png" rel="shortcut icon" type="image/png" />
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72" />
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114" />
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144" />

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/css/javascript-plugins-bundle.css" rel="stylesheet" />

    <link href="assets/dist/js/menuzord/css/menuzord.css" rel="stylesheet" />

    <link href="assets/dist/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css" rel="stylesheet" type="text/css" />

    <link href="assets/dist/css/style-main.css" rel="stylesheet" type="text/css" />
    <link id="menuzord-menu-skins" href="assets/dist/js/menuzord/css/skins/menuzord-rounded-boxed.css" rel="stylesheet" />

    <link href="assets/dist/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="assets/dist/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css" />

    <script src="assets/dist/js/jquery.js"></script>
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/javascript-plugins-bundle.js"></script>
    <script src="assets/dist/js/menuzord/js/menuzord.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container-1340px">
    <div id="wrapper" class="clearfix">
      <!-- ================= HEADER ================= -->
      <header id="header" class="header header-layout-type-header-2rows">
        <div class="header-nav">
          <div class="header-nav-wrapper navbar-scrolltofixed green">
            <div class="menuzord-container header-nav-container green">
              <div class="container position-relative">
                <div class="row">
                  <div class="col">
                    <div class="row header-nav-col-row">
                      <div class="col-sm-auto align-self-center">
                        <a class="menuzord-brand site-brand" href="index.html">
                          <img class="logo-default logo-1x" src="images/logo-wide.png" alt="Logo" />
                          <img class="logo-default logo-2x retina" src="images/logo-wide%402x.png" alt="Logo" />
                        </a>
                      </div>
                      <div class="col-sm-auto ml-auto pr-0 align-self-center">
                        <nav id="top-primary-nav" class="menuzord green" data-effect="fade" data-animation="none" data-align="right">
                          <ul id="main-nav" class="menuzord-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="active"><a href="gallery.html">Gallery</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                    <div class="row d-block d-xl-none">
                      <div class="col-12">
                        <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                          <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable"></ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="main-content">
        <section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="images/bg/as02.jpg">
          <div class="container pt-90 pb-90">
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2 class="title text-white">Photo Gallery</h2>
                  <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                    <div class="breadcrumbs">
                      <span class="trail-item trail-begin">
                        <a href="#"><span>Home</span></a>
                      </span>
                      <span><i class="fa fa-angle-right"></i></span>
                      <span class="trail-item"
                        ><a href="#"><span>Pages</span></a></span
                      >
                      <span><i class="fa fa-angle-right"></i></span>
                      <span class="trail-item trail-end active text-theme-colored2">Gallery</span>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container pb-70">
            <div class="section-content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="tm-sc tm-sc-gallery tm-sc-gallery-masonry gallery-style1-simple">
                    <div class="isotope-layout masonry grid-3 gutter lightgallery-lightbox clearfix">
                      <div class="isotope-item isotope-item-sizer"></div>
                      <?php foreach ($path_pictures as $image): ?>
                        <?php
                          $imagePath = str_replace('../../Front-PantiSurya/', '', $image);
                          // echo $imagePath;
                        ?>
                        <div class="isotope-item wide helping home water">
                        <div class="tm-gallery box-hover-effect">
                          <div class="effect-wrapper">
                            <div class="thumb">
                            <img src="<?= $imagePath ?>" alt="Image" />
                              <div class="d-none">
                                <a href="#"></a>
                                <a href="#"></a>
                              </div>
                            </div>
                            <div class="overlay-shade shade-theme-colored2"></div>
                            <div class="text-holder text-holder-bottom-left">
                              <!-- <div class="title">Demo Gallery 1</div> -->
                            </div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                  <a class="lightgallery-trigger styled-icons-item" href="<?= $imagePath ?>" title="Gallery <?= $counter ?>" data-exthumbimage="<?= $imagePath ?>" data-src="<?= $imagePath ?>">
                                    <i class="fa fa-picture-o"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $counter++; 
                      endforeach; ?>

                      <!-- <div class="isotope-item wide helping home water">
                        <div class="tm-gallery box-hover-effect">
                          <div class="effect-wrapper">
                            <div class="thumb">
                              <img src="images/gallery/foto1.jpg" alt />
                              <div class="d-none">
                                <a href="#"></a>
                                <a href="#"></a>
                              </div>
                            </div>
                            <div class="overlay-shade shade-theme-colored2"></div>
                            <div class="text-holder text-holder-bottom-left">
                            </div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                  <a class="lightgallery-trigger styled-icons-item" href="images/gallery/foto1.jpg" title="Gallery 1" data-exthumbimage="images/gallery/foto1.jpg" data-src="images/gallery/foto1.jpg">
                                    <i class="fa fa-picture-o"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->

                      <!-- <div class="isotope-item forest water">
                        <div class="tm-gallery box-hover-effect">
                          <div class="effect-wrapper">
                            <div class="thumb">
                              <img src="images/gallery/6668177b8c7c9.jpg" alt />
                              <div class="d-none"></div>
                            </div>
                            <div class="overlay-shade shade-theme-colored1"></div>
                            <div class="text-holder text-holder-bottom-left">
                              <div class="title">Demo Gallery 2</div>
                            </div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <div class="styled-icons icon-dark icon-circled icon-theme-colored2">
                                  <a class="lightgallery-trigger styled-icons-item" href="images/gallery/6668177b8c7c9.jpg" title="Gallery 2" data-exthumbimage="images/gallery/foto2.jpg" data-src="images/gallery/foto2.jpg">
                                    <i class="fa fa-picture-o"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="isotope-item foods">
                        <div class="tm-gallery box-hover-effect">
                          <div class="effect-wrapper">
                            <div class="thumb">
                              <img src="images/gallery/foto3.jpg" alt />
                              <div class="d-none">
                                <a href="#"></a>
                                <a href="#"></a>
                              </div>
                            </div>
                            <div class="overlay-shade shade-theme-colored2"></div>
                            <div class="text-holder text-holder-bottom-left">
                              <div class="title">Demo Gallery 3</div>
                            </div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                  <a class="lightgallery-trigger styled-icons-item" href="images/gallery/foto3.jpg" title="Gallery 3" data-exthumbimage="images/gallery/foto3.jpg" data-src="images/gallery/foto3.jpg">
                                    <i class="fa fa-picture-o"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="isotope-item helping home">
                        <div class="tm-gallery box-hover-effect">
                          <div class="effect-wrapper">
                            <div class="thumb">
                              <img src="images/gallery/foto4.jpg" alt />
                              <div class="d-none"></div>
                            </div>
                            <div class="overlay-shade shade-theme-colored1"></div>
                            <div class="text-holder text-holder-bottom-left">
                              <div class="title">Demo Gallery 4</div>
                            </div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <div class="styled-icons icon-dark icon-circled icon-theme-colored2">
                                  <a class="lightgallery-trigger styled-icons-item" href="images/gallery/foto4.jpg" title="Gallery 4" data-exthumbimage="images/gallery/foto4.jpg" data-src="images/gallery/foto4.jpg">
                                    <i class="fa fa-picture-o"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="isotope-item helping home">
                        <div class="tm-gallery box-hover-effect">
                          <div class="effect-wrapper">
                            <div class="thumb">
                              <img src="images/gallery/foto5.jpg" alt />
                              <div class="d-none"></div>
                            </div>
                            <div class="overlay-shade shade-theme-colored2"></div>
                            <div class="text-holder text-holder-bottom-left">
                              <div class="title">Demo Gallery 5</div>
                            </div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                  <a class="lightgallery-trigger styled-icons-item" href="images/gallery/foto5.jpg" title="Gallery 5" data-exthumbimage="images/gallery/foto5.jpg" data-src="images/gallery/foto5.jpg">
                                    <i class="fa fa-picture-o"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="isotope-item charity foods">
                        <div class="tm-gallery box-hover-effect">
                          <div class="effect-wrapper">
                            <div class="thumb">
                              <img src="images/gallery/foto6.jpg" alt />
                              <div class="d-none">
                                <a href="#"></a>
                                <a href="#"></a>
                              </div>
                            </div>
                            <div class="overlay-shade shade-theme-colored1"></div>
                            <div class="text-holder text-holder-bottom-left">
                              <div class="title">Demo Gallery 6</div>
                            </div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <div class="styled-icons icon-dark icon-circled icon-theme-colored2">
                                  <a class="lightgallery-trigger styled-icons-item" href="images/gallery/foto6.jpg" title="Gallery 6" data-exthumbimage="images/gallery/foto6.jpg" data-src="images/gallery/foto6.jpg">
                                    <i class="fa fa-picture-o"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <footer id="footer" class="footer">
        <div class="footer-widget-area">
          <div class="container pt-90 pb-60">
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div id="tm_widget_contact_info-1" class="split-nav-menu clearfix widget widget-contact-info clearfix mb-20">
                  <div class="tm-widget tm-widget-contact-info contact-info contact-info-style1 contact-icon-theme-colored1">
                    <div class="thumb">
                      <img alt="Logo" src="images/logo-wide-white.png" />
                    </div>
                    <div class="description">203, Envato Labs, Behind Alis Steet, Melbourne, Australia.immersion along the information close the loop on focusing</div>
                  </div>
                </div>
                <div id="tm_widget_social_list_custom-1" class="split-nav-menu clearfix widget widget-social-list-custom clearfix">
                  <ul class="tm-widget tm-widget-social-list tm-widget-social-list-custom styled-icons icon-dark icon-rounded icon-theme-colored1">
                    <li>
                      <a class="social-link" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a class="social-link" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a class="social-link" href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                      <a class="social-link" href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div id="tm_widget_blog_list-1" class="split-nav-menu clearfix widget widget-blog-list clearfix">
                  <h4 class="widget-title widget-title-line-bottom line-bottom-footer-widget line-bottom-theme-colored1">Latest News</h4>
                  <div class="tm-widget tm-widget-blog-list">
                    <article class="post media-post clearfix">
                      <a class="post-thumb" href="#"><img width="100" height="70" src="images/blog/3.jpg" class alt /></a>
                      <div class="post-right">
                        <h6 class="post-title">
                          <a href="#">Customer Focused </a>
                        </h6>
                        <span class="post-date">
                          <time class="entry-date" datetime="2019-05-15T06:10:26+00:00">April 15, 2019</time>
                        </span>
                      </div>
                    </article>
                    <article class="post media-post clearfix">
                      <a class="post-thumb" href="#"><img width="100" height="70" src="images/blog/2.jpg" class alt /></a>
                      <div class="post-right">
                        <h6 class="post-title">
                          <a href="#"> School For Poor </a>
                        </h6>
                        <span class="post-date">
                          <time class="entry-date" datetime="2019-07-15T06:10:26+00:00">June 15, 2019</time>
                        </span>
                      </div>
                    </article>
                    <article class="post media-post clearfix">
                      <a class="post-thumb" href="#"><img width="100" height="70" src="images/blog/1.jpg" class alt /></a>
                      <div class="post-right">
                        <h6 class="post-title">
                          <a href="#"> Shelter For Homeless </a>
                        </h6>
                        <span class="post-date">
                          <time class="entry-date" datetime="2019-09-15T06:10:26+00:00">November 15, 2019</time>
                        </span>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div id="nav_menu-1" class="widget widget_nav_menu">
                  <h4 class="widget-title widget-title-line-bottom line-bottom-footer-widget line-bottom-theme-colored1">Services</h4>
                  <div class="menu-service-nav-menu-container">
                    <ul id="menu-service-nav-menu" class="menu">
                      <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-20545">
                        <a href="#servis">Skilled Nursing</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-20546">
                        <a href="#servis">Independent Living</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-20547">
                        <a href="#servis">Resident Care</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-20548">
                        <a href="#servis">Assisted Living</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-20549">
                        <a href="#servis">Pharmacy Support</a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-20550">
                        <a href="#servis">24/7 Special Service</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div id="tm_widget_opening_hours_compressed-1" class="split-nav-menu clearfix widget widget-opening-hours-compressed clearfix">
                  <h4 class="widget-title widget-title-line-bottom line-bottom-footer-widget line-bottom-theme-colored1">Opening Hours</h4>
                  <ul class="tm-widget tm-widget-opening-hours tm-widget-opening-hours-compressed opening-hours border-dark">
                    <li class="clearfix">
                      <span>Monday - Tuesday</span>
                      <div class="value">9.00 - 17.00</div>
                    </li>
                    <li class="clearfix">
                      <span>Wednesday</span>
                      <div class="value">9.00 - 16.00</div>
                    </li>
                    <li class="clearfix">
                      <span>Thursday - Friday</span>
                      <div class="value">9.00 - 16.00</div>
                    </li>
                    <li class="clearfix">
                      <span>Saturday</span>
                      <div class="value">9.00 - 16.00</div>
                    </li>
                    <li class="clearfix">
                      <span>Sunday</span>
                      <div class="value">Closed</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
            <div class="container">
              <div class="row pt-20 pb-20">
                <div class="col-sm-6">
                  <div class="footer-paragraph">© 2024 Kel 15 Management Project. All Rights Reserved.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>

    <script data-cfasync="false" src="cdn-cgi/email-decode.min.js"></script>
    <script src="assets/dist/js/custom.js"></script>
  </body>
</html>
