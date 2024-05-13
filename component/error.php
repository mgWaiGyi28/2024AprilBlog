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
