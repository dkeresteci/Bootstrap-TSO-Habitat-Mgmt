<?php

$con=mysqli_connect("localhost","dkeresteci","saucyj42","tsohabitat");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con,"SELECT * FROM calendar_events");



  while($row = mysqli_fetch_array($result))
  {
  echo "<tr><td>";
  echo $row['Date'] . "</td><td>" . $row['Title'] . "</td><td>" . $row['Time']. "</td><td>" . $row['Location'] . "</td><td>" . $row['Link'] . "</td><td>" . $row['Online'];
  echo "</td></tr>";
  }

mysqli_close($con);
?>