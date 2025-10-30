<!DOCTYPE html>
<html>
<html>
    <?php $pageTitle = "Home";
    include 'includes/header.inc';
    include("includes/db_connect.inc"); ?>
<body>
    <?php include 'includes/nav.inc'; ?>

        <main class="section-container">
            <div class="container-xl">
           <div class="row gy-3">
            <div class="col">
            <h1 class="baskervville-headings">
                Skill Swap
            </h1>
                <div class="ysabeau-sc-sub-heading">
                Browse the latest skills shared by our community
                </div>
            </div>
            <div id="skillCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                                <?php
                                $query = "SELECT * FROM skills ORDER BY skill_id DESC limit 4";
                                $result = mysqli_query($conn, $query);
                                $first = true;
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($first) {
                                    echo '<div class="carousel-item active">';
                                    $first = false;
                                    } else {
                                      echo '<div class="carousel-item">';
                                    }
                                    echo '<img src="assets/images/skills/';
                                    echo $row["image_path"];
                                    echo '" class="img-fluid" alt="guitar">';
                                    echo '<div class="carousel-caption bg-dark bg-opacity-50">
                                          <p class="ysabeau-sc-Carousel">';
                                          echo $row["title"];
                                          echo '</p>
                                          </div>
                                          </div>';
                                 }
                            ?>
                            </div>
                             <button class="carousel-control-prev" type="button" data-bs-target="#skillCarousel" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#skillCarousel" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                    </div>
            <div class="row mt-5">
                <?php
                                $query = "SELECT * FROM skills ORDER BY skill_id DESC limit 4";
                                $result = mysqli_query($conn, $query);
                                $first = true;
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '<div class="view-detail col-12 col-lg-3">';
                                    echo '<div class="ysabeau-sc-detail-heading">';
                                    echo "{$row["title"]}";
                                    echo "</div>";
                                    echo ' <div class="ysabeau-sc-detail-sub-heading">';
                                    echo "Rate: \${$row['rate_per_hr']}";
                                    echo "</div>";
                                    echo "<a class='mt-2 btn btn-secondary rounded-pill ysabeau-sc-orange-button' href=\"details.php?id='". urlencode($row['skill_id']) . "'\">View Details </a>";
                                    echo "</div>";
                                 }
                            ?>
            </div>
            </div>
        </main>
<?php include 'includes/footer.inc'; ?>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script async src="assets/js/scripts.js"></script>
</body>

</html>