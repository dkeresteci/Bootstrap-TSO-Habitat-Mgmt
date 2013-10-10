<?php

  $date=$_POST["date"];
  $title=$_POST["title"];
  $time=$_POST["time"];
  $location=$_POST["location"];
  $link=$_POST["link"];

$con=mysqli_connect("localhost","dkeresteci","saucyj42","tsohabitat");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO calendar_events (Date, Title, Time, Location, Link, Online)
VALUES
('$date','$title', '$time','$location', '$link','0')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";

//echo $date . " " . $title . " " . $time . " " . $location . " " . $link;


// $result = mysqli_query($con,"SELECT * FROM calendar_events");

//   while($row = mysqli_fetch_array($result))
//   {
//   echo "<tr><td>";
//   echo $row['Date'] . "</td><td> " . $row['Title'] . "</td><td> " . $row['Time']. "</td><td> " . $row['Location'] . "</td><td> " . $row['Link'] . "</td><td> " . $row['Online'];
//   echo "</td></tr>";
//   }

// mysqli_close($con);
?>