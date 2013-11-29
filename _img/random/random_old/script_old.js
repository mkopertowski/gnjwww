var d = new Date();
var j = d.getSeconds();
var kto = new Array(30);
i=j;
for(k = 8; k <= 60; k += 8) {
    if (j-k <= 10 && j-k >= 0){
        i=j-k;
    }
}
i++;
i++;
w=500;
h=300;

if (i==2) kto="Micha³ Stajszczyk";
//if (i==3) {kto="Wiktor Bolek"; w=300; h=400}
if (i==4) kto="W³odzimierz Szymanowski";
if (i==5) {kto="Miros³aw Kopertowski"; ; w=300; h=400;}
if (i==6) kto="Micha³ Gignal";
if (i==7) kto="Andrzej Szerszeñ";
if (i==8) kto="Maciej Czykierda";
if (i==9) kto="Rafa³ Górecki i Wiktor Bolek";

document.write("<a href=\"informacje.php\"><img alt=\"");
document.write(kto);
document.write("\" src=\"../_img/random/z");
document.write(i);
document.write(".gif\" width=");
document.write(w); 
document.write("height=");
document.write(h); 
document.write("name=imageSmall border=\"0\"></a>");