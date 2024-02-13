<?php 
/*
* Display Logo and contact details
*/
?>

<span class="media-links mb-3 mb-md-0">
  <?php if( get_theme_mod( 'film_maker_lite_facebook_url' ) != '' || get_theme_mod( 'film_maker_lite_twitter_url' ) != '' || get_theme_mod( 'film_maker_lite_instagram_url' ) != '' || get_theme_mod( 'film_maker_lite_youtube_url' ) != '' || get_theme_mod( 'film_maker_lite_pint_url' ) != '') { ?>
    <span class="pr-5"><?php esc_html_e('CONNECT WITH US','film-maker-lite'); ?></span>
    <?php if( get_theme_mod( 'film_maker_lite_facebook_url' ) != '') { ?>
      <a href="<?php echo esc_url( get_theme_mod( 'film_maker_lite_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('film_maker_lite_facebook_icon','fab fa-facebook-f')); ?> mr-2"></i></a>
    <?php } ?>
    <?php if( get_theme_mod( 'film_maker_lite_twitter_url' ) != '') { ?>
      <a href="<?php echo esc_url( get_theme_mod( 'film_maker_lite_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('film_maker_lite_twitter_icon','fab fa-twitter')); ?> mr-2"></i></a>
    <?php } ?>
    <?php if( get_theme_mod( 'film_maker_lite_instagram_url' ) != '') { ?>
      <a href="<?php echo esc_url( get_theme_mod( 'film_maker_lite_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('film_maker_lite_instagram_icon','fab fa-instagram')); ?> mr-2"></i></a>
    <?php } ?>
    <?php if( get_theme_mod( 'film_maker_lite_youtube_url' ) != '') { ?>
      <a href="<?php echo esc_url( get_theme_mod( 'film_maker_lite_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('film_maker_lite_youtube_icon','fab fa-youtube')); ?> mr-2"></i></a>
    <?php } ?>
    <?php if( get_theme_mod( 'film_maker_lite_pint_url' ) != '') { ?>
      <a href="<?php echo esc_url( get_theme_mod( 'film_maker_lite_pint_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('film_maker_lite_pinterest_icon','fab fa-pinterest')); ?> mr-2"></i></a>
    <?php } ?>
  <?php } ?>
</span>
<?php if( get_theme_mod( 'film_maker_lite_phone_number' ) != '') { ?>
  <span class="call-text pr-5"><?php esc_html_e('CALL','film-maker-lite'); ?></span><span><i class="<?php echo esc_attr(get_theme_mod('film_maker_lite_phone_icon','fas fa-phone-volume')); ?> call-text mr-2"></i><?php echo esc_html( get_theme_mod('film_maker_lite_phone_number','')); ?></span>
<?php } ?>