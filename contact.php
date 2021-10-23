
  <?php
  include_once('head.php');
  ?>
  
  <aside id="colorlib-hero" class="hero">
    <div class="flexslider">
      <ul class="slides">
        <li style="background-image: url(images/mn4.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center slider-text">
                <div class="slider-text-inner">
                  <h1>Contact <strong>Us</strong></h1>
              
                </div>
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>

  <div id="colorlib-appointment">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="line-block">Make an appointment</h2>
          <p class="line-block"><a href="#" class="btn btn-primary btn-outline btn-cta">Book an Appointment <i class="icon-calendar3"></i></a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="colorlib-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 animate-box">
          <h3>Contact Information</h3>
          <div class="row contact-info-wrap">
            <div class="col-md-4">
              <p><span><i class="icon-location"></i></span> Liss Mind Fitness Studio, <br> Old Rams Hospital Compound,Lekshminada,Kollam,<br>Kerala-691013</p>
            </div>
            <div class="col-md-4">
              <p><span><i class="icon-phone"></i></span> 9446478726<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0474-279172</p>
            </div>
            <div class="col-md-4">
              <p><span><i class="icon-mail"></i></span> <a href="prdcindia@gmail.com">prdcindia@gmail.com</a></p>
            </div>
          
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1 animate-box">
          <h3>Get In Touch</h3>
          <form action="contactmail.php" method="post">
            <div class="row form-group">
              <div class="col-md-6">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control mb" placeholder="Your firstname">
              </div>
              <div class="col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" id="lname"  name="lname" class="form-control" placeholder="Your lastname">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="email">Email</label>
                <input type="email" id="email" name="mail" class="form-control" placeholder="Your email address">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="message">Message</label>
                <textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
              </div>
            </div>
            <div class="form-group text-center">
              <input type="submit" name="send" value="Send Message" class="btn btn-primary">
            </div>

          </form>   
        </div>
      </div>
    </div>
  </div>

  <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.769721180542!2d76.57588601410427!3d8.900988593433212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05fc4cbfffffff%3A0xaefa46c4409f4c8f!2sLISS%20Mind%20Fitness%20Studio%20-%20Psychologist!5e0!3m2!1sen!2sin!4v1573460987164!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
  
<?php
include_once('footer.php');
?>

