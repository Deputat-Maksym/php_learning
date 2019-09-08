<?php

    session_start();

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

        .show-pass {
            display: flex;
        }

        .show-pass input {
            width: unset;
            margin-right: 10px;
        }

        .show-pass span {
            margin: 0;
        }
    </style>
</head>
    <body>

        <div class="wrap">

            <form action="index.php" method="get">
                <label>
                    <span>Username</span>
                    <input type="text" name="name" value="" pattern="[a-zA-Z-Яа-я][a-zA-Z-Яа-я0-9-_\.]{5,20}$" required>
                </label>
                <label>
                    <span>Nickname</span>
                    <input type="text" name="nick" value="" pattern="[a-zA-Z-Яа-я][a-zA-Z-Яа-я0-9-_\.]{3,20}$" required>
                </label>
                <label>
                    <span>E-mail</span>
                    <input type="email" name="email" value="" required>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" id="password" value="" min="6" pattern="[0-9]{6,20}$" required>
                </label>
                <label class="show-pass">
                    <input type="checkbox" onclick="checkClick()">
                    <span>Show password</span>
                </label>
                <a href="index.php">Login</a>
                <button type="submit">Registretion</button>
            </form>

        </div>

        <script>

          'use strict';

          var passInput = document.querySelector('#password'),
              checkInput = document.querySelector('.show-pass input');

          console.log(passInput);
          function checkClick() {
            if(checkInput.checked) {
              passInput.setAttribute('type', 'text')
            } else {
              passInput.setAttribute('type', 'password')
            }
          }

        </script>

    </body>
</html>



