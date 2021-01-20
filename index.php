<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Land Real Estates Category Bootstrap Responsive website Template | Home :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Land Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap-Core-CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Style-CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-2 px-sm-2 px-1">
                <!-- logo -->
                
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#find">For Property Owners</a></li>
                            
                                    
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="main-w3pvt mian-content-wthree text-center" id="home">
        <div class="container">
            <div class="style-banner mx-auto">
                <h3 class="text-wh font-weight-bold">Search and Find Your <span>Comfort</span> Homes</h3>
                <p class="mt-2 text-li" id="find">HOUSE RENT MANAGEMENT SYSTEM</p>
                <!-- form -->
                <div class="home-form-w3ls mt-5 pt-lg-4">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select required="" class="form-control" name="loc">
                                        <option value="">Location</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Islampur">Islampur</option>
                                        <option value="Satara">Satara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select required="" class="form-control" name="bhk">
                                        <option value="">Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn_apt" name="search" >Find Here</button>
                    </form>
                </div>
                <!-- //form -->
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once 'include/DB_Function.php';
$db = new DB_Function();

if(isset($_POST['loc']) && isset($_POST['bhk']) && isset($_POST['search']))
{
    $city = $_POST['loc'];
    $type = $_POST['type'];
    $bhk  = $_POST['bhk'];
    echo $city;
    $result = $db->getResult($city,$bhk, $type);

    echo "<table class='table table-bordered'>
    <thead>
    <tr style='background-color: rgba(0, 0, 0, 0.05);'>
    <th>Type</th>
    <th>Floor</th>
    <th>City</th>
    <th>Size</th>
    <th>Locality</th>
    </tr>
    </thead>";

    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['Type'] . "</td>";
        echo "<td>" . $row['Floor'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['Size'] . "</td>";
        echo "<td>" . $row['Locality'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "Something is missing here";
}

?>


