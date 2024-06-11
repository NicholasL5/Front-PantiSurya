<?php
include 'utils.php';

$db = new myDB();
$id = $_GET["id"];
// echo $id;
$newsItems = $db->getBeritaById($id);
$newsItems = $newsItems->fetch(PDO::FETCH_ASSOC);
// echo $newsItems["title"];

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>News Details - Rumah Usiawan Panti Surya</title>

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
                        <a class="menuzord-brand site-brand" href="index.php">
                          <img class="logo-default logo-1x" src="images/logo-wide.png" alt="Logo" />
                          <img class="logo-default logo-2x retina" src="images/logo-wide%402x.png" alt="Logo" />
                        </a>
                      </div>
                      <div class="col-sm-auto ml-auto pr-0 align-self-center">
                        <nav id="top-primary-nav" class="menuzord green" data-effect="fade" data-animation="none" data-align="right">
	                      <ul id="main-nav" class="menuzord-menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
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

      <div class="main-content-area">
        <section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="images/bg/as02.jpg">
          <div class="container pt-90 pb-90">
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2 class="title text-white">News Details</h2>
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
                      <span class="trail-item trail-end text-theme-colored2"><span>News Details</span></span>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container pb-60">
            <div class="section-content">
              <div class="row">
                <div class="col-sm-12 text-justify">
                  <article class="post-single">
                    <div class="entry-header mb-30">
                      <div class="post-thumb thumb"><img class="img-fullwidth" src="images/bg/bg1.jpg" alt /></div>
                    </div>
                    <div class="entry-content">
                      <h5><?php echo $newsItems["title"]?></h5>
                      <p>
                        <?php echo $newsItems["description"]?>
                      </p>
                      <!-- <h5>Tincidunt wisi euismod iaculis nunc vita</h5>
                      <p>
                        Nostra dapibus varius et semper semper rutrum ad risus felis eros. Cursus libero viverra tempus netus diam vestibulum lorem tincidunt congue porta. Non ligula egestas commodo massa. Lorem non sit vivamus convallis elit mollis.
                        Viverra sodales feugiat natoque sem morbi hac nunc ultricies nibh netus facilisis blandit. Felis purus et iaculis. Semper orci duis montes curabitur potenti a varius quis diam, vel litora et? Quis ridiculus pharetra luctus
                        augue duis.
                      </p> -->
                      <!-- <blockquote class="tm-sc tm-sc-blockquote blockquote-style3 quote-icon-theme-colored mb-20 mt-20">
                        <p>
                          Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud
                          solution.
                        </p>
                        <footer><cite>Someone famous</cite></footer>
                      </blockquote>
                      <h5>Parturient tortor tortor sed tellus molestie neque</h5>
                      <p>
                        Habitasse justo, sed justo. Senectus morbi, fermentum magna id tortor. Lacinia sociis morbi erat ultricies dictumst condimentum dictum nascetur? Vitae litora erat penatibus nam lorem. Euismod tempus, mollis leo tempus? Semper
                        est cursus viverra senectus lectus feugiat id! Odio porta nibh dictumst nulla taciti lacus nam est praesent.
                      </p>
                      <p>
                        Tincidunt habitant egestas erat lectus congue nisl dapibus nostra bibendum. In est in vitae dictumst varius lorem congue rutrum eget primis augue. At orci cubilia duis orci consequat libero malesuada mi. Porta facilisis dui,
                        justo laoreet penatibus. Eros penatibus justo, tempor ligula vestibulum vestibulum lacus mauris himenaeos quisque proin.
                      </p>
                      <p>
                        Aliquam natoque lorem. Id augue porta placerat. Primis a pretium est faucibus nam cubilia eros risus. Laoreet porta et malesuada! Lacus nulla bibendum cubilia taciti mauris cubilia leo quis purus. Laoreet rutrum vel phasellus
                        nec amet scelerisque nisl mollis. Interdum id faucibus eros sodales tellus taciti molestie ut. Nec mus vehicula lectus, dapibus dictumst pulvinar venenatis gravida? Torquent suscipit varius sollicitudin facilisis torquent
                        turpis fermentum laoreet nisl tellus faucibus quam!
                      </p> -->
                    </div>
                  </article>
                </div>
                <!-- <div class="col-lg-3 sidebar-area sidebar-right">
                  <div class="split-nav-menu clearfix widget widget_search">
                    <form role="search" method="get" class="search-form" action="#">
                      <input type="search" class="form-control search-field" placeholder="Search …" value name="s" />
                      <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
                  <div class="split-nav-menu clearfix widget widget-blog-list clearfix">
                    <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
                    <div class="tm-widget tm-widget-blog-list">
                      <article class="post media-post clearfix">
                        <a class="post-thumb" href="#">
                          <img width="100" height="70" src="images/blog/1.jpg" class alt />
                        </a>
                        <div class="post-right">
                          <h6 class="post-title"><a href="#"> Inspired by The Lord </a></h6>
                          <span class="post-date">
                            <span class="entry-date">February 2, 2019</span>
                          </span>
                        </div>
                      </article>
                      <article class="post media-post clearfix">
                        <a class="post-thumb" href="#">
                          <img width="100" height="70" src="images/blog/2.jpg" class alt />
                        </a>
                        <div class="post-right">
                          <h6 class="post-title"><a href="#">Randomized Trial </a></h6>
                          <span class="post-date">
                            <span class="entry-date">February 2, 2020</span>
                          </span>
                        </div>
                      </article>
                      <article class="post media-post clearfix">
                        <a class="post-thumb" href="#">
                          <img width="100" height="70" src="images/blog/3.jpg" class alt />
                        </a>
                        <div class="post-right">
                          <h6 class="post-title"><a href="#">Multilevel Lord</a></h6>
                          <span class="post-date">
                            <span class="entry-date">February 2, 2021</span>
                          </span>
                        </div>
                      </article>
                      <article class="post media-post clearfix">
                        <a class="post-thumb" href="#">
                          <img width="100" height="70" src="images/blog/1.jpg" class alt />
                        </a>
                        <div class="post-right">
                          <h6 class="post-title"><a href="#">Having studied</a></h6>
                          <span class="post-date">
                            <span class="entry-date">February 2, 2019</span>
                          </span>
                        </div>
                      </article>
                    </div>
                  </div>
                  <div class="widget widget_categories">
                    <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Categories</h4>
                    <ul>
                      <li class="cat-item cat-item-16"><a href="#">Admission</a></li>
                      <li class="cat-item cat-item-17"><a href="#">Cultural Program</a></li>
                      <li class="cat-item cat-item-18"><a href="#">Result</a></li>
                    </ul>
                  </div>
                  <div class="split-nav-menu clearfix widget widget_text">
                    <div class="textwidget">
                      <div class="section-typo-light text-center bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40">
                        <p><img class="size-full wp-image-800 aligncenter" src="images/icon/headphone-128.png" alt width="128" height="128" /></p>
                        <h4>Online Help!</h4>
                        <h5>+(123) 456-7890</h5>
                      </div>
                    </div>
                  </div>
                  <div class="split-nav-menu clearfix widget widget_text">
                    <div class="textwidget">
                      <div class="section-typo-light bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40">
                        <p>Competently parallel task fully researched data and enterprise process improvements.</p>
                        <div class="tm-sc tm-sc-button">
                          <a href target="_self" class="btn btn-dark btn-sm btn-xs btn-round" rel="noopener noreferrer">Download PDF <i class="fa fa-file-pdf-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="split-nav-menu clearfix widget widget-brochure-box clearfix">
                    <a class="tm-widget tm-widget-brochure-box tm-widget-brochure-box-default brochure-box brochure-box-default brochure-box-theme-colored1 mb-10" href="#">
                      <i class="brochure-icon fa fa-download"></i>
                      <h5 class="text">Registration</h5>
                    </a>
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

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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

  <!-- Mirrored from html.kodesolution.com/2020/senior-html/demo/news-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2024 07:22:52 GMT -->
</html>
