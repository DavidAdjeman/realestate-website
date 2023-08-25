<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Adding sweetalert library Modules --->
  <script src="sweetalert/jquery-3.6.0.min.js"></script>
  <script src="sweetalert/sweetalert2.all.min.js"></script>

  <!-- Adding background image for sweetalert messagebox -->
  <style>
   *{
      margin: 0;
      padding: 0;
   }
   body{
      background: url(assets/img/slide-1.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
   }
   </style>

</head>
<body>
    
</body>
</html>


<?php
// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "search-database";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the user input to prevent SQL injection
    $search_term = mysqli_real_escape_string($conn, $_POST["Keyword"]);

    //Creating variables to hold the different property names. Will be used in the IF-Else statement.
    $one = "4 BEDROOM BUILDAF AREA";
    $two = "GB 1 BEDROOM @ LEGACY TOWNHOUSES AND APARTMENTS";
    $three = "GC 1 BEDROOM @ LEGACY TOWNHOUSES AND APARTMENTS";
    $four = "COMMERCIAL SPACE @ EAST LEGON";


    // Perform the database query
    $sql = "SELECT * FROM chuu737 WHERE Keyword LIKE '%$search_term%'";
    $result = $conn->query($sql);

    // Display the search results
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            // Display the results here, e.g., echo $row["column_name"];
            // echo $row["Keyword"];
                if ($row['Keyword'] === $two) {

                            echo '<script type="text/javascript">
                            $(document).ready(function(){
                            swal.fire({
                            title: "We Found Something!",
                            text: "Check out this property.",
                            icon: "success",
                        }).then(function(){
                            window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/property-singleGB.html";
                        });
                        });
                        </script>';
                    break; //no need to continue checking once found

            }   else if($row['Keyword'] === $one){

                            echo '<script type="text/javascript">
                            $(document).ready(function(){
                            swal.fire({
                            title: "We Found Something!",
                            text: "Check out this property.",
                            icon: "success",
                        }).then(function(){
                            window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/buildaf.html";
                        });
                        });
                        </script>';
                    break;

            }   else if($row['Keyword'] === $three){
                            echo '<script type="text/javascript">
                            $(document).ready(function(){
                            swal.fire({
                            title: "We Found Something!",
                            text: "Check out this property.",
                            icon: "success",
                        }).then(function(){
                            window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/property-singleGC.html";
                        });
                        });
                        </script>';
                    break;
            }   else if($row['Keyword'] === $four){
                            echo '<script type="text/javascript">
                            $(document).ready(function(){
                            swal.fire({
                            title: "We Found Something!",
                            text: "Check out this property.",
                            icon: "success",
                        }).then(function(){
                            window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/CommercialEastlegon.html";
                        });
                        });
                        </script>';
                        break;
                }
            }
            


        
        //try using an ELSE IF statement here to add the other property's window.location and see if it works. 22/07/2023
    } else {
        //Showing no result message
    echo '<script type = "text/javascript">
    $(document).ready(function(){
        swal.fire({
            title: "No Results Found",
            text: "Try narrowing down your search.",
            icon: "error",
        }).then(function(){
            window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/index.php";
        });
    })
    </script>';
    }

    // Close the database connection
    $conn->close();
}
?>


<!--
echo '<script type="text/javascript">
        $(document).ready(function(){
            swal.fire({
                title: "We Found Something!",
                text: "Check out this property.",
                icon: "success",
            }).then(function(){
                window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/property-singleGC.html";
            });
        });
        </script>';

    -->

    <!--
echo '<script type="text/javascript">
        $(document).ready(function(){
            swal.fire({
                title: "We Found Something!",
                text: "Check out this property.",
                icon: "success",
            }).then(function(){
                window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/CommercialEastlegon.html";
            });
        });
        </script>';

    -->

    <!--
echo '<script type="text/javascript">
        $(document).ready(function(){
            swal.fire({
                title: "We Found Something!",
                text: "Check out this property.",
                icon: "success",
            }).then(function(){
                window.location="http://localhost/Adjeman%20Tech/Pronto%20Properties/buildaf.html";
            });
        });
        </script>';

    -->