<form action="PHPpractice1.php" method="post">
    <input type="text" placeholder="name" name="name">
    <input type="email" placeholder="email" name="email">
    <input type="submit" value="submit" name="submit">
</form>

<?php
    /* This will be printed even if the button is not clicked
    echo $_name = $_POST['name']; //POST and GET are Super Global
    echo $_email = $_POST['email'];
    */

    //to print only when the submit is clicked we use isset function
    if(isset($_POST['submit'])) {
        echo $_name = $_POST['name'];
        echo $_email = $_POST["email"];
    }
?>