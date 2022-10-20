<?php
$nameErr = $emailErr = $numberErr = $fileErr = "";
$name = $email = $Mobile_No= $postno = $content = $E_mail= $uphoto=$file_size= "";

?>


<?php  

if(isset($_REQUEST['medicine_submit'])){
    // vairable for connection
  $servername = "localhost";  
  $username = "root";
  $password = "";
  $dbname = "nocnilpharma_first";

//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    ?>
    <script type="text/javascript">alert('Service Unavailable (DB-K315)!')</script>

   <?php
   exit();
} 
echo "Connected successfully";




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
  
   if (empty($_POST["type"])) {
    $numberErr = "Type is Required";
  }else{
    $Mobile_No = test_input($_POST["type"]);
    // check if mobile no. only contain numbers
    // if (!preg_match("/^[0-9]*$/", $Mobile_No)) {
    //   $numberErr ="Only Numerical values are allowed";   
    // }
  }
  
  if (empty($_POST["comapany_name"])) {
    $emailErr = "comapany_name is required";
  } else {
    $email = test_input($_POST["comapany_name"]);
   
    }
  }
   //inserting document file
   if (($_FILES['image']['name']!="")){
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
     $ext = strrchr($_FILES['image']['name'], ".");
    //checking the size of input
    if ($file_size > 10485761){      
        $message = 'File too large. File must be less than 1 megabytes.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>';
        exit();
      }
      elseif ((($file_type != "application/jpg")&&($file_type != "application/png")&&($file_type != "application/jpeg"))&&(($ext != ".jpg") && ($ext != ".png") && ($ext != ".jpeg")))
       {
        //check if file type is valid or not
        $message = 'Invalid file type. Only jpg,  png types are accepted.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>';   
      }else{
  //set the file in some folder
  $uphoto = $_FILES['image']['name'];
  $utmpphoto = $_FILES['image']['tmp_name'];
  $uphotofolder = 'products/';

  echo "image name is".$uphoto;
  
  $uphoto = $name."_".$uphoto;


    move_uploaded_file($utmpphoto, $uphotofolder.$uphoto);


//query execution
 // $sql = "INSERT INTO `medicine_record` (`sn`, `Name`,`Company`, `Type`, `Pack_of`, `Main_content`, `Remaining_Content`,`Image`) VALUES (NULL,'".$_POST["name"]."', '".$_POST["comapany_name"]."', '".$_POST["type"]."' , '".$_POST["pack_of"]."  ' , '".$_POST["main_content"].", 'defjfj', 'default')";
$sql = " INSERT INTO `medicine_record` (`sn`, `Name`, `Company`, `Type`, `Pack_of`, `Main_content`, `Remaining_content`, `Image`) VALUES (NULL, '".$_POST['name']."', '".$_POST['comapany_name']."', '".$_POST['type']."', '".$_POST['pack_of']."', '".$_POST['main_content']." ', '".$_POST['remaining_content']."', '".$uphoto."')";
        if ($conn->query($sql) === TRUE) {
                    // echo "New record created successfully";
                 echo "<script>alert('Your querry Has Been Submitted')</script>";

                } else {
                  echo "<script>alert('Service Unavailable! Unable to submit.')</script>";
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }           

    }
  }else{
    $message = 'There is no file inserted, Please insert.'; 
      echo '<script type="text/javascript">alert("'.$message.'");</script>';
  } 



  if (empty($_POST["main_content"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["main_content"]);
  }

}

 


?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form method="post" action="sorm.php" enctype="multipart/form-data">
	<label class="label">Name:</label>
          <b><input type="text" name="name" required value="<?php echo $name;?>"></b>
        <label class="label">Company:</label>
          <input type="text" required name="comapany_name" value="<?php echo $Mobile_No;?>" >

   			<label class="label">Type:</label>
          <input type="text" required name="type" value="<?php echo $Mobile_No;?>" >
        
   			
        <label class="label">pack of:</label>
          <input type="text" required name="pack_of" value="<?php echo $E_mail;?>" >
      
   			
        <label class="label">Main content:</label>
          <input type="text" required name="main_content" value="<?php echo $postno?>" >
          <label class="label">Remaining content:</label>
          <input type="text" required name="remaining_content" value="<?php echo $postno?>" >
        
   			
        <label class="label">Upload image:</label>
          <input type="file" id="image" name="image" />
        
   			
        

   			<button type="submit" class="submit" name="medicine_submit"><b>SUBMIT</b></button>
</form>
</body>
</html>