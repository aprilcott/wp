    <?php
    include("includes/db_connect.inc");
    $userID = $_GET['id'];
     $queryUser = "SELECT * FROM users WHERE user_id = $userID";
     $resultUser = mysqli_query($conn, $queryUser); 
     $rowUser = mysqli_fetch_assoc($resultUser);
     $pageTitle = $rowUser['username'];
    include 'includes/header.inc';
    ?>
<body>
<?php include 'includes/nav.inc'; ?>
    <main class="section-container">
        <?php
        $userID = $_GET['id'];
        $querySkill = "SELECT * FROM skills WHERE user_id = $userID";
        $queryUser = "SELECT * FROM users WHERE user_id = $userID";
        $resultUser = mysqli_query($conn, $queryUser); 
        $resultSkill = mysqli_query($conn, $querySkill);
        $rowUser = mysqli_fetch_assoc($resultUser);
        $skills = mysqli_fetch_all($resultSkill, MYSQLI_ASSOC);
        $pageTitle = $rowUser['username'];
        // echo(var_dump($rowUser));
        // echo(var_dump($rowSkill));
        // echo var_dump($skills);
echo '<div class="container-xl">';
        echo '<div class="col">';
            echo '<h1 class="baskervville-headings"> Instructor: ';
            echo $rowUser['username'];
            echo '</h1>';
            echo '<h1 class="ysabeau-sc-detail-sub-heading-details">';
            echo $rowUser['bio'];
            echo '</h1>';
            echo '<h1 class="baskervville-headings">';
            echo 'Skills offered';
            echo '</h1>';
            echo '<div class="row gx-3">';
            foreach($skills as $skillKey => $skillValue) {
                echo '<div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">';
                echo '<img class="img-fluid gallery-image rounded-top" src="assets/images/skills/';
                echo "{$skillValue["image_path"]}\"";
                echo  'alt="'; echo $skillValue['title']; echo '">';
                echo '<p class="text-start  mt-3 ysabeau-sc-detail-heading">'; echo $skillValue['title']; echo '</p>';
                echo '<p class="text-start  mt-3 ysabeau-sc-detail-sub-heading-details">'; echo 'Rate:'; echo $skillValue['rate_per_hr']; echo '</p>';
                echo "<a class='mt-2 btn btn-secondary rounded-pill ysabeau-sc-orange-button' href=\"details.php?id='". urlencode($skillValue['skill_id']) . "'\">View </a>";
                echo '</div>';
            }
            echo '</div>';
        echo '</div>';
    echo '</div>';
echo '</div>';
?>
        </main>
<?php include 'includes/footer.inc'; ?>
  
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