<?php

$home_top_section_background = get_field( 'home_header_background' ); // Image ID

?>

<div class="header-image">
    
    <?php echo wp_get_attachment_image( $home_top_section_background, 'full', false, array('class'=>'img-fluid') ); ?>
    
</div>
