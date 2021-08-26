<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>List of files</title>
</head>
<body>
<div class="container">
    <div class="site-header"></div>
    <h1>Файловый менеджер</h1>

    <?php
    <ul>
    $folder = "PHP";
    if (is_dir($folder)) {
        if ($dh = opendir($folder)) {
            while (($file = readdir($dh)) !== false) {
                echo "файл: $file";
            }
            closedir($dh);
        }
    }
    </ul>
    ?>
    <footer> ...
    </footer>


</div>

<script src="js/script.js"></script>
</body>
</html>