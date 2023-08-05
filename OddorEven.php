<form action="OddorEven.php" method="POST">
    <h2>Odd or Even</h2>
    <input type="number" placeholder="Enter a Number" name="number">
    <input type="submit" value="Check" name="submit" style="background-color: blue; color:white;">
</form>

<?php  
    if($_POST['number']==null)
        echo "Enter a Number!";
    if(isset($_POST['submit'])) {
        $no = $_POST['number'];
        if($no%2==0)
            echo "$no is an Even Number";
        else
            echo "$no is a Odd Number";
    }
?>