
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

    <title>JJJ MedCare</title>
    <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
  </head>
  <body><div class="container-fluid ">
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
                  <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link" href="index.html#aboutus">About Us</a>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown">Patient Care</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="appointmentuser.html" class="dropdown-item">Consultation Appointment</a>
                        <a href="vaccine.html" class="dropdown-item">Vaccination Appointment</a>
                    </div>
                </li>
                <li class="nav-item dropdown px-2"> 
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown">Hub</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="meddirec.html#meet-staff" class="dropdown-item">Medical Staff's Directory</a>
                        <!-- <a href="#" class="dropdown-item">Medical Library</a> -->
                    </div>
                </li>
                <li class="nav-item px-2">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
              
                
                  
                    <?php
                        if(!isset($_SESSION['name']))
                        {
                          ?>
                          <div class="ml-auto ms-auto">
                          <div class="btn-group">
                          <button type="button" class="btn">Welcome Guest</button>
                          <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu">
                          <a class="dropdown-item" href="login.php">Login</a>
                          <a class="dropdown-item" href="registration.php">Register</a>
                        </div>
                        </div>
                          <?php
                        }
                        else
                        {
                          ?>
                        <div class="ml-auto ms-auto">
                        <div class="btn-group">
                        <button type="button" class="btn">Welcome <?php echo $_SESSION['name']; ?></button>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu .dropdown-menu-right">
                        <a class="dropdown-item" href="userdashboard_profile.html">Account</a>
                        <a class="dropdown-item" href="userdashboard_appointment.html">My Appointment</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
                        </div>
                        </div>
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