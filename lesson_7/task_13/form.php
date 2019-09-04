<?php

//    setcookie('visit', '1');
//
//
//    if ($_COOKIE['visit']) {
//        $counter = +$_COOKIE['visit'] += 1;
//        setcookie('visit', $counter);
//    }
//
//    if ($_GET['name']) {
//        setcookie('name', $_GET['name']);
//    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        .wrap {
            width: 320px;
            margin: 0 auto;
            padding: 25px;
        }

        label {
            display: block;
            margin-bottom: 30px;
            color: #55e;
        }

        label span {
            display: block;
            margin-bottom: 5px;
        }

        input {
            display: block;
            width: 100%;
            padding: 5px 10px;
            border: 1px solid #c8c2c2;
            border-radius: 3px;
            color: gray;
            font-size: 1.5rem;
            box-sizing: border-box;
        }

        button  {
            outline: none;
            border: none;
            border: 3px solid #55e;
            border-radius: 8px;
            text-transform: uppercase;
            color: #55e;
            background: none;
            font-size: 1.2rem;
            padding: 10px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 0 auto;
            display: block;
        }

        a {
            font-size: 1.2rem;
            margin-bottom: 25px;
            display: block;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>
    <body>

        <div class="wrap">

            <?php
//                if ($_COOKIE['visit']) {
//                    echo '<p style="margin: 0 0 50px">You have visited this page - ' . $_COOKIE['visit'] . ' times</p>';
//                } else {
//					echo '<p style="margin: 0 0 50px">You have visited this page - 1 times</p>';
//                }
            ?>

            <form action="index.php" method="get">
                <label>
                    <span>Username</span>
                    <input type="text" name="name" value="" required>
                </label>
                <label>
                    <span>Nickname</span>
                    <input type="text" name="nick" value="" required>
                </label>
                <label>
                    <span>E-mail</span>
                    <input type="email" name="email" value="" required>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" value="" min="6" required>
                </label>
                <a href="index.php">Login</a>
                <button type="submit">Registretion</button>
            </form>

        </div>

    </body>
</html>



