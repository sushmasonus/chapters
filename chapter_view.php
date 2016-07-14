<?php
include 'header.php';
$con = new Connection('new');
$sql = "select * from chapters where chapters.id=?";
$stmt = $con->db->prepare($sql);
$stmt->execute([$_GET['id']]);
$row = $stmt->fetch();

?>
<h1><?php echo $row['name']?></h1>
<p><?php echo $row['content']?></p>
<?php
include 'footer.php';
