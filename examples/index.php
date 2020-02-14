<?php include 'navlink.php'; ?>

<?php  if (!isset($_SESSION['username'])): ?>

  <div class="page-header header-filter bg1"  data-parallax="true" >
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3 class="title text-info">Welcome to</h3>
          <h1 class="title"> Praiseword Online Counselling and Psychological Services Centre</h1>
          
          <br>
           <a href="signup.php"  class="btn btn-primary btn-raised btn-lg">
          I want to create an account
          </a>
           <a href="login.php"  class="btn btn-success btn-raised btn-lg">
          I already have an account
          </a>
        </div>
      </div>
    </div>



  </div>

  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">We Are Here For You</h2>
            <h5 class="btn-success">Need to talk? Look no further! We are online 24/7</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title btn-info text-white">Free Chat</h4>
                <p class="text-dark">Chat with our friendly counsellors by using the chat button on the right bottom corner of the screen to reach us. We reply within the shortest possible time after we get your message</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title btn-success text-white">We are Professionals</h4>
                <p class="text-dark">We offer free, safe and anonymous counselling and support. Helping you is the priority!</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">content_paste</i>
                </div>
                <h4 class="info-title btn-danger text-white">Read Articles</h4>
                <p class="text-dark">Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">cloud_download</i>
                </div>
                <h4 class="info-title btn-info text-white">Download Free Important Resources</h4>
                <p class="text-dark">Get free videos, documents and links useful publications on to your devices as reference or guide.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">chrome_reader_mode</i>
                </div>
                <h4 class="info-title btn-success text-white">Read Impact Stories</h4>
                <p class="text-dark">Read impact stories shared by clients about how our services have shaped their lives for the better.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info mt-2">
                <div class="icon icon-danger">
                  <i class="fa fa-book"></i>
                </div>
                <h4 class="info-title btn-danger text-white">Ebooks</h4>
                <p class="text-dark">Ebooks are provided for clients as a guide. These are well reviewed publications recommended by professionals and certified people and so clients can trust. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
     <!--  <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Work with us</h2>
            <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> -->
    </div>
  </div>





<?php else: ?>

<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        

          <?php 
           echo("<script>alert('Login successful')</script>");
            $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    
</div>



  <div class="page-header header-filter bg4" data-parallax="true" >
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="title text-success">Congratulations Buddy! Welcome to the family.</h1>
          <h4></h4>
          <br>
         <!--  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Watch video
          </a> -->
        </div>
      </div>
    </div>
  </div>


   <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">We Are Here For You</h2>
            <h5 class="btn-success">Need to talk? Look no further! We are online 24/7</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title btn-info text-white">Free Chat</h4>
                <p class="text-dark">Chat with our friendly counsellors by using the chat button on the right bottom corner of the screen to reach us. We reply within the shortest possible time after we get your message</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title btn-success text-white">We are Professionals</h4>
                <p class="text-dark">We offer free, safe and anonymous counselling and support. Helping you is the priority!</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">content_paste</i>
                </div>
                <h4 class="info-title btn-danger text-white">Read Articles</h4>
                <p class="text-dark">Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">cloud_download</i>
                </div>
                <h4 class="info-title btn-info text-white">Download Free Important Resources</h4>
                <p class="text-dark">Get free videos, documents and links useful publications on to your devices as reference or guide.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">chrome_reader_mode</i>
                </div>
                <h4 class="info-title btn-success text-white">Read Impact Stories</h4>
                <p class="text-dark">Read impact stories shared by clients about how our services have shaped their lives for the better.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info mt-2">
                <div class="icon icon-danger">
                  <i class="fa fa-book"></i>
                </div>
                <h4 class="info-title btn-danger text-white">Ebooks</h4>
                <p class="text-dark">Ebooks are provided for clients as a guide. These are well reviewed publications recommended by professionals and certified people and so clients can trust. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
     
    </div>
  </div>



      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Work with us</h2>
            <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
<?php include 'footer.php'; ?>
<!--   Core JS Files   -->

</body>

</html>
