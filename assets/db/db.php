<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

if(isset($_POST['insert'])){
    $temperature = $_POST['temperature'];
    $symptoms = $_POST['symptoms'];
    $travel = $_POST['travel'];

    $query = "INSERT INTO `covid` (`temperature`, `symptoms`, `travel`) VALUES ('$temperature', '$symptoms', '$travel') ";

    $result = mysqli_query($conn, $query);
    if ( (false===$result) || ($temperature == 'yes') || ($symptoms == 'yes') || ($travel == 'yes')) {
    // printf("error: %s\n", mysqli_error($conn));
    echo '<div style="background-color: red; height: 300px; margin-top: 10%; display: flex; justify-content: center; align-items: center">
    <h1 style="text-align: center">First have covid-19 test<h1></div>';
    }
    else if(($temperature == 'no') && ($symptoms == 'no') && ($travel == 'no')){
    echo '<div style="background-color: green; height: 300px; margin-top: 10%; display: flex; justify-content: center; align-items: center">
    <h1 style="text-align: center">You are safe:)<h1></div>';
    } else if(($temperature == '') || ($symptoms == '') || ($travel == '')){
      echo '<div style="background-color: Red; height: 300px; margin-top: 10%; display: flex; justify-content: center; align-items: center">
      <h1 style="text-align: center">Please fill all the fields<h1></div>';
    }
}
?>