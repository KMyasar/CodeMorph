<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Code Conversion Challenge</title>
    <link rel="icon" href="Assets/Icons/icons8-registry-editor-96.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/main.css"/>
    <?php
    $file = basename($_SERVER['PHP_SELF'], '.php');
    if (file_exists("css/$file.css")) {
        echo '<link rel="stylesheet" href="css/' . $file . '.css"/>';
    }
    else if($file == 'login' || $file == 'register' || $file =='forgot')
    {
        echo '<link rel="stylesheet" href="css/account.css"/>';
    }
    ?>
</head>