<<<<<<< HEAD
<div class="UpdatingForm">
  <form method="post" action="server.php" >
  &nbsp;
  <div class="Headings">
  <div class="row"> 
    <div class="col-sm-4">
 
        <h3> Edit</h3>
      </div>
      <div class="col-sm-8">
       <p class="close"> X </p>
        </div>
      </div>
        </div>

      <div class="input-group" >
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
         <div> 
         &nbsp;
         </div>
         <div> 
         &nbsp;
        <lable> First Name: </lable>
        <input type="text"  disabled value="<?php echo $fn?> ">
        </div>
        &nbsp;
        <div>
      &nbsp;
        <lable> Last Name: </lable>
        <input type="text"  disabled value="<?php echo $ln?>" >
        </div>
        &nbsp;
        <div> 
        &nbsp;
        <lable> Phone Number: </lable>
       <input type="text"  disabled value="<?php echo  $phonen?>" >
        </div>
        &nbsp;
        <div>
        &nbsp;
        <label> Location: </label>
        <input type="text" name="locations" value="<?php echo $locations;?>">
        </div>
        &nbsp;
        <div>
        &nbsp;
        <label> Time Start: </label>
        <input type="text" name="TimeStart" value="<?php echo $timeStart; ?>">
        </div>
        &nbsp;
        <div> 
        &nbsp;
        <label>Time End: </label>
        <input type="text" name="TimeEnd" value="<?php echo $timeEnd;?>">
        </div>
        &nbsp;
        <div> 
        &nbsp;
        <label> Status: </lable>
        <input type="text" name="status" value="<?php echo $status; ?>">
        </div>
        &nbsp;
        <div class="col-sm-12">
        &nbsp;
        <button class="btn btns" type="submit" name="update" style="background: #cdcdcd" >Save  </button>
        </div>
        &nbsp;
 		</div>
     
    </form>
     </div>


  
=======
<?php
   		$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
           if (isset($_POST['submit'])) {
            $newName = $_POST['statue'];
            $id  	 = $_POST['ids'];
    
       
            
           //insert the data into
            $query = "UPDATE booking SET status='$newName' WHERE id='$id'";
            $results =  mysqli_query($connect, $query);

    if($results)
    {
    header("refresh:1; url=books.php"); 
    }
    else 
    {
    echo"booo";
    }
           }
 ?>

 
>>>>>>> 60e53da2d963d01990f9348501812428236030e8