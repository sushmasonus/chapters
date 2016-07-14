<?php
include 'header.php';
$con       =   new Connection('new');
$sql = "select * from chapters";
$stmt = $con->db->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();

?>
<h1> Chapters</h1>
<ul class="media">
    <?php
        foreach ($rows as $row){
    ?>
    <li>
        <h2>
            <?php echo $row['name'];?>
        </h2>
        <p>
            <?php echo substr(strip_tags($row['content']),0,20);?>...
            <a href="chapter_view.php?id=<?php echo $row['id'];?>">
                Continue Reading...
            </a>
        </p>
    </li>
    <?php
        }
    ?>
</ul>
