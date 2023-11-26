<?php 

$server = mysqli_connect("localhost","root","","primary");
if(!$server){
    echo"Connection Failed";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
<?php
             if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $age = $_POST['age'];
                $address = $_POST['address'];
                $class = $_POST['class'];
                $password = $_POST['password'];

                $fumnaya = "INSERT INTO `primary_table`(`Name`,`Email`,`Paswword`,`Phone_No`,`Address`,`Age`,`Class`) 
                VALUES('$name','$email','$password','$phone','$address','$age','$class')";
                $fumnaya_query = mysqli_query($server,$fumnaya);
                if($fumnaya_query){
                    echo"<div class='alert alert-danger'>Registration Successful</div>";
                }else{
                    echo"e no work";
                }
                
             }

            ?>
    <div class="container-fluid w-50 h-70 p-5 my-5"style="background-color:#002D62;color:white; text-align:center">
    <br>
        <h1> REGISTER </h1>
            <form class="form-group" method="post">
                <div  class="text text-warning"style="text-align:left;">
              <label for="name" class="form-label">Name:</label>
              <input type="text" name="name" id="name" class="form-control">
              <label for="email" class="form-label">Email:</label>
              <input type="email" name="email" id="email" class="form-control">
              <label for="password" class="form-label">Password:</label>
              <input type="password" name="password" id="password" class="form-control">
              <label for="phone" class="form-label">Phone Number:</label>
              <input type="text" name="phone" id="phone" class="form-control">
              <label for="age" class="form-label">Age:</label>
              <input type="text" name="age" id="age" class="form-control">
              <label for="address" class="form-label">Address:</label>
              <textarea name="address" id="address" class="form-control" rows="2"></textarea>
              <label for="class" class="form-label">Entry class:</label>
              <select  class="form-control"name="class" required>
                <option value="">SELECT</option>
                <option value="jss1">JSS1</option>
                <option value="jss2">JSS2</option>
                <option value="ss2">SS2</option>
                <option value="ss3">SS3</option>
              </select>
              <br><br>
                </div>
              <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning">
            </form>
           
    </div>
</body>
</html>