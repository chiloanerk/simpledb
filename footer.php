<p class="h6 col-sm-12">Copyright &copy; RK Chiloane 2022 Designed by
    <a href="https://www.github.com/chiloanerk">Chiloane Relebogile </a></p>
<?php
echo "<p class='h6 col-sm-12'>";
if (isset($_SESSION['user_level'])) {
    echo "There is a session</p>";
} else {
    echo "No session</p>";
}
?>