<!DOCTYPE html>
<html>
<html>
    <?php $pageTitle = "Home";
    include 'header.inc';
    include("db_connect.inc"); ?>
<body>
    <?php include 'nav.inc'; ?>

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
                    <div class="carousel-item active">
                        <img src="assets/images/skills/1.png" class="img-fluid" alt="guitar">
                        <div class="carousel-caption bg-dark bg-opacity-50">
                            <p class="ysabeau-sc-Carousel">Beginner Guitar Lessons</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/skills/2.png" class="img-fluid" alt="guitar second">
                        <div class="carousel-caption bg-dark bg-opacity-50">
                        <p class="ysabeau-sc-Carousel">Intermediate Finger Style</p>
                        </div>
                    </div>
                        <div class="carousel-item">
                        <img src="assets/images/skills/3.png" class="img-fluid" alt="Bread Baking">
                        <div class="carousel-caption bg-dark bg-opacity-50">
                        <p class="ysabeau-sc-Carousel">Artisinal Bread Baking</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/skills/4.png" class="img-fluid" alt="French Pastry Making">
                        <div class="carousel-caption bg-dark bg-opacity-50">
                        <p class="ysabeau-sc-Carousel">French Pastry Making</p>
                        </div>
                    </div>
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
                                $query = "SELECT COUNT(*) as total FROM skills";
                                $result = mysqli_query($conn, $query);
                                $row =mysqli_fetch_assoc($result);
                                $count = $row["total"];
                                $countEnd = $count - 4;
                                 for ($count; $count > $countEnd; $count--) {
                                    $query = "SELECT * FROM skills WHERE skillID = $count";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo '<div class="view-detail col-12 col-lg-3">';
                                    echo '<div class="ysabeau-sc-detail-heading">';
                                    echo "{$row["skillTitle"]}";
                                    echo "</div>";
                                    echo ' <div class="ysabeau-sc-detail-sub-heading">';
                                    echo "Rate: \${$row['skillRate']}";
                                    echo "</div>";
                                    echo "<a class='mt-2 btn btn-secondary rounded-pill ysabeau-sc-orange-button' href=\"details.php?id='". urlencode($row['skillID']) . "'\">View Details </a>";
                                    echo "</div>";
                                 }
                            ?>
            </div>
            </div>
        </main>
<?php include 'footer.inc'; ?>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script async src="assets/js/scripts.js"></script>
</body>

</html>