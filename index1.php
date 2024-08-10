<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Virtual Reserve - Wildlife Expert Module</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="#" name="keywords">
    <meta content="#" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/fav.png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
        <style>
        .section { display: none; }
        .section.active { display: block; }
        .legend a { cursor: pointer; text-decoration: none; color: white; padding: 10px; display: inline-block; }
        .legend a.active { font-weight: bold; }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll(".section");
            const links = document.querySelectorAll(".legend a");
            
            links.forEach((link, index) => {
                link.addEventListener("click", () => {
                    sections.forEach(section => section.classList.remove("active"));
                    links.forEach(lnk => lnk.classList.remove("active"));
                    
                    sections[index].classList.add("active");
                    link.classList.add("active");
                });
            });
            
            sections[0].classList.add("active");
            links[0].classList.add("active");
        });
    </script>
            <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   var delbtn=document.getElementById("delbtn");
   var viewbtn=document.getElementById("viewbtn");
   delbtn.style.display = 'none';
   viewbtn.style.display = 'none';
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
   delbtn.style.display = 'block';
   viewbtn.style.display = 'block';
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   var delbtn1=document.getElementById("delbtn1");
   delbtn1.style.display = 'none';
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
   delbtn1.style.display = 'block';
}

$('button').on('click',function(){
printData1();
})  
</script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="">Home</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Virtual</span> Reserve</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Active Hours</h6>
                        <p class="m-0">24/7</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">virtualreserve@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+254 712 345678</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Virtual</span>Reserve</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index1.php" class="nav-item nav-link active">Home</a>
                    <a href="#data" class="nav-item nav-link">Data Records</a>
                    <a href="#mod" class="nav-item nav-link">My Module</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="php/logout.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Logout</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/c1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
<h3 class="text-white mb-3 d-none d-sm-block">Welcome to Virtual Reserve</h3>
<h1 class="display-3 text-white mb-3">Support Wildlife Conservation</h1>
<h5 class="text-white mb-3 d-none d-sm-block">Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!</h5>
<a href="php/logout.php" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Logout</a>
<a href="#data" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">View Database</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/c2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
<h3 class="text-white mb-3 d-none d-sm-block">Why Virtual Reserve?</h3>
<h1 class="display-3 text-white mb-3">Why Choose Us</h1>
<h5 class="text-white mb-3 d-none d-sm-block">Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!</h5>
<a href="php/logout.php" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Logout</a>
<a href="#mod" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">My Module</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Database Start -->
    <div class="container" id="data">
        <div class="rw align-items-center">
            <div class="col-lg-12 py-5 py-lg-0 px-3 px-lg-5">
                <br>
                <h4 class="text-secondary mb-3">Database</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">List</span> of Wildlife</h1>
                <div class="row py-2">
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <br>
                              <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Wildlife ID</th>
<th style="text-align: left;
  padding: 8px;">Observer Info</th>
  <th style="text-align: left;
  padding: 8px;">Name</th>
 <th style="text-align: left;
  padding: 8px;">View Details</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$sql = "SELECT * FROM `wildlife`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["wildlife_id"]); ?></td>
<td><?php echo($row["observer_name"]); ?> reach out on <?php echo($row["observer_contact_info"]); ?></td>
<td><?php echo($row["common_name"]); ?></td>
<td><button id="viewbtn" class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to view this wildlife?')?window.location.href='php/functions.php?action=viewW&id=<?php echo($row["wildlife_id"]); ?>':true;" title='View Wildlife'>View</button></td>
<td><button id="delbtn" class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this wildlife?')?window.location.href='php/functions.php?action=deleteU&id=<?php echo($row["wildlife_id"]); ?>':true;" title='Delete Wildlife'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
                        </div>
                                                    <br>
                            <br>
                            <button class="btn btn-primary py-3 px-5" onclick="printData();">Print</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 py-5 py-lg-0 px-3 px-lg-5">
                <br>
                <h1 class="display-4 mb-4"><span class="text-primary">List</span> of Donations</h1>
                <div class="row py-2">
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <br>
                              <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Donation ID</th>
