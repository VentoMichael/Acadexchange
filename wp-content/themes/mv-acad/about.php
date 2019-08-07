<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<main>
<?php 
    
$image = get_field('banner');

if( !empty($image) ): ?>

    <img class="background height__background" src="<?php echo $image['url']; ?>" 
    srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/instructors_about_480.jpg 480w, http://acad.localhost/wp-content/themes/mv-acad/ressources/img/instructors_about_680.jpg 680w, http://acad.localhost/wp-content/themes/mv-acad/ressources/img/instructors_about_980.jpg 980w"
    alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
<section class="only__margin margin__section_about centermarg">
    <div class="flex__center title__about">
        <h2 class="h1_title"> 
            <?php the_field('title-section'); ?>
        </h2>
    </div>
    <div class="grid grid__gap_modify about__second__div">
        <div class="inherit">
<?php 

$image = get_field('image-first');

if( !empty($image) ): ?>

<img src="<?php echo $image['url']; ?>" 
srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/cisco-group-mixed-plaque_200.jpg 680w,http://acad.localhost/wp-content/themes/mv-acad/ressources/img/cisco-group-mixed-plaque_300.jpg 980w" style="max-width:600px; align-self: center;" class="center__img" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
            <p class="margin__top_bottom grid__p__width less__margin__one">
                <?php the_field('texte-first'); ?>
            </p>
           
        </div>
        <div class="inherit grid__p__width2">
<?php 
    
$image = get_field('image-second');

if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" 
    srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/lot_of_student-300_200.jpg 680w, http://acad.localhost/wp-content/themes/mv-acad/ressources/img/lot_of_student-300_300.jpg 980w" style="max-width:600px; align-self: center;" class="center__img" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
            <p class="grid__p__width less__margin__two">
               <?php the_field('texte-second'); ?>
            </p>
            </div>
           <div class="inherit">
<?php 
    
$image = get_field('image-third');

if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" 
    srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/hands_up-300_200.jpg 680w,
                http://acad.localhost/wp-content/themes/mv-acad/ressources/img/hands_up-300.jpg 980w"
                style="max-width:600px; align-self: center;" class="center__img"
    alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

                <p class="grid__p__width less__margin__three">
                   <?php the_field('texte-third'); ?>
               </p>
        </div>
    </div>
</section>
<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
<?php get_footer(); ?>