<?php include('component/header.php') ?>

    <div class="d-flex justify-content-center">
        <form class="col-md-4 border border-1 rounded shadow-lg px-5 py-3">
            <h1 class="text-center py-4 text-success"><i class="bi bi-person-circle pe-3"></i>LOGIN</h1>
            <div class="mb-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="text-center mb-3">
                <button type="submit" class="btn btn-outline-success">Log In</button>
            </div>
            <div class="text-center">
                <p class="">No Account?<a href="#" class="">Register</a> Here</p>
            </div>
        </form>
    </div>

<?php include('component/footer.php') ?>
