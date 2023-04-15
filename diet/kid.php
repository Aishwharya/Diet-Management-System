<?php
include("database.php");
include("fetch-data.php);
?>
<select name="kid">
   <option>kid</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['kid']; ?> </option>
    <?php 
    }
   ?>
</select>