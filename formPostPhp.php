<!DOCTYPE html>
<html>
    <head>
        <title>Form with php and get method</title>
    </head>
    <body>
        <form method="post">
            <input name="first_name" type="text"/>
            <input type="submit"/>
        </form>
        <?php
        if(isset($_POST["first_name"])){
            echo "<p>" . $_POST["first_name"] . "</p>";
        } 
        ?>
    </body>
</html>