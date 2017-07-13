<?php

/* Template Name: Home */

get_header(); ?>

    <section class="intro">
        <div class="col-md-8 intro-headline-container">
            <h1 class="section-header-headline margin light-text intro-headline text-center"><?php bloginfo( 'description' ) ?></h1>
        </div>
        <a href="#dest" class="d-flex flex-column scroll" id="scroll">
            <span class="fa fa-angle-down mid-tone-text"></span>
            <span class="fa fa-angle-down light-text"></span>
            <span class="fa fa-angle-down color-text"></span>
        </a>
    </section>
    <section class="about-us" id="dest">
        <div class="container">
            <div class="row section-header">
                <div class="col-md-5 col-sm-12">
                    <h2 class="section-header-headline margin dark-text headline-decoration"><?php echo get_theme_mod( 'section_2_headline' ) ?></h2>
                </div>
                <div class="col-md-7 col-sm-12">
                    <p class="main-text margin mid-tone-text "><?php echo get_theme_mod( 'section_2_text' ) ?></p>
                </div>
            </div>
        </div>
        <ul class="d-flex justify-content-center about-us-img-container">
			<?php $img_arr = array(
				get_theme_mod( 'section_2_image_1' ),
				get_theme_mod( 'section_2_image_2' ),
				get_theme_mod( 'section_2_image_3' ),
				get_theme_mod( 'section_2_image_4' )
			);
			foreach ( $img_arr as $value ) {
				if ( $value != $default ) : ?>
                    <li class="w-25">
                        <img src="<?php echo $value ?>" class="img-responsive">
                    </li>
				<?php endif;
			} ?>
        </ul>
    </section>
    <section class="what-we-do">
        <div class="container">
            <div class="section-header margin">
                <h2 class="text-center section-header-headline margin dark-text headline-decoration-center"><?php echo get_theme_mod( 'section_3_header_headline' ) ?></h2>
            </div>
            <ul class="row justify-content-center offers-list margin">
				<?php
				$args = array(
					'post_type' => 'offer'
				);

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : ?>
                        <li class="col-md-4 col-sm-10 text-center offer margin">
                            <a href="<?php the_permalink() ?>" class="d-block offer-link">
								<?php $the_query->the_post(); ?>
								<?php if ( has_post_thumbnail() ): ?>
                                    <div class="offer-img-container margin">
										<?php the_post_thumbnail( 'thumbnail' ); ?>
                                    </div>
								<?php endif; ?>
                                <h3 class="dark-text text-uppercase offer-headline margin"><?php the_title(); ?></h3>
                                <div class="offer-text margin dark-text"><?php the_excerpt(); ?></div>
                            </a>
                        </li>
					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>
            </ul>
            <div class="d-flex justify-content-center what-we-do-button-container">
				<?php
				custom_button( array(
					'custom_link'   => 'section_3_custom_button_link',
					'dropdown_link' => 'section_3_button_link',
					'button_text'   => 'section_3_button_text'
				) );
				?>
            </div>
        </div>
    </section>
    <section class="portfolio color-bg">
        <div class="container">
            <div class="owl-carousel owl-theme" id="owl">
				<?php
				$args      = array(
					'post_type' => 'work'
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :?>
					<?php while ( $the_query->have_posts() ) : ?>
						<?php $the_query->the_post(); ?>
                        <div class="row align-items-center">
                            <div class="col-md-7 work-text-container">
                                <h3 class="work-headline"><?php the_title() ?></h3>
                                <div class="work-text-container"><?php the_excerpt() ?></div>
                            </div>
                            <div class="col-md-5 work-slide-container">
								<?php if ( has_post_thumbnail() ):
									the_post_thumbnail( 'post-thumbnail' );
								endif ?>
                            </div>
                        </div>
					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <section class="twits">
<!--        <div class="container">-->
            <div class="owl-carousel owl-theme" id="owl_2">
				<?php
				$args      = array(
					'post_type' => 'slide'
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :?>
					<?php while ( $the_query->have_posts() ) : ?>
						<?php $the_query->the_post(); ?>
                        <div class="d-flex flex-column align-items-center twit-slide-container">
                            <div class="twit-slide-text-container">
								<?php the_excerpt(); ?>
                            </div>
							<?php if ( has_post_thumbnail() ): ?>
                                <div class="d-flex align-items-center twit-author-container">
                                    <div class="twit-slide-img-container"><?php the_post_thumbnail( 'post-thumbnail' ); ?></div>
                                    <span class="d-block"><?php the_title() ?></span>
                                </div>
							<?php endif ?>
                        </div>
					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>
            </div>
<!--        </div>-->
    </section>


<?php get_footer() ?>