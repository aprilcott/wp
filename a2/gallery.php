<!DOCTYPE html>
<html>
    <?php $pageTitle = "Gallery";
    include 'header.inc';
    include("db_connect.inc"); ?>
<body>
    <?php include 'nav.inc'; ?>

        <main class="section-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col">
                        <h1 class="baskervville-headings">
                        Skill Gallery
                        </h1>
                    </div>
                </div>
                <div class="row gx-3">
                                                    <?php
                                $query = "SELECT COUNT(*) as total FROM skills";
                                $result = mysqli_query($conn, $query);
                                $row =mysqli_fetch_assoc($result);
                                $count = $row["total"];
                                 for ($i = 1; $i <= $count; $i++) {
                                    $query = "SELECT * FROM skills WHERE skill_id = $i";
                                    $result = mysqli_query($conn, $query);
                                    $row =mysqli_fetch_assoc($result);
                                    echo '<div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">';
                                    echo '<img class="img-fluid gallery-image rounded-top" src="assets/images/skills/';
                                    echo "{$row["image_path"]}\"";
                                    echo  'alt=";'; echo $row['title']; echo '">';
                                    echo '<p class="text-center  mt-3 galleryCaption">'; echo $row['title']; echo '</p>';
                                    echo '</div>';
                                 }
                            ?>
                </div>
            </div>
        </main>
<?php include 'footer.inc'; ?>

<div class="modal fade" id="blank-modal" tabindex="-1"   aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <img id ="modal-img" src="" alt="" class="img-fluid">
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