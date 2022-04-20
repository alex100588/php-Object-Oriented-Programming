<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php

    require 'CheckingAccount.php';
    require 'PremiumCheckingAccount.php';

    $checkingAccount = new CheckingAccount();
    $checkingAccount->deposit(222);
    $checkingAccount->withdraw(455);

    $checkingAccount->transfer(12);

    $premiumCheckingAccount = new PremiumCheckingAccount();

    echo $premiumCheckingAccount->minimumBalance . '<br>';
    $premiumCheckingAccount->deposit(12);
    $premiumCheckingAccount->withdraw(10);
    $premiumCheckingAccount->deposit(120);

    ?>
</body>
</html>