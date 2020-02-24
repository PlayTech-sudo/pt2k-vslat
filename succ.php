<?php
  if ($link->query($sql==TRUE)
  {
  	
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
  }
  else
  {
  	echo "Error:"  .$sql . "<br>" . $conn->error;

  }
  ?>