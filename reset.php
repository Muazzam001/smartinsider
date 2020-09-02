<?php require("includes/login-head.php"); ?>

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
                        <div class="offset-md-2 col-md-8">
                            <div class="form-block reset d-flex flex-column justify-content-center align-items-center">
                                <p class="text-center text-wrap px-4">Please complete the form below with the email
                                    address
                                    linked to your account</p>

                                <form action="#" class="w-100">

                                    <fieldset>
                                        <legend class="font-weight-bold">Enter E-Mail Address</legend>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder=""
                                                   name="email">
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-block bg-custom waves-effect waves-light text-white mt-4"
                                                    type="button">Submit
                                            </button>
                                        </div>
                                        <div class="remember text-center">
                                            <a href="#">Back to <u>Login</u></a>
                                        </div>

                                    </fieldset>

                                </form>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="sent-sec mx-auto">
                    <p class="text-success text-center text-wrap px-4 font-weight-bold ">A reset email has been sent to
                        your account, alternatively please contact us at the below details:
                    </p>

                    <div class="row my-2 ">
                        <div class="col col-padding my-2">

                            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                                Support </h4>

                            <hr class="title-separator">

                            <div class="row mt-0 my-lg-3 mb-1">

                                <div class="col align-self-center ">

                                    <div class="info_boxes">
                                        <div class="info_boxes_wrapper d-flex flex-column">
                                            <div class="d-flex flex-column">
                                                <span>Smart Insider UK standard office hours are Monday to Friday, excluding UK bank holidays 08:00 to 19:00.</span>
                                                <span>For support during these hours use:</span>
                                                <span class="d-flex align-items-center">
                                                    <span class="fas fa-envelope fa-2x mr-1"></span> <b><a
                                                                href="mailto:urgent@smartinsider.com" title=""
                                                                target="_blank">urgent@smartinsider.com</a></b>
                                                </span>
                                                <span class="d-flex align-items-center">
                                                    <span class="fas fa-phone fa-2x mr-1"></span><b>+44 203 405 3356</b></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row mt-0 my-lg-3 mb-1">

                                <div class="col align-self-center ">

                                    <div class="info_boxes">
                                        <div class="info_boxes_wrapper d-flex flex-column">
                                            <div class="d-flex flex-column">
                                                <span>Smart Insider US standard office hours are Monday to Friday, excluding US federal holidays 08:00 to 19:00.</span>
                                                <span> For support during these hours use:</span>
                                                <span class="d-flex align-items-center">
                                                    <span class="fas fa-envelope fa-2x mr-1"></span><b><a
                                                                href="mailto:urgent@smartinsider.com" title=""
                                                                target="_blank">urgent@smartinsider.com</a></b>
                                                </span>
                                                <span class="d-flex align-items-center">
                                                    <span class="fas fa-phone fa-2x mr-1"></span><b>+1 203 202 2056</b></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

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
