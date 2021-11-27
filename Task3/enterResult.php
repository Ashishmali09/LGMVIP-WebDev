<?php include_once('header.php');?>

<div class="container-fluid">
        <!-- <section id="about"> -->
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8" style="Background-color: aquamarine; padding:30px">
                        <h2 style="text-align: center">Enter Result Details</h2>
                        
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
                            <input type="text" class="form-control" id="Maths" placeholder="Maths" name="Maths">
                            <label for="floatingPassword">Maths Marks</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="English" placeholder="English" name="English">
                            <label for="floatingPassword">English marks</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Physics" placeholder="Physics" name="Physics">
                            <label for="floatingPassword">Physics Marks</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Chemistry" placeholder="Chemistry" name="Chemistry">
                            <label for="floatingPassword">Chemistry Marks</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                           <span style="float: right"> <button class="btn btn-dark" name="insert">Insert</button></span>
                        </div>
                        <br><br>
                           
                        </form>

                    </div>
                </div>
            </div>
        <!-- </section> -->
</div>

<?php
    if(isset($_POST['insert'])){
        $conn = mysqli_connect('localhost','root','','studentresults');

        if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }
        else{
            $RollNo = $_POST['Roll_No'];
            $Fname = $_POST['Fname'];
            $Lname = $_POST['Lname'];
            $Maths = $_POST['Maths'];
            $English = $_POST['English'];
            $Physics = $_POST['Physics'];
            $Chemistry = $_POST['Chemistry'];

            if(!empty($RollNo) && !empty($Fname) && !empty($Lname) && !empty($Maths) && !empty($English) && !empty($Physics) && !empty($Chemistry)){
                    $sql = "SELECT * FROM student WHERE RollNo = $RollNo";             
                    $result = $conn->query($sql);

                    if($result->num_rows != 0){
                        echo '<script>alert("Student with this rollno is Already exist")</script>';
                    }
                    else{
                        $sql1 = "INSERT INTO student(`RollNo`,`Fname`,`Lname`,`Maths`,`English`,`Physics`,`Chemistry`) VALUES($RollNo,'$Fname','$Lname', $Maths,$English,$Physics,$Chemistry)";
                        $result1 = $conn -> query($sql1);

                        if($result1 == TRUE){
                            echo '<script>alert("Record inserted successfully")</script>';
                        }
                        else{
                            echo "Error: ".$sql."<br>".$conn ->error;
                        }
                    }
            }
            else{
                echo '<script>alert("Please Fill All Fields")</script>';
            }
        }
    }
?>

<?php include_once('footer.php');?>