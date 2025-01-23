<?

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: joblogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: joblogin.php");
  }
?>
<?php include('jobserverA.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>SocailFly job Application Form</title>
	<link rel="stylesheet" type="text/css" href="jobstyle.css">
        <script src="js/jobapplications.js"></script>
</head>
<body>

<div class="header">
	<h2> Application Form </h2>
</div>
     <form method="submit" action="jobindex.php">
  	<?php include('joberrors.php'); ?>

 <div class="testbox">
        <form action="/">
       
           <p class="top-info">Thank you for your interest in working with us. Please check below for available job opportunities that meet your criteria and send your application by filling out the Job Application Form.</p>
        <div class="item">
           <p>Name<span class="required">*</span></p>
        <div class="name-item">
            <input type="text" name="name" placeholder="First" required/ value="<?php echo $firstname; ?>">
            <input type="text" name="name" placeholder="Last" required/ value="<?php echo $lastname; ?>">
        </div>
        </div>
        <div class="contact-item">
        <div class="item">
           <p>Email<span class="required">*</span></p>
             <input type="text" name="name" required/ value="<?php echo $email; ?>">
        </div>
        <div class="item">
           <p>Phone<span class="required">*</span></p>
             <input type="text" name="name" required/ value="<?php echo $phonenumber; ?>">
        </div>
        </div>
        <div class="position-item">
        <div class="item">
           <p>What position are you applying for?<span class="required">*</span></p>
             <select required>
                <option value="1">Digital Marketing Executive</option>
                <option value="2">Social Media Executive</option>
                <option value="3">Freelance video editors</option>
             
             </select>
       </div>
       <div class="item">
           
          <p>Date of birth<span class="required">*</span></p>
            <input type="date" name="bdate" required/ value="<?php echo $dateofbirth; ?>">
            <i class="fas fa-calendar-alt"></i>
             
      </div>
      </div>
      <div class="question">
          <p>What is your current employment status?<span class="required"value="<?php echo $status; ?>">*</span></p>
      <div class="question-answer">
      <div>
              <input type="radio" value="none" id="radio_1" name="status" required/>
              <label for="radio_1" class="radio"><span>Employed</span></label>
      </div>
      <div>
              <input type="radio" value="none" id="radio_2" name="status" required/>
              <label for="radio_2" class="radio"><span>Self-Employed</span></label>
      </div>
      <div>
              <input type="radio" value="none" id="radio_3" name="status" required/>
              <label for="radio_3" class="radio"><span>Unemployed</span></label>
     </div>
     <div>
              <input type="radio" value="none" id="radio_4" name="status" required/>
              <label for="radio_4" class="radio"><span>Student</span></label>
    </div>
    </div>
    </div>
    <div class="item">
          <p>Submit your resume by providing your resume URL or attach file:</p>
          <input type="text" name="providing"/>
          <input type="file" name="file" accept="file/*">
    </div>
    <div class="question">
          <p>Would you like to list references</p>
         
    <div class="question-answer">
    <div>
              <input type="radio" value="none" id="radio_5" name="references" />
              <label for="radio_5" class="radio"><span>Yes</span></label>
    </div>
    <div>
              <input type="radio" value="none" id="radio_6" name="references" />
              <label for="radio_6" class="radio"><span>No</span></label>
   </div>
   </div>
   </div>
   <div class="btn-block">
          <button onclick="alert('you cliked apply\n ')">Apply for the job</button>
  <br><br>
          <a href="job.php" title="Go to Current Opportunities Page">Go to Current Opportunities Page</a>
        
   </div>
</form>
   </div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['firstname'])) : ?>
    	<p>Thank you  <strong><?php echo $_SESSION['firstname']; ?></strong></p>
    	<p> <a href="./job.php?logout='1'" style="color: red;">go back</a> </p>
    <?php endif ?>
  	
</div>
		
</body>
</html>