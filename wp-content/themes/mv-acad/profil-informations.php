<?php /* Template Name: profil-informations */ ?>
<?php get_header(); ?>
    <section class="only__margin margin__create_account centermarg">
    <h2 class="baseline__title border__bottom without__margin">
        Personal informations
    </h2>
    <form action="#">


        <div class="content__form margin-top-profil profil-form grid grid__gap fewer__criteria baseline">
            <div class="content__two input__label width__div">
                <label for="first_name-profil" class="left input__label">First name</label>
                <input required type="text" name="first_name" id="first_name-profil" class="name_two">
            </div>
            <div class="content__two input__label width__div div__last_n">
                <label for="lastname-profil" class="left input__label">Last name</label>
                <input type="text" name="lastname" id="lastname-profil" required class="name_two">
            </div>
        </div>
        <div class="content__form profil-form grid grid__gap fewer__criteria baseline">
            <div class="content__two input__label width__div">
                <label for="emaile" class="left input__label">Email adress</label>
                <input required type="email" name="emaile" id="emaile" class="name_two">
            </div>
            <div class="content__two input__label width__div div__last_n">
                <label for="password" class="left input__label">Password</label>
                <input type="password" name="password" id="password" required class="name_two">
            </div>
        </div>

        <div class="content__form profil-form grid grid__gap fewer__criteria baseline">
            <div class="content__two input__label width__div">
                <label for="person" class="left input__label min__width">Who I am</label>
                    <select style="border-radius: 7px; border: 2px solid black !important; padding: 7px 5px; width: 100%;" class="select name" id="person" name="person">
                        <option disabled value="Other">Other contributor</option>
                        <option disabled value="Cisco">Cisco academy</option>
                        <option disabled value="CSR">CSR manager</option>
                    </select>
            </div>
            <div class="content__two input__label width__div div__last_n">
                <label for="country" class="left input__label min__width">Country</label>
                <input type="text" name="country" id="country"  class="name">
            </div>
        </div>
        <input type="submit" value="Edit information" class="margin-top-profil submit no__margin submit__profil_i">
    </form>
</section>
<?php get_footer(); ?>