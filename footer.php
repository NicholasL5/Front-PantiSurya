<?php
include 'utils.php';

$db = new myDB();
$newsItems = $db->getAllBerita();

$counter = 0;
?>


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
                  <?php foreach ($newsItems as $news):
                  if ($counter >= 3) break;
                        $formattedDate = date("F j, Y", strtotime($news['date']));
                        $date = date("d", strtotime($news['date']));
                        $month = date("M", strtotime($news['date']));
                        $title = htmlspecialchars($news['title']);
                        $description = htmlspecialchars($news['description']);
                        $imagePath = htmlspecialchars($news['image_path']);
                        $imagePath = str_replace('../Front-PantiSurya/', '', $imagePath);
                        $link = 'news-details.php?id=' . $news['id']; 
                    ?>
                    <article class="post media-post clearfix">
                      <a class="post-thumb" href="#"><img width="100" height="70" src="<?= $imagePath ?>" class alt /></a>
                      <div class="post-right">
                        <h6 class="post-title">
                          <a href="#"><?= $title ?> </a>
                        </h6>
                        <span class="post-date">
                          <time class="entry-date" datetime="<?= date('c', strtotime($news['date'])) ?>"><?= $formattedDate ?></time>
                        </span>
                      </div>
                    </article>
                    
                    <?php $counter++; endforeach; ?>
                    
                    <!-- <article class="post media-post clearfix">
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
                    </article> -->
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
