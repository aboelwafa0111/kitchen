<!-- ==================================== -->
<?php include 'header.php';?> 
<!-- ==================================== -->
<div class="header header-dark">
<a href="home.php" class="header-logo">Kitchen</a>
<a href="tel:0111111" class="header-icon header-icon-2"><i class="ion-ios-telephone"></i></a>
<a href="mailto:info@Kitchen.com" class="header-icon header-icon-1"><i class="ion-ios-email"></i></a>
</div>
<div class="page-login content">
   <div class="page-login-input">
      <i class="login-icon ion-person"></i>
      <input type="text" value="" placeholder="Name">
   </div>
   <div class="page-login-input">
      <i class="login-icon ion-ios-telephone""></i>
      <input type="number" value="Phone Number" placeholder="Phone Number">
   </div>
   <div class="page-login-input">
      <i class="login-icon ion-ios-calendar-outline"></i>
      <input class="set-today" type="date">
   </div>
   <div class="page-login-input">
      <i class="login-icon ion-ios-download-outline"></i>
      <input type="text" value="" placeholder="Counter">
   </div>
   <div class="page-login-input">
      <i class="login-icon ion-location"></i>
      <input type="text" value="" placeholder="City">
   </div>
   <div class="page-login-input">
      <select name="gender">
         <option disabled="disabled" selected="selected">GENDER</option>
         <option>Male</option>
         <option>Female</option>
      </select>
      <div class="select-dropdown"></div>
   </div>
   <a href="home.php" class="button button-green button-icon button-full half-top full-bottom"><i class="ion-log-in"></i>Submit</a>
   <div class="decoration full-top"></div>
   <a href="login.php" class="button button-blue button-icon button-full half-top full-bottom"><i class="ion-person"></i>Login Here</a>
</div>
<!-- ==================================== -->
<?php include 'footer.php';?> 
<!-- ==================================== -->