<?php

get_header();

global $post;

?>
    <!-- Masthead-->
    <header class="masthead" style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url("<?php echo( get_post_meta( $post->ID,'gs_first_section_back_image', true ) );?>");' >
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase"><?php echo( get_post_meta( $post->ID,'gs_first_section_title', true ) ); ?></h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5"><?php echo( get_post_meta( $post->ID,'gs_first_section_desc', true ) ); ?></h2>
                    <a class="btn btn-primary" href="<?php echo( get_post_meta( $post->ID,'gs_first_section_btn_link', true ) ); ?>"><?php echo( get_post_meta( $post->ID,'gs_first_section_btn', true ) ); ?></a>
                </div>
            </div>
        </div>
    </header>

    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4"><?php echo(get_post_meta($post->ID, 'gs_second_section_title', true)); ?></h2>
                    <p class="text-white-50">
                       <?php echo(get_post_meta($post->ID, 'gs_second_section_desc', true)); ?>
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="<?php echo(get_post_meta($post->ID, 'gs_second_section_img', true));?>" alt="..." />
        </div>
    </section>

<?php
get_footer();

?>