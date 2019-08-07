<?php /* Template Name: donation */ ?>
<?php get_header(); ?>
<main>
    <img class="background" 
    srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/router-Cisco_480.jpg 480w,
                http://acad.localhost/wp-content/themes/mv-acad/ressources/img/router-Cisco_680.jpg 680w,
                http://acad.localhost/wp-content/themes/mv-acad/ressources/img/router-Cisco_980.jpg 980w"
    src="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/router-Cisco.jpg" alt="Image representing young happy students">
    <section class="background__white only__margin centermarg">
    <div class="flex__center no__flex">
        <h2 class="width__big">
            How to start the process&nbsp;?
        </h2>
        <section>
            <h3 class="width__big">
                Eligible equipment
            </h3>
        </section>
        <div class="grid__three">
            <div>
                <ol class="cisco__list">
                    <li class="cisco__title">
                        Cisco routers
                    </li>
                    <li class="cisco__item">
                        &bullet; 1700 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 1800 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 1900 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 2600 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 2800 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 2900 series
                    </li>
                </ol>
            </div>
            <div>
                <ol class="cisco__list">
                    <li class="cisco__title">
                        Cisco switches
                    </li>
                    <li class="cisco__item">
                        &bullet; 2950 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 2960 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 3550 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 3560 series
                    </li>
                    <li class="cisco__item">
                        &bullet; 3750 series
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <form class="form__file" action="#">
        <div class="content__form grid no__gap fewer__criteria baseline no__center align-items">
            <div class="content__two input__label position__relatif content-select">
                <div class="content__two">
                <label for="email" class="left input__label min__width label__receive label__width">Which equipment would you like to donate</label>
                    <div class="select select-donation" style="padding: 0;">
                        
                        <select required class="select name select__donation" id="email" name="student_level">
                            <option selected disabled value="">Choose an option</option>
                            <option value="Cisco-routers-1700-series">Cisco routers 1700 series</option>
                            <option value="Cisco-routers-1800-series">Cisco routers 1800 series</option>
                            <option value="Cisco-routers-1900-series">Cisco routers 1900 series</option>
                            <option value="Cisco-routers-2600-series">Cisco routers 2600 series</option>
                            <option value="Cisco-routers-2800-series">Cisco routers 2800 series</option>
                            <option value="Cisco-routers-2900-series">Cisco routers 2900 series</option>
                            <option value="Cisco-routers-2950-series">Cisco routers 2950 series</option>
                            <option value="Cisco-routers-2960-series">Cisco routers 2960 series</option>
                            <option value="Cisco-switches-3550-series">Cisco switches 3550 series</option>
                            <option value="Cisco-switches-3560-series">Cisco switches 3560 series</option>
                            <option value="Cisco-switches-3750-series">Cisco switches 3750 series</option>
                        </select>
                    </div>
                </div>
                <div class="content__two input__label leave__video_div">
                    <fieldset class="fieldset__donation">
                        <legend style="font-size: 1.2em; font-weight: bold;">
                            It's functionnal ?
                        </legend>
                        <p>
                        Please upload a picture of the functional equipment
                        </p>
                        <input required type="file" name="pic" class="input input_donation_add" accept="image/*"title="Put your file here">
                    </fieldset>
                </div>
            </div>
        </div>
            <div class="description-textarea-d">
                <label for="shortde">Please shortly describe the equipment you donate.</label>
                <textarea required name="shortde" id="shortde" cols="30" rows="10"></textarea>
            </div>
        <input type="submit" value="Submit" class="submit__donation submit no__margin">
    </form>
    
</section>
<?php get_footer(); ?>