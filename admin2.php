 <?php
session_start();
$connect = mysqli_connect("localhost","root","","primary");
if(!$connect){
    echo"Connection Failed";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>admin</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="background-color:#002D62;color:white;min-height:100vh;">
              <h1>DASHBOARD</h1>
              <hr>
              <br>
             <nav class="navbar">
              <ul class="nav" style="list-style:none;display:block;">
               <a href="primaryschoolproject.php" style="color:white"><li class="nav-item"><h4>Home</h4></li></a>
              <br><br>
              <a href="register.php" style="color:white"><li class="nav-item"><h4>Register Now</h4></li></a>
              <br><br>
              <a href="login.php" style="color:white;"><li class="nav-item"><h4>Login</h4></li></a>
            </div>
</ul>
</nav>
            <div class="col-9">
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone_No</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Class</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $fumnayasql = "SELECT * FROM `primary_table` ";
                 $result = mysqli_query($connect,$fumnayasql);
                 $nums_table = mysqli_num_rows($result);
                 if ($nums_table >= 1) {
                    while ($a = mysqli_fetch_assoc($result)) {
                        $id = $a['id'];
                        $name = $a['Name'];
                        $email = $a['Email'];
                        $phone = $a['Phone_No'];
                        $address = $a['Address'];
                        $age = $a['Age'];
                        $class = $a['Class'];
                    echo  "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$name</td>";
                    echo "<td>$email</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$address</td>";
                    echo "<td>$age</td>";
                    echo "<td>$class</td>";
                    echo "<td><a class='text text-success' href='update2.php?id=$id&name=$name&email=$email'>update</a></td>";
                    echo "<td><a class='text text-danger' href='deleteprimary.php?delete=$id'>delete</a></td>";
                    echo  "</tr>";
                    }
                 }?>
                </table>
            </div>
        </div>
    </div>

</body>
</html>