<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="sweetalert.js"></script>

    
    <title>Document</title>
</head>
<body>
    <header>
        <img src="image/treepz@3.jpg" alt="">
        <nav>
        <ul>
        <li class="float-left"><a href="index.php"><img src="image/logo.svg"></a></li>
      
       <li><a href="index.php">Home</a></li>
       <li><a href="index.php">About</a></li>
       <li><a href="index.php">Our offerings</a></li>
       <li><a href="drive.php">Drive and Earn</a></li>
       <li><a href="hirebus.php">Hire a bus</a></li>
       <li><a href="index.php" class="active">Download the app</a></li>
       <li><select>
<option>Nigeria</option>
<option>Ghana</option>
<option>Uganda</option>
</select>

       </li>

        </ul>
        </nav>
    </header>
    <div class="container">

   
    <div class="hire">
    <h1>Move with easy every <br/> time you hit the road</h1>
   <center> 
    <div class="row">
    <div class="forma">
    <div class="busines-btn">
            <button>Business Treepz</button>
            <a href="dailytreep.php"><button>Daily Treepz</button></a>
            </div>
            <hr>
            <div class="cost-effect">
              <p>A cost-effective and comfortable bus service tailored to your needs</p>
            </div>
        <form action="" method="post">
        
          <div class="inputa">
            <label for="">Company name</label><br/>
            <input type="text" name="company" id="" placeholder="company name">
          </div>
          <div class="inputa">
            <label for="company name">Email</label><br/>
            <input type="email" name="email" id="" placeholder="Email Address">
          </div>
          <div class="inputa">
            <label for="company name">Phone number</label><br/>
            <input type="tel" name="phone" id="" placeholder="Phone number">
          </div>
</div>
<div class="formb">
          <div class="inputb">
           <select name="service">
            <option>Select service </option>
            <option>Staff transport</option>
            <option>School transport</option>
            <option>Tour/Event transport</option>
            <option>Others </option>

</select>
          </div>
          <div class="inputb2">
           <button type="submit" name="inquire">Inquire Now</button>
          </div>
          </div>
        </div>
        </form>
        </div></center>
        <div class="total">
          <p style="backgrpound-color:white;">Total number of trips completed <span id="number1">2,218,875</></p>
        </div>
        <div class="solution">
        <h1>Solutions carefully crafted for all of your transport needs</h1>
          <div class="car-dream">
            <img src="image/treepzOnATrip_3.gif" alt="">
          </div>
          <div class="chasing-dream">
          <p>Focus on chasing your dreams, we’ll handle the rest. Explore a 
          predictable, reliable, and convenient way to move every day, all at the tap of your smartphone.</p>
          </div>
          <div class="people-move">
            <p>
            How do you move your people? Let us manage this and offer you a cost-effective and comfortable bus service tailored to your needs.
            </p>
          </div>
          <div class="people-car">
            <img src="image/staff-treepz.gif" alt="">
          </div>
        </div>



</div>
<?php
include("configuration/config.php");
if(isset($_POST['inquire'])){
  $compnay = $_POST['company'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $service = $_POST['service'];
if(strlen($phone) < 11 ){?>

<script>

 swal({
  title: "Error!",
  text: "Phone Number is less than 11!",
  icon: "error",
  button: "ok",
});

</script>
<?php
}else{
  $insert = mysqli_query($conn, "INSERT INTO home (company, email, phone, service) 
   VALUES ('$compnay','$email','$phone','$service')");
   if($insert){ ?>
   <h1 id="alert"></h1>
<script>
document.getElementById('alert').innerHTML =  swal("Sucess", "Request was sent successfully", "success");
window.setTimeout("document.getElementById('alert').style.display='none';", 3500);



</script>
 <?php  }
}

}


?>
<?php
include("footer.php");
?>
        <!-- <div class="footer">
          <p>Solutions carefully crafted for all of
</br>your transport needs</p>
</p>
<div class="inpta">
        <img src="image/treepzOnATrip_3.gif">
</div>
<div class="focus">
        <p>Focus on chasing your 
        dreams, we’ll handle the
       rest. Explore a 
      predictable, reliable, and
    convenient way to move
  every day, all at the tap
of your smartphone.</p>
        </div>
        <div class="service">
          <p>How do you move your
            people? Let us manage
         this and offer you a
         cost-effective and 
        comfortable bus service
          tailored to your needs.</p>
          </div>
             <div class="img">
             <img src="image/staff-treepz.gif">
             </div>
        </div> -->



       
        


</body>
</html>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63500420b0d6371309ca6080/1gfo90a46';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

</script>

<script>

var project = setInterval(projectDone, 100)
        let count1 = 1;
       

        function projectDone() {
            count1++ 
            document.querySelector("#number1").innerHTML = (count1 * 500)
            if (count1 == 2218875) {
                clearInterval(project)
            }
        }






</script>
<!--End of Tawk.to Script-->