<?php
session_start();
include 'connection.php';
?>

<!doctype html>
<html>
  <head>
    <!-- Local CSS File -->
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/header.css">
    <link rel="stylesheet" href="asset/css/footer.css">
    <link rel="stylesheet" href="asset/css/directory.css">
    <link rel="stylesheet" href="asset/css/searchbar.css">

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
  <body>
  
  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

    <!-- Scroll To Top Button -->
    <button onclick="topFunction()" id="topBtn" title="Go to top">
      <i class="fas fa-arrow-circle-up"></i>
    </button>

    
  
    <div class="slider-container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="asset/image/appointment.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block">
                <h1>Consultation Appointment</h1>
                <div class="description">
                  <p>
                    Schedule a consultation appointment with our professionals now!
                  </p>

                  <?php
                  if (isset($_SESSION['userName'])) {
                   ?>
                  <a class="btn btn-primary" href="appointmentuser.php" role="button">Book Your Appointment</a>
                  <?php
                  }
                  else{
                  ?>
                  <a class="btn btn-primary" href="login.php" role="button">Login To Book Now</a>
                  <?php
                  }
                  ?>

                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/image/vaccination.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block">
                <h1>Vaccination Appointment</h1>
                <div class="description">
                  <p>
                    Do your part and register for a vaccination appointment now!
                  </p>
                   <?php
                  if (isset($_SESSION['userName'])) {
                   ?>
                  <a class="btn btn-primary" href="vaccineuser.php" role="button">Book Your Appointment</a>
                  <?php
                  }
                  else{
                  ?>
                  <a class="btn btn-primary" href="login.php" role="button">Login To Book Now</a>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
     </div>

     <!-- search -->
    <div class="container">
        <div class="row">
        <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 col-12">
        <div class="input-group" id="adv-search">
        <input type="text" class="form-control form-control-search" placeholder="Search " />
        <div class="input-group-btn">
        <div class="btn-group" role="group">
        <div class="dropdown dropdown-lg">
        <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" style="color: black;"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </button>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
        <form>
        <div class="form-group">
        <label for="category" class="text-dark">Department</label>
        <select class="form-control" id="category">
        <option>All Department</option>
        <option>Pediatrician</option>
        <option>Podiatrist</option>
        <option>Endocrinologist</option>
        <option>Neurologist</option>
        <option>Rheumatologist</option>
        </select>
        </div>
        <div class="form-group">
        <label for="designer">Doctors</label>
        <input type="text" class="form-control" id="designer" placeholder="Enter doctor name">
        </div>
        <div class="form-group">
        <label for="contain_word">Contains Words</label>
        <input type="text" class="form-control" id="contain_word" placeholder="Enter contain words">
        </div>
        
        <hr>
        <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" style="color: black;">Search</button>
        </div>
        </form>
        </div>
        </div>
        <button type="submit" class="btn btn-primary" style="color: black;"><span class="fa fa-search" aria-hidden="true"></span></button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    <div class="container">
        <div class="row">
            <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
            <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
            <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
            <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
        </div>
    </div>
    
     <!-- end -->
     
    <!-- staff card -->
    <div class="container">

        <div class="row heading">
          <div class="col-md-15 col-md-offset-3">
            <h2 class="text-center bottom-line " id=meet-staff>Meet Our Medical Staff</h2>
            <p class="subheading text-center"> Medicines cure diseases, but only doctors can cure patients. </p>
          </div>
        </div>
      
        <div class="row team-row">
          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" width="500px" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-meghan.html" style="color: grey; ">View Profile</a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">Meghan Carrie</h6>
              <span>Podiatrist</span>
            </div>
          </div>
          <!-- end team member -->
      
          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-stephen.html" style="color: grey; ">View Profile </a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title ">Stephen Wallace</h6>
              <span>Pediatrician</span>
            </div>
          </div>
          <!-- end team member -->
          <br>
      
          <div class="col-md-4 col-sm-7 team-wrap ">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1595211877493-41a4e5f236b3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                      
                      <button type="button" class="btn btn-outline-secondary"><a href="medprof-kevin.html" style="color: grey;" >View Profile </a></button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">Kevin Huert</h6>
              <span>Endocrinologist</span>
            </div>
          </div>
          <!-- end team member -->

          <!-- space -->
          <div class="container">
            <div class="row">
                <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
                <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
            </div>
        </div>
        <!-- space -->


          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1600878459138-e1123b37cb30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=706&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-akshan.html"style="color: grey;" >View Profile </a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">Akshan Ali</h6>
              <span>Neurologist</span>
            </div>
          </div>
          <!-- end team member -->
          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-george.html"style="color: grey;" >View Profile </a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">George Hill</h6>
              <span>Rheumatologist</span>
            </div>
          </div>
          <!-- end team member -->
          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1582610285985-a42d9193f2fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-anna.html"style="color: grey;" >View Profile </a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">Anna Joy</h6>
              <span>Immunologist</span>
            </div>
          </div>
          <!-- end team member -->
          <!-- space -->
          <div class="container">
            <div class="row">
                <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
                <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
            </div>
        </div>
        <!-- space -->
          <!-- end team member -->
          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-joey.html"style="color: grey;" >View Profile </a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">Joey List</h6>
              <span>Phychiatrist</span>
            </div>
          </div>
          <!-- end team member -->
          <!-- end team member -->
          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=703&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-sam.html" style="color: grey;">View Profile </a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">Sam Larusso</h6>
              <span>Cardiologist</span>
            </div>
          </div>
          <!-- end team member -->
          <!-- end team member -->
          <div class="col-md-4 col-sm-6 team-wrap">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" width="500" height="510 alt=">
                <div class="overlay">
                  <div class="team-details text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sem ipsum, sit amet condimentum orci condimentum quis. Nam augue.
                    </p>
                    <div class="socials mt-20">
                        <button type="button" class="btn btn-outline-secondary"><a href="medprof-miguel.html"style="color: grey;" >View Profile </a></button>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title">Miguel Cabrera</h6>
              <span>Hepatologist</span>
            </div>
          </div>
          <!-- end team member -->
          <!-- space -->
          <div class="container">
            <div class="row">
                <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
                <div style="background:rgb(255, 255, 255) " class="col-4 offset-1"><p style="opacity:0;">space</p></div>
            </div>
        </div>
        <!-- space -->
      
        </div>
      </div>
      <!-- end -->
      <!-- Contact Form -->
  <div class="contact-container">
    <div class="container section-title" id="contact">
      <div class="col section-description">
        <h2 class="text-divider"><span>Contact Us</span></h2>
      </div>
    </div>

    <div class="container">
      <iframe style="border:0; width: 100%; height: 350px;"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.714872511913!2d101.69798234198828!3d3.1695971508435212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4818bac57b15%3A0x46fc8dd0d036613c!2sKuala%20Lumpur%20General%20Hospital!5e0!3m2!1sen!2smy!4v1644044973864!5m2!1sen!2smy" frameborder="0" allowfullscreen></iframe>
    </div>
    
    <div class="container">
      <div class="row info">
          <div class="address col-lg-4">
            <i class="fas fa-search-location"></i>
            <h4>Location:</h4>
            <p>Jalan Pahang, 50586 Kuala Lumpur</p>
          </div>

          <div class="email col-lg-4">
            <i class="fas fa-envelope-open"></i>
            <h4>Email:</h4>
            <p>contact@jjjmedcare.com</p>
          </div>

          <div class="phone col-lg-4">
            <i class="fas fa-phone"></i>
            <h4>Call:</h4>
            <p>+60 11-10831460</p>
          </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-12 mt-5 mt-lg-0">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Submit Request</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--Footer -->
  <?php include('asset/includes/footer.php'); ?>
  <!-- Bootstrap JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Local JS file -->
  <script src="asset/js/scrollTop.js"></script>
  
  </body>
</html>