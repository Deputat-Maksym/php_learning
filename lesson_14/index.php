<?php

require_once 'csv/Read.php';
require_once 'csv/Write.php';


if($_GET['name'] && $_GET['date']) {
    $csvWrite = new Write('data.csv');
}


//var_dump($_GET['name']);

$csvRead = new Read('data.csv');
$getData = $csvRead->readData();

//function, that show data from file
function showFileData($input) {
    print('<table><tbody>');
    while(($data = fgetcsv($input, 1000, ';')) !== false) {

        print('<tr>');

        foreach ($data as $val) {
            printf('<td>%s</td>', $val);
        }

        print('</tr>');
    }
    print('</tbody></table>');
}

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

        table, th, td {
            border: 1px solid;
            border-collapse: collapse;
        }

        table {
            margin-bottom: 50px;
        }

        td {
            padding: 5px 10px;
        }
    </style>
</head>
    <body>

        <div class="wrap">
            <?php
                if($getData) {
                    showFileData($getData);
                } else {
                    echo 'File is not exist';
                }

            ?>


            <form action="index.php" method="get">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" required>
                </label>
                <label>
                    <span>Date of birth</span>
                    <input type="date" name="date" required>
                </label>
                <button type="submit">Add data</button>
            </form>

        </div>



    </body>
</html>



