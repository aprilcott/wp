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
<div class="container-xl">
              <div id="skillCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                                <?php
                                $query = "SELECT COUNT(*) as total FROM skills";
                                $result = mysqli_query($conn, $query);
                                $row =mysqli_fetch_assoc($result);
                                $count = $row["total"];
                                $countEnd = $count - 4;
                                $first = true;
                                 for ($count; $count > $countEnd; $count--) {
                                    $query = "SELECT * FROM skills WHERE skillID = $count";
                                    $result = mysqli_query($conn, $query);
                                    $row =mysqli_fetch_assoc($result);
                                    $query = "SELECT * FROM skills WHERE skillID = $count";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    if ($first) {
                                    echo '<div class="carousel-item active">';
                                    $first = false;
                                    } else {
                                      echo '<div class="carousel-item">';
                                    }
                                    echo '<img src="assets/images/skills/';
                                    echo $row["skillImage"];
                                    echo '" class="img-fluid" alt="guitar">';
                                    echo '<div class="carousel-caption bg-dark bg-opacity-50">
                                          <p class="ysabeau-sc-Carousel">Beginner Guitar Lessons</p>
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
                                </div>
                                </div>
                                </main>

<?php include 'footer.inc'; ?>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script async src="assets/js/scripts.js"></script>
</body>

</html>