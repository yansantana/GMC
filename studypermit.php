<?php

$PageTitle="Global Migration Canada";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }
include_once('header.php');
?>
        <form action="studypermit.php">
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
            </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
        </label>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
<?php
include_once('footer.php');
?>