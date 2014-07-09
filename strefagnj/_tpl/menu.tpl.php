<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Strefa GNJ</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="logout.php">Wyloguj</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="changepassword.php">Zmień hasło</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publikowanie <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="regulamin.php">Regulamin</a></li>
                <li><a href="article_new.php">Nowy artykuł</a></li>
                <li><a href="article_list.php">Twoje artykuły</a></li>
                <?php if(isset($_SESSION['usertype']) && ($_SESSION['usertype'] == "admin")): ?>
                <li><a href="article_rlist.php">Admin: Zatwierdź artykuły</a></li>
                <li><a href="article_fulllist.php">Admin: Lista artykułów</a></li>
                <?php endif; ?>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

