<?php
    include('db.php');

    if(isset($_POST['add-article'])) {
        $title = htmlspecialchars(trim($_POST['title']));
        $about = htmlspecialchars(trim($_POST['about']));
        $image = $_FILES['image'];
        $error = [];

        empty($title) ? ($error[] = 'Please Enter Your Title') : '' ;
        empty($about) ? ($error[] = 'Please Enter About') : '';
        is_uploaded_file($image['tmp_name']) ? '' : ($error[] = 'Please Upload Image');

        if(!$error) {
            $image_path = "photo/".$image['name'];
            move_uploaded_file($image['tmp_name'], $image_path);
            $query = "INSERT INTO articles (title, about, image, posted_at) 
            VALUES ('$title', '$about', '$image_path', now())";
            $result = mysqli_query($conn, $query);
            if($result) {
                header('location/ index.php');
            } else {
                echo mysqli_connect_error();
            }
        }
    }


?>

<?php include('component/header.php') ?>

<div class="container">
    <h1 class="">New Blog</h1>

    <form action="" method="post" enctype="multipart/form-data">

    <!-- error -->
     <div>
        <ul class="text-danger">
            <?php

            // if($error) {
                // foreach($error as $e){
                    // echo "<li>".$e."</li>";

             //   }
           // }

            ?>
            <?php if(isset($error)): ?>
                <?php if($error) : ?>
                    <?php foreach($error as $e) : ?>
                        <li><?php echo $e; ?></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
     </div>

    <div class="mb-3">
        <label for="title" class="">Title:</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Your Article Title Here...">
    </div>

    <div class="mb-3">
        <label for="about" class="">About:</label>
        <textarea name="about"  cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="">Image:</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Browse...</span>
            <input type="file" name="image" class="form-control" placeholder="No file selected" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    
    <button class="btn btn-outline-primary" type="submit" name="add-article">Create</button>
</div>
    </form>


<?php include('component/footer.php') ?>