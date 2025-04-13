<?php
$id       = get_theme_mod('onepress_about_id', 'about');
$disable  = get_theme_mod('onepress_about_disable') == 1 ? true : false;
$title    = get_theme_mod('onepress_about_title', esc_html__('About Us', 'onepress'));
$subtitle = get_theme_mod('onepress_about_subtitle', esc_html__('Section subtitle', 'onepress'));
$desc     = get_theme_mod('onepress_about_desc');
if (onepress_is_selective_refresh()) {
    $disable = false;
}
// Get data
$page_ids = onepress_get_section_about_data();
$content_source = get_theme_mod('onepress_about_content_source');

?>
<?php if (! $disable) { ?>
    <?php if (! onepress_is_selective_refresh()) { ?>
        <section id="<?php if ($id != '') {
                            echo esc_attr($id);
                        }; ?>" <?php do_action('onepress_section_atts', 'about'); ?> class="<?php echo esc_attr(apply_filters('onepress_section_class', 'section-about section-padding onepage-section', 'about')); ?>">
        <?php } ?>

        <div class="<?php echo esc_attr(apply_filters('onepress_section_container_class', 'container', 'about')); ?>">
            <?php if ($title || $subtitle || $desc) { ?>
                <div class="section-title-area">
                    <?php if ($subtitle != '') {
                        echo '<h5 class="section-subtitle">' . esc_html($subtitle) . '</h5>';
                    } ?>
                    <?php if ($title != '') {
                        echo '<h2 class="section-title">' . esc_html($title) . '</h2>';
                    } ?>
                    <?php if ($desc != '') {
                        echo '<div class="section-desc">' . wp_kses_post(apply_filters('onepress_the_content', $desc)) . '</div>';
                    } ?>
                </div>
            <?php } ?>
            
                <?php echo do_shortcode('[display_hostings]'); ?>
            
        </div>
        <?php do_action('onepress_section_after_inner', 'about'); ?>
        <?php if (! onepress_is_selective_refresh()) { ?>
        </section>
    <?php } ?>
<?php }
