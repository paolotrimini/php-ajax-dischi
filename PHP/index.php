<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> -->
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- vue -->
     <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <style>
        body {
            background: darkgoldenrod;
            color: white;
        }
        hr {
            background: white;
        }
        img {
            width: 200px;
            height: 200px;
        }
        .box {
            background-color: grey;
            margin: 10px;
        }

    </style>

    <title>PHP - Vue - dischi</title>
    <?php
    require_once 'data.php';
    ?>
</head>
<body>
<div id="app" class="container">
    <div class="row">
        <div class="col-12 text-center mt-3">
            <h1>Dischi</h1>
            <?php
            foreach ($albums as $cd) {
                echo '<div class="box"><h1>' . $cd['title'] . '</h1>'
                    . '<img src="' . $cd['poster'] . '">'
                    . '<p>' . $cd['author'] . '</p>'
                    . '<p>' . $cd['genre'] . '</p>'
                    . '<p>' . $cd['year'] . '</p>'
                    . '</div>';
            }
            ?>
        </div>
    </div>
</div>
</html>