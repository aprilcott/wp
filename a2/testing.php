<!DOCTYPE html>
<html>
<html>
    <?php $pageTitle = "Home";
    include 'header.inc';
    include("db_connect.inc"); ?>
<body>
<?php include 'nav.inc'; ?>
    <main class="section-container">
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
                                    echo "Rate: {$row['skillRate']}";
                                    echo "</div>";
                                    echo "<button class='mt-2 btn btn-secondary rounded-pill ysabeau-sc-orange-button'>";
                                    echo "View Details";
                                    echo "</button>";
                                    echo "</div>";
                                 }
                            ?>
                </div>
<?php include 'footer.inc'; ?>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script async src="assets/js/scripts.js"></script>
</body>

</html>