<?php 
session_start();
$name = $email = $phone = $address = $age = $class = "";
$server = mysqli_connect("localhost","root","","primary");
if(!$server){
    echo"Connection Failed";
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_GET['name'])){
    $name = $_GET['name'];
}
if(isset($_GET['email'])){
    $email = $_GET['email'];
}
if(isset($_GET['phone'])){
    $phone = $_GET['phone'];
}
if(isset($_GET['address'])){
    $address = $_GET['address'];
}
if(isset($_GET['age'])){
    $age = $_GET['age'];
}
if(isset($_GET['class'])){
    $class = $_GET['class'];
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $class = $_POST['class'];

$fumnaya = "UPDATE `primary_table` SET `Name`='$name',`Email`='$email',`Phone_No`='$phone',`Address`='$address',
`Age`='$age',`Class`='$class' WHERE `id`=$id";
$query_omo = mysqli_query($server,$fumnaya);
if($query_omo){
    $_SESSION['success'] = "This user info has been updated";
        header("Location:admin2.php");
        exit();
}
else{
    $_SESSION['failure'] = "Could not update info";
    header("Location:admin2.php");
        exit();
}
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
   <div class="container"style="background-color:#002D62;color:white;">
   <h1>UPDATE</h1>
    <form method="post" class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input type="text"class="form-control" name="name" id="name"placeholder="<?php echo $name ;?>" required>
        <label for="name" class="form-label">Email:</label>
        <input type="email"class="form-control" name="email" id="email"placeholder="<?php echo $email ;?>" required>
        <label for="name" class="form-label">Phone Number:</label>
        <input type="text"class="form-control" name="phone" id=""placeholder="<?php echo $phone ;?>" required>
        <label for="name" class="form-label">Address:</label>
        <textarea type="text"class="form-control" name="address" id=""placeholder="<?php echo $address ;?>" required></textarea>
        <label for="name" class="form-label">Age:</label>
        <input type="text"class="form-control" name="age" id=""placeholder="<?php echo $age ;?>" required>
        <label for="name" class="form-label">Class:</label>
        <select class="form-control" name="class" placeholder="<?php echo $class ;?>" required>
           <option>SELECT</option>
           <option>JSS1</option>
           <option>JSS2</option>
           <option>SS1</option>
           <option>SS1</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="SUBMIT">
        <br><br>
    </form>
   </div> 
</body>
</html>