<?php include_once("header.php")?>


<div class="container-fluid">
        <!-- <section id="about"> -->
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8" style="Background-color: aquamarine; padding:30px">
                        <h2 style="text-align: center">Login Form</h2>
                        
                        <form action="#" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" placeholder="UserName" name="username">
                            <label for="floatingInput">UserName</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="adminId" placeholder="adminId" name="adminId">
                            <label for="floatingPassword">Admin ID</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                           <span style="float: right"> <button class="btn btn-dark" name="search">Login</button></span>
                        </div>
                           
                        </form>

                    </div>
                </div>
            </div>
        <!-- </section> -->

      
</div>

<?php

    if(isset($_POST['search'])){
        $conn = mysqli_connect('localhost','root','','studentresults');

        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }

        else{
            $username = $_POST['username'];
            $adminId = $_POST['adminId'];

            if(!empty($username) && !empty($adminId)){
                
                                        
                    $sql = "SELECT * FROM admin";
                    $result = $conn->query($sql);
                    
                   
                            if (!empty($result) && $result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($username == $row['username'] && $adminId == $row['adminId']){
                                        header('location:admindashboard.php');
                                    }
                                    else{
                                        echo '<script>alert("Please Fill Correct Information")</script>';
                                    }
                                }
                            }
                
            }
            else{
                echo '<script>alert("Please Fill All Fields")</script>';
            }
        }
    }
?>

<?php include_once('footer.php')?>