<th style="text-align: left;
  padding: 8px;">User Details</th>
  <th style="text-align: left;
  padding: 8px;">Wildlife ID</th>
 <th style="text-align: left;
  padding: 8px;">Amount</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$sql = "SELECT `donation`.`Donation_ID`, `donation`.`User_ID`, `donation`.`Wildlife_ID`, `donation`.`Amount`, `donation`.`Status`, `users`.`Fullname`, `users`.`Phone_Number`, `users`.`Email_Address` FROM `donation` JOIN `users` ON `donation`.`User_ID` = `users`.`User_ID`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Donation_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?> reach out on <?php echo($row["Phone_Number"]); ?> & <?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Wildlife_ID"]); ?></td>
<td><?php echo($row["Amount"]); ?></td>
<td><?php echo($row["Status"]); ?></td>
<?php
if ($row["Status"] == "Completed" || $row["Status"] == "Cancelled") {
?>
<td></td>
<?php
}else{
?>
<td><button id="delbtn1" class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to complete this donation?')?window.location.href='php/functions.php?action=completeD&id=<?php echo($row["Donation_ID"]); ?>':true;" title='Complete Donation'>Complete</button></td>
<?php
}
?>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
                        </div>
                                                    <br>
                            <br>
                            <button class="btn btn-primary py-3 px-5" onclick="printData1();">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Database End -->

    <!-- My Module Start -->
    <br>
    <br>
    <div class="container-fluid bg-light" id="mod">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                                            <h4 class="mb-3" style="color: white;">My Module</h4>
                    <div class="col-lg-12">
                    <h1 class="display-4 mb-4">Update My Details</h1>
                        <form class="py-5" name="" method="POST" action="php/functions.php">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" value="<?php echo $row1['Fullname']; ?>" placeholder="Your Name" name="fname" required="required" />
                                <input type="hidden" value="2" required name="mod">
                                <input type="hidden" value="<?php echo $filter; ?>" required name="uid">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" value="<?php echo $row1['Email_Address']; ?>" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" minlength="13" class="form-control border-0 p-4" value="<?php echo $row1['Phone_Number']; ?>" placeholder="Your Phone Number" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" minlength="8" id="pass" class="form-control border-0 p-4" placeholder="Your Password" required="required" />
                                <br>
                                <input type="checkbox" name="" onclick="showPass();"> <p style="color: white;">Show Password</p>
                            </div>
                            <div class="form-group">
                                <input type="password" minlength="8" name="cpassword" id="pass1" class="form-control border-0 p-4" placeholder="Confirm Your Password" required="required" />
                                <br>
                                <input type="checkbox" name="" onclick="showPass1();"> <p style="color: white;">Show Password</p>
                            </div>                      
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit" name="upu">Update</button>
                            </div>
                        </form>
                    </div>
                                        <div class="col-lg-12">
        <h1 class="display-4 mb-4">Add A Wildlife</h1>
        <div class="legend">
            <a class="active">Basic Information</a>
            <a>Description and Habitat</a>
            <a>Observation Details</a>
            <a>Observer Information</a>
            <a>Biological Information</a>
            <a>Reproductive Information</a>
            <a>Feeding Information</a>
            <a>Threats and Conservation</a>
            <a>Upload Image</a>
        </div>
        <form class="py-5" name="" method="POST" action="php/functions.php" enctype="multipart/form-data">
            <!-- Section 1: Basic Information -->
            <div class="section active">
                <h3 class="text-white mb-3">Basic Information</h3>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Common Name" required="required" name="common_name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Scientific Name" required="required" name="scientific_name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Kingdom" required="required" name="kingdom" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Phylum" required="required" name="phylum" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Class" required="required" name="class" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Order" required="required" name="order_name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Family" required="required" name="family" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Genus" required="required" name="genus" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Species" required="required" name="species" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Subspecies" required="required" name="subspecies" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Conservation Status" required="required" name="conservation_status" />
                </div>
            </div>
            
            <!-- Section 2: Description and Habitat -->
            <div class="section">
                <h3 class="text-white mb-3">Description and Habitat</h3>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Description" required="required" name="description"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Habitat" required="required" name="habitat" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Region" required="required" name="region" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Country" required="required" name="country" />
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Locale Description" required="required" name="locale_description"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Latitude" required="required" name="latitude" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Longitude" required="required" name="longitude" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Habitat Type" required="required" name="habitat_type" />
                </div>
            </div>
    
            <!-- Section 3: Observation Details -->
            <div class="section">
                <h3 class="text-white mb-3">Observation Details</h3>
                <div class="form-group">
                    <input type="date" class="form-control border-0 p-4" placeholder="Observation Date" required="required" name="observation_date" />
                </div>
                <div class="form-group">
                    <input type="number" class="form-control border-0 p-4" placeholder="Number Observed" required="required" name="number_observed" />
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Behavior" required="required" name="behavior"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Environmental Conditions" required="required" name="environmental_conditions"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Observation Method" required="required" name="observation_method" />
                </div>
            </div>
            
            <!-- Section 4: Observer Information -->
            <div class="section">
                <h3 class="text-white mb-3">Observer Information</h3>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Observer Name" required="required" name="observer_name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Observer Affiliation" required="required" name="observer_affiliation" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Observer Contact Info" required="required" name="observer_contact_info" />
                </div>
            </div>
            
            <!-- Section 5: Biological Information -->
            <div class="section">
                <h3 class="text-white mb-3">Biological Information</h3>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Age" required="required" name="age" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Sex" required="required" name="sex" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Weight" required="required" name="weight" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Length" required="required" name="length" />
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Health Status" required="required" name="health_status"></textarea>
                </div>
            </div>
            
            <!-- Section 6: Reproductive Information -->
            <div class="section">
                <h3 class="text-white mb-3">Reproductive Information</h3>
                <div class="form-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Breeding Season" required="required" name="breeding_season" />
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Mating Behaviors" required="required" name="mating_behaviors"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Nesting Sites" required="required" name="nesting_sites"></textarea>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control border-0 p-4" placeholder="Number of Offspring" required="required" name="number_of_offspring" />
                </div>
                <div class="form-group">
                    <input type="number" class="form-control border-0 p-4" placeholder="Offspring Survival Rate" required="required" name="offspring_survival_rate" />
                </div>
            </div>
            
            <!-- Section 7: Feeding Information -->
            <div class="section">
                <h3 class="text-white mb-3">Feeding Information</h3>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Primary Diet" required="required" name="primary_diet"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Specific Food Items" required="required" name="specific_food_items"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Feeding Times" required="required" name="feeding_times"></textarea>
                </div>
            </div>
            
            <!-- Section 8: Threats and Conservation -->
            <div class="section">
                <h3 class="text-white mb-3">Threats and Conservation</h3>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Natural Predators" required="required" name="natural_predators"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Human Threats" required="required" name="human_threats"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Other Threats" required="required" name="other_threats"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Protected Areas" required="required" name="protected_areas"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Conservation Programs" required="required" name="conservation_programs"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control border-0 p-4" placeholder="Reintroduction Programs" required="required" name="reintroduction_programs"></textarea>
                </div>
            </div>
            
            <!-- Section 9: Image Upload -->
            <div class="section">
                <h3 class="text-white mb-3">Upload Image</h3>
                <div class="form-group">
                    <input type="file" class="form-control border-0 p-4" required="required" name="image" />
                </div>

                <button class="btn btn-dark btn-block border-0 py-3" type="submit" name="addW">Submit</button>
            </div>
        </form>
    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Module Start -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Virtual</span> Reserve</h1>
                <p class="m-0">Welcome to Virtual Reserve, a platform dedicated to supporting wildlife conservation efforts. By connecting passionate donors with wildlife reserves, we aim to preserve and protect endangered species and their habitats.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Nairobi, KE.</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+254 712 345678</p>
                        <p><i class="fa fa-envelope mr-2"></i>virtualreserve@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#data"><i class="fa fa-angle-right mr-2"></i>Database</a>
                            <a class="text-white mb-2" href="#mod"><i class="fa fa-angle-right mr-2"></i>My Module</a>
                            <a class="text-white mb-2" href="php/logout.php"><i class="fa fa-angle-right mr-2"></i>Logout</a>
                            <a class="text-white" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Virtual Reserve</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
</body>

</html>