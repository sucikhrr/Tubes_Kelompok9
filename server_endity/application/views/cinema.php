<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cinema</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/movie/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/movie/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/movie/css/fontAwesome.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/movie/css/light-box.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/movie/css/templatemo-main.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script type="text/javascript" src="<?php echo base_url();?>assets/movie/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    
    <!-- <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div> -->
    
    
  
        <nav>
          <div class="logo">
              <h1 style="color: white; font-family: Apple Chancery, cursive;">Cinema</h1>
          </div>
          <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-film"></i> <em>Movie</em></a></li>
            <li><a href="#4"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>
          </ul>
        </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
                  <div class="col-md-3">
                      <div class="author-image">
                        <?php
                        foreach ($images as $data) {
                            if ($data->id==3) {?>
                                <img src="<?php echo base_url() ?>assets/images/<?php echo $data->image ?>">
                                <?php
                            }
                        }?></div>
                  </div>
                  <div class="col-md-9">
                    <?php
                      foreach($title as $data){
                      if($data->id==3){
                        echo"<h2>$data->title</h2>";}}?>
                      <p>Men in Black: International is a 2019 American science fiction action comedy film directed by F. Gary Gray and written by Art Marcum and Matt Holloway.</p>
                      <div class="main-btn"><a href="https://en.wikipedia.org/wiki/Men_in_Black:_International">Read More</a></div>
                  </div>
              </div>
            </div>
          </div>
          <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>About Us</h2>
                            <p>Please tell your friend about our website is full avaliable of new movie.</p> 
                            <p style="text-align: justify;">You and your friend can search new movie in our website then you guys can book the ticket with our client <a href="#">We have 4 Client</a> Each client have different price of ticket.</p>
                            <p>You can contact us if have any problem with the book ticket we are on everyday so visit our website everyday if you have time and dont forget to bring your friend to our website we will pleasure if u do it.</p>
                          <div class="main-btn"><a href="#3">Movie</a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                          <img src="<?php echo base_url()?>assets/cinema/img/about_image.jpg" alt="">
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="3">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="<?php echo base_url();?>assets/images/X-Men.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>X-Men Dark Phoenix</h2>
                                            <p>X-Men Dark Phoenix is a 2019 American superhero film based on the Marvel Comics X-Men characters.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <?php
                                        foreach ($images as $data) {
                                                if ($data->id==1) {?>
                                                    <img style="height: 320px; width: 320px;" src="<?php echo base_url() ?>assets/images/<?php echo $data->image ?>">
                                                    <?php
                                                }}?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="<?php echo base_url();?>assets/images/Tstory4.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Toy Story 4</h2>
                                            <p>Toy Story 4 is a 2019 American computer-animated comedy film produced by Pixar Animation Studios.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <?php
                                            foreach ($images as $data) {
                                                if ($data->id==2) {?>
                                                    <img style="height: 320px; width: 320px;" src="<?php echo base_url() ?>assets/images/<?php echo $data->image ?>">
                                                    <?php
                                                }
                                            }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="<?php echo base_url();?>assets/images/MIB.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Men In Black(MIB)</h2>
                                            <p>Men in Black: International is a 2019 American science fiction action comedy film.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <?php
                                        foreach ($images as $data) {
                                                if ($data->id==3) {?>
                                                    <img style="height: 320px; width: 320px;" src="<?php echo base_url() ?>assets/images/<?php echo $data->image ?>">
                                                    <?php
                                                }
                                            }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="4">
            <div class="content fifth-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div id="map">
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.112004174764!2d98.65415361416377!3d3.5616759974080456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fe03ed8450b%3A0xe84941c195268efc!2sUniversity+of+Sumatera+Utara!5e0!3m2!1sen!2sid!4v1561482045308!5m2!1sen!2sid" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-12">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="footer">
          <div class="content">
              <p>Copyright &copy; 2019 Teknologi Informasi . <a href="#">Cinema</a> by <a href="#" target="_parent">Kel 9</a></p>
          </div>
        </div>

    
    <script type="text/javascript" src="<?php echo base_url();?>assets/movie//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="<?php echo base_url();?>assets/movie/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/movie/js/vendor/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/movie/js/datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/movie/js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/movie/js/main.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>