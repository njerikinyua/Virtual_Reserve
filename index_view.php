<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['wildlife_id'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
$wildlife_id = $_SESSION['wildlife_id'];
$sql = "SELECT * FROM wildlife WHERE wildlife_id = $wildlife_id";
$result = $conn->query($sql);
$wildlife = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Virtual Reserve - Wildlife Expert Module - Wildlife Details</title>
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
    .wildlife-image {
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        max-width: 100%; /* Ensure the image doesn't overflow its container */
        height: auto; /* Maintain aspect ratio */
    }
</style>
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
                    <a href="index1.php" class="nav-item nav-link">Home</a>
                    <a href="#data" class="nav-item nav-link">Data Records</a>
                    <a href="#mod" class="nav-item nav-link">My Module</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="php/logout.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Logout</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

<!-- Wildlife Profile Start -->
<br>
<br>
<div class="container">
        <div class="row align-items-center">
        <div class="col-lg-5">
            <img  class="wildlife-image img-fluid w-100" src="<?php echo $wildlife['multimedia_file_path']; ?>" alt="<?php echo $wildlife['common_name']; ?>">
            <br>
            <br>
                        <div class="map-container">
                <iframe src="https://maps.google.com/maps?q=<?php echo ($row['latitude']); ?>,  <?php echo ($row['longitude']); ?>&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
<h4 class="text-secondary mb-3"><?php echo $wildlife['common_name']; ?></h4>
<h1 class="display-4 mb-4"><span class="text-primary"><?php echo $wildlife['scientific_name']; ?></span></h1>
<p class="mb-4"><?php echo $wildlife['description']; ?></p>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th scope="row">Kingdom</th>
            <td><?php echo $wildlife['kingdom']; ?></td>
        </tr>
        <tr>
            <th scope="row">Phylum</th>
            <td><?php echo $wildlife['phylum']; ?></td>
        </tr>
        <tr>
            <th scope="row">Class</th>
            <td><?php echo $wildlife['class']; ?></td>
        </tr>
        <tr>
            <th scope="row">Order</th>
            <td><?php echo $wildlife['order_name']; ?></td>
        </tr>
        <tr>
            <th scope="row">Family</th>
            <td><?php echo $wildlife['family']; ?></td>
        </tr>
        <tr>
            <th scope="row">Genus</th>
            <td><?php echo $wildlife['genus']; ?></td>
        </tr>
        <tr>
            <th scope="row">Species</th>
            <td><?php echo $wildlife['species']; ?></td>
        </tr>
        <tr>
            <th scope="row">Conservation Status</th>
            <td><?php echo $wildlife['conservation_status']; ?></td>
        </tr>
        <tr>
            <th scope="row">Habitat</th>
            <td><?php echo $wildlife['habitat']; ?></td>
        </tr>
        <tr>
            <th scope="row">Region</th>
            <td><?php echo $wildlife['region']; ?></td>
        </tr>
        <tr>
            <th scope="row">Country</th>
            <td><?php echo $wildlife['country']; ?></td>
        </tr>
        <tr>
            <th scope="row">Observation Date</th>
            <td><?php echo $wildlife['observation_date']; ?></td>
        </tr>
        <tr>
            <th scope="row">Number Observed</th>
            <td><?php echo $wildlife['number_observed']; ?></td>
        </tr>
        <tr>
            <th scope="row">Behavior</th>
            <td><?php echo $wildlife['behavior']; ?></td>
        </tr>
        <tr>
            <th scope="row">Environmental Conditions</th>
            <td><?php echo $wildlife['environmental_conditions']; ?></td>
        </tr>
        <tr>
            <th scope="row">Observation Method</th>
            <td><?php echo $wildlife['observation_method']; ?></td>
        </tr>
        <tr>
            <th scope="row">Observer Name</th>
            <td><?php echo $wildlife['observer_name']; ?></td>
        </tr>
        <tr>
            <th scope="row">Observer Affiliation</th>
            <td><?php echo $wildlife['observer_affiliation']; ?></td>
        </tr>
        <tr>
            <th scope="row">Observer Contact Info</th>
            <td><?php echo $wildlife['observer_contact_info']; ?></td>
        </tr>
        <tr>
            <th scope="row">Age</th>
            <td><?php echo $wildlife['age']; ?></td>
        </tr>
        <tr>
            <th scope="row">Sex</th>
            <td><?php echo $wildlife['sex']; ?></td>
        </tr>
        <tr>
            <th scope="row">Weight (kg)</th>
            <td><?php echo $wildlife['weight']; ?></td>
        </tr>
        <tr>
            <th scope="row">Length (cm)</th>
            <td><?php echo $wildlife['length']; ?></td>
        </tr>
        <tr>
            <th scope="row">Health Status</th>
            <td><?php echo $wildlife['health_status']; ?></td>
        </tr>
        <tr>
            <th scope="row">Breeding Season</th>
            <td><?php echo $wildlife['breeding_season']; ?></td>
        </tr>
        <tr>
            <th scope="row">Mating Behaviors</th>
            <td><?php echo $wildlife['mating_behaviors']; ?></td>
        </tr>
        <tr>
            <th scope="row">Nesting Sites</th>
            <td><?php echo $wildlife['nesting_sites']; ?></td>
        </tr>
        <tr>
            <th scope="row">Number of Offspring</th>
            <td><?php echo $wildlife['number_of_offspring']; ?></td>
        </tr>
        <tr>
            <th scope="row">Offspring Survival Rate</th>
            <td><?php echo $wildlife['offspring_survival_rate']; ?></td>
        </tr>
        <tr>
            <th scope="row">Primary Diet</th>
            <td><?php echo $wildlife['primary_diet']; ?></td>
        </tr>
        <tr>
            <th scope="row">Specific Food Items</th>
            <td><?php echo $wildlife['specific_food_items']; ?></td>
        </tr>
        <tr>
            <th scope="row">Feeding Times</th>
            <td><?php echo $wildlife['feeding_times']; ?></td>
        </tr>
        <tr>
            <th scope="row">Natural Predators</th>
            <td><?php echo $wildlife['natural_predators']; ?></td>
        </tr>
        <tr>
            <th scope="row">Human Threats</th>
            <td><?php echo $wildlife['human_threats']; ?></td>
        </tr>
        <tr>
            <th scope="row">Other Threats</th>
            <td><?php echo $wildlife['other_threats']; ?></td>
        </tr>
        <tr>
            <th scope="row">Protected Areas</th>
            <td><?php echo $wildlife['protected_areas']; ?></td>
        </tr>
        <tr>
            <th scope="row">Conservation Programs</th>
            <td><?php echo $wildlife['conservation_programs']; ?></td>
        </tr>
        <tr>
            <th scope="row">Reintroduction Programs</th>
            <td><?php echo $wildlife['reintroduction_programs']; ?></td>
        </tr>
    </tbody>
</table>

                </div>
            </div>
        </div>
    </div>


<!-- Wildlife Profile End -->

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