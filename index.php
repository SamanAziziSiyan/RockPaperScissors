<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="playmenu">
        <form action="" method="get">
            <button class="btn" name="single">بازی یک نفره </button>
            <button class="btn" name="multiple">بازی دو نفره </button>
        </form>
    </div>

    <!-- Single Player PlayGround -->
    <?php include "single.php";?>


    <!-- multiple Player PlayGround -->
        <?php include "multiple.php";?>

</body>

</html>