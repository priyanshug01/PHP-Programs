<form action="PrimeNo.php" method="POST">
    <h2>Prime Number</h2>
    <input type="number" placeholder="Enter a Number" name="number">
    <input type="submit" value="Check" name="check" style="background-color: blue; color:white;">
</form>

<?php  
    if($_POST['number']==null)
        echo "Enter a Number!";
    if(isset($_POST['check'])) {
        $no = $_POST['number']; $flag=0;
        for($i=2;$i<=$no/2;$i++) {
            if($no%$i==0) {
                $flag=1;
                break;
            }
        }
        if($flag==0)
            echo "$no is a Prime Number!";
        else
            echo "$no is Not a Prime Number!";
    }
?>