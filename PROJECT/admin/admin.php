<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet" href="../css/admin_styling.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- ckeditor -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

<!-- Styling for public area -->

<body>
    <div style="background-color: #a94442" class="header">
        <div class="logo">
            <a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
                <h1>DucanKitchen - Admin</h1>
            </a>
        </div>
        <div class="user-info">
           <a href="../index.php" class="">Trang chủ</a> &nbsp; &nbsp; <a href="../logout.php" class="logout-btn">logout</a>
        </div>
    </div> 
    <div class="container content">
        <div class="menu">
            <div style="background-color: #a94442" class="card">
                <div  class="card-header">
                    <h2>Actions</h2>
                </div>
                <div class="card-content">
                    <a href='users.php'>Manage Users</a>
                    <a href= 'posts.php' >Manage Posts</a>
                    <a href= 'topic.php'>Manage Topics</a>
                </div>
            </div>
        </div> 
        
    </div>
    
</body>