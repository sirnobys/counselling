<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


<?php include 'navlink.php'; ?>

<?php  if (!isset($_SESSION['username'])): ?>

<div class="page-header header-filter bg5"  data-parallax="true">
    <div class="container">
      <div class="row">
        <div class="col-md-11">
          <h1 class="title text-danger"> Oops!</h1>
          <h2 class="title text-white"> It appears you are not logged in yet. To gain access to our publications, log into your existing account or create a new account. You are just a few steps away!</h2>
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
 

<?php else: ?>
  <div class="page-header header-filter"  data-parallax="true" style="background-image: url('../assets/img/3.jpeg');height: 200px"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
       <div class=" text-center">
        <br><br>
          <span class="h3 title">Find here resources in the form of media files, document file formats and links </span>
        </div>
        <br><br><br>
        <!-- <div class="description text-center">
          <p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
        </div> -->
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#ebook" role="tab" data-toggle="tab">
                    
                     <i class="fa fa-book"></i> Ebooks
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#articles" role="tab" data-toggle="tab">
                   
                    <i class="material-icons">content_paste</i> Research Articles
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#stories" role="tab" data-toggle="tab">
                    <i class="material-icons">supervised_user_circle</i> Impact Stories
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="ebook">
            <div class="row">
             <!-- <iframe src="https://drive.google.com/embeddedfolderview?id=12owX76B9_GUVHhUnX_cQT-ytalp6vQQ2" width="100%" height="500" frameborder="0"></iframe> -->

             <div class="col-md-6 ml-auto mr-auto">
                <!-- <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/examples/studio-3.jpg" class="rounded"> -->
                <div class="card">
                  <span class=" h4 title">Free psychotherapy books</span>
                   <a href="https://www.freepsychotherapybooks.org/?dlm_download_category=all-books" class="btn btn-lg btn-primary" target="_blank">
                     
                  Visit Link
                   </a>
                 
                </div>
              </div>

              <div class="col-md-6 ml-auto mr-auto">
                <!-- <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/examples/studio-3.jpg" class="rounded"> -->
                <div class="card">
                  <span class=" h4 title">Free psychotherapy books</span>
                   <a href="https://www.freepsychotherapybooks.org/?dlm_download_category=all-books" class="btn btn-lg btn-primary" target="_blank">
                     
                  Visit Link
                   </a>
                 
                </div>
              </div>


            </div>
          </div>
          <div class="tab-pane text-center gallery" id="stories">
            <div class="row">
              <div class="col-md-3 ml-auto">
              
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="articles">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto">
                <!-- <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/examples/studio-3.jpg" class="rounded"> -->
                <div class="card">
                  <span class=" h4 title">Free Self-help Ebooks and Emotional Health Articles</span>
                  <div class="text-dark">
                  
                  </div>
                 <a href="https://www.onlinecounsellingservice.co.uk/free-self-help-books" class="btn btn-lg btn-primary" target="_blank"> visit link </a>
                </div>
              </div>

               <div class="col-md-6 ml-auto mr-auto">
                <!-- <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/examples/studio-3.jpg" class="rounded"> -->
                <div class="card">
                  <span class=" h4 title">Book Donation Initiative</span>
                  <div class="text-dark">
                  
                  </div>
                 <a href="https://publishers.org/our-markets/trade/book-donation-initiative" class="btn btn-lg btn-primary" target="_blank"> visit link </a>
                </div>
              </div>

              

              <!-- <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="../assets/img/examples/olu-eletu.jpg" class="rounded">
                <img src="../assets/img/examples/studio-1.jpg" class="rounded">
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <?php endif; ?>
<?php include 'footer.php'; ?>
<!--End of Tawk.to Script-->
</body>

</html>
