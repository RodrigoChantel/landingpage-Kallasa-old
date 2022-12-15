<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="./Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./Assets/img/favicon/favicon.ico">
    <title>Document</title>
</head>
<body>
    <?php include_once('http://localhost/kallasa-old/views/layout/header.php');?>
    <?php include_once('http://localhost/kallasa-old/views/layout/main.php');?>
    <?php include_once('http://localhost/kallasa-old/views/layout/footer.php');?>

    
</body>
<script src="./Assets/js/popper.min.js"></script>
<script src="./Assets/js/style.js"></script>
<script src="./Assets/js/bootstrap.min.js"></script>
<script src="./Assets/js/fontawesome.js" crossorigin="anonymous"></script>
<script>const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))</script>
</html>
