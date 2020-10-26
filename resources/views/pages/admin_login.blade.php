<main class="page-content" id="admin-login" style="padding-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
            <div class="col-lg-4 col-md-12 col-sm-12">

                <h4 class="text-center"><?php echo $title; ?></h4>
                <p class="text-danger text-center"><?php echo $error; ?></p>
                
                <form action="<?php echo url('admin-login-exe'); ?>" method="post">
                @csrf
                    <div class="form-group">
                        <label for="admin-username">Username</label>
                        <input class="form-control" type="text" name="admin-username" id="admin-username">
                    </div>
                    <div class="form-group">
                        <label for="admin-password">Password</label>
                        <input class="form-control" type="password" name="admin-password" id="admin-password">
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>

            </div>
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
        </div>
    </div>
</main>