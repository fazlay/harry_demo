<?php
get_header();
?>
<section class="postbox__area grey-bg-4 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="postbox__wrapper">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- All contents will go here  -->
                            <?php echo get_template_part('template-parts/content', get_post_format()) ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="tp-pagination tp-pagination-style-2 mt-20">
                        <?php harry_navigation(); ?>
                    </div>
                </div>
            </div>
            <?php if (is_active_sidebar('blog-sidebar')) : ?>
                <div class="col-xxl-4 col-lg-4">
                    <div class="sidebar__wrapper pl-40">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="post-area d-none">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- All contents will go here  -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
</div>




<?php
get_footer();
