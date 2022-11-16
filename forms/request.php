<?php
echo "welcome to multiverse";
if($_REQUEST["name"] || $_REQUEST["age"])
{
    echo "you are ".$_REQUEST["name"]."<br>";
    echo "you are aged: ".$_REQUEST["age"];
}
?>

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            NAME: <input type="text" name="name">
            AGE: <input type="number" name="age"/>
            <input type="submit">
        </form>
    </body>
</html>