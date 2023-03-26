<?php
    session_start();
    include_once "module\modul-functii.php";
    $link = mysqli_connect("localhost", "root", "", "canis");
    if(! $link)
    {
        print "Conexiune imposibila.";
        die();
    }       
    if(Login()==0)
        {
            header("Location: login.php");
        }
    $q = "SELECT * FROM walkers WHERE ID = {$_SESSION['user_id']}";
                    $rez = mysqli_query($link , $q);
                    $userdata = mysqli_fetch_assoc($rez);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canis | Walkers</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans:wght@400;500&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style/walker.css">
</head>


<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-white my-nav">
        <div class="container">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src= "<?= $userdata['avatar'] ?>" width="70" height="70" class="icon d-inline-block align-text-top m-0 h1">
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item alba" href="PowerParts.html">PowerParts</a></li>
                <li><a class="dropdown-item alba" href="PowerWear.html">PowerWear</a></li>
            </ul>
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0" >
                <img src="https://i.imgur.com/PnJ9lQh.png" width="150" height="80" class="icon d-inline-block align-text-top m-0 h1">
            </ul>
            <ul class="navbar-nav" >
                <a class="nav-link green" href="walker-cp.php"><p class="back-arrow">--></p></a>
            </ul>
        </div>
    </nav>  
   </header>  
    <div class="container">
        <table class="table my-table">
    <thead>
        <tr>
        <th scope="col">Data</th>
        <th scope="col">Ora</th>
        <th scope="col">Durata</th>
        <th scope="col">Nume animal</th>
        <th scope="col">Kilograme animal</th>
        <th scope="col">Nume proprietar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sqlq = "SELECT * FROM bookings";
            $rez = mysqli_query($link , $sqlq);
            while($row = mysqli_fetch_assoc($rez))
            if($row['walker'] == $_SESSION["user_id"])
            {
                print "<tr>";
                print "<td>{$row['date']}</td>";
                print "<td>{$row['time']}</td>";
                print "<td>{$row['duration']}</td>";
                print "<td>{$row['dog_name']}</td>";
                print "<td>{$row['dog_weight']}</td>";
                print "<td>{$row['owner_name']}</td>";
                print "</tr>";
            }
        ?>
    </tbody>
    </table>
    </div>
</body>
</html>