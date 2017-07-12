<?php

/* Template Name: Home */

get_header(); ?>

    <section class="intro color-bg">
        <div class="container">
            <div class="col-md-6">
                <h1 class="section-header-headline margin light-text intro-headline text-center"><?php bloginfo( 'description' ) ?></h1>
            </div>
        </div>
        <a href="#dest" class="d-flex flex-column scroll" id="scroll">
            <span class="fa fa-angle-down mid-tone-text"></span>
            <span class="fa fa-angle-down light-text"></span>
            <span class="fa fa-angle-down color-text"></span>
        </a>
    </section>
    <section class="about-us" id="dest">
        <div class="container">
            <div class="row">
                <h2 class="col-md-5 section-header-headline margin mid-dark-text welcome-headline"><?php echo get_theme_mod( 'section_2_headline' ) ?></h2>
                <p class="col-md-7 section-header-text margin mid-dark-text welcome-text"><?php echo get_theme_mod( 'section_2_text' ) ?></p>
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
            <div class="section-header offer-header margin">
                <h2 class="section-header-headline margin light-text"><?php echo get_theme_mod( 'section_3_header_headline' ) ?></h2>
                <span class="section-header-text margin light-text"><?php echo get_theme_mod( 'section_3_header_text' ) ?></span>
            </div>
            <ul class="offers-list d-flex">
				<?php
				$args = array(
					'post_type' => 'offer'
				);

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : ?>
                        <li class="col-md-4 text-center">
							<?php $the_query->the_post(); ?>
							<?php if ( has_post_thumbnail() ): ?>
                                <div class="offer-img-container">
									<?php the_post_thumbnail( 'thumbnail' ); ?>
                                </div>

							<?php endif; ?>
                            <h3 class="offer-headline light-text"><?php the_title(); ?></h3>
                            <div class="offer-text"><?php the_excerpt(); ?></div>
                        </li>

					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>
            </ul>
            <a href="<?php echo get_post_type_archive_link( 'offer' ); ?>">show more</a>
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
                        <div>
							<?php $the_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>" class="d-flex align-items-center">
                                <div class="clients-slide-container">
									<?php if ( has_post_thumbnail() ):
										the_post_thumbnail( 'post-thumbnail' );
									endif ?>
                                </div>
                            </a>
                        </div>
					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <section class="twits">
        <div class="container">
            <div class="owl-carousel owl-theme" id="owl_2">
				<?php
				$args      = array(
					'post_type' => 'slide'
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :?>
					<?php while ( $the_query->have_posts() ) : ?>
                        <div>
							<?php $the_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>" class="d-flex align-items-center">
                                <div class="clients-slide-container">
									<?php if ( has_post_thumbnail() ):
										the_post_thumbnail( 'post-thumbnail' );
									endif ?>
                                </div>
                            </a>
                        </div>
					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>
            </div>
        </div>
    </section>


<?php get_footer() ?>