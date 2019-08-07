
<?php /* Template Name: Home */ ?>
<?php get_header(); ?><div style="
    margin:0;
    padding:0;
    background: url(http://acad.localhost/wp-content/themes/mv-acad/ressources/img/lot_of_student.jpg) no-repeat center fixed; 
    -webkit-background-size: cover;
    background-size: cover;
    margin-top: 15px;">
    
        <main>
        <section class="background__index reference white section__first">
        <?php 
    
        $image = get_field('banner');
    
        if( !empty($image) ): ?>
    
            <img class="background img__home background__first height__background background__first_img" src="<?php echo $image['url']; ?>" 
            srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/student_working_480.jpg 480w,
                    http://acad.localhost/wp-content/themes/mv-acad/ressources/img/student_working_680.jpg 680w,
                    http://acad.localhost/wp-content/themes/mv-acad/ressources/img/student_working_980.jpg 980w"
            alt="<?php echo $image['alt']; ?>" />
    
        <?php endif; ?>
        <div class="content__blue content__blue_index">
            <h2><?php the_field('title-principal'); ?></h2>
                <p class="small__text">
                   <?php the_field('text-principal'); ?>
                </p>
        </div>
        </section>
        <section class="background__white">
        <div class="flex__center center__paragraphe">
            <h2 class="baseline__title title__top">
                <?php the_field('title-second'); ?>
            </h2>
            <div class="centermarg center_margin">
                        <p>
                        <?php the_field('text-second-1'); ?></p>
                <p>
                    <?php the_field('text-second-2'); ?></p>
            </div>
            <div class="picto">
    <a class="picto__1" href="<?php the_field('picto-one-link'); ?>">
        <?php 
        
        $image = get_field('picto-one');
        
        if( !empty($image) ): ?>
        
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        
        <?php endif; ?>
    </a>
    <a class="picto__2" href="<?php the_field('picto-two-link'); ?>">
        <?php 
        
        $image = get_field('picto-two');
        
        if( !empty($image) ): ?>
        
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        
        <?php endif; ?>
    </a>
    <a class="picto__3" href="<?php the_field('picto-three-link'); ?>">
        <?php 
        
        $image = get_field('picto-three');
        
        if( !empty($image) ): ?>
        
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        
        <?php endif; ?>
    </a>
    
            </div>
        </div>
        <a class="white" href="<?php the_field('link-need'); ?>">
            <p class="background__blue white hover">
                <?php the_field('text-needyou'); ?>
                <span><?php the_field('text-little-border'); ?></span>
            </p>
        </a>
        </section>
        <div class="background__image">
        </div>
</div>
    <?php get_footer(); ?>