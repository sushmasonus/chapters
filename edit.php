<?php
include 'header.php';
$id=0;
if(isset($_GET['id'])){
    $id     =   $_GET['id'];
}
$con       =   new Connection('new');
$chapter  = $con->getchapter($id);
?>
<form class="form-horizontal" action="edit_action.php" id="Form" method="post">
<input type="hidden" value="<?php echo $chapter['id'];?>" name="id">
<fieldset>

<!-- Form Name -->
<legend> Edit Chapter</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" value= "<?php echo $chapter['name'];?>" placeholder="enter the name" class="input-large" type="text">

  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="content">Content</label>
  <div class="controls">
    <textarea id="content" name="content" ><?php echo $chapter['content'];?></textarea>

  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <div class="controls">
    <button id="button1" name="button1" class="btn btn-success">Update</button>
    <button id="button2" name="button2" class="btn btn-danger">Reset</button>
  </div>
</div>

</fieldset>
</form>
<?php
include 'footer.php';
?>
