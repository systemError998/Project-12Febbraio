<?php

function cinema_movie_director_remove_customize_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'film_maker_lite_slider_top_content' );
    $wp_customize->remove_control( 'film_maker_lite_slider_top_content' );

}
add_action( 'customize_register', 'cinema_movie_director_remove_customize_register', 11 );

function cinema_movie_director_customize_register( $wp_customize ) {

    // Register the custom control type.
    $wp_customize->register_control_type( 'Cinema_Movie_Director_Toggle_Control' );

    // Film Category Section
    $wp_customize->add_section( 'cinema_movie_director_category_section' , array(
        'title'      => __( 'Film Category Section Settings', 'cinema-movie-director' ),
        'priority' => 10,
        'panel' => 'film_maker_lite_panel_id'

    ) );

    $wp_customize->add_setting( 'cinema_movie_director_film_category_show_hide', array(
        'default'           => false,
        'transport'         => 'refresh',
        'sanitize_callback' => 'film_maker_lite_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new Cinema_Movie_Director_Toggle_Control( $wp_customize, 'cinema_movie_director_film_category_show_hide', array(
        'label'       => esc_html__( 'Show / Hide section', 'cinema-movie-director' ),
        'section'     => 'cinema_movie_director_category_section',
        'type'        => 'toggle',
        'settings'    => 'cinema_movie_director_film_category_show_hide',
    ) ) );

    $wp_customize->add_setting('cinema_movie_director_film_category_heading',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cinema_movie_director_film_category_heading',array(
        'label' => esc_html__('Section Title ','cinema-movie-director'),
        'section'   => 'cinema_movie_director_category_section',
        'type'      => 'text'
    ));

    $wp_customize->add_setting('cinema_movie_director_film_category_heading_text',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cinema_movie_director_film_category_heading_text',array(
        'label' => esc_html__('Section Text ','cinema-movie-director'),
        'section'   => 'cinema_movie_director_category_section',
        'type'      => 'text'
    ));

    $wp_customize->add_setting('cinema_movie_director_category_increament',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('cinema_movie_director_category_increament',array(
        'label' => esc_html__('Category Box Increament','cinema-movie-director'),
        'section'   => 'cinema_movie_director_category_section',
        'type'      => 'number',
        'input_attrs' => array(
            'step'             => 1,
            'min'              => 0,
            'max'              => 12,
        ),
    ));

    $category = get_theme_mod('cinema_movie_director_category_increament');

    for ($i=1; $i <= $category ; $i++) {

        $wp_customize->add_setting('cinema_movie_director_category_box_icon'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('cinema_movie_director_category_box_icon'.$i,array(
            'label' => esc_html__('Icon ','cinema-movie-director').$i,
            'description' => esc_html__('Ex: fab fa-500px','cinema-movie-director'),
            'section'   => 'cinema_movie_director_category_section',
            'type'      => 'text'
        ));

        $wp_customize->add_setting('cinema_movie_director_category_box_title'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('cinema_movie_director_category_box_title'.$i,array(
            'label' => esc_html__('Title ','cinema-movie-director').$i,
            'section'   => 'cinema_movie_director_category_section',
            'type'      => 'text'
        ));

        $wp_customize->add_setting('cinema_movie_director_category_box_text'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('cinema_movie_director_category_box_text'.$i,array(
            'label' => esc_html__('Text ','cinema-movie-director').$i,
            'section'   => 'cinema_movie_director_category_section',
            'type'      => 'text'
        ));
    }
}
add_action( 'customize_register', 'cinema_movie_director_customize_register' );
