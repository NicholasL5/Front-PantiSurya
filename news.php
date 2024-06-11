<?php
include 'utils.php';

$db = new myDB();
$newsItems = $db->getAllBerita();

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <!-- Mirrored from html.kodesolution.com/2020/senior-html/demo/news-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2024 07:22:44 GMT -->
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Senior - Senior Care & Medical HTML5 Template" />
    <meta name="keywords" content="chemical, company, construction, engineering, factory, industrial, industry, mechanical," />
    <meta name="author" content="ThemeMascot" />

    <title>Senior - Senior Care & Medical HTML5 Template</title>

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
                            <li><a href="gallery.php">Gallery</a></li>
                            <li class="active"><a href="news.php">News</a></li>
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

      <div class="main-content-area">
        <section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="images/bg/as02.jpg">
          <div class="container pt-90 pb-90">
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2 class="title text-white">Blog</h2>
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
                      <span class="trail-item trail-end text-theme-colored2"><span>Blog</span></span>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="section-content">
              <div class="row">
              <?php foreach ($newsItems as $news): ?>
                <?php
                    $date = date("d", strtotime($news['date']));
                    $month = date("M", strtotime($news['date']));
                    $title = htmlspecialchars($news['title']);
                    $description = htmlspecialchars($news['description']);
                    $imagePath = htmlspecialchars($news['image_path']);
                    $imagePath = str_replace('../Front-PantiSurya/', '', $imagePath);
                    $link = 'news-details.php?id=' . $news['id']; 
                ?>
                <div class="col-md-6 col-lg-6 col-xl-4" style="margin-top: 20px;">
                    <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                        <article class="post type-post status-publish format-standard has-post-thumbnail news">
                            <div class="date"><?= $date ?> <br /><?= $month ?></div>
                            <div class="entry-header">
                                <div class="post-thumb lightgallery-lightbox">
                                    <div class="post-thumb-inner">
                                        <div class="thumb">
                                            <img src="<?= $imagePath ?>" alt="Image" />
                                            <!-- <img src="images/blog/1.jpg" alt="Image" /> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content">
                                <h5 class="entry-title">
                                    <a href="<?= $link ?>" rel="bookmark"><?= $title ?></a>
                                </h5>
                                <ul class="entry-meta list-inline"></ul>
                                <div class="post-excerpt">
                                    <div class="mascot-post-excerpt"><?= implode(' ', array_slice(str_word_count($description, 1), 0, 10)) . (str_word_count($description) > 10 ? '...' : '') ?></div>
                                </div>
                                <div class="post-btn-readmore">
                                    <a href="<?= $link ?>" class="btn btn-outline-theme-colored1 btn-round">Read More</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endforeach; ?>
            
                <!-- <div class="col-md-6 col-lg-6 col-xl-4">
                  <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                    <article class="post type-post status-publish format-standard has-post-thumbnail news">
                      <div class="date">20 <br />Jun</div>
                      <div class="entry-header">
                        <div class="post-thumb lightgallery-lightbox">
                          <div class="post-thumb-inner">
                            <div class="thumb">
                              <img src="images/blog/1.jpg" alt="Image" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="entry-content">
                        <h5 class="entry-title">
                          <a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a>
                        </h5>
                        <ul class="entry-meta list-inline"></ul>
                        <div class="post-excerpt">
                          <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                        </div>
                        <div class="post-btn-readmore">
                          <a href="news-details.html" class="btn btn-outline-theme-colored1 btn-round">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                  <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                    <article class="post type-post status-publish format-standard has-post-thumbnail news">
                      <div class="date">22 <br />Aug</div>
                      <div class="entry-header">
                        <div class="post-thumb lightgallery-lightbox">
                          <div class="post-thumb-inner">
                            <div class="thumb">
                              <img src="images/blog/2.jpg" alt="Image" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="entry-content">
                        <h5 class="entry-title">
                          <a href="#" rel="bookmark">Provide you with 5 creative variations on a common template</a>
                        </h5>
                        <ul class="entry-meta list-inline"></ul>
                        <div class="post-excerpt">
                          <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                        </div>
                        <div class="post-btn-readmore">
                          <a href="news-details.html" class="btn btn-outline-theme-colored1 btn-round">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                  <div class="tm-sc tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme">
                    <article class="post type-post status-publish format-standard has-post-thumbnail news">
                      <div class="date">24 <br />Dec</div>
                      <div class="entry-header">
                        <div class="post-thumb lightgallery-lightbox">
                          <div class="post-thumb-inner">
                            <div class="thumb">
                              <img src="images/blog/3.jpg" alt="Image" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="entry-content">
                        <h5 class="entry-title">
                          <a href="#" rel="bookmark">Explain to you why they work and what makes people click them</a>
                        </h5>
                        <ul class="entry-meta list-inline"></ul>
                        <div class="post-excerpt">
                          <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                        </div>
                        <div class="post-btn-readmore">
                          <a href="news-details.html" class="btn btn-outline-theme-colored1 btn-round">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </article>
                  </div>
                </div> -->
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

    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.actions.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.carousel.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.migration.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.navigation.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.parallax.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.html"></script>
    <script src="assets/dist/js/revolution-slider/js/extensions/revolution.extension.video.min.html"></script>
  </body>
</html>
