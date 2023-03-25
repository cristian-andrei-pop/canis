<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canis | Booking Submitted</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans:wght@400;500&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/form.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="form-header">
                <h2 class="article-title">Booking Submitted</h2>
            </div>
            <div class="form-header">
                <p>Thank you for your booking. We will contact you shortly.</p>
                <p id="result"></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        redirect();
        function redirect () {
            setTimeout(myURL, 5000);
            var result = document.getElementById("result");
            result.innerHTML = "<b> The page will redirect you to the main page in 5 seconds. </b>";
        }

        function myURL() {
            document.location.href = 'index.php';
        }
    </script>
</body>
</html>