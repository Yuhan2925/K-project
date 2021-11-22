<?php
	function afficherMenu($tabOptionMenu) {
		echo "<div class='container'>";
			echo "<div class='row align-items-center justify-content-between d-flex'>";
				echo "<div id='logo'>";
					echo "<a href='index.html'><img src='images/coffee-cup.svg' alt='' title='' width='40'/></a>";
				echo "</div>";
					echo "<nav id='nav-menu-container'>";
						echo "<ul class='nav-menu'>";
							foreach ($tabOptionMenu as $option) {
								$tab = explode("||", $option);
								echo "<li><a href='".$tab[0]."'>".$tab[1]."</a></li>";
							}
						echo "</ul>";
					echo "</nav>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
?>