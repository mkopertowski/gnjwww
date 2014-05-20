	<div class="navigation">
	
		<ul id="jsddm">
			<li><a href="../index.php">Strona GNJ</a></li>
			<li><a href="logout.php">Wyloguj</a></li>
			<li><a href="#">Profil</a>
				<ul>
					<li><a href="changepassword.php">Zmień hasło</a></li>
				</ul>
			</li>
			<li><a href="#">Publikowanie</a>
				<ul>
					<li><a href="regulamin.php">Regulamin</a></li>
					<li><a href="article_new.php">Nowa publikacja</a></li>
					<li><a href="article_list.php">Twoje publikacje</a></li>
					<?php if(isset($_SESSION['usertype']) && ($_SESSION['usertype'] == "admin")): ?>            
					<li><a href="article_rlist.php">admin: Zatwierdź publikacje</a></li>
					<?php endif; ?>					
				</ul>
			</li>
		</ul>
		<div class="clearer"><span></span></div>
    </div>
