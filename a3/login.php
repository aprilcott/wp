<?php
include 'includes/header.inc';
include("includes/db_connect.inc"); 
include 'includes/nav.inc';
$pageTitle = "Log in";

?>
    
<main class="section-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col">
                        <h1 class="baskervville-headings">
                        Login
                        </h1>
                    </div>
                </div>
                <section>
            <form action="process_login.php" method="post" enctype="multipart/form-data">
                <div class="form-group add-form">
                        <div class="form-required">
                            <label>User Name</label>
                        </div>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Enter User Name" required>
                    <div class="form-required">
                        <label>Password</label>
                    </div>
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div id="submit-alert" class="alert alert-danger form-alert mt-2"></div>
                <button type="submit" id="submit" class=" mt-2 btn btn-secondary btn-block btn-primary ysabeau-sc-orange-button rounded-pill">
                    Submit
                </button>
                <a href="index.php" class="mt-2 btn btn-secondary btn-block btn-primary ysabeau-sc-orange-button rounded-pill">Register account</a>
            </form>
            <script onload="showError"></script>
        </section>
            </div>
        </main>
    <?php include 'includes/footer.inc'; ?>
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="assets/js/scripts.js"></script>
    </body>