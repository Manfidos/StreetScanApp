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
              <li class="nav-item active">
                <a class="nav-link" href="news.php">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
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
          
        </div>
        
        <div class="row mt-4">
        <div class="col-md-12">
            <h2>Insert News</h2>
            <form action="insert_news.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload Image:</label>
                    <input type="file" name="image" class="form-control-file" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" name="author" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="publish_date">Publish Date:</label>
                    <input type="date" name="publish_date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<script>
    // Function to show the success popup message
    function showSuccessPopup() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'New record inserted successfully.',
        });
    }

    // Function to check if the 'success' query parameter exists and show the toast message
    function showSuccessMessage() {
        const urlParams = new URLSearchParams(window.location.search);
        const successParam = urlParams.get('success');
        if (successParam === '1') {
            showSuccessPopup();
        }
    }

    // Call the function on page load
    document.addEventListener('DOMContentLoaded', showSuccessMessage);
</script>

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
<!-- JavaScript to show toast message -->

</body>
</html>