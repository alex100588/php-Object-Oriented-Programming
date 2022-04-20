<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Comment.php';

        $com1 = new Comment('New comment', 1);
        $com2 = new Comment('New comments and more', 2);
        
    ?>

    <p><?php echo "$com1->text by user $com1->userId " ?></p>
    <p><?php echo "$com2->text by user $com2->userId " ?></p>
</body>
</html>