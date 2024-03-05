<?php

//simple script to view comments
// Writen by Mohammad Hafiz bin Ismail

/***
    Copyright (c) 2021 by Mohammad Hafiz bin Ismail (mypapit@gmail.com)
    Redistribution and use in source and binary forms, with or without
    modification, are permitted provided that the following conditions are met:

    1. Redistributions of source code must retain the above copyright notice, this list
    of conditions and the following disclaimer.

    2. Redistributions in binary form must
    reproduce the above copyright notice, this list of conditions and the following
    disclaimer in the documentation and/or other materials provided with the
    distribution.

    THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
    REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND
    FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
    INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS
    OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER
    TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF
    THIS SOFTWARE.
***/

require_once('db.php');

//select semua row dari table maklumat
// SQL Query ini boleh ditukar ganti mengikut kesesuaian
// contohnya boleh set LIMIT, WHERE, ORDER, dan GROUP
$query = "SELECT * FROM comments ORDER BY date DESC";
$result=mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <title>Reports</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>
<body>

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="https://www.moe.gov.my/hubungi-kami-sub/mygcc"><i class="fa fa-envelope"></i>80008000@mygcc.gov.my</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>03-8000 8000</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="https://www.facebook.com/MyGCCMalaysia/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/mygccmalaysia/"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/ccammalaysia"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation bar -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Street Scan</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="view.php">Reports</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Comments</h1>
            <span>Voices Heard, Solutions Delivered</span>
          </div>
        </div>
      </div>
    </div>

    <!-- View Comments section -->
    <div class="content">
    <h1>Latest</h1>
    <ol>
      <?php foreach ($result as $row): ?>
          <li>
              <ul>
                  <li><small><?= $row['date'] ?></small></li>
                  <li><a href="mailto:<?= $row['email'] ?>">
                  <?= $row['name'] ?></a> wrote..<br />
                  <blockquote><em><?= $row['comments'] ?></em></blockquote></li>
              </ul><br />
          </li>
      <?php endforeach; ?>
    </ol>
    </div>
    
    <!-- Footer -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2023 by Street Scan
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

</body>
</html>
