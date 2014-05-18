<html lang="pl">
<head>
<meta http-equiv=content-type content="text/html; charset=UTF-8">
</head>
<body>
<B>Tytuł:</B> <?php echo $this->title; ?><br>
<B>Autor:</B> <?php echo $this->author; ?><br><br>

<?php if(isset($this->text)): ?> 

<B>Wiadomość:</B><BR><BR><?php echo $this->text; ?><br>

<?php endif; ?>

</body>
</html>