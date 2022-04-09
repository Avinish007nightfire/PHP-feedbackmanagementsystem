<?php
function create_topmenu($isactive){ ?>
<div class="welcomeUser">Welcome <?= $_SESSION['name']; ?> <span class="logout"><a href="Mlogout.php">Logout</a></span></div>


	<div class="navbar">
		<ul>
            <li class="<?= ($isactive==1)?"active":""; ?>"><a href="MasterHome.php">Home</a></li>
            <li class="<?= ($isactive==2)?"active":""; ?>"><a href="print.php">Feedback Status Report</a></li>
            <li class="<?= ($isactive==3)?"active":""; ?>"><a href="charts.php">Feedback Charts Statistics</a></li>
		</ul>
  </div>

<?php }
?>