<?php
$author_id = get_the_author_meta('ID');
$author_bio = get_the_author_meta('description');
$author_facebook = get_the_author_meta('facebook_url');
$author_linkedin = get_the_author_meta('linkedin_url');
$author_avatar = get_avatar($author_id, 70);
$author_name = get_the_author_meta('display_name');




?>
<div class="postbox__author d-sm-flex align-items-start white-bg mb-95">
    <div class="postbox__author-thumb">
        <a href="<?php echo esc_url(get_author_posts_url($author_id)) ?>">
            <?php echo $author_avatar ?>
        </a>
        <!--@TODO: getting avatar code is not standard, check the reference wp theme for standard code  -->
    </div>
    <div class="postbox__author-content">
        <h3 class="postbox__author-title">
            <a href="<?php echo esc_url(get_author_posts_url($author_id)) ?>"><?php echo esc_html($author_name) ?></a>
        </h3>
        <p><?php echo esc_html($author_bio) ?></p>

        <div class="postbox__author-social d-flex align-items-center">
            <a href="<?php echo esc_url($facebook_url); ?>"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </div>
</div>