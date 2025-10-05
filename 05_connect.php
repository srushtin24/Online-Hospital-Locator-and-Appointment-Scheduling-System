<!-- 

if(isset($_POST["name"])){

$mysqli = new mysqli("localhost", "root", "", "mumbai hospitals db", 3307);

if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}else{
    // echo "succefully connected"; // used this line to check if connected or not
    echo "Your form has been submitted successfully! Your will receive a confirmation message shortly. THANK YOU !! "; //used this line to show that connected and form is submitted properly
}

    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $speciality = $_POST["speciality"];
    $date = date('Y-m-d', strtotime($_POST["date"]));
    $slots = $_POST["slots"];


    $sql = "INSERT INTO `terna multispeciality hospital db` (`Name`, `Email`, `Contact`, `Speciality`, `Date`, `Slots`) VALUES ('$name', '$email', '$contact', '$speciality', '$date', '$slots');";

    //echo $sql;

    if($mysqli->query($sql) == true){
        //echo "successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $mysqli -> error";
    }

    $mysqli -> close();

} -->





<!-- 
$date = $_POST['date']; // You should sanitize and validate user inputs.
$timeSlot = $_POST['time_slot']; // You should sanitize and validate user inputs.

// Check if the combination already exists
$query = "SELECT * FROM bookings WHERE date = '$date' AND time_slot = '$timeSlot'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Combination already exists, show an error message or handle it accordingly.
    echo "Sorry, this date and time slot is already booked. Please choose another.";
} else {
    // Insert the new booking into the database
    $insertQuery = "INSERT INTO bookings (date, time_slot) VALUES ('$date', '$timeSlot')";
    
    if ($conn->query($insertQuery) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $conn->error;
    }
} -->




<?php
if (isset($_POST["name"])) {
    $mysqli = new mysqli("localhost", "root", "", "mumbai hospitals db", 3306);

    if ($mysqli->connect_error) {
        die("Database connection failed: " . $mysqli->connect_error);
    } else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $speciality = $_POST["speciality"];
        $date = date('Y-m-d', strtotime($_POST["date"]));
        $slots = $_POST["slots"];

        // Check if the combination of date, slots, and speciality already exists
        $checkQuery = "SELECT * FROM `terna multispeciality hospital db` WHERE `Date` = '$date' AND `Slots` = '$slots' AND `Speciality` = '$speciality'";
        $checkResult = $mysqli->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            echo "We regret to inform you that the appointment for the selected date and time has already been reserved !! Please choose an alternative date or time for your appointment. ";
        } else {
            $sql = "INSERT INTO `terna multispeciality hospital db` (`Name`, `Email`, `Contact`, `Speciality`, `Date`, `Slots`) VALUES ('$name', '$email', '$contact', '$speciality', '$date', '$slots');";
            
            if ($mysqli->query($sql) == true) {
                echo "Your appointment for the selected date and time has been successfully confirmed !! We look forward to serving you, and you will receive a confirmation message shortly. THANK YOU !!";
            } else {
                echo "ERROR: " . $sql . "<br>" . $mysqli->error;
            }
        }

        $mysqli->close();
    }
}
?>
