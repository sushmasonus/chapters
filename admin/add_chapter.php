<?php
include 'header.php';
?>
<form class="form-horizontal" action="add_chapter_action.php" id="Form" method="post">
<fieldset>

<!-- Form Name -->
<legend>Add Chapters</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" placeholder="enter the name" class="input-large" type="text">

  </div>
</div>
<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="content">Content</label>
  <div class="controls">
    <textarea id="content" name="content"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1"></label>
  <div class="controls">
    <button id="button1" name="button1" class="btn btn-success">submit</button>
    <button id="button2" name="button2" type="reset" class="btn btn-danger">Reset</button>
  </div>
</div>

</fieldset>
</form>
<?php
include 'footer.php';
