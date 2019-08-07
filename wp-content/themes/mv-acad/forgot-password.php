<?php /* Template Name: forgot-password */ ?>
<?php get_header(); ?>
    <main>
    <section class="only__margin centermarg">
        <h2 class="baseline__title border__bottom">
            Netacad - login / create account
        </h2>
        <form action="#">
            <div class="content__form div_flex">
                <label for="email" class="left">Email adress</label>
                <input type="email" name="email" id="email">
            </div>
            <input type="submit" value="Send new password" class="submit no__margin submit__f_password">
        </form>
    </section>
<?php get_footer(); ?>