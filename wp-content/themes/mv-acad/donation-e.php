<?php /* Template Name: donation-e */ ?>
<?php get_header(); ?>
    <div style="
    margin:0;
    padding:0;
    background: url(http://acad.localhost/wp-content/themes/mv-acad/ressources/img/2student_work.jpg) no-repeat center fixed; 
    -webkit-background-size: cover;
    background-size: cover;
    margin-top: 15px;">
        <main>
        <section class="reference white">
            <?php 
        
            $image = get_field('banner');
        
            if( !empty($image) ): ?>
        
                <img class="background margin__picture height__background" src="<?php echo $image['url']; ?>" 
                srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/router-Cisco_480.jpg 480w,
                    http://acad.localhost/wp-content/themes/mv-acad/ressources/img/router-Cisco_680.jpg 680w,
                    http://acad.localhost/wp-content/themes/mv-acad/ressources/img/router-Cisco_980.jpg 980w" 
                alt="<?php echo $image['alt']; ?>" />
        
            <?php endif; ?>
        
        
        
        
            <div class="content__blue">
                <h2>
                    <?php the_field('title-content-blue'); ?>
                </h2>
                <p class="small__text">
                    <?php the_field('text-content-blue'); ?>
                </p>
            </div>
        </section>
        <section class="background__white">
            <div class="flex__center">
                <h3 class="title__top">
                    <?php the_field('title-section'); ?>
                </h3>
                <div class="flex-svg">
                    <img class="img-svg-file svg-donate" src="http://acad.localhost/wp-content/uploads/2019/08/donation-model.svg" alt="">
                    <div>
                        <p class="p200 p200-1">
                            <?php the_field('explication-1'); ?>
                        </p>
                        <p class="p200 p200-2">
                            <?php the_field('explication-2'); ?>
                        </p>
                        <p class="p200 p200-3">
                            <?php the_field('explication-3'); ?>
                        </p>
                        <p class="p200 p200-4">
                            <?php the_field('explication-4'); ?>
                        </p>
                        <p class="p200 p200-5">
                            <?php the_field('explication-5'); ?>
                        </p>
                    </div>
                </div>
        
        
            </div>
            <a class="white" href="<?php the_field('link-need'); ?>">
                <p class="background__blue bck_blue_donate white hover">
                    <?php the_field('text-needyou'); ?>
                    <span><?php the_field('text-little-border'); ?></span>
                </p>
            </a>
        </section>
        <div class="background__image">
            
        </div>
    </div>
    <?php get_footer(); ?>