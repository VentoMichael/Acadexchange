<?php /* Template Name: login */ ?>
<?php get_header(); ?>
<main>
<section class="only__margin centermarg">
    <h2 class="baseline__title border__bottom">
        Netacad - login / create account
    </h2>
    <form action="#" method="post">
        <div class="content__form div_flex div_login">
            <label for="email" class="left">Email adress</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="content__form content__two div_flex div_login">
            <label for="password" class="left">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
        <div class="position__flex">
            <a href="forgot-password" class="blue">Forgot your password ?</a>
            <a href="create-account" class="border__around blue">Create an account ?</a>
        </div>
    </div>
        <input type="submit" value="Log in" class="submit margin-bottom submit__login">
    </form>



</section>
<?php get_footer(); ?>