<?php
function create_topmenu($isactive)
{?>
	<div class="welcomeUser">Welcome <?= $_SESSION['name']; ?> <span class="logout"><a href="Clogout.php">Logout</a></span></div>
<?php
}?>
