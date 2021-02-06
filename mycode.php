<?php

$arrCity=array("Dhaka","Chittagong","Syllet");
sort($arrCity);
?>

<select>
    <option>Select city</option>
    <?php
    
    foreach($arrCity as $city)
    {
        echo "<option>$city</option>";
    }
    ?>

</select>