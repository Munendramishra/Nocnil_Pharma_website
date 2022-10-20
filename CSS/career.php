<?php 


$nameErr = $emailErr = $numberErr = $fileErr = "";
$name = $email = $Mobile_No= $postno = $content = $E_mail= $uphoto=$file_size= "";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>CAREER</title>
	<meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <link rel="shortcut icon" type="image/png" href="icons/logo1.png">
    <link rel="stylesheet" type="text/css" href="career.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--Bootstrap-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

    <!--Bootstrap Swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
</head>
<body>  
	<div class="innp00">
		<div class="innp01">
			<div class="innp011"><b>TALK TO US</b></div>
			<div class="innp012">
				<i class="fa fa-phone"></i>
			</div>
			<div class="innp013"><b>+917987465148</b></div>
		</div>
		<a href="mailto: nocnilpharma@infonocnilpharma.com"><div class="innp02"><b>
      <i class="fa fa-envelope"></i>&nbsp;nocnilpharma@infonocnilpharma.com</b>
    </div></a>
		<a href="enquiry.php"><div class="innp03"><b>ENQUIRY</b></div></a>
	</div>
	<div class="innp10">
    <div class="innp11"><img src="icons/logo1.png"></div>
    <a href="contact-us.html">
      <div class="innp18"><b>CONTACT US</b></div></a>
      <a href="career.html">
    <div class="innp17"><b>CAREER</b></div></a>
      <a href="market_presence.html">
      <div class="innp14"><b>MARKET PRESENCE</b></div></a>
      <a href="founderdesk.html">
      <div class="innp13"><b>MISSION & VISION</b></div></a>
      <a href="about_us.html">
      <div class="innp12"><b>ABOUT US</b></div></a>
  </div>
   <div class="content">
   	<div class="content00"><b>CAREER</b></div>
   	<p style="padding-left: 2%;font-size: 16px; padding-right: 2%;">Nocnil Pharma offers a wide range of career opportunities and is keen to employ a workforce of innovative people who can work together and add more value to our vision.<br>Welcome to Nocnil Pharma, we work differently, we work as a team, respect one another and welcome constructive criticism. We have a vision and it is really challenging. Would you like to be part of a Company?</p>
   	<div class="content01">
   		<form method="post" action="career.php" enctype="multipart/form-data">

   			<label class="label">Name:</label>
          <b><input type="text" name="name" required value="<?php echo $name;?>" style="font-size: 15px; color: black;"></b>
        <span class="error">*</span>

   			<label class="label">Mobile No.:</label>
          <input type="text" required name="Mobile_No" value="<?php echo $Mobile_No;?>" style="font-size: 15px; color: black;">
        <span class="error">* </span>
   			
        <label class="label">E Mail:</label>
          <input type="text" required name="email" value="<?php echo $E_mail;?>" style="font-size: 15px; color: black;">
        <span class="error">*</span>
   			
        <label class="label">Post Locking for:</label>
          <input type="text" required name="postno" value="<?php echo $postno?>" style="font-size: 15px; color: black;">
        <span class="error">* </span>
   			
        <label class="label">Upload Resume:</label>
          <input type="file" id="my_file" name="my_file" style="font-size: 15px; color: black;"/>
        <span class="error">* </span>
   			
        <label class="label">Content:</label>
          <textarea rows="4"  class="area" name="content" style="font-size: 15px; color: black;"></textarea>

   			<button type="submit" class="submit" name="np_career"><b>SUBMIT</b></button>
        <?php echo $nameErr;?>
        <?php echo $numberErr;?>
         <?php echo $emailErr;?>
         <?php echo $nameErr;?>
         <?php echo $fileErr;?>
         <?php echo $content;?>
   		</form>
   	</div>
   </div>
   <div class="careerimg"><img src="icons/success.jpg"></div>
    <div class="footer0">
    	<div class="footer_1">CopyWrite &copy;&nbsp;|All Rights are Reserved&nbsp;|Nocnil Pharma ltd.</div>
    	<div class="footer_10">
    		<a href="https://facebook.com/Nocnil_pharma" class="fa fa-facebook"></a>
        <a href="http://www.instagram.com/nocnil_pharma" class="fa fa-instagram"></a>
        <a href="http://www.twitter.com/nocnil_pharma" class="fa fa-twitter"></a>
        <a href="https://www.linkedin.com/in/nocnil-pharma-3b41351aa" class="fa fa-linkedin"></a>
    	</div>
    </div>
</body>
</html>


<?php  

if(isset($_REQUEST['np_career'])){
    // vairable for connection
  $servername = "localhost";  
  $username = "u290395064_nocnilpharma";
  $password = "nocnil@2009";
  $dbname = "u290395064_nocnil_first";
//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
    ?>
    <script type="text/javascript">alert('Service Unavailable (DB-K315)!')</script>

   <?php
   exit();
} 
// echo "Connected successfully";


//query execution
 $sql = "INSERT INTO `career_record` (`sn`, `Name`, `Mobile_No`, `E_mail`, `Post_No`, `Content`) VALUES (NULL,'".$_POST["name"]."', '".$_POST["Mobile_No"]."  ', '".$_POST["email"]."' , '".$_POST["postno"]."  ' , '".$_POST["content"]."  ')";

//testing data input
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
   if (empty($_POST["Mobile_No"])) {
    $numberErr = "Number is Required";
  }else{
    $Mobile_No = test_input($_POST["Mobile_No"]);
    // check if mobile no. only contain numbers
    if (!preg_match("/^[0-9]*$/", $Mobile_No)) {
      $numberErr ="Only Numerical values are allowed";   
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   //inserting document file
   if (($_FILES['my_file']['name']!="")){
    $file_size = $_FILES['my_file']['size'];
    $file_type = $_FILES['my_file']['type'];
     $ext = strrchr($_FILES['my_file']['name'], ".");
    //checking the size of input
    if ($file_size > 1048576){      
        $message = 'File too large. File must be less than 1 megabytes.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>';
        exit();
      }
      elseif ((($file_type != "application/pdf")&&($file_type != "application/docx")&&($file_type != "application/doc"))&&(($ext != ".pdf") && ($ext != ".doc") && ($ext != ".docx")))
       {
        //check if file type is valid or not
        $message = 'Invalid file type. Only PDF, doc , and docx types are accepted.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>';   
      }else{
  //set the file in some folder
  $uphoto = $_FILES['my_file']['name'];
  $utmpphoto = $_FILES['my_file']['tmp_name'];
  $uphotofolder = 'documents/';
  
  $uphoto = $name."_".$uphoto;


    move_uploaded_file($utmpphoto, $uphotofolder.$uphoto);

        if ($conn->query($sql) === TRUE) {
                    // echo "New record created successfully";
                 echo "<script>alert('Your querry Has Been Submitted')</script>";

                } else {
                  echo "<script>alert('Service Unavailable! Unable to submit.')</script>";
                    // echo "Error: " . $sql . "<br>" . $conn->error;
                }           

    }
  }else{
    $message = 'There is no file inserted, Please insert.'; 
      echo '<script type="text/javascript">alert("'.$message.'");</script>';
  } 



  if (empty($_POST["content"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["content"]);
  }

}

 

}
?>