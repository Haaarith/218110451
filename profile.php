<!DOCTYPE html>
<html>
    <head>
    <title>MajorExam</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <?php include ('head1.php'); # adding the header file ?>
	 <hr>
	 <div class="container my-5">
	 <form  action="myrecords.php" method="POST" >
  <!-- 2 column grid layout with text inputs for the first and middle and  last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline ">
          <input type="text" id="fname" name="fname" class="form-control required bg-warning" />
          <label class="form-label" for="fname ">First name</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="mname" name="mname" class="form-control bg-warning" />
          <label class="form-label" for="mname">Middel name</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="lname" name= "lname" class="form-control bg-warning" />
          <label class="form-label" for="lname">Last name</label>
        </div>
      </div>
    </div>

    

      <div class="row mb-4">
        <div class="col">
          <div class="form-outline mb-4">
          <input type="text" id="sname" name="sname" class="form-control bg-black text-white" maxlength="8"/>
          <label class="form-label " for="sname">Username </label>
        </div>
        </div>
      
      
        <div class="col">
          <div class="form-outline mb-4">
          <input type="text" id="pass" name="pass" class="form-control bg-black text-white" required minlength="4" maxlength="6" />
          <label class="form-label" for="pass">Password</label>
          </div>
        </div>
        </div>
      
        <div class="form-outline container ">
          <label class="form-label" for="abt">Write about the course</label>
          <input type="text" id="abt" name="abt" class="form-control" placeholder=""  />
        </div>
      


        <!-- CITY COUNTRY HEIGHT-->
        <div class="row mb-4">
          <div class="col">
            <label for="city" class="form-label"> </label>
            <select class="form-select" id="city" name="city">
              <option>riyadh</option>
              <option>jeddah</option>
              <option>dammam</option>
              <option>ahsa</option>
            </select> 
          </div>
          <div class="col">
          <label for="country" class="form-label"> </label>
          <select class="form-select" id="country" name="country">
            <option>ksa</option>
            <option>usa</option>
            <option>uk</option>
            <option>ghana</option>
          </select> 
        </div>
        <div class="col">
          <label for="height" class="form-label"> </label>
          <select class="form-select" id="height" name="height">
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
          </select> 
        </div>
        </div>


        
        <div class="form-outline ">
        <label class="form-label " for="file">Upload Your TEXT FILE MATAM.TXT</label>
        <input type="file" id="file" name="file" class="form-control bg-warning" placeholder="Klb"  />
        </div>
      </div>
      

    


  

  <!-- Submit button -->
  <div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">  <button type="submit" class="btn btn-primary btn-block ml-5">Register</button>
</div>
  </div>
</form>
	 
	 
</div> <!-- the form div ends here -->
	 
	 
	 
	 
	<?php include ('foot1.php'); # adding the header file ?>
    </body>
</html>