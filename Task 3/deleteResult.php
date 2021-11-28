<?php include_once('header.php');?>

<div class="container-fluid">
        <!-- <section id="about"> -->
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8" style="Background-color: aquamarine; padding:30px">
                        <h2 style="text-align: center; padding:10px">Delete Result</h2>
                        
                        <form action="#" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Roll_No" placeholder="Roll_No" name="Roll_No">
                            <label for="floatingPassword">Enter Roll No Of Student To Delete Information</label>
                            
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
                          <span style="float: left"> <a href="deleteResult.php"><button class="btn btn-dark" name="cancel">Cancel</button></a> </span>
                        </div>
                        
                        <div class="form-floating mb-3">
                           <span style="float: right"> <button class="btn btn-dark" name="delete">Delete</button></span>
                        </div>
                        <br><br>
                           
                        </form>

                    </div>
                </div>
            </div>
            
        <!-- </section> -->
</div>
<div class="form-floating mb-3">
    <span style="float: left">  <button class="btn btn-dark" name="search"> <a href="index.php">Home Page </a></button></span>
</div>
<?php
if(isset($_POST['delete'])){
       // $conn = mysqli_connect('localhost','root',' ','studentresults');
       $servername = 'localhost';//Ashish
       $username = 'root';
       $password = '';
       $dbname = 'studentresults';
   
       //create connetion
       $conn = new mysqli($servername, $username, $password, $dbname);//ashish

        if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
        }
        else{
            $RollNo = $_POST['Roll_No'];
            $Fname = $_POST['Fname'];
            $Lname = $_POST['Lname'];
            

            if(!empty($RollNo) && !empty($Fname) && !empty($Lname)){

                $sql = "SELECT * FROM student WHERE RollNo = $RollNo";            
                $result = $conn->query($sql);


                if($result->num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        if($Fname == $row['Fname'] && $Lname == $row['Lname']){
                            $sql1 = "DELETE FROM student WHERE RollNo=$RollNo";
                            $result1 = $conn->query($sql1);

                            if($result1 == TRUE){
                                echo '<script>alert("Record deleted successfully")</script>';
                            }
                            else{
                                echo "Error: ".$sql."<br>".$conn ->error;
                            }
                        }
                        else{
                            echo '<script>alert("Please Fill Correct Information")</script>';
                        }
                    }
                }
                else{
                    echo '<script>alert("Record not available")</script>';
                }
            }
            else{
                echo '<script>alert("Please Fill All Fields")</script>';
            }
        }
}

?>

<?php include_once('footer.php');?>