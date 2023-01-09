<?php
include('configuration/config.php');
?>
<?php
if (isset($_POST["submit"])){

    // echo "<h1 style='color:red';>hi</h1>";

    $selectstate=$_POST['selectstate'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $coming=$_POST['from'];
    $going=$_POST['going'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $passenger=$_POST['passengers'];
    $date=$_POST['date'];

 $insert= "INSERT INTO  hirebus (selectstate,firstname,lastname,coming,going,email,number,passengers,rentaldate) VALUES ('$selectstate','$firstname','$lastname','$coming',' $going','$email','$number','$passenger','$date')";
 $sql=mysqli_query($conn,$insert);
 if($sql)  {
    // echo "sucessful";
    echo"<script>alert('Successfull')</script>";
    echo"<script>widow.location.href = 'daily.php'</script>";

    header('location: daily.php');
 } else{
    echo"<script>alert('failed')</script>";
    echo"<script>widow.location.href = 'hirebus.php'</script>";
} 
}
?>