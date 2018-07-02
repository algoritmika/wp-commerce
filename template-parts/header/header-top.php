<?php 
$wp_commerce_top_header_option = get_theme_mod( 'wp_commerce_top_header_option', 'show' );
if( $wp_commerce_top_header_option == 'show' ) :?>
    <div class="t-header">
        <div class="container">
            <div class="top-holder">
                <div class="row">
                    <div class="col-lg-4 sm-hidden">
                        <?php wp_commerce_top_header_items();?>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="language">
                            <?php echo do_shortcode( '[wcj_currency_select_drop_down_list]' );?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-8">
                        <ul class="top-link">
                            <li>
                                <?php esc_html_e( 'Welcome to','wp-commerce' );?> <?php esc_html(bloginfo('title'));?>
                            </li>
                            <li>
                                <?php if ( is_user_logged_in() ) { ?>
                                <a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') )); ?>" title="<?php esc_html_e('My Account','wp-commerce'); ?>"><?php esc_html_e('My Account','wp-commerce'); ?></a>
                                <?php } 
                                else { ?>
                                    <a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') )); ?>" title="<?php esc_html_e('Login / Register','wp-commerce'); ?>"><?php esc_html_e('Login / Register','wp-commerce'); ?></a>
                                    <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;