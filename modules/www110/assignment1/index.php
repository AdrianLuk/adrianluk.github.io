<?php
$title = 'Creature Generator';
require 'includes/header.php'; ?>

<p class="lead text-center">Step right up, step right up! Learn your creature-name in 3 short steps!</p>

<h4 class="text-center" style="font-style: italic; padding: 15px">Step One: Information Gathering</h4>

<form method="post" action="step_two.php" id="myform">

<div class="form-group mx-auto text-center">
<label for="name">
	<div class="input-group">
	  <span class="input-group-addon">Name:</span>	
	<input type="text" name="name" id="name" class="form-control mx-auto"></label>
	</div>
</div>

<fieldset>
	<legend class="text-center" style="font-style: italic">Choose your creature type and see a preview of your choice:</legend>
	<div class="row text-center mx-auto" style="display: flex; justify-content: center; align-items: center">
	<div class="form-check p-2 m-3 text-center">
		<label class="form-check-label p-2" for="alien" style="font-family: 'Averia Libre', cursive; letter-spacing: 2px; font-weight: bolder; font-size: 2.3rem ">
		<input type="radio" name="creature_type" class="form-check-input" id="alien"  value="alien"> Alien</label>
	</div>
	<div class="form-check p-2 m-3 text-center">
		<label class="form-check-label p-2" for="robot"  style="font-family: 'Press Start 2P', cursive ">
		<input type="radio" name="creature_type" class="form-check-input" id="robot" value="robot"> Robot</label>
	</div>
	</div>
</fieldset>

<div>
	<img id="creaturepic" src="" alt="" class=" d-block mx-auto p-3" width="220" height="260" style="border: 1px solid black; padding: 20px; margin: 20px">
</div>

<div class="form-group text-center">
	<input class="btn btn-primary" type="submit" value="Go to step 2 (if you dare)">
</div>

</form>
<p id="error" class="lead text-center text-danger"></p>
<?php require_once 'includes/footer.php'; ?>
