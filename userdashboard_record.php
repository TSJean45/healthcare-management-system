<!DoCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/userstyle.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/fb95a6dbf4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
        <title>User Medical Record</title>
    </head>
 
    <body>
      <section class="side">
        <div class="sidebar">
            <div class="sidebar-details">
                <div class="personal">
                    <div>
                        <img src="asset/image/profile1.jpg">
                        <span class="profile-name">Tan Szu Jean</span>
                    </div>
                </div>
                <ul class="nav-links">
                  <li class="item">
                    <a href="#">
                      <i class='bx bx-grid-alt'></i>
                      <span class="links-name">User Dashboard</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="userdashboard_profile.html">
                      <i class='bx bxs-user-rectangle' ></i>
                      <span class="links-name">Profile</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="userdashboard_record.html" class="active">
                      <i class="fas fa-notes-medical"></i>
                      <span class="links-name">Medical Record</span>
                    </a>
                  </li>
                  <li class="item">
                      <a href="userdashboard_vaccine.html">
                        <i class="fas fa-syringe"></i>
                        <span class="links-name">Vaccination</span>
                      </a>
                    </li>
                    <li class="item">
                      <a href="userdashboard_appointment.html">
                      <i class="fas fa-calendar-check"></i>
                        <span class="links-name">Appointment</span>
                      </a>
                    </li>
                    <li class="item">
                      <a href="index.html">
                        <i class='bx bx-log-out' ></i>
                        <span class="links-name">Log Out</span>
                      </a>
                    </li>
                </ul>
              </div>
            </div>
          </section>
 
        <section class="home-section">
        <div class="topbar">
            <nav>
                <div class="logo-details">
                  <img src="asset/image/logo.png" alt="" style="height: 250px; width: 250px;">
                  </div>
                <div class="right-nav">
                    <div class="search-box">
                        <input type="text" class="input" placeholder="Search...">
                        <div class="btn btn-common">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                      <div class="right noti-bell my-auto">
                        <i class='bx bxs-bell-ring' ></i>
                      </div>
                     
                      <div class="personal">
                        <div>
                          <img src="asset/image/profile1.jpg">
                        </div>
                      </div>
                </div>
              </nav>
        </div>
      </section>

      <section class="home-section">
        <div class="list-boxes">
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row justify-content-center">
                <div class="col-lg-10 grid-margin stretch-card" style="margin-top: 85px; margin-left: 230px; position: relative;">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Medical Record</h4>
                      <div class="table-responsive">
                    <table class="table table-info table-condensed">
                      <thead>
                        <tr>
                          <th>Record ID</th>
                          <th>Medical Staff</th>
                          <th>Department</th>
                          <th>Date</th>
                          <th>Day</th>
                          <th>Time</th>
                          <th>Report View</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>XXXXXXXX</td>
                          <td>Doctor F</td>
                          <td>Phychiatrist</td>
                          <td>12 January 2022</td>
                          <td>Wednesday</td>
                          <td>4:00 PM</td>
                          <td>
                            <a href="reportview.html">
                                <i class="fas fa-eye fa-lg" id="view"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>XXXXXXXX</td>
                          <td>Doctor C</td>
                          <td>Endocrinologist</td>
                          <td>21 January 2022</td>
                          <td>Friday</td>
                          <td>12:00 PM</td>
                          <td>
                            <a href="reportview.html">
                                <i class="fas fa-eye fa-lg" id="view"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>XXXXXXXX</td>    
                          <td>Doctor A</td>
                          <td>Podiatrist</td>
                          <td>25 January 2022</td>
                          <td>Tuesday</td>
                          <td>3:00 PM</td>
                          <td>
                            <a href="reportview.html">
                                <i class="fas fa-eye fa-lg" id="view"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="d-flex flex-row my-auto flex-row-reverse">
                      <nav aria-label="Page navigation">
                        <ul class="pagination">
                          <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-arrow-circle-left fa-lg"></i></a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-circle-right fa-lg"></i></a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>