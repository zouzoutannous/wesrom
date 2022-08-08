<section class="values">
    <div class="container">
        <div class="row">
            <div class="content">
                <?php if (get_sub_field('values_heading')) : ?>
                    <h2 class="heading"><?php the_sub_field('values_heading'); ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="value">
            <div class="row">
                <?php if (have_rows('value')) : ?>
                    <?php while (have_rows('value')) : the_row(); ?>
                        <div class="col-lg-6">
                            <?php if (get_sub_field('value_title')) : ?>
                                <span><i class="fa fa-check-circle"></i></span><h3 class="title"><?php the_sub_field('value_title'); ?></h3>
                            <?php endif; ?>
                            <?php if (get_sub_field('value_information')) : ?>
                                <p class="info"><?php the_sub_field('value_information'); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>