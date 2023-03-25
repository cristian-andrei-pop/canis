<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canis | Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans:wght@400;500&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="form">
        <form method="post">
            <div class="form-group mb-4">
                <label class="form" for="user_name">Username</label>
                <input class="form-control" type="text" name="user_name">
            </div>
            <div class="form-group mb-4">
                <label for="password">Parola</label>
                <input class="form-control" type="password" name="password">
            </div>  
            <input class="btn btn-primary" type="submit" value="Login">
        </form>
    </div>
</body>
</html>