<?php
$title = "Profile Database";
include_once "header.php";
include "db.php";


echo "<style>
        a{color:black};
        .custom-table {color: red;}
        </style>";

// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM accountInfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-custom table-hover' >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        $url= "editprofile.php?id=".$row['id'];
        echo "<tr>
                <td><a href =$url>{$row['id']}</a></td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['dob']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();


include_once "footer.php";
?>