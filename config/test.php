<?php

/**
 *
 * Template Name: Home Page
 *
 */
get_header('home');
?>


<main>
  <p>

  <div class="home-3-wrapper">

    <!-- Hero Area Start -->
    <section class="hero__area-3">
      <div class="container line"></div>
      <span class="line-3"></span>
      <span class="line-4"></span>
      <span class="line-5"> </span>

      <div class="swiper mySwiper2 hero__slider-3">
        <div class="swiper-wrapper">

          <?php $counter = 1; ?>
          <?php while (have_rows('home_slides')) : the_row();   ?>

            <div class="swiper-slide hero__slide-3" style="background-image: url('<?php the_sub_field("image"); ?>');">
              <div class="container g-0">
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="hero__slide-left-3">
                      <span class="hero__sub-title-3">Welcome to Loftmatch</span>
                      <h1><?php the_sub_field('heading'); ?></h1>
                      <p><?php the_sub_field('content'); ?></p>
                      <a class="wc-btn-primary btn-hover" href="<?php the_sub_field('button_link_1'); ?>"><span></span> <?php the_sub_field('button_text_1'); ?></a>
                      <a class="wc-btn-primary btn-hover" href="<?php the_sub_field('button_link_2'); ?>"><span></span> <?php the_sub_field('button_text_2'); ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php $counter++; ?>
          <?php endwhile; ?>




        </div>
        <div class="hero__slider-pagination-3">
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="swiper mySwiper hero__slider-3-thumbs">
        <div class="swiper-wrapper">
          <?php $counter = 1; ?>
          <?php while (have_rows('home_slides')) : the_row();   ?>
            <div class="swiper-slide hero__slider-3-thumb">
              <p><span>0<?= $counter ?></span> <?php the_sub_field('navigation_title'); ?> </p>
            </div>

            <?php $counter++; ?>
          <?php endwhile; ?>


        </div>
      </div>
    </section>
    <!-- Hero Area End -->


    <!-- Feature Area Start -->
    <section class="feature__area-3">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
            <div class="feature__content-3 wow wcfadeUp" data-wow-delay="0.15s">
              <h3 class="feature__title-3"><?php the_field('feature_title_1'); ?></h3>
              <p><?php the_field('feature_text_1'); ?></p>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
            <div class="feature__content-3 wow wcfadeUp" data-wow-delay="0.3s">
              <h3 class="feature__title-3"><?php the_field('feature_title_2'); ?></h3>
              <p><?php the_field('feature_text_2'); ?></p>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
            <div class="feature__content-3 wow wcfadeUp" data-wow-delay="0.45s">
              <h3 class="feature__title-3"><?php the_field('feature_title_3'); ?></h3>
              <p><?php the_field('feature_text_3'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature Area End -->
    <!-- Area Two -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bde-columns-1484-828 bde-columns">
              <div class="bde-column-1484-829 bde-column">
                <div class="bde-columns-1484-858 bde-columns">
                  <div class="bde-column-1484-859 bde-column">
                    <div class="bde-icon-1484-861 bde-icon">
                      <div class="bde-icon-icon breakdance-icon-atom">
                        <svg xmlns="http://www.w3.org/2000/svg" id="icon-price-tag" viewBox="0 0 32 32">
                          <path d="M30.5 0h-12c-0.825 0-1.977 0.477-2.561 1.061l-14.879 14.879c-0.583 0.583-0.583 1.538 0 2.121l12.879 12.879c0.583 0.583 1.538 0.583 2.121 0l14.879-14.879c0.583-0.583 1.061-1.736 1.061-2.561v-12c0-0.825-0.675-1.5-1.5-1.5zM23 12c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="bde-column-1484-860 bde-column">
                    <div class="bde-text-1484-862 bde-text">
                      We aim to beat any price, <br>just ask!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Area Start -->
    <section class="about__area-3">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row g-0">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__left zi-9 wow wcfadeUp" data-wow-delay="0.3s">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?php the_field('about_image'); ?>" alt="About Image" class="about__thumb-3 lazy" height="700" width="585">
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__right-3">
              <h2 class="section-sub-title-2 wow wcfadeUp" data-wow-delay="0.15s">Core Feature</h2>
              <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"><?php the_field('about_heading'); ?></h3>
              <p class="wow wcfadeUp" data-wow-delay="0.45s"><?php the_field('about_content'); ?></p>

              <?php the_field('about_content__bullets'); ?>

              <p>
                <a class="wc-btn-primary btn-hover" href="<?php the_field('button_link_1'); ?>"><span></span> <?php the_field('button_text_1'); ?></a>
                <a class="wc-btn-primary btn-hover" href="<?php the_field('button_link_2'); ?>"><span></span> <?php the_field('button_text_2'); ?></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Area End -->

    <!-- Progress Area Start -->
    <section class="progress__area">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="progress__left">
              <h2 class="progress__title wow wcfadeUp" data-wow-delay="0.15s"><?php the_field('progress_title'); ?></h2>
              <p class="wow wcfadeUp" data-wow-delay="0.3s"><?php the_field('progress_content'); ?></p>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="progress__right">
              <?php $counter = 0.25; ?>
              <?php while (have_rows('progress_bars')) : the_row();   ?>

                <div class="progress__item wow wcfadeUp" data-wow-delay="<?= $counter ?>s">
                  <h3 class="progress__label" data-width="<?php the_sub_field('progress_bar_value'); ?>"><?php the_sub_field('progress_bar_label'); ?></h3>
                </div>

                <?php
                $counter = $counter + 0.15;
                ?>
              <?php endwhile; ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Progress Area End -->



    <!-- Counter Area Start -->
    <section class="counter__area-2">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.15s">
              <h2 class="counter__number"><?php the_field('counter_value_1'); ?></h2>
              <p><?php the_field('counter_title_1'); ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.3s">
              <h2 class="counter__number"><?php the_field('counter_value_2'); ?></h2>
              <p><?php the_field('counter_title_2'); ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.45s">
              <h2 class="counter__number"><?php the_field('counter_value_3'); ?></h2>
              <p><?php the_field('counter_title_3'); ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.6s">
              <h2 class="counter__number"><?php the_field('counter_value_4'); ?></h2>
              <p><?php the_field('counter_title_4'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End -->

    <!-- Service Area Start -->
    <section class="service__area">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5">
            <div class="service__title">
              <h2 class="section-sub-title wow wcfadeUp" data-wow-delay="0.15s">Services</h2>
              <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"><?php the_field('service_heading'); ?></h3>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
            <div class="service__text wow wcfadeUp" data-wow-delay="0.6s">
              <p><?php the_field('service_content'); ?></p>
            </div>
          </div>
        </div>

        <div class="service__slider-wrapper">
          <div class="swiper service__slider">
            <div class="swiper-wrapper">

              <?php
              $args = query_posts(
                array(
                  'post_type' => 'services',
                  'order' => 'ASC',
                  'posts_per_page' => -1
                )
              );
              $loop = new WP_Query($args);
              if (have_posts()) {
                while (have_posts()) : the_post();
                  $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'services-thumbnail');
              ?>
                  <div class="swiper-slide service__slide">
                    <a href="<?php the_permalink(); ?>">
                      <div class="service__thumb-wrapper">
                        <img class="service__thumb lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?= $image[0] ?>" alt="Service Image" height="350" width="280">
                      </div>
                      <div class="service__slide-title">
                        <img src="<?php the_field('icon') ?>" alt="Service Icon">
                        <h4><?php the_title(); ?></h4>
                      </div>
                    </a>
                  </div>

              <?php
                endwhile;
              }
              wp_reset_query();
              ?>



            </div>
          </div>

          <div class="service__btn-next wow wcfadeUp" data-wow-delay="0.75s"><span><i class="fa-solid fa-arrow-left"></i></span></div>
          <div class="service__btn-prev wow wcfadeUp" data-wow-delay="0.75s"><span><i class="fa-solid fa-arrow-right"></i></span></div>
        </div>

        <div class="row">
          <div class="col-xxl-12">
            <div class="service__btm wow wcfadeUp" data-wow-delay="0.9s">
              <p>Need more services based on your demand? <a href="contact.html">Contact us <i class="fa-solid fa-arrow-left"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Area End -->

    <!-- Testimonial Area Start -->
    <section class="testimonial__area-2">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-12">
            <div class="swiper testimonial__slider-2">
              <div class="swiper-wrapper">


                <?php
                $args = query_posts(
                  array(
                    'post_type' => 'testimonials',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                  )
                );
                $loop = new WP_Query($args);
                if (have_posts()) {
                  while (have_posts()) : the_post();
                    $image_test = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                ?>



                    <div class="swiper-slide testimonial__slide-2">

                      <?php the_content(); ?>
                      <h3 class="wow wcfadeUp" data-wow-delay="0.3s"><?php the_title(); ?> <span><?php the_field('designation') ?></span> </h3>
                    </div>


                <?php
                  endwhile;
                }
                wp_reset_query();
                ?>




              </div>

              <div class="testimonial__btn-2">
                <div class="swiper-btn-prev wow wcfadeUp" data-wow-delay="0.3s"><img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/icon/long-arrow-l-black.png" alt="Prev Icon"></div>
                <div class="swiper-btn-next wow wcfadeUp" data-wow-delay="0.3s"><img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/icon/long-arrow-r-black.png" alt="Next Icon"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Area End -->

    <!--  Testimonial2 	 -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="testimonials-wrapper">
              <div class="split-content testimonials-left">
                <div class="testimonials-title-wrapper">
                  <div class="subtitle">Testimonials</div>
                  <h2 class="title testimonials">What our clients say about us and our work</h2>
                </div>
                <div class="card testimonial">
                  <div class="card-testimonial-content-top">
                    <h3 class="title h4-size card-testimonial">“A true team of expert contractors”</h3>
                    <p class="paragraph card-testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec ut viverra eros euismod. Vestibulum, diam suspendisse adipiscing <span class="text-no-wrap">diam quis.</span></p>
                  </div>
                  <div class="card-testimonial-content-bottom"><img src="https://assets.website-files.com/6143565787b5546c16508505/6144ef988ce584692208caf4_image-1-testimonials-construction-x-template.jpg" loading="eager" alt="Testimonials - Constructor X Webflow Template" class="image card-testimonial-picture">
                    <div class="card-testimonial-about-content">
                      <div class="card-testimonial-name">Sophia Moore</div>
                      <div class="card-testimonial-location">Malibu Beach, CA</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="split-content testimonials-right">
                <div class="card testimonial top">
                  <div class="card-testimonial-content-top">
                    <h3 class="title h4-size card-testimonial">“A team that never undelivers”</h3>
                    <p class="paragraph card-testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec ut viverra eros euismod. Vestibulum, diam suspendisse adipiscing <span class="text-no-wrap">diam quis.</span></p>
                  </div>
                  <div class="card-testimonial-content-bottom"><img src="https://assets.website-files.com/6143565787b5546c16508505/6144ef98033e89097cd2d883_image-2-testimonials-construction-x-template.jpg" loading="eager" alt="Testimonials - Constructor X Webflow Template" class="image card-testimonial-picture">
                    <div class="card-testimonial-about-content">
                      <div class="card-testimonial-name">Mike Warren</div>
                      <div class="card-testimonial-location">Hollywood Hills, CA</div>
                    </div>
                  </div>
                </div>
                <div class="card testimonial">
                  <div class="card-testimonial-content-top">
                    <h3 class="title h4-size card-testimonial">“Great work quality, and delivered on time”</h3>
                    <p class="paragraph card-testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec ut viverra eros euismod. Vestibulum, diam suspendisse adipiscing <span class="text-no-wrap">diam quis.</span></p>
                  </div>
                  <div class="card-testimonial-content-bottom"><img src="https://assets.website-files.com/6143565787b5546c16508505/6144ef982e075e3433d960d9_image-3-testimonials-construction-x-template.jpg" loading="eager" alt="Testimonials - Constructor X Webflow Template" class="image card-testimonial-picture">
                    <div class="card-testimonial-about-content">
                      <div class="card-testimonial-name">Lily Woods</div>
                      <div class="card-testimonial-location">Los Angeles, CA</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg testimonials" style="will-change: transform; transform: translate3d(-6.3964px, -3.9642px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
            </div>


          </div>
        </div>
      </div>

    </section>



    <!-- Workflow Area Start -->
    <section class="workflow__area">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="workflow__wrapper">
          <div class="row g-0">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
              <div class="workflow__left wow wcfadeUp" data-wow-delay="0.15s">
                <img class="workflow__thumb lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?php the_field('workflow_image_1'); ?>" alt="workflow Image" height="300" width="500">
                <img class="workflow__thumb-2 lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?php the_field('workflow_image_2'); ?>" alt="workflow Image" height="300" width="470">
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
              <div class="workflow__right">
                <h2 class="section-sub-title-2 wow wcfadeUp" data-wow-delay="0.15s">Workflow</h2>
                <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"><?php the_field('workflow_title'); ?></h3>
                <p class="wow wcfadeUp" data-wow-delay="0.45s"><?php the_field('workflow_content'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Workflow Area End -->


    <!-- Step Area Start -->
    <div class="step__area">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content wow wcfadeUp" data-wow-delay="0.15s">
              <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?php the_field('icon_step_1') ?>" alt="Planning" height="45" width="45">
              <h4><?php the_field('title_step_1') ?></h4>
              <p><?php the_field('text_step_1') ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content step-2 wow wcfadeUp" data-wow-delay="0.3s">
              <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?php the_field('icon_step_4') ?>" alt="Planning" height="45" width="45">
              <h4><?php the_field('title_step_2') ?></h4>
              <p><?php the_field('text_step_2') ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content step-3 wow wcfadeUp" data-wow-delay="0.45s">
              <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?php the_field('icon_step_3') ?>" alt="Planning" height="45" width="45">
              <h4><?php the_field('title_step_3') ?></h4>
              <p><?php the_field('text_step_3') ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content step-4 wow wcfadeUp" data-wow-delay="0.6s">
              <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP88B0AAt0B6ZlyAPkAAAAASUVORK5CYII=" data-src="<?php the_field('icon_step_4') ?>" alt="Planning" height="45" width="45">
              <h4><?php the_field('title_step_4') ?></h4>
              <p><?php the_field('text_step_4') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Step Area End -->


    <!-- Video Area Start -->
    <div class="cursor video" id="video_cursor">play now</div>
    <section class="video__area">
      <div class="video__content">
        <button type="button" data-bs-toggle="modal" data-bs-target="#hero_modal"> <span class="play-now">play
            now</span></button>
      </div>
    </section>
    <!-- Video Area End -->

    <!-- Video Modal -->
    <div class="modal fade" id="hero_modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog__hero">
        <div class="modal-content modal-content__hero">
          <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
          <iframe src="https://www.youtube.com/embed/0g1Q4fBDp2U" title="Modal Video" allow="accelerometer; autoplay;" allowfullscreen></iframe>
        </div>
      </div>
    </div>


    <!-- Company Area Start -->
    <section class="company__area-3">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-12">
            <div class="company__logos">
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.15s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/1.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.3s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/2.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.45s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/3.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.6s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/4.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.75s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/5.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.3s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/6.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.45s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/7.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.6s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/8.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.75s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/9.png" alt="company Logo">
              </div>
              <div class="company__logo wow wcfadeUp" data-wow-delay="0.9s">
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/company/1/10.png" alt="company Logo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Company Area End -->


    <!-- Gallry Area Start -->
    <section class="gallery__area">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-12">
            <div class="gallery__top wow wcfadeUp" data-wow-delay="0.45s">
              <p>We’re on Instagram now <a href="#">Follow Us</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="gallery__items">
        <div class="gallery__item wow wcfadeUp" data-wow-delay="0.15s">
          <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/gallery/1.jpg" alt="Gallry Image">
        </div>
        <div class="gallery__item wow wcfadeUp" data-wow-delay="0.3s">
          <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/gallery/2.jpg" alt="Gallry Image">
        </div>
        <div class="gallery__item wow wcfadeUp" data-wow-delay="0.45s">
          <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/gallery/3.jpg" alt="Gallry Image">
        </div>
        <div class="gallery__item wow wcfadeUp" data-wow-delay="0.6s">
          <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/gallery/4.jpg" alt="Gallry Image">
        </div>
        <div class="gallery__item wow wcfadeUp" data-wow-delay="0.75s">
          <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/imgs/gallery/5.jpg" alt="Gallry Image">
        </div>
      </div>
    </section>
    <!-- Gallry Area End -->


  </div>

</main>
<?php
get_footer('home');
?>
