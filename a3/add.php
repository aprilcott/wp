    <?php
    $pageTitle = "Add skills";
    include 'includes/header.inc';
    include("includes/db_connect.inc");
    include 'includes/nav.inc';
    if ($_SESSION['userName'] === null) {
        print("redirect");
    $_SESSION['flash_error_id'] = 4;
    header('Location: index.php');
    }
    ?>
<body>
        <main class="section-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col">
                        <h1 class="baskervville-headings">
                        Add New Skill
                        </h1>
                    </div>
                </div>
                <section>
            <form class="needs-validation" action="process_add.php" method="post" enctype="multipart/form-data">
                <div class="form-group add-form">
                        <div class="form-required">
                            <label>Title</label>
                        </div>
                        <input name="title" type="text" class="form-control" placeholder="Enter Skill Title" required>
                        <div class="form-required">
                            <label>Description</label>
                        </div>
                        <textarea name="description" class="form-control" rows="5" placeholder="Enter Description" required></textarea>
                        <div class="form-required">
                            <label>Category</label>
                        </div>
                    <input name="category" type="text" class="form-control" placeholder="category" required>
                    <div class="form-required">
                        <label>Rate Per Hour ($)</label>
                    </div>
                        <input name="rate-p/h" type="number" step="0.05" min="0" class="form-control" placeholder="Enter Rate Per Hour" required>
                    <div class="form-required">
                        <label>Level</label>
                    </div>
                    <select name="level" class="form-control" required>
                        <option value="" disabled selected>Please Select</option>
                        <option value="1">Beginner</option>
                        <option value="2">Intermediate</option>
                        <option value="3">Expert</option>
                    </select>
                    <div class="form-required">
                        <label>Skill Image</label>
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