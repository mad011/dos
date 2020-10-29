<?php get_header(); ?>

<?php if (is_front_page()):
    get_template_part('/template-parts/homepage/section');
    get_template_part('/template-parts/homepage/query');
    get_template_part('/template-parts/homepage/slider');
    get_template_part('/template-parts/homepage/fiesta');
    get_template_part('/template-parts/homepage/testimonial');
    ?>
<?php endif; ?>
<?php get_footer(); ?>
