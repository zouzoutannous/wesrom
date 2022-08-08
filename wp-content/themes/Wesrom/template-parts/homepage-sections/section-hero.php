<section class="hero">
    <div class="container">
        <div class="row">
            <div class="content">
                <?php if (get_sub_field('slogan')) : ?>
                    <h3 class="slogan"><?php the_sub_field('slogan'); ?></h3>
                <?php endif; ?>
                <?php if (get_sub_field('information')) : ?>
                    <h1 class="info"><?php the_sub_field('information'); ?></h1>
                <?php endif; ?>
                <?php if (get_sub_field('call_to_action')) : ?>
                    <button class="cta"><a class="link"><?php the_sub_field('call_to_action') ?></a></button>
                <?php endif; ?>
            </div>
        </div>
        <div class="partners">
            <div class="row">
                <?php if (have_rows('partners')) : ?>
                    <?php while (have_rows('partners')) : the_row(); ?>
                        <div class="col-lg-6 partner">
                            <?php if (get_sub_field('partner_image')) : ?>
                                <img src="<?php the_sub_field('partner_image'); ?>" alt="" class="image mx-auto d-block">
                            <?php endif; ?>
                            <?php if (get_sub_field('partner_info')) : ?>
                                <h4 class="information"><?php the_sub_field('partner_info'); ?></h4>
                            <?php endif; ?>
                            <?php if (get_sub_field('partner_cta')) : ?>
                                <button class="cta mx-auto d-block"><a class="link"><?php the_sub_field('partner_cta') ?></a></button>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>