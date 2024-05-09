<?php session_start();?>

<?php include('header.php') ?>
            <div class="jumbotron text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                <span><a href="index.php" class="btn btn-success " style="float: left;">العوده للرئيسيه</a></span>
                             أنشاء حساب جديد
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 jumbotron">
                            <form  method="post">
                              <div class="form-group">
                                 الاسم:<input type="text" class="form-control" name="user" placeholder=" ادخل الاسم" required>
                              </div>
                            <div class="form-group">
                                 كلمه المرور:<input type="password" class="form-control" name="password" placeholder="ادخل كلمه المرور" required>
                            </div>
                            <div class="form-group">
                                  البريد الألكتروني:<input type="email" class="form-control" name="email" placeholder="ادخل البريد الألكتروني " required>
                            </div>
                              <div class="form-group">
                                  <input type="submit" name="signup" value="سجل" class="btn btn-success btn-block text-center" > 
                              </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_POST['signup'])) { // هذا الكود الخاص باضافةالبيانات الى الجدول 
        
                $user = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];  
        
                $con = mysqli_connect('localhost','root','','st');
                $cmd = "INSERT INTO `admin`(`username`, `password`, `email`)VALUES ('$user' ,'$password' , '$email')";
                
                if (mysqli_query($con,$cmd)) {
                    echo "<script> alert('تم انشاء الحساب بنجاح')";
                    header("location: login.php");
                }else{
                    echo "ERROR";
                }
            }
            
            

            ?>