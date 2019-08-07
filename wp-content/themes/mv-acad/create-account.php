<?php /* Template Name: create-account */ ?>
<?php get_header(); ?>
<main>
    <section class="only__margin margin__create_account centermarg">
    <h2 class="baseline__title border__bottom without__margin">
        Netacad - login / create account
    </h2>







    <form action="#">

        <div class="content__form grid grid__gap fewer__criteria baseline">
            <div class="content__two input__label width__div">
                <label for="first_name" class="left input__label">First name</label>
                <input required type="text" name="first_name" id="first_name" class="name_two">
            </div>
            <div class="content__two input__label width__div div__last_n">
                <label for="lastname" class="left input__label">Last name</label>
                <input type="text" name="lastname" id="lastname" required class="name_two">
            </div>
        </div>
        <div class="content__form margin__thirty create__a_email div-mail-select">
            <div class="content__two div-select div-select-way selectarrow-d">
                <label for="myselect">Who are you ?</label>
                <div id="frmMyform">
                 <select class="select-c-a" style="border-radius: 7px;
                border: 2px solid black !important;
                padding: 7px 5px;
                width: 100%;" title="Select an option of what you are" name="selMyList" id="myselect" onchange="showHide(this)">
                       <option value="" selected disabled>Choose an option  </option>
                       <option value="1">Academy instructor</option>
                       <option value="2">CSR manager</option>
                       <option value="3">Other contributor</option>
                 </select>

 <div class="div1 div-table" id="div1">
        <span class="title-border">
            Academy instructor
        </span>
        <select class="margin-table" title="How many time do you use Acadexchange" name="instructor" id="iuse-acad">
          <option value="" selected disabled>I used Acadexchange since </option>
           <option value="1">Academy instructor</option>
           <option value="2">CSR manager</option>
           <option value="3">Other contributor</option>
        </select>
        <select class="margin-table" title="How many time do your students use Acadexchange" name="instructor" id="s-use-acad">
          <option value="" selected disabled>My student use Acadexchange since </option>
           <option value="1">Academy instructor</option>
           <option value="2">CSR manager</option>
           <option value="3">Other contributor</option>
        </select>
        <select class="margin-table last-border" title="Select your level" name="instructor" id="level-acad">
          <option value="" selected disabled>Select your level </option>
           <option value="1">Academy instructor</option>
           <option value="2">CSR manager</option>
           <option value="3">Other contributor</option>
        </select>
        <textarea name="introduce-ai" title="Write a little description of yourself" cols="30" rows="10" placeholder="Introduce yourself"></textarea>
</div>
 <div class="div2 div-table" id="div2">
     <span class="title-border">
            CSR manager
        </span>
        <input class="margin-table" title="Write your company name, here" placeholder="Company name :" type="text">
        <select class="margin-table" title="How many time do your students use Acadexchange" name="instructor" id="csr">
          <option value="" selected disabled>My student use Acadexchange since </option>
           <option value="1">Academy instructor</option>
           <option value="2">CSR manager</option>
           <option value="3">Other contributor</option>
        </select>
        <select class="margin-table last-border" title="Select your level" name="instructor" id="level-csr">
          <option value="" selected disabled>Select your level </option>
           <option value="1">Academy instructor</option>
           <option value="2">CSR manager</option>
           <option value="3">Other contributor</option>
        </select>
        <textarea name="introduce-csr" cols="30" rows="10" title="Write a little description of yourself" placeholder="Introduce yourself"></textarea>
 </div>
 <div class="div3 div-table" id="div3">
    <span class="title-border border-bottom-table">
            Other contributor
        </span>
<textarea name="introduce-oc" cols="30" rows="10" title="Write a little description of yourself" placeholder="Introduce yourself"></textarea>
 </div>
            
</div>

            </div>
            <div class="content__two div-create-select">
                    <label for="email" class="left">Email adress</label>
                    <input type="email" required name="email" id="email">
                </div>
        </div>
            <div class="content__form grid grid__gap fewer__criteria baseline div__password">
                <div class="content__two input__label password__div width__div">
                    <label for="password" class="left input__label">Password</label>
                    <input type="password" name="password" required id="password" class="name_two">
                </div>
                <div class="content__two input__label width__div confirmpassword__div">
                    <label for="confirmpassword" class="left input__label confirmpassword">Confirm password</label>
                    <input type="password" name="confirmpassword" required id="confirmpassword" class="name_two">
                </div>
            </div>
       <div class="relatif__password__div">
            <ul class="margin-bottom">
               <li class="password__criteria">&bullet; Minimum 8 characters</li>
               <li class="password__criteria">&bullet; Minimum 1 capital</li>
               <li class="password__criteria">&bullet; Minimum 1 special character</li>
           </ul>
       </div>
       
  


        <p class="checkbox-red">
            * Every checkbox are important, please don't forget them.
        </p>
        <!-- 


            camptcha + flex two collumns
             

             ?-->
        <div class="g-recaptcha">
             
        </div>
        <section>
            <h2>
                At the end of inscription
            </h2>
            <p>
                At the end of this form, do not forget that you will receive an email in your inbox and you must validate your account by clicking on the link. It will be operational in few days that your request is validated
            </p>
        </section>
        <p class="margin__less">By clicking "Create account", you agree to our <a href="terms-condition.php" class="blue">Terms and conditions </a>and read our <a href="privacy-statement.php" class="blue">Privacy statement.</a></p>
        <input type="submit" value="Create account" class="submit no__margin margin-bottom submit__create__a">
    </form>
</section>
<script>
  function showHide(elem) {
    if(elem.selectedIndex != 0) {
         //hide the divs
         for(var i=0; i < divsO.length; i++) {
             divsO[i].style.display = 'none';
        }
        //unhide the selected div
        document.getElementById('div'+elem.value).style.display = 'flex';
    }
}
 
window.onload=function() {
    //get the divs to show/hide
    divsO = document.getElementById("frmMyform").getElementsByTagName('div');
}
</script>
</main>
<?php get_footer(); ?>