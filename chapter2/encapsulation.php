<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'Bid.php'; 
    
        $bid = new Bid();
        $bid->setBidAmount(6);
        

    ?>

    <h3><?php echo "The bid amount is ". $bid->getBidAmount() ; ?></h3>
</body>
</html>