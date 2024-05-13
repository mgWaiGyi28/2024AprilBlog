<?php

    include "db.php";
    $query = "SELECT * FROM articles";
    $result = mysqli_query($conn, $query);

    if($result){
        $articles = $result;
    }   else{
        echo mysqli_connect_error();
    }

?>

<?php include('component/header.php') ?>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        <?php while($article = mysqli_fetch_assoc($articles)): ?>
            <div class="col mb-3">
                <div class="card">
                    <img src="<?= $article['image'] ?>" alt="Article Picture Here......" class="object-fit-cover" height="250rem">
                    <div class="card-body">
                        <h3 class="card-title"><?= htmlspecialchars_decode($article['title']) ?></h3>
                        <p class="card-text">  
                            <?php
                                $str_to_array = explode(" ", htmlspecialchars_decode($article['about']));
                                $slice_array = array_slice($str_to_array, 0, 15);
                                $result = implode(" ", $slice_array);
                                $result .= " ... ";
                                print_r($result);

                            ?> <!-- // multiple lines to ...-->
                        </p>
                    </div>
                    
                    <div class="card-footer text-end">
                        <a href="article_view.php?id=<?= $article['id']?>">See more</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>


<?php include('component/footer.php') ?>




    