<?php

    include 'db.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM articles WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if($result){
            $article = mysqli_fetch_assoc($result);
        } else{
            echo mysqli_connect_error();
        }
    }

    if(isset($_POST['update-article'])) {
        $title = htmlspecialchars(trim($_POST['title']));
        $about = htmlspecialchars(trim($_POST['about']));
        $image = $_FILES['image'];
        $error = [];


        empty($title) ? ($error[] = 'Name is required') : '';
        empty($about) ? ($error[] = 'About is required') : '';
         
        $id = $_GET['id'];

        if(!$error) {
            if(is_uploaded_file($image['tmp_name'])){
                $image_path = 'photo/' . $image['name'];
                move_uploaded_file($image['tmp_name'], $image_path);
                $query = "UPDATE articles SET title='$title', about='$about', image='$image_path', posted_at=now() WHERE id= '$id'";
            } else{
                $query = "UPDATE articles SET title='$title', about='$about', posted_at=now() WHERE id= '$id'";
                
            }

            $result = mysqli_query($conn, $query);
            if($result){
                header('location: article_view.php?id=' .$id);
            } else {
                echo mysqli_connect_error();
            }
        }
    }

?>


<?php include('component/header.php') ?>

<?php if(isset($article)): ?>
    <h1 class="mb-3">Update Article</h1>

    <form action="" method="post" enctype="multipart/form-data">

    <!-- error -->
        <?php include 'component/error.php'; ?>
        <div class="mb-3">
            <label for="title" class="">Title:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Your Article Title Here..."
            value="<?= $article['title'] ?>">
        </div>

        <div class="mb-3">
            <label for="about" class="">About:</label>
            <textarea name="about"  cols="30" rows="5" class="form-control"><?= htmlspecialchars_decode($article['about']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="">Image:</label>
            <input type="file" name="image" class="form-control" placeholder="No file selected" aria-label="Username" aria-describedby="basic-addon1">
            <img src="<?= $article['image'] ?>" alt="This is your photo" height="150rem" class="border">
        </div>
        
        <button class="btn btn-outline-warning" type="submit" name="update-article">Create</button>
    </form>

    <?php else: ?>
        <p class="fs-2 text-center">No Match Article</p>
    <?php endif; ?>
<!-- <div class="container">
    <h1 class="">Edit Your Blog</h1>

    <div class="mb-3">
        <label for="title" class="">Title:</label>
        <input type="text" class="form-control" placeholder="Your Article Title Here...">
    </div>

    <div class="mb-3">
        <label for="about" class="">About:</label>
        <textarea name="about"  cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="">Image:</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Browse...</span>
            <input type="text" class="form-control" placeholder="No file selected" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    
    <button class="btn btn-outline-primary">Create</button>
</div> -->


<?php include('component/footer.php') ?>