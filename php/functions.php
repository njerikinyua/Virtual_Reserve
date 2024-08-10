<?php 
 
require 'connection.php';

session_start();

//Register User
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $mod = $_POST['mod'];
 $phone = $_POST['phone'];
 $type = $_POST['type'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 if ($password == $passwordconfirm) {
if($type == "User"){
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`) VALUES ('$fname','$phone','$email','User',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: ../index.html?userregistration=success");
}else{
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`) VALUES ('$fname','$phone','$email','$type',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: ../index.php?userregistration=success");    
}
}else{
  echo "Passwords do not match.";
 }
}

//Update User
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: ../index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: ../index1.php?updatewildlife=success");
  }else if ($mod == 3) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: ../index2.php?updateuser=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

//Delete A User
if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
$sql1 = "DELETE FROM `donation` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql1); 
header("Location: ../index.php?deleteuser=success");
}

//Add A Donation
if (isset($_POST['addd'])) {
    $uid = $_SESSION['username1'];
    $amo = $_POST['amo'];
    $wid = $_SESSION['wildlife_id'];    
    
$sql = "INSERT INTO `donation`(`User_ID`, `Wildlife_ID`, `Amount`) VALUES ('$uid','$wid','$amo')";

  mysqli_query($conn, $sql);

  header("Location: ../index2.php?makeadonation=success");
}

//Delete A Donation 
if($_REQUEST['action'] == 'deleteD' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `donation` WHERE `Donation_ID` = '$deleteItem'";
mysqli_query($conn, $sql);
header("Location: ../index1.php?deleteadonation=success");
}

//Cancel A Donation 
if($_REQUEST['action'] == 'cancelD' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "UPDATE `donation` SET `Status` = 'Cancelled' WHERE `Donation_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
header("Location: ../index2.php?canceladonation=success");
}

//Complete A Donation 
if($_REQUEST['action'] == 'completeD' && !empty($_REQUEST['id'])){ 
$updateItem = $_REQUEST['id'];
$sql = "UPDATE `donation` SET `Status` = 'Completed' WHERE `Donation_ID` = '$updateItem'";
mysqli_query($conn, $sql); 
header("Location: ../index1.php?completeadonation=success");
}

//View Wildlife 
if($_REQUEST['action'] == 'viewW' && !empty($_REQUEST['id'])){ 
$updateItem = $_REQUEST['id'];
$_SESSION['wildlife_id'] = $updateItem;
header("Location: ../index_view.php?viewwildlife=success");
}

//View Wildlife 1 
if($_REQUEST['action'] == 'viewW1' && !empty($_REQUEST['id'])){ 
$updateItem = $_REQUEST['id'];
$_SESSION['wildlife_id'] = $updateItem;
header("Location: ../index_view1.php?viewwildlife=success");
}

//Add A Wildlife
if(isset($_POST["addW"])){

    $common_name = $_POST['common_name'];
    $scientific_name = $_POST['scientific_name'];
    $kingdom = $_POST['kingdom'];
    $phylum = $_POST['phylum'];
    $class = $_POST['class'];
    $order_name = $_POST['order_name'];
    $family = $_POST['family'];
    $genus = $_POST['genus'];
    $species = $_POST['species'];
    $subspecies = $_POST['subspecies'];
    $conservation_status = $_POST['conservation_status'];
    $description = $_POST['description'];
    $habitat = $_POST['habitat'];
    $region = $_POST['region'];
    $country = $_POST['country'];
    $locale_description = $_POST['locale_description'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $habitat_type = $_POST['habitat_type'];
    $observation_date = $_POST['observation_date'];
    $number_observed = $_POST['number_observed'];
    $behavior = $_POST['behavior'];
    $environmental_conditions = $_POST['environmental_conditions'];
    $observation_method = $_POST['observation_method'];
    $observer_name = $_POST['observer_name'];
    $observer_affiliation = $_POST['observer_affiliation'];
    $observer_contact_info = $_POST['observer_contact_info'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];
    $health_status = $_POST['health_status'];
    $breeding_season = $_POST['breeding_season'];
    $mating_behaviors = $_POST['mating_behaviors'];
    $nesting_sites = $_POST['nesting_sites'];
    $number_of_offspring = $_POST['number_of_offspring'];
    $offspring_survival_rate = $_POST['offspring_survival_rate'];
    $primary_diet = $_POST['primary_diet'];
    $specific_food_items = $_POST['specific_food_items'];
    $feeding_times = $_POST['feeding_times'];
    $natural_predators = $_POST['natural_predators'];
    $human_threats = $_POST['human_threats'];
    $other_threats = $_POST['other_threats'];
    $protected_areas = $_POST['protected_areas'];
    $conservation_programs = $_POST['conservation_programs'];
    $reintroduction_programs = $_POST['reintroduction_programs'];

    $filename = $_FILES['image']['name'];

    $valid_extensions = array("jpg","jpeg","png");

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if(in_array(strtolower($extension), $valid_extensions)) {
        if(move_uploaded_file($_FILES['image']['tmp_name'], "../images/".$filename)) {

            $sql = "INSERT INTO `Wildlife` (
                `common_name`, `scientific_name`, `kingdom`, `phylum`, `class`, `order_name`, `family`, `genus`, `species`, `subspecies`, `conservation_status`, `description`, `habitat`,
                `region`, `country`, `locale_description`, `latitude`, `longitude`, `habitat_type`, `observation_date`, `number_observed`, `behavior`, `environmental_conditions`, `observation_method`,
                `observer_name`, `observer_affiliation`, `observer_contact_info`, `age`, `sex`, `weight`, `length`, `health_status`, `breeding_season`, `mating_behaviors`, `nesting_sites`,
                `number_of_offspring`, `offspring_survival_rate`, `primary_diet`, `specific_food_items`, `feeding_times`, `natural_predators`, `human_threats`, `other_threats`,
                `protected_areas`, `conservation_programs`, `reintroduction_programs`, `multimedia_type`, `multimedia_file_path`
            ) VALUES (
                '$common_name', '$scientific_name', '$kingdom', '$phylum', '$class', '$order_name', '$family', '$genus', '$species', '$subspecies', '$conservation_status', '$description', '$habitat',
                '$region', '$country', '$locale_description', '$latitude', '$longitude', '$habitat_type', '$observation_date', '$number_observed', '$behavior', '$environmental_conditions', '$observation_method',
                '$observer_name', '$observer_affiliation', '$observer_contact_info', '$age', '$sex', '$weight', '$length', '$health_status', '$breeding_season', '$mating_behaviors', '$nesting_sites',
                '$number_of_offspring', '$offspring_survival_rate', '$primary_diet', '$specific_food_items', '$feeding_times', '$natural_predators', '$human_threats', '$other_threats',
                '$protected_areas', '$conservation_programs', '$reintroduction_programs', 'Image', '$filename'
            )";

            mysqli_query($conn, $sql);

            header("Location: ../index1.php?addWildlife=success");

        } else {
            echo "An Error Occurred: Image directory not found.";
        }
    } else {
        echo "An Error Occurred: Kindly check the image format, current format is not accepted.";
    }
}

//Delete A Wildlife 
if($_REQUEST['action'] == 'deleteW' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `wildlife` WHERE `Wildlife_ID` = '$deleteItem'";
mysqli_query($conn, $sql);
header("Location: ../index1.php?deleteawildliferecord=success");
}

?>