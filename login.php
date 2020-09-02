<?php require("./includes/login-head.php"); ?>

<div class="container main-section text-left bg-white shadow-lg">
    <div class="row">
        <div class="col-md-12">
            <header>
                <div class="header-section">
                    <div class="logo d-block text-center">
                        <img src="assets/images/logo.svg" alt="Company Logo" class="img-fluid">
                    </div>
                </div>
            </header>
        </div>
    </div>
</div>

<!-- .container -->
<main role="main" class="container content login main-section text-left bg-white shadow-lg">

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="custom-sec">

                <section class="form-sec w-100 h-100 bg-white mx-auto">

                    <div class="row d-flex h-100 my-auto">
                        <div class="offset-md-3 col-md-6">
                            <div class="form-block d-flex flex-column justify-content-center align-items-center">

                                <p class="text-center text-wrap px-4">Please fill out the following fields to login:</p>

                                <form action="#" class="w-100">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                                    </div>
                                    <div class="form-group">
                                        <button type="button"
                                                class="btn btn-block bg-custom waves-effect waves-light text-white mt-4">
                                            Login
                                        </button>
                                    </div>
                                    <div class="remember text-center">
                                        <a href="#">Reset Password</a>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </section>

            </div>

        </div>

    </div>

</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
