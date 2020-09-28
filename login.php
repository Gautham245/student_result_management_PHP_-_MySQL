<html>
<head>
    
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
      <style>
        .main1{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
    </style>
</head>
<body>
    <div class="title">
        <span>Admin Login</span>
    </div>
   
<div class="main1">
    
        <div class="login">
            <form action="" method="post" name="login">
                    
                    <input type="text" name="userid" placeholder="Username" autocomplete="off">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                    <input type="submit" value="Login">
            </form>    
        </div>
        
    </div>
        
    

</body>
</html>

<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: dashboard.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>

