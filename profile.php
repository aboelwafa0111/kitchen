<!-- ==================================== -->
<?php include 'header.php';?> 
<!-- ==================================== -->
<div class="header header-dark">
<a href="home.php" class="header-logo">Kitchen</a>
<a href="tel:0111111" class="header-icon header-icon-2"><i class="ion-ios-telephone"></i></a>
<a href="mailto:info@Kitchen.com" class="header-icon header-icon-1"><i class="ion-ios-email"></i></a>
</div>

<div class="profile-page-2 full-bottom">
<div class="profile-page-2-cover">
<img class="preload-image responsive-image" data-original="images/pictures/9.jpg" src="images/pictures/9.jpg" alt="img" style="display: block;">
</div>
<div class="profile-page-2-thumbnail">
 <input type="file" class="file-upload" name="pic"  accept="image/*">
<div><img class="preload-image profile-pic responsive-image" src="images/add.png" alt="img" style="display: block;"></div>
<h2 class="add_photo">Add Photo</h2>
</div>
<div class="content">
<div class="profile-page-2-header">
<h1>Ahmed Mohamed</h1>
<em>0123456789</em>
<strong><i class="ion-ios-calendar-outline"></i>30 March 1900</strong>
<strong><i class="ion-ios-location"></i>Egypt, Cairo</strong>
<a href="Registration.php" class="button button-round button-blue profile-page-button-1">Edit</a>
</div>
</div>


</div>
<!-- ==================================== -->
<?php include 'footer.php';?> 
<!-- ==================================== -->

<script type="text/javascript">
	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });

});
</script>