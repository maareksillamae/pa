# Programmeerimise alused
Antud kursus annab ülevaate porgrammeerimise aluste baasteadmiste php keele baasil
##Ajakava
### 20.09.2019
*tarkvara instaleerimine

 * [php storm](https://www.jetbrains.com/phpstorm/) 
 * [git](https://git-scm.com/)
 
  Tarkvara seadistamine
 * Valmista litsents
 * Phpstorm põgiseadistus (line numbers, soft wrap, zoom)
 * git.exe ühendus phpstormiga
 * github.com repo loomine ja ühendamine
 
 ## 25.09.2019
 * git kasutamine käsurealt
 kui repo ei ole inistialiseeritud, siis tuleb see ära teha
````
git init
````
nüüd lisa muudatud fail jälgimissüsteemi (git)
````
git add faili nimi
````
koosta kirjeldus antud muutustle
````
git commit -m " kirjelduse sõne"
````
lükka lokaalsest repost kirjeldus kausreposse (näiteks github.com)
```
git push -uf origin master
```
siin origin on ühenduse nimi ja master on pea haru 

### gir graafiliselt on VCS toolsi all
````
Kasuta git toolsi VCS all
````
````
Commit ja push ning eemdalda lisa check boxid
````
````
kasuta ka crtl+k
````
## 27.09.2019
Radius arvutamine
* <form action="radius_do.php"method="get">
     <label for="radius">Sisesta ringi raadius:</label>
     <input type="number"id="radius"name="raadius">
 </form>
 *
 //radius_ do .php
 
 //defineerime muutuja raadius ja omistame v22rtuse mida susestad kasutajada
 
 $raadius = $_GET['raadius'];
 //v'ljastame saadud v22rtuse ekraanil
 
 echo 'sisetuatud raadius on'.$raadius.'<br>';
 
 //arvutused
 //ringi pindala
 
 $ringiPindala = pi() * $raadius * $raadius;
 
 //ringi ymberm66t
 
 $ringiUmbermoot = pi() * 2*$raadius;
 
 
 //muutujate andmete tyybi ja v22rtuste kontroll
 
 /*var_dump($ringiPindala);
 
 var_dump($ringiUmbermoot);
 */
 //v2ljasta tulemused
 
 $ringiPindalaummardatud = round($ringiPindala, 3);
 
 echo 'ringi pindala on '.$ringiPindalaummardatud.'<br>';
 
 echo 'ringi umbermoot on '.round($ringiUmbermoot, 3).'<br>';
 
 * www.metshein.com
 
 ###https://www.metshein.com/course/php-alused/
 
