<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Project</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <header id="banner"></header>
    <nav id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=1">Login</a></li>
            <li><a href="index.php?page=2">Register</a></li>
        </ul>
    </nav>
    <section id="content">

        <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 1:
                        require_once 'pages/login.php';
                        break;
                    case 2:
                        require_once 'pages/register.php';
                        break;
                    default:
                        require_once 'pages/error.php';
                        break;
                }
            } else {
                require_once 'pages/home.php';
            }
        ?>

    </section>
    
</body>
</html>