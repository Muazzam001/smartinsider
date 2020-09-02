<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white portfolio">

    <div class="row mt-2 mb-3">
        <div class="col mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Create New Portfolio</span>
                </h3>
            </div>
        </div>
    </div>

    <form>
        <div class="row  mb-2">
            <div class="col">
                <div class="upload-box w-100">
                    <div class="crud_actions">
                        <div class="d-flex align-items-center ">
                            <label for="create_portfolio" class="d-flex align-items-center mb-0">Portfolio Name: &nbsp;
                                <input id="create_portfolio" class="create_portfolio " name="create_portfolio">
                            </label>
                            <button class="btn bg-success text-white button px-4 py-1 font-weight-bold h-100"
                                    type="submit">Create
                            </button>
                        </div>
                        <div class="response alert alert-primary mt-3 mb-1 py-1 px-2 border border-info" role="alert">
                            <span class="fas fa-exclamation-triangle mr-1"></span> <span class="alert-content">Portfolio names cannot be blank.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
