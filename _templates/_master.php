<!DOCTYPE html>
<html lang="en">

<?php
sessions::load_templates("head");
?>
<body>
    <?php
        sessions::load_templates("header");
        if (basename(sessions::CurrentScript(), ".php") == "login" || basename(sessions::CurrentScript(), ".php") == "register" || basename(sessions::CurrentScript(), ".php") == "forgot")
        {
            sessions::load_templates("account");
        }
        else
        {
            sessions::load_templates(basename(sessions::CurrentScript(), ".php"));
        }
        sessions::load_templates("sidebar");
        sessions::load_templates("settings");
        sessions::load_templates("footer");
    ?>
</body>
</html>