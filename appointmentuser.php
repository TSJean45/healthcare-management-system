<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consultation Appointment</title>

    <link rel="stylesheet" href="asset/css/header.css">
    <link rel="stylesheet" href="asset/css/footer.css">
    <link rel="stylesheet" href="asset/css/appointment.css?v=<?php echo time(); ?>">
    <?php include('asset/includes/cssCDN.php'); ?>
    <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<?php
session_start();
include 'connection.php'; ?>

<body>

    <!-- Header -->
    <?php include('asset/includes/navBar.php'); ?>
    <!-- Header -->

    <div class="container">
        <div class="card mb-3">
            <img class="card-img-top" src="asset/image/app.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <h2 class="mb-2 title-color text-center">Book An Appoinment</h2>
                </h5>
                <p class="card-text">
                <p class="mb-4 text-center">
                    Book an appointment online with no hassle. We will get back to you and fix a meeting with doctors. Please check on your appointment dashboard for a confirmed appointment.
                </p>
                </p>
                <?php
                if (isset($_POST["addBtn"])) {
                    $reason = $_POST["inputMessage"];
                    $time = $_POST["inputTime"];
                    $date = $_POST["inputDate"];
                    $staffId = $_POST["inputstaffId"];
                    $userId =  $_SESSION['userId'];
                    $status = "Booked";

                    $addSql = "INSERT INTO `appointment` (`appointmentDate`,`appointmentTime`,`appointmentReason`,`userId`,`staffId`,`appointmentStatus`) 
                                VALUES ('$date','$time','$reason','$userId','$staffId','$status')";
                    $result = mysqli_query($data, $addSql);
                    if ($result) {
                        echo '<div class="alert alert-success" role="alert">
                        You have successfully request for a consultation appointment. Please check "My Consultation Appointment" for your appointment status.
                    </div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">
                            Error! Fail to book a consultation appointment. Please try again later.
                        </div>';
                    }
                }
                ?>
                <p class="card-text">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-12 my-1">
                            <div class="form-group">
                                <?php
                                $staffSql = "SELECT * FROM `staff` ORDER BY `staffDepartment` ASC";
                                $staff = mysqli_query($data, $staffSql); ?>
                                <select id="inputstaffId" class="form-control select2" name="inputstaffId" required>
                                    <option value="" disabled selected>Select Preferred Doctor</option>
                                    <?php while ($fetch = mysqli_fetch_array($staff)) :; ?>
                                        <?php $sid = $fetch['staffId'];
                                        $suserName = $fetch['staffName'];
                                        $sposition = $fetch['staffPosition'];
                                        $sdepartment = $fetch['staffDepartment'];
                                        if ($sposition == "Doctor") {  ?>
                                            <option value="<?php echo $sid; ?>"><?php echo "Doctor " . $suserName . " - " . $sdepartment ?></option>
                                    <?php }
                                    endwhile; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 my-1">
                            <div class="form-group">
                                <input class="form-control" type="text" maxlength="1000" name=" inputMessage" placeholder="Medical Concern/Reason (Optional)" />
                            </div>
                        </div>
                        <div class="col-lg-12 my-1">
                            <div class="form-group">
                                <label for="inputDate">Select Appointment Date</label>
                                <input class="form-control" id="inputDate" type="date" name="inputDate" min="<?php echo date("Y-m-d"); ?>" required />
                            </div>
                        </div>

                        <div class="col-lg-12 my-1">
                            <div class="row">
                                <label for="hidebx">Select Appointment Time</label>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime2" class="hidebx" value="09:00" required>
                                    <label for="inputTime2" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                9:00 a.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime3" class="hidebx" value="10:00">
                                    <label for="inputTime3" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                10:00 a.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime4" class="hidebx" value="11:00">
                                    <label for="inputTime4" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                11:00 a.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime5" class="hidebx" value="12:00">
                                    <label for="inputTime5" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                12:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime6" class="hidebx" value="13:00">
                                    <label for="inputTime6" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                1:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime7" class="hidebx" value="14:00">
                                    <label for="inputTime7" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                2:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime8" class="hidebx" value="15:00">
                                    <label for="inputTime8" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                3:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime1" class="hidebx" value="16:00">
                                    <label for="inputTime1" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                4:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime9" class="hidebx" value="17:00">
                                    <label for="inputTime9" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                5:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime10" class="hidebx" value="18:00">
                                    <label for="inputTime10" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                6:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    By submitting the form, I acknowledge that my information will be used and referred during the registration process.
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12 my-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    By submitting the form, I acknowledge that the appointment made via online <b>DOES NOT</b> constitute to a <b>CONFIRMED</b> appointment.
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="addBtn" class="btn btn-primary">Make An Appointment</button>
                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>
    <!--Footer -->
    <?php include('asset/includes/footer.php'); ?>
    <?php include('asset/includes/jsCDN.php'); ?>
</body>

</html>