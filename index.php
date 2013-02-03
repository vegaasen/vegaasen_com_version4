<?php require("blog/wp-blog-header.php"); ?>
<?php $configuration = parse_ini_file("simplejuice/_configuration/site.ini");?>
<!DOCTYPE html>
<html>
    <?php include "simplejuice/parts/head.php";?>
    <body>
        <?php include "simplejuice/parts/header.php";?>
        <?php
            foreach (glob("simplejuice/parts/content/*.php") as $fName)
            {
                include $fName;
            }
        ?>
        <?php include "simplejuice/parts/footer.php";?>
    </body>
</html>