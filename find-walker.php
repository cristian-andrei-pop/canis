<?php 
    include("module/module-connectivity.php");

    // if($_SERVER['REQUEST_METHOD'] == "POST") {
    //     $owner_name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    //     $dog_name = htmlspecialchars(stripslashes(trim($_POST['dog_name'])));
    //     $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    //     $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
    //     $date = htmlspecialchars(stripslashes(trim($_POST['date'])));
    //     $time = htmlspecialchars(stripslashes(trim($_POST['time'])));
    //     $duration = htmlspecialchars(stripslashes(trim($_POST['duration'])));
    //     $dog_weight = htmlspecialchars(stripslashes(trim($_POST['weight'])));
    //     if(!preg_match("/^[a-zA-Z ]*$/", $owner_name)) {
    //         $nameErr = "Only letters and white space allowed";
    //     }
    //     if(!preg_match("/^[a-zA-Z ]*$/", $dog_name)) {
    //         $dog_nameErr = "Only letters and white space allowed";
    //     }
    //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $emailErr = "Invalid email format";
    //     }
    //     if(!preg_match("/^[0-9]*$/", $phone)) {
    //         $phoneErr = "Only numbers allowed";
    //     }
    //     if(!preg_match("/^[0-9]*$/", $dog_weight)) {
    //         $weightErr = "Only numbers allowed";
    //     }
    //     if(!preg_match("/^[0-9]*$/", $duration)) {
    //         $durationErr = "Only numbers allowed";
    //     }
    //     if(!preg_match("/^[0-9]*$/", $date)) {
    //         $dateErr = "Only numbers allowed";
    //     }
    //     if(!preg_match("/^[0-9]*$/", $time)) {
    //         $timeErr = "Only numbers allowed";
    //     }
    //     if (!empty($nameErr) && !empty($dog_nameErr) && !empty($emailErr) && !empty($phoneErr) && !empty($weightErr) && !empty($durationErr) && !empty($dateErr) && !empty($timeErr)) {
    //         $sql = "INSERT INTO bookings (owner_name, dog_name, email, phone, date, time, duration, dog_weight) VALUES ('$owner_name', '$dog_name', '$email', '$phone', '$date', '$time', '$duration', '$dog_weight')";
    //         if(mysqli_query($con, $sql)) {
    //             echo "New record created successfully";
    //         } else {
    //             echo "Error: " . $sql . "<br>" . mysqli_error($con);
    //         }
    //     }
    //     else {
    //         echo '<p>There was an error with your submission. Please try again.</p>';
    //     }

    // }
    // $todayDate = date("Y/m/d");

    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $owner_name = htmlspecialchars(stripslashes(trim($_POST['name'])));
        $dog_name = htmlspecialchars(stripslashes(trim($_POST['dog_name'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
        $date = htmlspecialchars(stripslashes(trim($_POST['date'])));
        $time = htmlspecialchars(stripslashes(trim($_POST['time'])));
        $duration = htmlspecialchars(stripslashes(trim($_POST['duration'])));
        $dog_weight = htmlspecialchars(stripslashes(trim($_POST['weight'])));

        if(!empty($owner_name) && !empty($dog_name) && !empty($email) && !empty($phone) && !empty($date) && !empty($time) && !empty($duration) && !empty($dog_weight)) 
        {
            $sql = "INSERT INTO bookings (owner_name, dog_name, email, phone, date, time, duration, dog_weight) VALUES ('$owner_name', '$dog_name', '$email', '$phone', '$date', '$time', '$duration', '$dog_weight')";
            if(mysqli_query($con, $sql)) 
            {
                echo "New record created successfully";
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            header("Location: process.php");
            die;
        }
        else 
        {
            echo '<p>There was an error with your submission. Please try again.</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Walker | Canis</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans:wght@400;500&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/form.css">
</head>
<body>
    <?php 
        include "module/module-header.php"
    ?>
    <article class="container">
        <div class="form-wrapper">
            <div class="form-header">
                <h2 class="article-title">Find a Walker</h2>
            </div>
            <div class="form">
                <form method="post">
                    <div class="form-set">
                        <div class="form-owner-name">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="form-dog-name">
                            <label for="dog_name">Dog Name:</label>
                            <input type="text" name="dog_name" id="dog_name" required>
                        </div>
                    </div>
                    <div class="form-set">
                        <div class="form-email">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="form-phone">
                            <label for="phone">Phone:</label>
                            <input type="tel" name="phone" id="phone" required>
                        </div>
                    </div>
                    <div class="form-set">
                        <div class="form-date">
                            <label for="date">Date:</label>
                            <input type="date" name="date" min="<?php $todayDate ?>" max="<?php date("Y/m/d", strtotime($todayDate. ' + 5 days')) ?> id="date" required>
                        </div>
                        <div class="form-time">
                            <label for="time">Time:</label>
                            <input type="time" name="time" id="time" required>
                        </div>
                    </div>
                    <div class="form-duration">
                        <label for="duration">Duration:</label>
                        <div class="radio-container">
                            <input type="radio" name="duration" id="duration1" value="20" required>
                            <label for="duration1">20 minutes</label>
                            <input type="radio" name="duration" id="duration2" value="30" required>
                            <label for="duration2">30 minutes</label>
                            <input type="radio" name="duration" id="duration3" value="45" required>
                            <label for="duration3">45 minutes</label>
                            <input type="radio" name="duration" id="duration4" value="60" required>
                            <label for="duration4">60 minutes</label>
                        </div>
                    </div>
                    <div class="form-weight">
                        <label for="weight">Weight:</label>
                        <div class="radio-container">
                            <input type="radio" name="weight" id="weight1" value="0-10" required>
                            <label for="weight1">0 - 10 kg</label>
                            <input type="radio" name="weight" id="weight2" value="11-26" required>
                            <label for="weight2">11 - 26 kg</label>
                            <input type="radio" name="weight" id="weight3" value="27-45" required>
                            <label for="weight3">27 - 45 kg</label>
                            <input type="radio" name="weight" id="weight4" value="45+" required>
                            <label for="weight4">45+ kg</label>
                        </div>
                    </div>
                    <label for="notes">Additional notes:</label>
                    <textarea name="notes" id="notes"></textarea>
                    <br>
                    <input type="submit" value="Book Walk">
                </form>
            </div>
        </div>
    </article>
    <?php 
        include "module/module-footer.php"
    ?>
</body>
</html>