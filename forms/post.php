<?php
if($_POST["name"] || $_POST["age"]){
    echo "welcome ".$_POST['name']. "<br/>";
    echo "you age ".$_POST['age']. "<br/>";
}
?>

<html>
    <body>
        <form method="POST" action = "<?php $_PHP_SELF ?>">
            NAME: <input type="text" name="name"/> <br>
            AGE: <input type="number" name="age"/> <br>
            <input type="submit"/>
        </form>
    </body>
</html>
