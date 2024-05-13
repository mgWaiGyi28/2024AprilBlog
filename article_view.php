<?php

    include "db.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM articles WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    if($result) {
        $article = mysqli_fetch_assoc($result);

    } else{
        echo mysqli_connect_error();
    }

?>


<?php include('component/header.php') ?>
       <h2 class="mb-2"><?= $article['title'] ?> </h2>
       <p class="mb-2"><?= $article['about'] ?></p>
       <img src="<?= $article['image'] ?>" alt="Insert Your Image Here" class="mb-2" height="300rem">
       <p>posted at <i><?= $article['posted_at'] ?></i></p>






        <!-- <div class="row">                                                                       
            <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
                
            </div>

            <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
                
            </div>

             <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
                
            </div>

            <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
                
            </div>

            <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
                
            </div>

             <div class="col-3">
                <div class="card mb-3">
                    <img src="photo/img-1.jpg" alt="" class="img-fluid">
                    <div class="card-title">
                        <h3 class="px-2 pb-2">Title Here...</h3>
                    </div>
                    <div class="card-text">
                        <p class="px-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        ....</p>
                    </div>
                </div>
                
            </div>
        </div> -->

<?php include('component/footer.php') ?>