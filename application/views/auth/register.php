<section id="wrapper-auth">
    <div class="container">
        <form action="<?= base_url()?>auth/register_process" method="POST">
            <div class="row my-5 bg-auth">
                <div class="col-12 col-lg-6 bg-login">
                    
                </div>
                <div class="col-12 col-lg-6 p-5">
                    <?php if (@isset($_SESSION["error"])) { ?>
                        <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="notif-login f-poppins"><?= $_SESSION["error"] ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <div class="my-4 ">
                        <img class="img-fluid py-2 rounded-1 " width="300" src="<?= base_url()?>assets/img/logo-only.svg" alt="">
                    </div>
                    <div class="mt-4 ">
                        <h3>Create your account</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti aliquam quis autem ratione perferendis veritatis! Cum nobis et maiores laborum.</p>
                    </div>
                    <div class="my-4 pt-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="my-4">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" >
                    </div>
                    <div class="my-4">
                        <label for="bname" class="form-label">Bussines Name</label>
                        <input type="text" name="bname" class="form-control" id="bname" >
                    </div>
                    <div class="my-4">
                        <label for="passwd" class="form-label">Password</label>
                        <input type="password" name="passwd" class="form-control" id="passwd">
                    </div>
                    <div class="my-4">
                        <label for="passwd2" class="form-label">Confirm Password</label>
                        <input type="password" name="passwd2" class="form-control" id="passwd2">
                    </div>
                    <div id="emailHelp" class="form-text my-4 ">Already Have Fusion Pay Account ? <a href="<?= base_url()?>auth/login">Login Now</a></div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>
</section>