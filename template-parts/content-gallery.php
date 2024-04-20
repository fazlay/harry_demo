<?php
$format_gallery = function_exists('get_field') ? get_field('post_gallery_images') : null;
?>
<?php
if (is_single()) : ?>
    <article id="post-<?php the_id(); ?>" <?php post_class('tp-format-standard ') ?>>
        <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
            <?php if (!empty($format_gallery)) : ?>
                <div class="swiper-wrapper">
                    <?php foreach ($format_gallery as $gallery_item) : ?>
                        <div class="postbox__slider-item swiper-slide">
                            <img src="<?php echo esc_url($gallery_item['url']); ?>" alt="<?php echo esc_attr($item['alt']); ?>">
                        </div>
                    <?php endforeach; ?>


                </div>
                <div class="postbox__nav">
                    <button class="postbox-slider-button-next"><i class="fa-regular fa-angle-right"></i></button>
                    <button class="postbox-slider-button-prev"><i class="fa-regular fa-angle-left"></i></button>
                </div>
            <?php endif; ?>
        </div>
        <?php get_template_part('template-parts/blog/post-meta'); ?>
        <div class="postbox__details-content-wrapper ">
            <?php the_content(); ?>

        </div>
        <div class="postbox__share-wrapper mb-60">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="tagcloud tagcloud-sm">
                        <span>Tags:</span>
                        <?php harry_tags() ?>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="postbox__share text-xl-end">
                        <span>Share On:</span>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </article>
<?php else : ?>
    <article id="post-<?php the_id() ?>" <?php post_class('tp-format-galley postbox__item format-image mb-50 transition-3') ?>>
        <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
            <?php if (!empty($format_gallery)) : ?>
                <div class="swiper-wrapper">
                    <?php foreach ($format_gallery as $gallery_item) : ?>
                        <div class="postbox__slider-item swiper-slide">
                            <img src="<?php echo esc_url($gallery_item['url']); ?>" alt="<?php echo esc_attr($item['alt']); ?>">
                        </div>
                    <?php endforeach; ?>


                </div>
                <div class="postbox__nav">
                    <button class="postbox-slider-button-next"><i class="fa-regular fa-angle-right"></i></button>
                    <button class="postbox-slider-button-prev"><i class="fa-regular fa-angle-left"></i></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="postbox__content">
            <?php get_template_part('template-parts/blog/post-meta'); ?>
            <h3 class="postbox__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="postbox__text">
                <?php the_excerpt(); ?>
            </div>
            <div class="postbox__read-more">
                <a href="<?php the_permalink(); ?>" class="tp-btn">read more</a>
            </div>
        </div>
    </article>
<?php endif; ?>