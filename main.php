<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canis | Your pet's best friend</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans:wght@400;500&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        include "module/module-header.php"
    ?>
    <article>
        <div class="home-banner"> 
            <div class="container"> 
                <div class="entry-title">
                    <h1>Canis</h1>
                    <p>Your pet's best friend</p>
                </div>
                <div class="entry-button">
                    <a href="find-walker.php" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>

        <div class="home-content">
            <div class="container">
                <div class="text-center">
                    <div class="entry-text">
                        <h2>Walking your dog has never been easier</h2>
                        <p>We understand just how important it is to keep your furry friend happy and healthy. As pet owners know, dogs need regular exercise to stay physically and mentally fit, but it can be a challenge to find the time to walk them, especially with a busy schedule. That's where we come in!</p>
                    </div>
        </div>
                <div class="text-center">
                    <h2 class="article-title">How Canis works</h2>
                    <div class="row justify-content-between">
                        <div class="col-sm-4 col-md-3">
                            <i class="home-icon icon ion-ios-calendar-outline"></i>
                            <h4>Book a walk</h4>
                            <p>Select your most convenient time and date and we will match you with the most suitable walker in the area.</p>
                        </div>
                        <div class="col-sm-4 col-md-3"> 
                            <i class="home-icon icon ion-ios-people-outline"></i>
                            <h4>Meet your walker</h4>
                            <p>Our walkers are all experienced and vetted, so you can rest assured that your dog is in good hands.</p>
                        </div>
                        <div class="col-sm-4 col-md-3"> 
                            <i class="home-icon icon ion-ios-paw-outline"></i>
                            <h4>Enjoy</h4>
                            <p>Our walkers will take your dog on a walk around the neighbourhood, ensuring that they get the exercise they need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-why-canis">
            <div class="container">
                <div class="why-canis-content">
                    <h2>Why Canis?</h2>
                    <p>We think it should be simple to find a dependable pet sitter or walker, therefore we make sure each member of our pack is a passionate animal lover who enjoys playing and caressing.</p>
                    <div class="walker-criterias">
                        <h4>Every walker passes:</h4>
                        <ul>
                            <li><i class="icon ion-ios-checkmark-outline"></i> A mandatory background check</li>
                            <li><i class="icon ion-ios-checkmark-outline"></i> In-depth interview</li>
                            <li><i class="icon ion-ios-checkmark-outline"></i> A trial walk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="join-us">
            <div class="container">
                <div class="join-us-content">
                    <h2 class="article-title">Join our pack</h2>
                    <p>Join our pack and start walking dogs today!</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
    </article>
    
    <?php 
        include "module/module-footer.php"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>