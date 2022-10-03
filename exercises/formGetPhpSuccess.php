<!DOCTYPE html>
<html>
    <head>
        <title>Form with php and get method</title>
    </head>
    <body>
    <?php
        if(isset($_GET["first_name"])){
            echo "<p>" . $_GET["first_name"] . "</p>";
        } 
        ?>    
    </body>
</html>