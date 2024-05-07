<?php include('component/header.php') ?>

<div class="container">
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
</div>


<?php include('component/footer.php') ?>