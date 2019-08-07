<?php /* Template Name: academy-twinning */ ?>
<?php get_header(); ?>
<main class="stick">
<div id="container" class="chartdiv"></div>
<section class="background__white section__twin">
    <h2 class="hidden">Process to twin</h2>
    <form action="#" class="centermarg only__margin">
        <fieldset>
            <legend class="legend__twinning text-align">
            How to start the process ?
            </legend>
            <input type="submit" value="Start the twinning" class="submit title__submit submit_act">
            
            <div class="content__form grid no__gap fewer__criteria baseline div__academy__student">
                <div class="content__two input__label margin_bottom div__academy_n">
                    <label for="academy_name" class="left input__label min__width label__big">Academy name</label>
                    <input required type="text" name="academy_name" id="academy_name" class="name width__input">
                </div>
                <div class="content__two input__label div_average_student">
                    <label for="student_age" class="left input__label min__width label__big label_at">Age of students</label>
                   <div class="select">
                        <select required class="select name width__input" id="student_age">
                           <option selected disabled value="">Choose an option</option>
                           <option value="18-25">18-25</option>
                           <option value="25-35">25-35</option>
                           <option value=">35">35</option>
                       </select>
                   </div>
                </div>
            </div>
            <div class="flex__no__width">
                <label class="table__label" for="expectations">Expectations</label>
                <textarea required name="expectations" id="expectations" class="width__define" cols="10" rows="10"></textarea>
            </div>
            <div class="content__form grid no__gap fewer__criteria baseline">
            <div class="content__two input__label div__student_age">
                <label for="student_level" class="left input__label min__width label__big">Students level</label>
                <div class="select">
                    <select required class="select name width__input" id="student_level">
                        <option selected disabled value="">Choose an option</option>
                        <option value="CCNA_R&S_introduction_networks">CCNA R&S: Introduction to networks</option>
                        <option value="CCNA_R&S_routing_switching_fundamentals">CCNA R&S: Routing and Switching Fundamentals</option>
                        <option value="CCNA_R&S_connecting_networks">CCNA R&S: Connecting Networks</option>
                        <option value="CCNA_R&S_scaling_networks">CCNA R&S: Scaling Networks</option>
                        <option value="CCNP ROUTE">CCNP ROUTE</option>
                        <option value="CCNP SWITCH">CCNP SWITCH</option>
                        <option value="CCNP TSHOOT">CCNP TSHOOT</option>
                    </select>
                </div>
            </div>
                <div class="content__two input__label margin__top div__languages">
                    <label for="preferred_language" class="left input__label min__width label__big">Preferred language</label>
                    <div class="select">
                        <select required class="select name width__input" id="preferred_language">
                            <option selected disabled value="">Choose an option</option>
                            <option value="English">English</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                            <option value="Italian">Italian</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
    <section style="margin-top: 70px;">
        <h2 class="hidden">
           Example of architecture
        </h2>
        <section class="architecture__exemple centermarg only__margin">
            <h3>
                Example of merging an academy A to another academy named B
            </h3>
            <img srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/acad_a_b_300.jpg 680w,
                http://acad.localhost/wp-content/themes/mv-acad/ressources/img/acad_a_b_350.jpg 980w" 

                src="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/acad_a_b.jpg" alt="Laboratory of an unknown academy to and another B">
        </section>
        <section class="architecture__exemple centermarg only__margin">
            <h3>
                Example of TwinBridge Architecture
            </h3>
            <img srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/acad_twinbridge_300.jpg 680w,
                http://acad.localhost/wp-content/themes/mv-acad/ressources/img/acad_twinbridge_350.jpg 980w" 

                src="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/acad_twinbridge.jpg" alt="laboratory of TwinBridge">
            <a style="margin-bottom: 50px;margin-top: -50px; text-align: center;" href="./ressources/pdf/AcadExchangeCDC15Feb19.pdf" class="submit" title="Click here to see the procedure that will allow you to build the TwinBridge">Want to see the procedure to build the TwinBridge ?</a>
        </section>
    </section>
</section>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world-continents.js"></script>
<script src="http://acad.localhost/wp-content/themes/mv-acad/ressources/js/map.js"></script>
<?php get_header(); ?>