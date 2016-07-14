<?php
include 'header.php';
?>
<form class="form-horizontal" action="register_action.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="firstname">Firstname</label>
  <div class="controls">
    <input id="firstname" name="firstname" placeholder="Enter the first name" class="input-large" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="lastname">Lastname</label>
  <div class="controls">
    <input id="lastname" name="lastname" placeholder="Enter the last name" class="input-large" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="Username">Username</label>
  <div class="controls">
    <input id="Username" name="username" placeholder="enter the Username" class="input-large" required="" type="text">

  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="password">Password </label>
  <div class="controls">
    <input id="password" name="password" placeholder="" class="input-large" required="" type="password">

  </div>
</div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button id="singlebutton" name="singlebutton" class="btn btn-danger">Register</button>
  </div>
</div>

</fieldset>
</form>
<?php
include 'footer.php';
