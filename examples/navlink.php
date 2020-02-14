<?php 
  session_start(); 
?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/3.jpeg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
 Praiseword Online Counselling and Psychological Services Centre
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container row">
      <div class="navbar-translate col-md-5">
        <a style="font-size: 16px;" class="navbar-brand" href="index.html">
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
            <a href="publication.php" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons"></i>Publication
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="publication.php" class="dropdown-item">
                <i class="material-icons"></i> Research Articles
              </a>
              <a href="publication.php" class="dropdown-item">
                <i class="material-icons"></i> Ebooks
              </a>
              <a href="publication.php" class="dropdown-item">
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
                <a href="about.php" class="dropdown-item">
                  <i class="material-icons"></i> Mission & Vision
                </a>

                 <a href="about.php" class="dropdown-item">
                  <i class="material-icons"></i> Projects & Outreaches
                </a>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
               Donate
            </a>
          </li>

             <?php  if (isset($_SESSION['username'])) : ?>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">              
    
              Hey!   &nbsp;<strong><?php echo $_SESSION['username']; ?></strong> <i class="material-icons">mood</i>       
            </a>
            <div class="dropdown-menu dropdown-with-icons">
       <a class="nav-link" href="profile.php?logout='1'" >logout</a>
             
            </div>
            <?php else: ?> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" onclick="scrollToDownload()">
              <i class="fa fa-sign-in"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php" onclick="scrollToDownload()">
              <i class="fa fa-user-plus"></i> Sign Up
            </a>
          </li>
        <?php endif; ?>          
        </ul>
      </div>
    </div>
  </nav>