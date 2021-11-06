<?php
$presentTime = new DateTime('now');
$destinationTime = new DateTime('10/21/2015 04:06');

// var_dump($presentTime);
// var_dump($destinationTime);

$interval = $presentTime->diff($destinationTime);

//var_dump($interval);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="destination-time"> <?= 'Destination time is ' . $destinationTime->format('M d Y h:i:s'); ?></div>
    <div class="present-time"> <?= 'Present time is ' . $presentTime->format('M d Y h:i:s'); ?></div>
    <div class="time-bridge"> <?= 'The time of the time bridge' . $interval->format(" %Y years %M months %D days %H hours %I minutes %S seconds"); ?></div>

</body>

</html>
