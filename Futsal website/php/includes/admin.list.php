<?php
//Start session
session_start();

//Call admin protect page
include 'includes/protect_admin_pages.php';

//Declaring variable
$page_title = "Admin List";

//Calling header & nav pages
include 'includes/header.php';
include 'includes/admin_nav.php';

//Calling connection page
include('includes/connections.php');

//Create sql query
$query = "SELECT * FROM admin_tbl";

//Run the query in the database using built-in php function
//Pass 2 parameters
$result = mysqli_query($conn, $query);

//Fetch the data from the database using built-in php function
$admins = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free the result from the database using built-in php function
mysqli_free_result($result);

//Close the connection by passing in the $conn variable
mysqli_close($conn);
2

?>

<!-- start of content -->
<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h2>Admin List</h2>
            <table class="table table-striped">
                <thead>
                    <th>ID No</th>
                    <th>E-mail</th>
                    <th>Password</th>
                    <th>Date Registered</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                    foreach ($admins as $admin) : ?>
                        <tr>
                            <td><?php echo $admin['AdminID'] ?></td>
                            <td><?php echo $admin['Email'] ?></td>
                            <td><?php echo $admin['Password'] ?></td>
                            <td><?php echo $admin['Datereg'] ?></td>
                            <td><a href="admin_update.php?AdminID=<?php echo $admin['AdminID'] ?>">Modify</a></td>
                            <td><a href="admin_delete.php?AdminID=<?php echo $admin['AdminID'] ?>">Delete</a></td>
                        </tr>
                </tbody>
                <!-- Close for loop -->
            <?php endforeach; ?>
            </table>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<!-- End of content -->
<?php
//Calling header & nav pages
include 'includes/footer.php';

?>