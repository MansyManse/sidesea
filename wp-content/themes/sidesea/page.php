<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<section id="about">
    <div class="about-title">
        <i class="show-for-small-only fas fa-id-card fa-2x"></i><h2>About Me</h2>
    </div>
    <div class="about-details">
         <div class="about-info">
            <div class="about-name">
                <h3><?php echo get_option('about_name'); ?></h3>
            </div>
            <div class="about-roles info">
                 <i class="fas fa-code fa-2x"></i><span><?php echo get_option('about_roles'); ?></span>
            </div>
            <div class="about-roles-2 info">
                <i class="fas fa-user-tie fa-2x"></i><span><?php echo get_option('about_roles_2'); ?></span>
             </div>
             <div class="about-roles-2 info">
                <i class="fas fa-globe-asia fa-2x"></i><span><?php echo get_option('about_country'); ?></span>
             </div>
        </div>
        <div class="about-icon show-for-medium">
            <i class="fas fa-id-card fa-5x"></i>
        </div>
    </div>
</section>
<section id="quote">
    <div class="leftquote">
        <i class="fas fa-quote-left fa-4x"></i>
    </div>
    <div class="quote">
        <p><?php echo stripslashes(get_option('about_quote')); ?></p>
    </div>
    <div class="rightquote">
    <i class="fas fa-quote-right fa-4x"></i>
    </div>
</section>
<section id="contact">
    <div class="contact-title">
    <i class="show-for-small-only far fa-id-card fa-2x"></i><h2>Contact Me</h2>
    </div>
    <div class="contact-details">
        <div class="contact-icon show-for-medium">
            <i class="far fa-id-card fa-5x"></i>
        </div>
         <div class="contact-info">
            <div class="client-email info">
             <i class="fas fa-envelope fa-2x"></i><span><?php echo get_option('client_email'); ?></span>
            </div>
            <div class="client-phone info">
             <i class="fas fa-phone fa-2x"></i><span><?php echo get_option('client_phone'); ?></span>
            </div>
            <div class="client-address info">
                <i class="fas fa-map-marker fa-2x"></i><span><?php echo get_option('client_address'); ?>, <?php echo get_option('client_city'); ?>, <?php echo get_option('client_state'); ?> <?php echo get_option('client_zip_code'); ?></span>
             </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
