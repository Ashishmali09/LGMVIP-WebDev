<?php include_once("header.php")?>


<div class="container-fluid">
        <!-- <section id="about"> -->
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8" style="Background-color: aquamarine; padding:30px">
                        <h2 style="text-align: center">Login Form</h2>
                        
                        <form action="#" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Roll_No" placeholder="Roll_No" name="Roll_No">
                            <label for="floatingInput">Roll Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Fname" placeholder="Fname" name="Fname">
                            <label for="floatingPassword">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Lname" placeholder="Lname" name="Lname">
                            <label for="floatingPassword">Last Name</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                           <span style="float: right"> <button class="btn btn-dark" name="search">Search</button></span>
                        </div>
                        <br><br>
                           
                        </form>

                    </div>
                </div>
            </div>
        <!-- </section> -->

      
</div>
<br><br>

<?php
        if(isset($_POST['search'])){
                $conn = mysqli_connect('localhost','root','','studentresults');

                if($conn->connect_error){
                        die("Connection failed".$conn->connect_error);
                    }

                else{
                        
                        $RollNo = $_POST['Roll_No'];
                        $Fname = $_POST['Fname'];
                        $Lname = $_POST['Lname'];

                        //check empty fields
                        

                        if(!empty($RollNo) && !empty($Fname) && !empty($Lname)){
                                        
                                $sql = "SELECT * FROM student WHERE RollNo = $RollNo";
                                $result = $conn->query($sql);
                                
                               
                                        if (!empty($result) && $result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {

                                                if($RollNo == $row["RollNo"] && $Fname == $row["Fname"] && $Lname == $row["Lname"]){
                                                
                                                        echo '<script>alert("Result Declared Scroll Down To See Result")</script>';
                                                
                                                        ?>
                                                        <!-- Table Body Start -->
                                                        <h1 style="text-align: center;">Student Result</h1>
                                                        <div class="row justify-content-center">
                                                        <div class="col-auto">
                                                        <table class="table table-hover table-bordered table-striped text-center" style="width: 500px;">
                                                        
                                                        <tbody style="width=100px">
                                                        <tr class="table-primary">
                                                        <th scope="row"><?php echo "Roll No:";?></th>
                                                        <td><?php echo $row['RollNo']?></td>
                                                        </tr>
                                                        <tr class="table-primary">
                                                        <th scope="row"><?php echo "First Name:";?></th>
                                                        <td><?php echo $row['Fname']?></td>
                                                        </tr>
                                                        <tr class="table-primary">
                                                        <th scope="row"><?php echo "Last Name:";?></th>
                                                        <td><?php echo $row['Lname']?></td>
                                                        </tr>
                                                        <tr class="table-primary">
                                                        <th scope="row"><?php echo "Maths:";?></th>
                                                        <td><?php echo $row['Maths']?></td>
                                                        </tr>
                                                        <tr class="table-primary">
                                                        <th scope="row"><?php echo "English:";?></th>
                                                        <td><?php echo $row['English']?></td>
                                                        </tr>
                                                        <tr class="table-primary">
                                                        <th scope="row"><?php echo "Physics:";?></th>
                                                        <td><?php echo $row['Physics']?></td>
                                                        </tr>
                                                        <tr class="table-primary">
                                                        <th scope="row"><?php echo "Chemistry:";?></th>
                                                        <td><?php echo $row['Chemistry']?></td>
                                                        </tr>
                                                        </tbody>
                                                        </table>
                                                        </div>
                                                        </div>
                                                        <!-- Table body End -->
                                                <?php
                                                }

                                                else{
                                                        echo '<script>alert("Please Fill Correct info")</script>'; 
                                                }
                                        }
                                                

                                        }
                                        else{
                                                echo '<script>alert("Student with this RollNo is not present. Please Fill Correct Information.")</script>'; 
                                        }
                                } 
                                      
                        
                        else {
                                echo '<script>alert("Please Fill All fields")</script>'; 
                        }  
                }
        }
        
?>

<?php include_once("footer.php")?>