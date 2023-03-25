<?php
    session_start();
    include_once "module/modul-functii.php";
    $link = mysqli_connect("localhost", "root", "", "canis");
    if(! $link)
    {
        print "Conexiune imposibila.";
        die();
    }        
    if(Login()!= 0)
    {
        print $_SESSION['user_id']; 
        header("Location:walker-cp.php");
    }
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $clean = [
            'username' => trim($_POST['username']), 
            'password' => trim($_POST['password']),
        ];
        $sqlq = "SELECT ID,username,password,email,rol FROM accounts WHERE username = '{$clean['username']}'";
        $rez = mysqli_query($link , $sqlq);
        $user = mysqli_fetch_assoc($rez);
        if($user != [] && $clean['password'] == $user['password'])
                {
                    $_SESSION['username'] = $clean['username'];
                    $_SESSION['user_id'] = $user['ID'];
                    header("Location: walker-cp.php");
                    die();
                }
        MesajAdaugare('Utilizator/Parola incorecte' , 'danger');
        header("Location: login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canis | Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <main class="center">
        <div class="my-box">
            <form method="post">   
                <div class="m-3 text-star">
                    <label class="control-label" for="username">
                        <h5 class="login-info">Utilizator</h5>
                    </label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="m-3 text-start">
                                <label class="control-label text-start" for="password">
                                    <h5 class="login-info">Parola</h5>
                                </label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>                    
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-login my-btn-login">
                            <span class="button-text">Conectare</span>
                        </button>
                    </div>
                </form>
        </div>
    </main>
    <div>
        <?php
            MesajAfisare()
        ?>
    </div>
</body>
</html>