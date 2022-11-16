<?php
if($_GET["name"] || $_GET["age"]){
    echo "welcome ".$_GET['name']. "<br/>";
    echo "you age ".$_GET['age']. "<br/>";
}
?>

<html>
    <body>
        <form method="GET" action = "<?php $_PHP_SELF ?>">
            NAME: <input type="text" name="name"/> <br>
            AGE: <input type="number" name="age"/> <br>
            <input type="submit"/>
        </form>
    </body>
</html>
