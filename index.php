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

  <?php include('asset/includes/cssCDN.php'); ?>

  <!--Google Font-->
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

  <title>JJJ MedCare</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Scroll To Top Button -->
  <button onclick="topFunction()" id="topBtn" title="Go to top">
    <i class="fas fa-arrow-circle-up"></i>
  </button>

  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

  </div>
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
              <a class="btn btn-primary" href="appointmentuser.html" role="button">Book Your Appointment</a>
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
              <a class="btn btn-primary" href="vaccine.html" role="button">Book Your Appointment</a>
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

  <!-- Information Section-->
  <!--Service-->
  <div class="info-container">
    <div class="container" id="aboutus">
      <div class="row">
        <div class="col section-description">
          <h2 class="text-divider"><span>Our Services</span></h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 info-box">
          <div class="row">
            <div class="col-md-3 my-auto">
              <div class="info-box-icon">
                <i class="fas fa-paperclip"></i>
              </div>
            </div>
            <div class="col-md-9 info-box-desc">
              <h3>Ut wisi enim ad minim</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                Ut wisi enim ad minim veniam, quis nostrud.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 info-box">
          <div class="row">
            <div class="col-md-3 my-auto">
              <div class="info-box-icon">
                <i class="fas fa-pencil-alt"></i>
              </div>
            </div>
            <div class="col-md-9 ">
              <h3>Sed do eiusmod tempor</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                Ut wisi enim ad minim veniam, quis nostrud.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 info-box">
          <div class="row">
            <div class="col-md-3 my-auto">
              <div class="info-box-icon">
                <i class="fas fa-cloud"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>Quis nostrud exerci tat</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                Ut wisi enim ad minim veniam, quis nostrud.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 info-box">
          <div class="row">
            <div class="col-md-3 my-auto">
              <div class="info-box-icon">
                <i class="fab fa-google"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>Minim veniam quis nostrud</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                Ut wisi enim ad minim veniam, quis nostrud.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Counter -->
    <div class="counter-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span>20</span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span>70</span>
              <p>Users</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span>6789</span>
              <p>COVID-19 Vaccination</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span>67</span>
              <p>Consultation Appointment</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Department-->
    <div class="depart-container">
      <div class="container">
        <div class="row">
          <div class="col section-description">
            <h2 class="text-divider"><span>Department</span></h2>
          </div>
        </div>

        <ul class="nav nav-tabs mb-3 md-12" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" aria-current="page" href="#tab1">Podiatrist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab2">Pediatrician</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab3">Endocrinologist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab4">Neurologist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab5">Rheumatologist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab6">Immunologist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab7">Phychiatrist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab8">Cardiologist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab9">Hepatologist</a>
          </li>
        </ul>

        <div class="row">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Podiatrist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Podiatrist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Pediatrician</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Pediatrician.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Endocrinologist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Endocrinologist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-4">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Neurologist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Neurologist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab-5">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Rheumatologist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Rheumatologist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab-6">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Immunologist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Immunologist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab-7">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Phychiatrist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Phychiatrist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab-8">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Cardiologist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Cardiologist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab9" role="tabpanel" aria-labelledby="tab-9">
              <div class="row border g-0 rounded">
                <div class="col-lg-8 details order-2 order-lg-1 p-4">
                  <h3>Hepatologist</h3>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2 p-4">
                  <img src="asset/image/department/Hepatologist.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Contact Form -->
    <div class="contact-container">
      <div class="container section-title" id="contact">
        <div class="col section-description">
          <h2 class="text-divider"><span>Contact Us</span></h2>
        </div>
      </div>

      <div class="container">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.714872511913!2d101.69798234198828!3d3.1695971508435212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4818bac57b15%3A0x46fc8dd0d036613c!2sKuala%20Lumpur%20General%20Hospital!5e0!3m2!1sen!2smy!4v1644044973864!5m2!1sen!2smy" frameborder="0" allowfullscreen></iframe>
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
        <?php if (isset($_POST["contactSubmit"])) {
          $name = $_POST["contactName"];
          $email = $_POST["contactEmail"];
          $subject = $_POST["contactSubject"];
          $message = $_POST["contactMsg"];
          $date = date("Y-m-d");
          $status = "Received";

          $addSql = "INSERT INTO `contact` (`msgName`,`msgEmail`,`msgSubject`,`msgMessage`,`msgDate`,`msgStatus`) VALUES ('$name','$email','$subject','$message','$date','$status')";
          $result = mysqli_query($data, $addSql);

          if ($result) {
            echo '<div class="alert alert-success" role="alert">
              Request is successfully sent.
          </div>';
          } else {
            echo '<div class="alert alert-danger" role="alert">
                  Error! Request is not sent. Please try again later.
              </div>';
          }
        } ?>
        <div class="row mt-1">
          <div class="col-lg-12 mt-5 mt-lg-0">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="contactName" class="form-control" id="contactName" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="contactEmail" id="contactEmail" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="contactSubject" id="contactSubject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="contactMsg" rows="5" id="contactMsg" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="contactSubmit" class="mt-2 btn btn-primary">Submit Request</button></div>
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