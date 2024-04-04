<!-- offcanvas area start -->

<?php
$harry_side_logo_switch = get_theme_mod('harry_side_logo_switch', true);

?>

<div class="offcanvas__area offcanvas__area-1">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__shape">
            <img class="offcanvas__shape-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/offcanvas-shape-1.png" alt="">
        </div>
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <?php if (!empty($harry_side_logo_switch)) : ?>
                <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <?php harry_side_logo(); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="mobile-menu fix d-lg-none"></div>
            <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
                <nav>
                    <?php harry_side_menu(); ?>
                </nav>
            </div>
            <div class="offcanvas__btn">
                <a href="contact.html" class="tp-btn-offcanvas">Getting Started <i class="fa-regular fa-chevron-right"></i></a>
            </div>
            <div class="offcanvas__social">
                <h3 class="offcanvas__social-title">Follow :</h3>
                <?php harry_social(); ?>
            </div>
            <div class="offcanvas__contact">
                <p class="offcanvas__contact-call"><a href="tel:+964-742-44-763">+964 742 44 763</a></p>
                <p class="offcanvas__contact-mail"><a href="mailto:info@harry.com">info@harry.com</a></p>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->