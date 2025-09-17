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
                    <div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/1.png" alt="guitar Beginner">
                        <p class="text-center  mt-3 galleryCaption">Beginner Guitar Lessons</p>
                    </div>
                    <div class="col-md-3 col-sm-6" data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/2.png" alt="guitar Intermediate">
                        <p class="text-center mt-3 galleryCaption">Intermediate FingerStyle</p>
                    </div>
                    <div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/3.png" alt="Baking beginner">
                        <p class="text-center  mt-3 galleryCaption">Artisan Bread Baking</p>
                    </div>
                    <div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/4.png" alt="Baking Advanced">
                        <p class="text-center  mt-3 galleryCaption">French Pastry Making</p>
                    </div>
                </div>
                <div class="row gx-3">
                    <div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/5.png" alt="Art beginner">
                        <p class="text-center  mt-3 galleryCaption">Watercolor Basics</p>
                    </div>
                    <div class="col-md-3 col-sm-6" data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/6.png" alt="Art advanced">
                        <p class="text-center mt-3 galleryCaption">Digital Illustration with Procreate</p>
                    </div>
                    <div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/7.png" alt="Meditation beginner">
                        <p class="text-center mt-3 galleryCaption">Morning Vinyasa Flow</p>
                    </div>
                    <div class="col-md-3 col-sm-6"  data-bs-toggle="modal" data-bs-target="#blank-modal">
                        <img class="img-fluid gallery-image rounded-top" src="assets/images/skills/8.png" alt="SQL beginner">
                        <p class="text-center  mt-3 galleryCaption">Intro to PHP & MySQL</p>
                    </div>
                </div>
            </div>
        </main>
<?php include 'footer.inc'; ?>

<div class="modal fade" id="blank-modal" tabindex="-1"   aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <img id ="modal-img" src="" alt="guitar Beginner" class="img-fluid">
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