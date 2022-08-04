<section class="services">
    <div class="container">
        <div class="row">
            <div class="content">
                <?php if (get_sub_field('heading')) : ?>
                    <h2 class="heading"><?php the_sub_field('heading'); ?></h2>
                <?php endif; ?>
                <?php if (get_sub_field('information')) : ?>
                    <h1 class="info"><?php the_sub_field('information'); ?></h1>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <?php if (have_rows('service')) : ?>
                <?php while (have_rows('service')) : the_row(); ?>
                    <div class="col-lg-4 service">
                        <?php if (get_sub_field('service_name')) : ?>
                            <h4 class="name"><?php the_sub_field('service_name'); ?></h4>
                        <?php endif; ?>
                        <?php if (get_sub_field('service_information')) : ?>
                            <p class="information"><?php the_sub_field('service_information'); ?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('service_cta')) : ?>
                            <a href="#" class="link"><?php the_sub_field('service_cta') ?></a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <button class="cta mx-auto d-block"><a class="link"><?php the_sub_field('services_consultation') ?></a></button>
    </div>
</section>