<?php
/*
* Template Name: FrontPage
*/	
get_header();	

get_template_part( 'sections/woocommerce','banner' );
get_template_part( 'sections/woocommerce','banner-btm' );
get_template_part( 'sections/woocommerce','feature-product' );
get_template_part( 'sections/woocommerce','new-arrival' );
get_template_part( 'sections/woocommerce','hot-product' );
get_template_part( 'sections/woocommerce','services' );
get_template_part( 'sections/woocommerce','news' );

get_footer(); 