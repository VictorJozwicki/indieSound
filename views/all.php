<!--meta title="Tous les morceaux" css="style/all.css"-->
<div id="content">
	<ul>
	<?php
	foreach($projects as $project) {
		echo '<li ><a class="aProject" href="project/'.$project->getId().'">'.$project->getName().'</a>'. '
		' .'<a class="aUser" href="#">'.$project->getOwner()->getLogin().'</a> ' . rand(1,30) . ' version(s) disponible(s)
		<div class= "SocialSong">
					<button id="heart"></button>
					<button id="facebook"></button>
					<button id="twitter"></button>
					<button id="google-plus"></button>
				</div></li>';
		}
	?>
	</ul>
</div>