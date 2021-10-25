<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'samzaral_db');

// TRACK ITEM
if (isset($_POST['trackItem'])) {
  $trackingId = mysqli_real_escape_string($db, $_POST['trackingId']);

  if (empty($trackingId)) {
    $_SESSION['error'] = 'Please input a tracking ID';
  }else {
    $query = "SELECT * FROM tracking WHERE trackingId='$trackingId' ";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['trackingId'] = $trackingId;
      $_SESSION['success'] = "You item is successfully being tracked";
      header('location: ../tracking.php');
    }else {
      $_SESSION['error'] = 'wrong tracking ID';
      header('location: ../track.php');
    }
  }
}

?>