<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ntp-patient-form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO patient_forms (last_name, first_name, middle_name, birthday, address, occupation, bp, hr, rr, temperature, weight, checklist1, checklist2, checklist3, checklist4, checklist5, checklist6, checklist7, checklist8, checklist9, medicines_duration, medical_history, unknown_name, medical_history_additional, smoking, alcohol, alcohol_frequency, lab_exam, recommendation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters to the SQL statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssiiiiiiiiissssiisss", $last_name, $first_name, $middle_name, $birthday, $address, $occupation, $bp, $hr, $rr, $temperature, $weight, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $medicines_duration, $medical_history, $unknown_name, $medical_history_additional, $smoking, $alcohol, $alcohol_frequency, $lab_exam, $recommendation);

// Set parameters and execute the statement
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$birthday = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
$address = $_POST['address'];
$occupation = $_POST['occupation'];
$bp = $_POST['bp'];
$hr = $_POST['hr'];
$rr = $_POST['rr'];
$temperature = $_POST['temperature'];
$weight = $_POST['weight'];
$checklist1 = isset($_POST['checklist1']) ? 1 : 0;
$checklist2 = isset($_POST['checklist2']) ? 1 : 0;
$checklist3 = isset($_POST['checklist3']) ? 1 : 0;
$checklist4 = isset($_POST['checklist4']) ? 1 : 0;
$checklist5 = isset($_POST['checklist5']) ? 1 : 0;
$checklist6 = isset($_POST['checklist6']) ? 1 : 0;
$checklist7 = isset($_POST['checklist7']) ? 1 : 0;
$checklist8 = isset($_POST['checklist8']) ? 1 : 0;
$checklist9 = isset($_POST['checklist9']) ? 1 : 0;
$medicines_duration = isset($_POST['medicines_duration']) ? $_POST['medicines_duration'] : '';
$medical_history = isset($_POST['medical_history']) ? implode(', ', $_POST['medical_history']) : '';
$unknown_name = $_POST['unknown_name'];
$medical_history_additional = $_POST['medical_history_additional'];
$smoking = isset($_POST['smoking']) ? 1 : 0;
$alcohol = isset($_POST['alcohol']) ? 1 : 0;
$alcohol_frequency = isset($_POST['alcohol_frequency']) ? implode(', ', $_POST['alcohol_frequency']) : '';
$lab_exam = isset($_POST['lab_exam']) ? implode(', ', $_POST['lab_exam']) : '';
$recommendation = $_POST['recommendation'];

$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();

// Redirect back to the form page
header("Location: save_information.php");
exit();
