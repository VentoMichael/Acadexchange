<?php /* Template Name: get-equipment */ ?>
<?php get_header(); ?>
<main>
    <img class="background" 
    srcset="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/3peopel_work__little_480.jpg 480w,
                http://acad.localhost/wp-content/themes/mv-acad/ressources/img/3peopel_work__little_680.jpg 680w,
                http://acad.localhost/wp-content/themes/mv-acad/ressources/img/3peopel_work__little_980.jpg 980w"
    src="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/3peopel_work__little.jpg" alt="Image representing young happy students">
    <section class="background__white only__margin centermarg">
        <div class="flex__center no__flex">
            <h2 class="width__big">
            How to start the process&nbsp;?
            </h2>
            <section>
                <h3 class="width__big">
                    Equipment you can receive
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
          <form action="#">       
              <div class="content__form grid no__gap grid__two grid__modify fewer__criteria baseline no__center grid__without_gap">
                  <div class="content__two content-ge input__label div__g_e_options">
                      <label for="which_equipment" class="left input__label min__width label__width">Which equipment would you like to get&nbsp;</label>
                      <div class="select select-donation">
                          <select required class="select name" id="which_equipment" name="student_level">
                              <option selected disabled value="">Choose an option</option>
                              <option value="3_routers_switches">3 routeurs et 3 switches</option>
                              <option value="6_routers_switches">6 routeurs et 6 switches</option>
                          </select>
                      </div>
                  </div>
                  <div class="content__two content-ge input__label without__margin_top div__g_e_options">
                      <label for="equipment_used-s" class="left input__label min__width label__width">How many hours in a week will it be used by students&nbsp;</label>
                      <div class="select select-donation">
                          <select required class="select name" id="equipment_used-s" name="student_level">
                              <option selected disabled value="">Choose an option</option>
                              <option value="<5">&lt;5</option>
                              <option value="5-10">5-10</option>
                              <option value="10-20">10-20</option>
                              <option value=">20">20</option>
                          </select>
                      </div>
                  </div>
                  <div class="content__two content-ge input__label div__g_e_options">
                      <label for="equipment_used-how" class="left input__label min__width label__width">How many students in a week are going to use this equipment&nbsp;?</label>
                     <div class="select select-donation">
                         <select required class="select name" id="equipment_used-how" name="student_level">
                              <option selected disabled value="">Choose an option</option>
                             <option value="<10">&lt;10</option>
                             <option value="10-20">10-20</option>
                             <option value="20-50">20-50</option>
                             <option value=">50">@50</option>
                         </select>  
                     </div>
                  </div>
              </div>
              <p class="attached">*One bundle is allowed per year and per academy</p>
              <input type="submit" value="Submit" class="submit no__margin submit__get_e submit__donation">
          </form>
    </section>
    <?php get_footer(); ?>