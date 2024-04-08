<section id="wrapper-auth">
    <div class="container">
        <form action="<?= base_url()?>auth/login_process" method="POST">
            <div class="row my-5 bg-auth">
                <div class="col-12 col-lg-6 bg-login"></div>
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
                        <h3>Welcome</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti aliquam quis autem ratione perferendis veritatis! Cum nobis et maiores laborum.</p>
                    </div>
                    <div class="my-4 pt-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="my-4">
                        <label for="passwd" class="form-label">Password</label>
                        <input type="password" name="passwd" class="form-control" id="passwd">
                    </div>
                    <div id="emailHelp" class="form-text my-4 ">Don't Have Fusion Pay Account ? <a href="<?= base_url()?>auth/register">Register Now</a></div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</section>