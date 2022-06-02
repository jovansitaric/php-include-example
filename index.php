<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- There are two ways to include php file -->
    <!-- require and include -->
    <!-- require: Will include file, but if file doesn't exist, it will throw an error -->
    <!-- include: Will include file, but if file doesn't exist, page will render normaly -->
    <?php include_once('./components/navbar.php'); ?>
    This is first page
    <a href="./page2.php">Go to second page</a>
</body>
</html>