<?php
session_start();

    $name = $_GET['name'] ?? null;
    $email = $_GET['email'] ?? null;
    $password = $_GET['password'] ?? null;

    var_dump($_SESSION);
//function showFilterRes($arr, $tableHeader) {
//	print('<div style="font-weight: bold; margin-bottom: 5px">' . $tableHeader . '</div>');
//
//	print('
//		<table style="padding: 0 0 45px 0">
//			<thead style="font-weight: bold">
//				<td style="padding: 0 10px">Name</td>
//				<td style="padding: 0 10px">Salery</td>
//				<td style="padding: 0 10px">Work hours</td>
//			</thead>
//
//			<tbody>
//	');
//
//	foreach ($arr as $key) {
//		print('<tr>');
//
//		foreach ($key as $val) {
//			printf('<td style="padding: 0 10px">%s</td>', $val);
//		}
//
//		print('</tr>');
//	};
//
//	print('
//			</tbody>
//		</table>
//	');
//};

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

                if ($password === $_SESSION['password'] && $name === $_SESSION['nick'] || $name === $_SESSION['email']) {

                    echo '<form action="index.php" method="get">
                            <label>
                                <span>Username</span>
                                <input type="text" name="name" value="" pattern="[a-zA-Z][a-zA-Z0-9-_\.]{5,20}$" required>
                            </label>
                            <label>
                                <span>Nickname</span>
                                <input type="text" name="nick" value="" pattern="[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" required>
                            </label>
                            <label>
                                <span>E-mail</span>
                                <input type="email" name="email" value="" required>
                            </label>
                            <label>
                                <span>Password</span>
                                <input type="password" name="password" value="" min="6" required>
                            </label>
                            <button type="submit">Edit profile</button>
                            <button type="submit">Save</button>
                          </form>';

            } else {

                echo '<p style="margin: 0 0 50px; font-size: 1.5rem">Login or password is not valid</p>';

            }

            ?>
        </div>

    </body>
</html>
