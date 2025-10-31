        <?php
        $_SESSION["Previous-page"] = $_SESSION["returnPage"];
        $_SESSION["returnPage"] = basename($_SERVER['PHP_SELF']);
        if (array_key_exists('flash_error_id', $_SESSION)) {
            if ($_SESSION['flash_error_id'] == 4) {
        echo '<div class="text-center alert alert-danger mt-2">' . "You must be logged in to access that page" .'</div>';
            }
        unset($_SESSION['flash_error_id']);
        }
        ?>
<div class="footerGrad mt-5 py-5 container-fluid">
    <footer class="card-footer">
        <hr class="footerHR rounded-pill"/>
        <div class="text-start ms-5">
        <?php
        $query = "SELECT COUNT(*) as total FROM users";
        $result = mysqli_query($conn, $query);
        $row =mysqli_fetch_assoc($result);
        $count = $row["total"];
        for ($i = 1; $i <= $count; $i++) {
            $query = "SELECT * FROM users WHERE user_id = $i";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo"<a class='ysabeau-sc no-underline p-2' href='instructor.php?id=" . '"' . $row['user_id'] . '"' . "'>" . $row['username'] . "</a>";
        }
        ?>
        </div>
        <div class="ysabeau-sc-Footer text-end">
        <p class="mb-0">&copy; 2025 April Alice Benson <span class="footer-brand">SkillSwap</span></p>
        </div>
    </footer>
</div>