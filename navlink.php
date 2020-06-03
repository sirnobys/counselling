<?php 
  session_start(); 
?>


  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container row">
      <div class="navbar-translate col-md-5">
        <a style="font-size: 16px;" class="navbar-brand" href="index.php">
          PWO Counselling & Psychological Services Centre</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse col-md-9">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php" onclick="scrollToDownload()">
              <i class="material-icons"></i> Home
            </a>
          </li>
          
          <li class="dropdown nav-item">
            <a href="pages/publication.php" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons"></i>Publication
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="pages/publication.php" class="dropdown-item">
                <i class="material-icons"></i> Research Articles
              </a>
              <a href="pages/publication.php" class="dropdown-item">
                <i class="material-icons"></i> Ebooks
              </a>
              <a href="pages/publication.php" class="dropdown-item">
                <i class="material-icons"></i> Impact Stories
              </a>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="" onclick="scrollToDownload()">
               Partners
            </a>
          </li>
         <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons"></i> About Us
              </a>
              <div class="dropdown-menu dropdown-with-icons">
               <!--  <a href="profile-page.php" class="dropdown-item">
                  <i class="material-icons"></i> The Team
                </a> -->
                <a href="pages/about.php" class="dropdown-item">
                  <i class="material-icons"></i> Mission & Vision
                </a>

                 <a href="pages/about.php" class="dropdown-item">
                  <i class="material-icons"></i> Projects & Outreaches
                </a>
              </div>
          </li>

          <li class="nav-item">
             <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Donate
             </a>
          </li>

             <?php  if (isset($_SESSION['username'])) : ?>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">              
    
              Hey!   &nbsp;<strong><?php echo $_SESSION['username']; ?></strong> <i class="material-icons">mood</i>       
            </a>
            <div class="dropdown-menu dropdown-with-icons">
       <a class="nav-link" href="pages/profile.php?logout='1'" >logout</a>
             
            </div>
            <?php else: ?> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/login.php" onclick="scrollToDownload()">
              <i class="fa fa-sign-in"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/signup.php" onclick="scrollToDownload()">
              <i class="fa fa-user-plus"></i> Sign Up
            </a>
          </li>
        <?php endif; ?>          
        </ul>
      </div>
    </div>
  </nav>



<section>
 

<!-- Modal donate -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg6 ">
      <div class="modal-header">
        <h2 class="modal-title text-info" id="exampleModalLabel">Help us make our services better!</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
       We greatly appreciate your interest in our services. We are a non-profit group that run this website. If you have found value in what we offer, we humbly implore you to consider supporting our efforts. This website is managed and funded by your generous donations.


       <br><br><br>
          <div class="">
          <div >
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center " role="tablist">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="#ebook" role="tab" data-toggle="tab">
                    <i class="fa fa-book"></i> Donate
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link text-white" href="#articles" role="tab" data-toggle="tab">
                   
                    <i class="material-icons">content_paste</i>Sharing
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

          <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="ebook">
            <div class="row">
              <div class="container">
                  Call or Whatsapp +233243298464 to make donations.
              </div>
          
              


            </div>
          </div>
         



          <div class="tab-pane text-center gallery" id="articles">
            <div class="row">
              <div class="col-md-12 ml-auto mr-auto">
                <!-- <img src="../assets/img/pages/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/pages/studio-3.jpg" class="rounded"> -->
                <div class="">
                 
               
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_5sl7"></div>
            
            
                </div>
              </div>
              
        </div>

      </div>
    

          
      <div class="modal-footer mt-auto">
        <button type="button" class="btn btn-danger col-md-12" data-dismiss="modal">No, thanks! Close box.</button>
      </div>
    </div>
  </div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4feb394305b92a"></script>
 
</section>
 
