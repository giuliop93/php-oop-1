<?php

class Movie
{

    public $title;

    function __construct($title, $duration)
    {

        $this->title = $title;
        $this->duration = $duration;
    }

    public function setAudience($eta)
    {
        if ($eta < 18) {
            $this->audience = false;
        }
    }

    public function getAudience()
    {
        return $this->audience;
    }
}

// $movie->title = "Francesco e la borraccia magica";

$movie1 = new Movie("Francesco e la borraccia magica", 120);
$movie2 = new Movie("Francesco e il gatto sulla tastiera", 125);

$movie->setAudience();

$movie_audience = $movie->getAudience()

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>
            <?php echo ($movie1) ?>
        </li>
        <li>
            <?php echo ($movie2) ?>
        </li>

    </ul>




</body>

</html>