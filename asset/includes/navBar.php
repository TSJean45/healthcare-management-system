
<!doctype html>
<html>
  <head>
    <!-- Local CSS File -->
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/header.css">
    <link rel="stylesheet" href="asset/css/footer.css">

    <!-- Font Awesome Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--Google Font-->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
              </div>
              <div class="social-links d-none d-lg-flex align-items-center">
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-facebook-square"></span></a>
                <a href="#"><span class="fab fa-pinterest-square"></span></a>
              </div>
            </div>
          </div>
    <div class="container-fluid ">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="#">
                <img src="asset/image/output-onlinepngtools.png" alt="JJJ MedCare" class="d-inline-block align-top">
              </a>
            <button 
            	class="navbar-toggler" 
            	type="button" 
            	data-bs-toggle="collapse" 
            	data-bs-target="#toggleCollapse" 
            	aria-controls="toggleCollapse" 
            	aria-expanded="false" 
            	aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse gx-4" id="toggleCollapse">
              <ul class="navbar-nav myNav">
                <li class="nav-item px-2">
                  <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link" href="index.php#aboutus">About Us</a>
                </li>
              <!-- show appointment when login -->
                <?php
                   if(isset($_SESSION['userName']))
                    {
                ?>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown">Patient Care</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="appointmentuser2.php" class="dropdown-item">Consultation Appointment</a>
                        <a href="vaccineuser.php" class="dropdown-item">Vaccination Appointment</a>
                    </div>
                </li>
                <?php
                    }
                  ?>
                  </div>
                </div>
              </div>
            </div>
        </nav>
      </div>
    </div>
  </html>