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
    <!-- Great thing about this is that if we change something in navbar.php, we see that change on every page that includes it -->
    <!-- This is great for a concept 'DRY (Don't repeat yourself)' -->
    <?php include_once('./components/navbar.php'); ?>
    This is second page
    <a href="./index.php">Return to home</a>
</body>
</html>