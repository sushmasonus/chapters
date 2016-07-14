<?php
include 'header.php';
$con = new Connection('new');
$sql = "select * from chapters";
$stmt = $con->db->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();

?>
<div class="well">
    <a class="btn btn-primary" href="admin/add_chapter.php"><i class="fa fa-plus"></i> Add New</a>
<table  class="table table-striped">

<tr>
    <th>Name</th>
    <th>Content</th>
    <th>Options</th>
</tr>
<?php
foreach ($rows as $row) {
	?>
<tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo substr(strip_tags($row['content']), 0, 20);?></td>
        <td>

            <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'];?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete <?php echo $row['name'];?>?')"><i class="fa fa-trash-o"></i> Delete</a>

        </td>
    </tr>
<?php
}
?>
    </table>
