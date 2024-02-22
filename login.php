<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <script src="script.min.js"></script>

    <link rel="stylesheet" href="./css/style.min.css" />
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="resources/css/style.css" />
    <link rel="stylesheet" href="vendors/font-aweome/css/all.css" />
    <title>Admin UI</title>
    
  </head>
  <body>
    <!-- NAVIGATION-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
      <div class="container">
        <a href="index.php" class="navbar-brand">Infant Immunization</a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarNav"
        ></button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="./login.php" class="nav-link">
                <i class="fa fa-user-times"> Login</i>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index.php" class="nav-link">
                <i class="fa fa-user-times"> Home</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1><i class="fa fa-gear">Wellcome Vaccination</i></h1>
          </div>
        </div>
      </div>
    </header>


    <section id="posts">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="card">

              <div class="card-header">
                  <h1 class='sucess'>
                    Infant immunization
                  </h1>
              </div>
              <div class="card-header">
              <form action="#" method="post">
                  <table class="halfwidth">
                        <tr>
                            <td>username</td>
                            <td> <input type="text" name="username" placeholder="username" > </td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><input type="password" name="password" placeholder="password"  ></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="login" value="login" class="btn-sec"></td>
                        </tr>
                  </table>
              </form>
            
            </div>
          </div>
          
        </div>
      </div>
    </div>
</section>




<?php
include('./config/constant.php');

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password =md5($_POST['password']);
    $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    
    if ($rows==1){
      while($rows=mysqli_fetch_assoc($result)){
        $role=$rows['role'];
          }
          if($role == 'admin'){
                $_SESSION["login"]=$id."login successfully";
                $_SESSION["username"]=$username;
                header("Location:".HOMEURL."admin/index.php");
              }
              elseif($role == 'registrar'){
                $_SESSION["login"]=$id."login successfully";
                $_SESSION["username"]=$username;
                header("Location:".HOMEURL."registrar/index.php");
              }
              elseif($role == 'doctor'){
                $_SESSION["login"]=$id."login successfully";
                $_SESSION["username"]=$username;
                header("Location:".HOMEURL."health/index.php");
              }
        }
    else{
            $_SESSION["login"]=" fail to login";
            if(isset($_SESSION['login'])){
               echo "<h1 class='error'>". $_SESSION['login']."</h1>";
               unset($_SESSION['login']);
            }   
    }
    
    

    


    }


include("./admin/parts/footer.php")
?>
