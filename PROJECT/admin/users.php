<?php  include('../config.php'); ?>
<?php  include('../public/functions.php'); ?>

<?php 



// //get info from database
// $result = mysql_query($conn, "SELECT COLUMN_TYPE FROM information_schema.`COLUMNS` WHERE TABLE_NAME = 'users' AND COLUMN_NAME = 'role'");

//     if (!$result) {
//         echo("<p>Error performing query:" . mysql_error() . "<p>");
//         exit();
//     }

// //put data in menu
// while ( $row = mysql_fetch_array($result)) {
//     $my_column = $row["role"];
//     echo ($my_column);
//     echo "<option name='$my_column' value='$my_column'>$my_column</option>";
// }

				


?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- ckeditor -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

<!-- Styling for public area -->
<link rel="stylesheet" href="../css/admin_styling.css">

<?php 
	// Get all admin roles from DB
	$roles = getAdminRoles();	

	// Get all admin users from DB
	$admins = getAdminUsers();	
?>

	<title>Admin | Manage users</title>
</head>
<body>

	<!-- admin navbar -->
	<div style="background-color: #a94442" class="header">
        <div class="logo">
            <a href="<?php echo BASE_URL .'index.php' ?>">
                <h1>DucanKitchen - Admin</h1>
            </a>
        </div>
        <div class="user-info">
		     <a href="../index.php" class="">Trang chủ</a> &nbsp; &nbsp; <a href="../logout.php" class="logout-btn">logout</a>
        </div>
   </div>

	<div class="container content">
		
		<!-- Left side menu -->
		<div class="menu">
            <div style="background-color: #a94442" class="card">
                <div class="card-header">
                    <h2>Actions</h2>
                </div>
                <div class="card-content">
                    <a href="users.php">Manage Users</a>
                    <a href='posts.php'>Manage Posts</a>
                    <a href="topic.php">Manage Topics</a>
                </div>
            </div>
        </div>

		<!-- Middle form - to create and edit  -->
		<div class="action">
			<h1 class="page-title">Create/Edit User</h1>

			<form method="post" action="users.php" >

				<!-- validation errors for the form -->
				<?php include( '../public/errors.php') ?>

				<!-- if editing user, the id is required to identify that user -->
				<?php if ($isEditingUser === true): ?>
					<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
				<?php endif ?>

				<input 
					type="text"
					name="username"
					value="<?php echo $username; ?>" 
					placeholder="Username">

				<input 
					type="email"
					name="email"
					value="<?php echo $email ?>" 
					placeholder="Email">

				<input 
					type="password"
					name="password"
					placeholder="Password">

				<input 
					type="password"
					name="passwordConfirmation"
					placeholder="Password confirmation">
				<input 
					type="role"
					name="role"
					placeholder="role">

				<!--select name="role_id">
					<option value="" selected disabled>Assign role</option>
					<?php foreach ($roles as $role): ?>
						<option value="<?php echo $role['id']; ?>">
							<?php echo $role['name']; ?>
						</option>
					<?php endforeach ?>
				</select-->
				
				<!-- if editing user, display the update button instead of create button -->
				<?php if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="update_admin">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_admin">Save User</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">

			<!-- Display notification message -->
			<!--?php include( '../public/messages.php') ?-->

			<?php if (empty($admins)): ?>
				<h1>No users in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>id</th>
						<th>Users</th>
                        <th>email</th>
						<th>Role</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($admins as $key => $admin): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td>
								<?php echo $admin['username']; ?>
							</td>
							<td><?php echo $admin['email']; ?>	</td>
							<td><?php echo $admin['role']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="users.php?edit-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delelte " href="users.php?delete-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->

	</div>

</body>
</html>