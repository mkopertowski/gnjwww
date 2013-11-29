var d = new Date();
var i = d.getSeconds();
i++;
document.write("<a href=\"../galeria/index.php\"><img alt=\"Our photos!\" src=\"../_img/random/");
document.write(i);
document.write(".jpg\" width=124 height=98 name=imageSmall border=\"0\"></a>");