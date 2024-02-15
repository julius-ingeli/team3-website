<?php
include 'header.php'; 
$title = "Read Data";
include 'database.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM feedback";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
           <thead>
                <tr>
                    <th>id</th>
                    <th>comment</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['comment']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
include 'footer.php';
