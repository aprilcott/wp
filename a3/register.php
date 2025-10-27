<?php
session_start();
include 'includes/header.inc';
include("includes/db_connect.inc"); 
    if (array_key_exists('flash_error', $_SESSION)) {

    //print('<body onload="showError(' . $_SESSION['error'] . ')">'); 
    if ($_SESSION['flash_error_id'] == 1) {
    print('<body onload="errorRegister(' . "'" . $_SESSION['flash_error'] . "', '" . $_SESSION['flash_bio'] . "'" . ')">');
    
    // print($_SESSION['flash_name']);
    unset($_SESSION['flash_error']);
    unset($_SESSION['flash_bio']);
    unset($_SESSION['flash_error_id']);
    
    } else if ($_SESSION['flash_error_id'] == 2) {
    print('<body onload="errorRegisterPass(' . "'" . $_SESSION['flash_error'] . "', '" . $_SESSION['flash_bio'] . "', '" . $_SESSION['flash_name'] . "', '" . $_SESSION['flash_email'] . "'" . ')">');
        unset($_SESSION['flash_error_id']);    
        unset($_SESSION['flash_error']);
        unset($_SESSION['flash_bio']);
        unset($_SESSION['flash_name']);
        unset($_SESSION['flash_email']);

    } else {
        print('<body>');
    }
}
    include 'includes/nav.inc';
    ?>
    
<main class="section-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col">
                        <h1 class="baskervville-headings">
                        Add New User
                        </h1>
                    </div>
                </div>
                <section>
            <form class="needs-validation-user" action="process_register.php" method="post" enctype="multipart/form-data">
                <div class="form-group add-form">
                        <div class="form-required">
                            <label>User Name</label>
                        </div>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Enter User Name" required>
                        <div class="form-required">
                            <label>Bio</label>
                        </div>
                        <textarea id="registerBio" name="bio" class="form-control" rows="5" placeholder="Enter Bio" required></textarea>
                        <div class="form-required">
                            <label>Email</label>
                        </div>
                    <input id="email" name="email" type="text" class="form-control" placeholder="Enter email" required>
                    <div class="form-required">
                        <label>Password</label>
                    </div>
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    <div class="form-required">
                        <label>Confirm Password</label>
                    </div>
                    <input name="password-confirm" type="password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div id="submit-alert" class="alert alert-danger form-alert mt-2"></div>
                <button type="submit" id="submit" class=" mt-2 btn btn-secondary btn-block btn-primary ysabeau-sc-orange-button rounded-pill">
                    Submit
                </button>
            </form>
            <script onload="showError"></script>
        </section>
            </div>
        </main>
    <?php include 'includes/footer.inc'; ?>
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="assets/js/scripts.js"></script>
    </body>