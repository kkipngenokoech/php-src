<?php
$string  = "Hello MulTiVerSe<br><br>";

$sanitizeString = filter_var($string, FILTER_SANITIZE_STRING);
echo $sanitizeString;

?>




<html>
    <body>
        <table>
            <td>
                <th>Filter name</th>
                <th>FIlter ID</th>
            </td>
            <?php
            foreach (filter_list() as $id => $filter)
            {
                echo "<tr><td>".$filter."</td><td>".$id."</td".filter_id($filter)."</td></tr>";
            }

            ?>
        </table>
    </body>
</html>