<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibility</title>
</head>
<body>
    <?php

        require 'FileReader.php';
        require 'CsvFileReader.php';

        //$fileReader = new FileReader();
        $fileReader = new CsvFileReader();
        $privateProperty = new FileReader();

    ?>

    <!-- <h1><?php echo $fileReader->getData(); ?></h1> -->
    <h1><?php echo $fileReader->getData(); ?></h1>
    <h1><?php echo $privateProperty->getData(); ?></h1>

</body>
</html>