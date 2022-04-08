<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Consultation Appointment</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="asset/css/header.css">
        <link rel="stylesheet" href="asset/css/footer.css">
        <link rel="stylesheet" href="asset/css/appointment.css">
        <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script><script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>
    <body>
      
          <!-- Top Bar -->
          <div class="topbar d-flex align-items-center ">
            <div class="container d-flex justify-content-between">
              <div class="contact-info d-flex align-items-center">
                <i class="fas fa-envelope"></i> <a href="mailto:contact@jjjmedcare.com">contact@jjjmedcare.com</a>
                <i class="fas fa-mobile-alt"></i> +60 11-10831460
              </div>
              <div class="social-links d-none d-lg-flex align-items-center">
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-facebook-square"></span></a>
                <a href="#"><span class="fab fa-pinterest-square"></span></a>
              </div>
            </div>
          </div>
      
          <!-- Header -->
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
              </div>
            </div>
        </nav>
      </div>
    </div>

        <div class="c-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image"><img src="asset/image/doctor.jpg" class="img-fluid"/></div>
                </div>

                <div class="col-lg-6 col-md-10">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color text-center">Book Appoinment</h2>
                        <p class="mb-4 text-center">
                            Now you can get an online appointment, We will get back to you and fix a meeting with doctors.
                        </p>

            <form id="#" class="appointmentform" method="post" action="#">
            <form id="#" class="appointmentform" method="post" action="appointment.php">

                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <select class="form-control" id="department" name="department" required>
                            <option value="" disabled selected>Choose Department</option>

                                <option value="Podiatrist">Podiatrist</option>
                                <option value="Pediatrician">Pediatrician</option>
                                <option value="Endocrinologist">Endocrinologist</option>
                                <option value="Neurologist">Neurologist</option>
                                <option value="Rheumatologist">Rheumatologist</option>
                                <option value="Immunologist">Immunologist</option>
                                <option value="Phychiatrist">Phychiatrist</option>
                                <option value="Cardiologist">Cardiologist</option>
                                <option value="Hepatologist">Hepatologist</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <select class="form-control" id="doctor" name="doctor_name" required>
                            <option value="" disabled selected>Choose Doctor You Want</option>

                            <option value="Doctor A">Doctor A</option>
                            <option value="Doctor B">Doctor B</option>
                            <option value="Doctor C">Doctor C</option>
                            <option value="Doctor D">Doctor D</option>
                            <option value="Doctor E">Doctor E</option>
                            <option value="Doctor F">Doctor F</option>
                            <option value="Doctor G">Doctor G</option>
                            <option value="Doctor H">Doctor H</option>
                            <option value="Doctor I">Doctor I</option>
                            <option value="Doctor J">Doctor J</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                <input class="form-control" id="date" type="date" name="appoint_date" required/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                      <input class="form-control" id="time" type="time" min="09:00" max="19:00" name="appoint_time" required/> 
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input class="form-control" id="name" name="user_name" type="text" placeholder="Enter Your Name" required/>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <input class="form-control" id="phone" type="tel" name="user_tel" pattern="[0-9]{3}-[0-9]{7}" placeholder="Enter Your Phone Number" required/>
                    </div>
                </div>
                        <button type="submit" name="makeappointment" class="btn btn-primary">Make Appointment</button>
            </div>
        </form>
            </div>
        </div>
        </div>
        </div>

        <!--Footer -->
  <footer class="footer-container">
    <div class="container">
      <div class="row">
        <div class="col-md-4 pr-md-5 col-sm-6 align-self-center">
          <a class="navbar-brand logo" href="#">
            <img src="asset/image/output-onlinepngtools.png" alt="JJJ MedCare" class="d-inline-block align-top">
          </a>
          <p>
            Jalan Pahang,<br>
            50586 Kuala Lumpur<br><br>
              <strong>Phone:</strong> +60 11-10831460<br>
              <strong>Email:</strong>contact@jjjmedcare.com<br>
          </p>
        </div>
        <div class="col-md col-sm-6 align-self-center">
          <ul class="list-unstyled nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="appointmentuser.html">Consultation Appointment</a></li>
          </ul>
        </div>
        <div class="col-md col-sm-6 align-self-center ">
          <ul class="list-unstyled nav-links">
            <li><a href="meddirec.html">Medical Staff's Directory</a></li>
            <li><a href="vaccine.html">Vaccination Appointment</a></li>
          </ul>
        </div>
        <div class="col-md col-sm-6 text-md-center align-self-center">
          <ul class="social list-unstyled">
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
            <li><a href="#"><span class="fab fa-pinterest-square"></span></a></li>
          </ul>
          <p class=""><a href="#contact" class="btn btn-tertiary">Contact</a></p>
          <p class=""><a href="login.php" class="btn btn-tertiary">Login</a></p>
          <p class=""><a href="registration.php" class="btn btn-tertiary">Register</a></p>
        </div>
      </div> 

      <div class="row ">
        <div class="col-12 text-center">
          <div class="copyright mt-5 pt-5">
            <p><small>&copy; 2022 All Rights Reserved.</small></p>
          </div>
        </div>
      </div> 
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">(function(){window['__CF$cv$params']={r:'6d8dca5dd8382ecb',m:'3p8gevZYhksMtxWm.j4MrHWDhOyAIPKBYAVh.0rvXfI-1644081428-0-AaNzvH66B8kAoHnTGtJ05dmOUT0EUrMBZ5OuNK33LgNXaQbVfqgK1UfFSOhUXIjQEpqxnz1w7mBxv+OZBjqPV0xVMXTgh82jwYnyzXRZutVlPBaRTdTNQfcq1suN7lZ3dNzVVbkxNQIBKhPf8QqIiAyDvjneMtjLDMB+TY2uzd0u5CwiWTSuEtcTfpmNsDVC0fdSqw2rTee8gtc2QS5K2wA=',s:[0x2361d4a16a,0xab3f01eb4a],}})();</script><script type="text/javascript">(function(){window['__CF$cv$params']={r:'6d8dde29fee36b9e',m:'pFWX1bjSc.e0PSq6Q5PFzNzVSbMUs8b4t72upSmD54A-1644082239-0-AW+W+Nuq82iRU8Tm6qIo+myHJXFFWWz2p4VDDOgRLn8qN+s1rbXlV+v6WnRUwNRgArB/cjAFBTAgL7UUFAMay0x8Ya2dLQj+2yf7oig1xe81A8do99CARiqVxQ04trvSfCmKP8ELKM+WzNcYXuO2/D4G8PgOH83gKqmtId46VKH5EVzSSVH1Hj5w/3x5Yh9xXJY8T7CsfeXGZh4LyUYKn1Y=',s:[0xeda9dea6c9,0x045f352d27],}})();</script></body>
</body>
</html>
<?php

include 'connection.php';

if ($data === false) {
    die("connection error");
}

if(isset($_POST['makeappointment']))
{
    $department = $_POST['department'];
    $staff_name = $_POST['doctor_name'];
    $date = $_POST['appoint_date'];
    $time = $_POST['appoint_time'];
    $user_name = $_POST['user_name'];
    $user_tel = $_POST['user_tel'];

    $addSql = "INSERT INTO `appointment` (`Appointment_date`, `Appointment_time`, `staff_name`, `staff_department`, `user_name`, `user_tel`) VALUES ('$date', '$time', '$staff_name', '$department', '$user_name', '$user_tel')";
    $result = mysqli_query($data, $addSql);
    header("Location:userdashboard_appoinment.php");
}

?>
