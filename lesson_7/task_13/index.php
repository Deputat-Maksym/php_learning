<?php

    session_start();

    $name = $_GET['name'] ?? null;
    $nick = $_GET['nick'] ?? null;
    $email = $_GET['email'] ?? null;
    $password = $_GET['password'] ?? null;

    if ($name) {
        $_SESSION['name'] = $name;
    }
    if ($nick) {
        $_SESSION['nick'] = $nick;
    }
    if ($email) {
        $_SESSION['email'] = $email;
    }
    if ($password) {
        $_SESSION['password'] = $password;
    }


    var_dump($_SESSION);
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
                if ($name && $nick && $email && $password) {
                    echo '<p style="margin: 0 0 50px; font-size: 1.5rem">You are registered</p>';
                }
            ?>

            <form action="profile.php" method="get">
                <label>
                    <span>Nickname or login</span>
                    <input type="text" name="name" value="" required>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" value="" min="6" required>
                </label>
                <a href="form.php">Registration</a>
                <button type="submit">Login</button>
            </form>

        </div>

    </body>
</html>



