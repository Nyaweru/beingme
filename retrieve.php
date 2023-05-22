<?php
 $host = "localhost";
 $user = "postgres";
 $password = "nyamweru";
 $dbname = "postgres";

    // Connect to the database
       $con = pg_connect("host=$host dbname=$dbname user=$user password=$password") or die("could not connect to server \n");
    // Query to retrieve the last column of data entered into the database
    $query = 'SELECT * FROM booking  ORDER BY id DESC LIMIT 1';
    $result = pg_query( $con, $query) or die('Query failed: ' . pg_last_error());

   if (pg_num_rows($result) > 0) {
        // Display the result
       /* while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            foreach ($line as $col_value) {
                echo "$col_value\n";
            }
        }
    } else {
        echo "No results found.";
    }*/
    while ($row = pg_fetch_assoc($result)) {
        // Retrieve data from the row and store it in variables
        $id = $row['id'];
        $text = $row['Names'];
        $email = $row['Email'];
        $telephone= $row['Telephone'];
        $address=$row['Address'];
        $apartment= $row ['Apartment'];
        $dateOfPick=$row['DateOfPick'];

        $dateOfReturn =$row['DateOfReturn'];

        
        // Display the data on the HTML form

        echo "<input type = 'text' name = 'name' value = '$text'>";
        echo "<input type = 'text' name = 'email'  value = '$email'>";
        
        echo "<input type = 'text' name = 'telephone' value = '$telephone'>";
        
        echo "<input type = 'text' name = 'address' value = '$address'>";
        echo "<input type = 'text' name = 'apartment' value = '$apartment'>";
        echo "<input type = 'text' name = 'dateOfPick' value = '$dateOfPick'>";
        echo "<input type = 'text' name = 'dateOfReturn' value = '$dateOfReturn'>";
        
        
    }
    
    // Close the database connection

}
 /*if ($result) {
    header("location: VIEW.php");
 } else {
     echo "Error: " . pg_last_error($conn);
  }*/

    // Free resultset
    pg_free_result($result);

    // Close connection
    pg_close($con);
?> 

 