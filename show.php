<?php
$retreat = ($page - 1) * $notesOnPage;
$query = "SELECT * FROM `guest` WHERE id > 0 ORDER BY id DESC LIMIT $retreat, $notesOnPage";
$result = mysqli_query($link, $query) or die (mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
foreach ($data as $elem) { ?>
    <div class="note">
        <p>
            <span class="date"><?php echo $elem['date']?></span>
            <span class="name"><?php echo $elem['name']?></span>
        </p>
        <p><?php echo $elem['text']?></p>
    </div>
<?php } ?>
