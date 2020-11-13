<?php  include('../config.php'); ?>
<?php  include('../public/functions.php'); ?>

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
	// Get all topics from DB
	$topics = getAllTopics();	
?>

	<title>Admin | Manage Topics</title>
</head>
<body>

	<!-- admin navbar -->
	<div style="background-color: #a94442" class="header" >
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
                    <a href='posts.php' >Manage Posts</a>
                    <a href='topic.php'>Manage Topics</a>
                </div>
            </div>
        </div>

		<!-- Middle form - to create and edit -->
		<div class="action">
			<h1 class="page-title">Create/Edit Topics</h1>

			<form method="post" action= 'topic.php' >

				<!-- validation errors for the form -->
				<?php include('../public/errors.php') ?>

				<!-- if editing topic, the id is required to identify that topic -->
				<?php if ($isEditingTopic === true): ?>
					<input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
				<?php endif ?>

				<input 
					type="text"
					name="topic_name"
					value="<?php echo $topic_name; ?>" 
					placeholder="Topic">

				
				<!-- if editing topic, display the update button instead of create button -->
				<?php if ($isEditingTopic === true): ?> 
					<button type="submit" class="btn" name="update_topic">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_topic">Save Topic</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">

			<!-- Display notification message -->
			<!--?php include(ROOT_PATH . '/includes/public/messages.php') ?-->

			<?php if (empty($topics)): ?>
				<h1>No topics in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>id</th>
						<th>Topic Name</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($topics as $key => $topic): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $topic['topicname']; ?></td>
							<td>
								<a class="btn edit"
									href="topic.php?edit-topic=<?php echo $topic['id'] ?>">
									edit
								</a>
							</td>
							<td>
								<a class="btn delete"								
									href="topic.php?delete-topic=<?php echo $topic['id'] ?>">delete
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