<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="content">
                <?php if (get_sub_field('testimonials_heading')) : ?>
                    <h2 class="heading"><?php the_sub_field('testimonials_heading'); ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="testimonial">
            <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="col-8">
                        <div class="carousel-inner">
                            <?php if (have_rows('testimonial')) :
                                $c = 0;
                                while (have_rows('testimonial')) : the_row(); ?>
                                <?php    $active = $c === 0 ? 'active' : '';?>
                                    <div class="carousel-item <?= $active; ?>">
                                    <?php if (get_sub_field('testimonial_content')): ?>
                                        <p class="testimonial-content"><?php the_sub_field('testimonial_content'); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('testimonial_person')): ?>
                                        <h5 class="person"><?php the_sub_field('testimonial_person'); ?></h5>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('testimonial_position')): ?>
                                        <p class="position"><?php the_sub_field('testimonial_position'); ?></p>
                                    <?php endif; ?>
                                    </div>
                                <?php
                                $c++;
                                endwhile; ?>
                            <?php endif; ?>
                            <div class="carousel-indicators-wrap">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="control-wrapper">
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                            <i class="fa fa-arrow-left" style="color:black;"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                            <i class="fa fa-arrow-right" style="color:black;"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
