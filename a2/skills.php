<!DOCTYPE html>
<html>
<html>
         <?php $pageTitle = "All Skill";
    include 'header.inc';
    include("db_connect.inc"); ?>
<body>
    <?php include 'nav.inc'; ?>

        <main class="section-container">
            <div class="container-xl">
                <div class="row">
                <div class="col">
                    <h1 class="baskervville-headings">
                        All Skills
                    </h1>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 col-lg-6">
                    <img class="img-fluid" src="assets/images/skills_banner.png" alt="skills-banner">
                </div>
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
                                $query = "SELECT * FROM skills WHERE skill_id = $x";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                if ($row) {
                                    echo "<tr>";
                                    echo "<td><a href=\"testing.php\">{$row['title']}</a></td>";
                                    echo "<td>{$row['category']}</td>";
                                    echo "<td>{$row['level']}</td>";
                                    echo "<td>{$row['rate_per_hr']}</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </main>
<?php include 'footer.inc'; ?>
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script async src="assets/js/scripts.js"></script>
</body>

</html>