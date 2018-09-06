<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
    <!-- Text -->
    <p>Some Text</p>
    
    <?php echo "Dynamic Text from PHP"; ?>
    <p>Web Server Time: 
       <span><?php 
              // System Time
              echo "Today is " . date("Y/m/d");
             ?></span>
    <p>
  </body>
</html>