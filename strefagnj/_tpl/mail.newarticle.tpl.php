<html lang="pl">
<head>
<meta http-equiv=content-type content="text/html; charset=UTF-8">
</head>
<body>
Tytuł:<?php echo $this->title; ?><br>
Autor:<?php echo $this->author; ?><br>

<?php if(isset($this->text)): ?> 

Wiadomość:<?php echo $this->text; ?><br>

<?php endif; ?>

</body>
</html>