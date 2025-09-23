<!DOCTYPE html>
<html>
<html>
    <?php $pageTitle = "Home";
    include 'header.inc';
    include("db_connect.inc"); ?>
<body>
<?php include 'nav.inc'; ?>
    <main class="section-container">
        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM skills WHERE skill_id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result); 
echo '<div class="container-xl">';
    echo '<div class="row gy-3">';
        echo '<div class="col">';
            echo '<h1 class="baskervville-headings">';
            echo $row['title'];
            echo '</h1>';
            echo '<div class="row">';
                echo '<div class="col"  data-bs-toggle="modal" data-bs-target="#blank-modal">';
                    echo '<img class="img-fluid gallery-image img-thumbnail w-25" src="assets/images/skills/';
                    echo $row['image_path'];
                    echo '"/>';
                echo '</div>';
            echo '<div class="row">';
                echo '<div class="col">';
                    echo '<p class="ysabeau-sc-detail-sub-heading-details">';
                    echo $row['description'];
                    echo '</p>';
                echo '</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<div class="col">';
                    echo '<p>';
                        echo '<span class="ysabeau-sc-detail-heading">Category:</span> ';
                        echo '<span class="ysabeau-sc-detail-sub-heading-details">';
                        echo $row['category'];
                        echo ':</span> ';
                    echo '</p>';
                echo '</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<div class="col">';
                    echo '<p>';
                        echo '<span class="ysabeau-sc-detail-heading">Level:</span> ';
                        echo '<span class="ysabeau-sc-detail-sub-heading-details">';
                        echo $row['level'];
                        echo '</span>';
                    echo '</p>';
                echo '</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<div class="col">';
                    echo '<p>';
                        echo '<span class="ysabeau-sc-detail-heading">Rate:</span> ';
                        echo '<span class="ysabeau-sc-detail-sub-heading-details">';
                        echo '$';
                        echo $row['rate_per_hr'];
                        echo '</span>';
                    echo '</p>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
echo '</div>';
?>
                </p>
            </div>
            </div>
            </div>
</div>
</div>
        </main>
<?php include 'footer.inc'; ?>
  
<div class="modal fade" id="blank-modal" tabindex="-1"   aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <img id ="modal-img" src="assets/images/skills/" alt="" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> 
    </div>
  </div>
</div>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script  async src="assets/js/scripts.js"></script>
</body>

</html>