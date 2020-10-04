<div class="footer_main clearfix">
  <section id="footer_bottom">
    <div class="container">
         <div class="footer_right">
        <p>
          <a href="#">Home</a>
          <a href="#">About Us</a>
          <a href="#">Services</a>
          <a href="#">Register</a>
          <a href="#">Contact Us</a>
        </p>
        <div class="footer_right_inner clearfix">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>       
        </div>
      </div>
     
     
      <div class="row">
        <div class="footer_bottom clearfix">
          <div class="col-sm-7">
            <div class="footer_bottom_left">
            <p> © 2020 Your Website Name. All Rights Reserved | Design by <a href="#">Company</a></p>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="footer_bottom_right text-right">
            <p><a href="#">Developed By <span>Company</span></a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- <div id="toTop" class="btn btn-info" style="display: block;"><span class="glyphicon glyphicon-chevron-up"></span>  Top</div> -->
 
<script>
$(document).ready(function(){
  $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
  $(window).scroll(function () {
    if ($(this).scrollTop() != 0) {
      $('#toTop').fadeIn();
    } else {
      $('#toTop').fadeOut();
    }
  }); 
$('#toTop').click(function(){
  $("html, body").animate({ scrollTop: 0 }, 600);
  return false;
});
});

</script>

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown(0);
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp(0);
            $(this).toggleClass('open');       
        }
    );
  
  /*****Fixed Menu******/
  var secondaryNav = $('.cd-secondary-nav'),
     secondaryNavTopPosition = secondaryNav.offset().top;
    $(window).on('scroll', function(){
      if($(window).scrollTop() > secondaryNavTopPosition ) {
        secondaryNav.addClass('is-fixed');  
      } else {
        secondaryNav.removeClass('is-fixed');
      }
    }); 
    
});
</script>
  
  
<script>
  $(document).ready(function(){
  var my_posts = $("[rel=tooltip]");

  var size = $(window).width();
  for(i=0;i<my_posts.length;i++){
    the_post = $(my_posts[i]);

    if(the_post.hasClass('invert') && size >=767 ){
      the_post.tooltip({ placement: 'left'});
      the_post.css("cursor","pointer");
    }else{
      the_post.tooltip({ placement: 'rigth'});
      the_post.css("cursor","pointer");
    }
  }
});
  </script>
  
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<!-- script for calender in register page -->
<script>
  var myCalendar;
  function doOnLoad() {
    myCalendar = new dhtmlXCalendarObject(["cal_1","cal_2", "cal_3"]);
  }
</script>
</body>
       
</html>
