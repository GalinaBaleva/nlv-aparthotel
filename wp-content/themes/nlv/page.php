<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <section <?php post_class('ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb') ?>>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-7 order-md-last d-flex">
                        <div class="img img-1 mr-md-2 ftco-animate" style="background-image: url(<?php echo URL_IMG; ?>Bar_20190928_160417-2-1536x1021.jpg);"></div>
                    </div>
                    <div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
                        <div class="heading-section mb-4 my-5 my-md-0">
                            <span class="subheading">New Line Village</span>
                        </div>
                        <p><?php the_content(); ?></p>
                        <p><a href="#" class="btn btn-secondary rounded">Reserve Your Room Now</a></p>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>