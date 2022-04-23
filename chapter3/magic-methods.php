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
        require 'Connection.php';

        $connection1 = new Connection();
        
        $connection1->setConnectionId('127.0.0.1');
        print $connection1;
    ?>

    <p><?php echo "the number of connection is " . $connection1->getCount(); ?></p>
    <p><?php echo "the conference id is " . $connection1->connectionId; ?></p>
    <p><?php echo "the conference id is " . $connection1->conferenceId; ?></p>
</body>
</html>  