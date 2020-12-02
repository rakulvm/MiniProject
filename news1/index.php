<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer's market Articles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">    
</head>
<body>
    <?php
    $url="http://newsapi.org/v2/everything?q=agriculture&from=2020-11-25&sortBy=publishedAt&apiKey=5e571bc9c5e94eb58aa0bb0a5695e5df";
    $response=file_get_contents($url);
    $NewsData=json_decode($response);
    ?>
    <div class="jumbotron">
        <h1>Farmer's Market News & Articles</h1>
    </div>
    <div class="container-fluid"> 
    <?php
    foreach($NewsData->articles as $News)
    {
    ?>
    <div class="row Newsgrid">
        <div class="col-md-3">
            <img src="<?php echo $News->urlToImage ?>" alt="News-thumbnail">
        </div>
        <div class="col-md-9">
            <h2>Title: <?php echo $News->title ?></h2>
            <h5>Description: <?php echo $News->description ?></h5>
            <p>Content: <?php echo $News->content ?></p>
            <h6>Author: <?php echo $News->author ?> </h6>
            <h6>Published: <?php echo $News->publishedAt ?> </h6>
        </div>
    </div>
    <?php 
        }
    ?>
    </div>
</body>
</html>