<?php

session_start();

include 'connection.php';

if (isset($_POST['addBtn'])) {
    $reason = $_POST["inputReason"];
    $time = $_POST["inputTime"];
    $date = $_POST["inputDate"];

    $staffId = $_POST["inputstaffId"];

    $userId = $_POST["inputuserId"];
    $userName = $_POST["inputuserName"];
    $userPhone = $_POST["inputuserPhone"];


    $addSql = "INSERT INTO `appointment` (`appReason`,`appTime`,`appDate`,`userId`,`userName`,`staffId`,`userPhone_number`) VALUES ('$reason','$time','$date','$userId','$userName','$staffId','$userPhone')";
    $result = mysqli_query($data, $addSql);


    if ($result) {
        echo '<script> alert("Data added"); </script>';
    } else {
        echo '<script> alert("Data not added"); </script>';
    }
}



?>

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
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
</head>

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
                    Now you can get an online appointment, We will get back to you and fix a meeting with doctors.
                </p>
                </p>
                <p class="card-text">
                <form name="appointment" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <?php
                                $staffSql = "SELECT * FROM `staff`";
                                $staff = mysqli_query($data, $staffSql); ?>
                                <select id="inputstaffId" class="form-control select2" name="inputstaffId" required>
                                    <option value="" disabled selected>Select Prefered Doctor</option>
                                    <?php while ($fetch = mysqli_fetch_array($staff)) :; ?>
                                        <?php $sid = $fetch['staffId'];
                                        $suserName = $fetch['staffName'];
                                        $sposition = $fetch['staffPosition'];
                                        if ($sposition == "Doctor") {  ?>
                                            <option value="<?php echo $sid; ?>"><?php echo "Doctor " . $suserName; ?></option>
                                    <?php }
                                    endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" readonly="readonly" id="result" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" maxlength="1000" name=" inputMessage" placeholder="Medical Concern/Reason (Optional)" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="inputDate">Select Appointment Date</label>
                                <input class="form-control" id="inputDate" type="date" name="inputDate" min="<?php echo date("Y-m-d"); ?>" required />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row">
                                <label for="hidebx">Select Appointment Time</label>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime2" class="hidebx">
                                    <label for="inputTime2" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                9:00 a.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime3" class="hidebx">
                                    <label for="inputTime3" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                10:00 a.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime4" class="hidebx">
                                    <label for="inputTime4" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                11:00 a.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime5" class="hidebx">
                                    <label for="inputTime5" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                12:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime6" class="hidebx">
                                    <label for="inputTime6" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                1:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime7" class="hidebx">
                                    <label for="inputTime7" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                2:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime8" class="hidebx">
                                    <label for="inputTime8" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                3:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime1" class="hidebx">
                                    <label for="inputTime1" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                4:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime9" class="hidebx">
                                    <label for="inputTime9" class="radioLbl">
                                        <div class="display-box">
                                            <div class="time">
                                                5:00 p.m.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <input type="radio" name="inputTime" id="inputTime10" class="hidebx">
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