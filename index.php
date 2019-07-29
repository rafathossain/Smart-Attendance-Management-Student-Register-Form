<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://smatd.test/api/createUser",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => array('rfid' => $_POST['rfid'],'name' => $_POST['name'],'mobile' => $_POST['mobile'],'roll' => $_POST['roll'],'class' => $_POST['class'],'address' => $_POST['address'],'father' => $_POST['father'],'mother' => $_POST['mother'],'age' => $_POST['age'],'bGroup' => $_POST['bGroup'],'admin' => $_POST['admin']),
    ));

    $response = curl_exec($curl);
    // $err = curl_error($curl);

    curl_close($curl);

    // if ($err) {
    // echo "cURL Error #:" . $err;
    // } else {
    // echo $response;
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New student registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/logonew.png" alt="sing up image"></figure>
                        <br>
                        <figure><img src="http://pluspng.com/img-png/education-png-this-is-the-best-opportunity-for-the-educational-institutes-to-get-the-benefit-without-a-prominent-web-presence-any-educational-institute-or-training-472.png" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Student Info</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="rfid"><i class="zmdi zmdi-key material-icons-name"></i></label>
                                <input type="text" name="rfid" id="rfid" placeholder="RFID"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Student Name"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><i class="zmdi zmdi-smartphone-android"></i></label>
                                <input type="text" name="mobile" id="mobile" placeholder="Mobile"/>
                            </div>
                            <div class="form-group">
                                <label for="roll"><i class="zmdi zmdi-n-1-square"></i></label>
                                <input type="text" name="roll" id="roll" placeholder="Roll"/>
                            </div>
                            <div class="form-group">
                                <label for="class"><i class="zmdi zmdi-library"></i></label>
                                <input type="text" name="class" id="class" placeholder="Class"/>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Address"/>
                            </div>
                            <div class="form-group">
                                <label for="father"><i class="zmdi zmdi-male"></i></label>
                                <input type="text" name="father" id="father" placeholder="Father"/>
                            </div>
                            <div class="form-group">
                                <label for="mother"><i class="zmdi zmdi-female"></i></label>
                                <input type="text" name="mother" id="mother" placeholder="Mother"/>
                            </div>
                            <div class="form-group">
                                <label for="age"><i class="zmdi zmdi-calendar-check"></i></label>
                                <input type="text" name="age" id="age" placeholder="Age"/>
                            </div>
                            <div class="form-group">
                                <label for="bGroup"><i class="zmdi zmdi-badge-check"></i></label>
                                <input type="text" name="bGroup" id="bGroup" placeholder="Blood Group"/>
                            </div>
                            <div class="form-group">
                                <label for="admin"><i class="zmdi zmdi-shield-check"></i></label>
                                <input type="password" name="admin" id="admin" placeholder="Admin Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Submit Information"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>