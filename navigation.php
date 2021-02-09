<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$previous = $page - 1;
$next = $page + 1;
$query = "SELECT COUNT(*) as count FROM `guest`";
$result = mysqli_query($link, $query) or die (mysqli_error($link));
$count = mysqli_fetch_assoc($result)['count'];
$notesOnPage = 3;
$pages = ceil($count / $notesOnPage);
?>
<div>
    <nav>
        <ul class="pagination">
            <?php
                if ($page > 1) {
                    echo "<li><a href=\"?page=$previous\"  aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span></a>
                    </li>";
                } else {
                    echo "<li class=\"disabled\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    </li>";
                }
                for ($i = 1; $i <= $pages; ++$i) {
                    if ($page == $i) {
                        echo "<li class=\"active\"><a href=\"?page=$i\">$i</a></li> ";
                    } else {
                        echo "<li><a href=\"?page=$i\">$i</a></li> ";
                    }
                }
                if ($page < $pages) {
                    echo "<li><a href=\"?page=$next\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span></a>
                    </li>";
                } else {
                    echo "<li class=\"disabled\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    </li>";
                }
            ?>
        </ul>
    </nav>
</div>
