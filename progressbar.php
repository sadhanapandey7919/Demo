<?php
$total=rand(1,100);
$current=rand(1,$total);
$percent=round(($current/$total)*100,1);

echo "$percent%";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="styles.css?"<?php echo time() ?> />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .outter 
        {
            height:25px;
            background: linear-gradient(0deg, rgba(244,247,247,1) 4%, rgba(18,226,39,1) 37%, rgba(18,223,32,1) 61%, rgba(232,246,246,1) 95%);
            width: 100px;
            
        }
        .inner
        {
            height: 25px;
            background: linear-gradient(0deg, rgba(244,247,247,1) 3%, rgba(17,163,195,1) 37%, rgba(17,160,194,1) 61%, rgba(232,246,246,1) 95%);
            border-right: solid 1px;
            width:<?php echo $percent ?>;
        }
    </style>
    <title></title>
  </head>
  <body>
  <div class="container">
    <div class=col-md-12>               <!-- js work here for looping the start date and end date --></div>
   <p> Task 1</p>
    <div class="outter">
      <div class="inner">
        </div>
    </div>
    <p>Task 2</p>
    <div class="outter">
        <div class="inner">
        </div>
    </div>
    <p>Task 3</p>
    <div class="outter">
        <div class="inner">
        </div>
    </div>
    <p>Task 4</p>
    <div class="outter">
        <div class="inner">
        </div>
    </div>
    <p>Task 5</p>
    <div class="outter">
        <div class="inner">
        </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>