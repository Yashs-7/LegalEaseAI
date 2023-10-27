<?php
include('db.php'); // Include the database connection configuration

// Define the specific 'id' you want to retrieve
$targetId = 1; // Change this to the desired 'id'

// Query the database to retrieve data from the 'content' table for the specified 'id'
$res = mysqli_query($con, "select * from content where id = $targetId");

if ($row = mysqli_fetch_assoc($res)) {
    // If a row is found, display the content
    ?>
    <div  contenteditable="true" id="<?php echo $row['id'] ?>">
        <?php echo $row['content'] ?>
    </div>
    <input type="button" onclick="updateData('<?php echo $row['id'] ?>')" value="Update">
    <div id="msg<?php echo $row['id'] ?>"></div>
    <br/><br/>
    <?php
} else {
    // Handle the case where no row with the specified 'id' is found
    echo "No data found for the specified ID.";
}
?>
	



