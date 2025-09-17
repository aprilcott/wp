<!DOCTYPE html>
<html>
<html>
    <?php $pageTitle = "Home";
    include 'header.inc';
    include("db_connect.inc"); ?>
<body>
<?php include 'nav.inc'; ?>
    <main class="section-container">
        <div class="col-md-12 col-lg-6">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Level</th>
                            <th scope="col">Rate ($/HR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($x = 1; $x <= 10; $x++) {
                                $query = "SELECT * FROM skills WHERE skillID = $x";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                if ($row) {
                                    echo "<tr>";
                                    echo "<td><a href=\"testing.php\">{$row['skillTitle']}</a></td>";
                                    echo "<td>{$row['skillCategory']}</td>";
                                    echo "<td>{$row['skillLevel']}</td>";
                                    echo "<td>{$row['skillRate']}</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
    </div>
<?php include 'footer.inc'; ?>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script async src="assets/js/scripts.js"></script>
</body>

</html>