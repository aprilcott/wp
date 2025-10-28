<!DOCTYPE html>
<html>

    <?php
    include 'includes/header.inc';
    $pageTitle = "Add skills";
    include 'includes/header.inc';
    include("includes/db_connect.inc");
    if ($_SESSION['userName'] === null || $_SESSION['userName'] != $_SESSION['editUname']) {
        print("redirect");
    $_SESSION['flash_error_id'] = 4;
    header('Location: index.php');
    }
    include 'includes/nav.inc';
    $skill = $_SESSION['editRow'];
    echo '<body onload="fillForm(' . $skill['title'] . ", " . $skill['description'] . ", " . $skill['category'] . ", " . $skill['rate_per_hr'] . ", " . $skill['level'];
    ?>
<body>
        <main class="section-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col">
                        <h1 class="baskervville-headings">
                            Edit skill
                        </h1>
                    </div>
                </div>
                <section>
            <form class="needs-validation" action="process_edit.php" method="post" enctype="multipart/form-data">
                <div class="form-group add-form">
                        <div class="form-required">
                            <label>Title</label>
                        </div>
                        <?php
                        echo '<input name="title" type="text" class="form-control" value="' . $skill['title'] , '"required>';
                        ?>
                        <div class="form-required">
                            <label>Description</label>
                        </div>
                        <?php
                        echo '<textarea name="description" class="form-control" rows="5"> ' . $skill['description'] . '</textarea>';
                        ?>
                        <div class="form-required">
                            <label>Category</label>
                        </div>
                        <?php
                    echo '<input name="category" type="text" class="form-control" value="' . $skill['category'] . '" required>';
                    ?>
                    <div class="form-required">
                        <label>Rate Per Hour ($)</label>
                    </div>
                    <?php
                        echo '<input name="rate-p/h" type="number" step="0.05" min="0" class="form-control" value="' . $skill['rate_per_hr'] . '" required>';
                        ?>
                    <div class="form-required">
                        <label>Level</label>
                    </div>
                    <select name="level" class="form-control" required>
                        <option value="" disabled>Please Select</option>
                        <?php
                        if ($skill['level'] == "Beginner") {
                        echo '<option selected value="1">Beginner</option>';
                        echo '<option value="2">Intermediate</option>';
                        echo '<option value="3">Expert</option>';
                        } else if ($skill['level'] == "Intermediate") {
                        echo '<option value="1">Beginner</option>';
                        echo '<option selected value="2">Intermediate</option>';
                        echo '<option value="3">Expert</option>';
                        } else if ($skill['level'] == "Intermediate") {
                        echo '<option value="1">Beginner</option>';
                        echo '<option value="2">Intermediate</option>';
                        echo '<option selected value="3">Expert</option>';
                        }
                        ?>
                    </select>
                    <div class="">
                        <label>Replace image (optional)</label>
                    </div>
                        <input name="image" type="file" id="formFile" class="form-control needs-validation" required>
                    </div>
                    <div id="submit-alert" class="alert alert-danger form-alert mt-2"></div>
                <button type="submit" id="submit" class=" mt-2 btn btn-secondary btn-block btn-primary ysabeau-sc-orange-button rounded-pill">
                    Submit
                </button>
            </form>
        </section>
            </div>
        </main>
<?php include 'includes/footer.inc'; ?>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script async src="assets/js/scripts.js"></script>
</body>

</html>