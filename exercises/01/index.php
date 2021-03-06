<?php

include_once("../../functions.php");

session_start();
if ($_SESSION['login'] == true ) {
} else {
  header("Location: ../../login.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instructions – 01.Basics</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/exercise.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="../../js/triggertc.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 exercise-container">
          <h1 class="exercise-title">1. Lecke - HTML5 / CSS alapok <a href="result/result.html"><i class="fa fa-link solution"></i></a></h1>
          <h2>Alapok
            <?php echo $_SESSION['username'];?>
          </h1>
          <div class="bg-warning exercise-warning">
            <p>
              Az ellenőrző script a következő fájlokat fogja vizsgálni: <code>exercise_01.html, exercise1.css</code>
            </p>
          </div>
          <div class="exercise-details">
            <p>
              Valósítsd meg  következő HTML struktúrát:
            </p>
            <img class="img-responsive" src="img/01_basics_structure.png" />
            <p>
              <ul>
                <li>
                  Az oldal nyelve legyen magyar!
                </li>
                <li>
                  Az oldal <code>HTML5</code>-ben legyen deklarálva.
                </li>
                <li>
                  A <code>title</code> tag tartalmazza a neptun kódod.
                </li>
                <li>
                  A <code>h1</code> tagot <code>css</code> segítségével formázd pirosra. Használd a <code>red</code> osztályt.
                </li>
                <li>
                  Az első <code>p</code> tag kpajon <code>welcome</code> osztályt, és legyen aláhúzva.
                </li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 exercise-container">
          <h2>HTML 5 Gyakorlófeladatok 1.</h1>
          <div class="bg-warning exercise-warning">
            <p>
              Ne felejts el <code>HTML5</code>-ben deklarálni az oldalt, és létrehozni a <i>csontvázat</i>!
            </p>
            <p>
              Az ellenőrző script a következő fájlokat fogja vizsgálni: <code>exercise_02.html</code>
            </p>
          </div>
            <p>
              A következőket kell megvalósítanod:
            </p>
            <ul>
              <li>
                Hozz létre egy <code>p</code> taget, ami egy <i>www.elte.hu</i>-ra mutató hiperhivatkozást tartalmazzon, és új ablakban nyíljon meg, és kapja meg az <code>elte-link</code> egyéni azonosítót!
              </li>
              <li>
                Illessz be egy képet az oldalra, ami rendelkezzen az <code>elsokep</code> egyeni azonosítóval, és a következő attribútumok mindegyikével: <code>alt, title, width, height</code> és használd a kép megjelítésre szolgáló <code>html5</code> tageket is. Figyelj,
                hogy az oldal valid maradjon <code>HTML5</code> szerint.
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 exercise-container">
            <h2>HTML 5 Gyakorlófeladatok 2.</h1>
            <div class="bg-warning exercise-warning">
              <p>
                Ne felejts el <code>HTML5</code>-ben deklarálni az oldalt, és létrehozni a <i>csontvázat</i>!
              </p>
              <p>
                Az ellenőrző script a következő fájlokat fogja vizsgálni: <code>exercise_03.html, exercise_3.css</code>
              </p>
            </div>
              <p>
                A következőket kell megvalósítanod:
              </p>
              <ul>
                <li>
                  Hozz létre egy <code>p</code> bekezdést, ami kapja meg a <code>balraigazit</code> osztályt. Az <code>exercise_3.css</code> fájlban pedig definiáld ezt az osztályt úgy, hogy a szöveg balra igazítva jelenjen meg.
                </li>
                <li>
                  Hozz létre egy <code>p</code> bekezdést, ami kapja meg a <code>jobbraigazit</code> osztályt. Az <code>exercise_3.css</code> fájlban pedig definiáld ezt az osztályt úgy, hogy a szöveg jobbra igazítva jelenjen meg.
                </li>
                <li>
                  Hozz létre egy <code>p</code> bekezdést, ami kapja meg a <code>kozepreigazit</code> osztályt. Az <code>exercise_3.css</code> fájlban pedig definiáld ezt az osztályt úgy, hogy a szöveg középre igazítva jelenjen meg.
                </li>
                <li>
                  Hozz létre egy <code>p</code> bekezdést, ami kapja meg a <code>sorkizart</code> osztályt. Az <code>exercise_3.css</code> fájlban pedig definiáld ezt az osztályt úgy, hogy a szöveg sorkizártra igazítva jelenjen meg.
                </li>
              </ul>
              <div class="alert alert-info" role="alert">
                Vakszöveg generálsához használhatod a következő oldalak valamelyikét:
                <ul>
                  <li>
                    <a class="exercise-links" target="_blank" href="http://hu.lipsum.com">hu.lipsum.com</a>
                  </li>
                  <li>
                    <a class="exercise-links" target="_blank" href="http://www.lorumipse.hu">lorumipse.hu</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 exercise-container">
              <h2>HTML 5 Gyakorlófeladatok 3. </h1>
                <div class="bg-warning exercise-warning">
                  <p>
                    Ne felejts el <code>HTML5</code>-ben deklarálni az oldalt, és létrehozni a <i>csontvázat</i>!
                  </p>
                  <p>
                    Az ellenőrző script a következő fájlokat fogja vizsgálni: <code>exercise_04.html, exercise_4.css</code>
                  </p>
                </div>
                <p>
                  A következőket kell megvalósítanod:
                </p>
                <ul>
                  <li>
                    Hozz létre egy <code>p</code> taget, ami kapja meg a <code>custom-text</code> css osztályt. Az <code>exercise_4.css</code> fájlban definiáld az osztyált, és kapjon a <code>font-family</code> definiált betűtpust, és általánis betűkészletet is.
                  </li>
                  <li>
                    Hozz létre egy <code>p</code> taget, ami kapja meg a <code>vers</code> css osztályt. Az <code>exercis_4.css</code> fájlban definiáld az osztályt úgy, hogy kapjon egy egyedi fontot, és írd ki ezzel a fonttal a lentebb található verset.
                  </li>
                </ul>
                <div class="alert alert-info" role="alert">
                  Egyedi fontot a <a class="exercise-links" target="_blank" href="http://www.google.com/fonts">google.com/fonts</a> oldalon találsz.
                </div>
                <div class="alert alert-info" role="alert">
                  <p>
                    A vers:
                  </p>
                  <p class="italic">
                    Kis Lajos: Röviden a válaszokról

                    S ahogy felnéztem rá kérdőn,
                    megcsillant a Hold.
                    Csillogása a te szemed
                    csillogása volt.
                  </p>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 exercise-container">
              <h2>HTML 5 Gyakorlófeladatok 5. </h1>
                <div class="bg-warning exercise-warning">
                  <p>
                    Ne felejts el <code>HTML5</code>-ben deklarálni az oldalt, és létrehozni a <i>csontvázat</i>!
                  </p>
                  <p>
                    Az ellenőrző script a következő fájlokat fogja vizsgálni: <code>exercise_05.html, exercise_5.css</code>
                  </p>
                </div>
                <p>
                  A következőket kell megvalósítanod:
                </p>
                <ul>
                  <li>
                    Hozz létre egy <code>p</code> taget, ami kapja meg a <code>changed-fontsize-1</code> css osztályt. Az <code>exercise_5.css</code> fájlban defniált az osztályt úgy, hogy a megjelnített szöveg másfélszerese legyen az alapbeállításnál.
                  </li>
                </ul>
                <ul>
                  <li>
                    Hozz létre egy <code>p</code> taget, ami kapja meg a <code>changed-fontsize-2</code> css osztályt. Az <code>exercise_5.css</code> fájlban defniált az osztályt úgy, hogy a megjelnített szöveg fele legyen az alapbeállításnál.
                  </li>
                </ul>
                <ul>
                  <li>
                    Hozz létre egy <code>p</code> taget, ami kapja meg a <code>changed-fontsize-3</code> css osztályt. Az <code>exercise_5.css</code> fájlban defniált az osztályt úgy, hogy a megjelnített szöveg pontosan 12pt nagysású legyen.
                  </li>
                  <li>
                    Hozz létre egy <code>p</code> taget, ami kapja meg a <code>changed-fontsize-4</code> css osztályt. Az <code>exercise_5.css</code> fájlban defniált az osztályt úgy, hogy a megjelnített szöveg pontosan 12px nagysűgú legyen.
                  </li>
                  <li>
                    A <code>changed-fontsize-N</code> CSS osztályok kapják meg sorban a következő CSS attribútumoka is: dőlt, vastag, kispatilális, ritkított betűköz.
                  </li>
                </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 exercise-container">
              <h2>HTML 5 Gyakorlófeladatok 5. </h1>
                <div class="bg-warning exercise-warning">
                  <p>
                    Ne felejts el <code>HTML5</code>-ben deklarálni az oldalt, és létrehozni a <i>csontvázat</i>!
                  </p>
                  <p>
                    Az ellenőrző script a következő fájlokat fogja vizsgálni: <code>exercise_06.html, exercise_6.css</code>
                  </p>
                </div>
                <p>
                  A következőket kell megvalósítanod:
                </p>
                <ul>
                  <li>
                    Hozz létre egy <code>div</code> taget, ami kapja meg a <code>continer</code> css osztályt.
                  </li>
                  <li>
                    A <code>container</code> divben definiálj egy <code>p</code> taget, ami kapja meg <code>text</code> css osztályt.
                  </li>
                  <li>
                    Az <code>exercise_6.css</code> fájlban definiáld ezt a két osztályt.
                    <ul>
                      <li>
                        A <code>container</code> osztály kapjon világos szürke hátteret, és maximalizáld a szélességét <code>900</code> pixelben.
                      </li>
                    </ul>
                  </li>
                  <li>
                    Ismételd meg az előző két lépést. A két <code>container</code> elem közé rakj be egy elválasztó vonalat.
                  </li>
                </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 exercise-container">
              <h2>HTML 5 Gyakorlófeladatok 5. </h1>
                <div class="bg-warning exercise-warning">
                  <p>
                    Ne felejts el <code>HTML5</code>-ben deklarálni az oldalt, és létrehozni a <i>csontvázat</i>!
                  </p>
                  <p>
                    Az ellenőrző script a következő fájlokat fogja vizsgálni: <code>exercise_06.html, exercise_6.css</code>
                  </p>
                </div>
                <p>
                  A következőket kell megvalósítanod:
                </p>
                <ul>
                  <li>
                    Készítt egy felsorolást listát, ami tartalmazzon legalább 3 listaelemet. A lista kapjon <code>lista</code> css osztályt.
                  </li>
                  <li>
                    Készíts egy számozott listát, ami tartalmazzon legalább 3 listaelemet. A lista kapjon <code>szamozottlista</code> osztályt.
                  </li>
                </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 exercise-container">
              <div class="col-lg-8">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">
                    <i class="fa fa-git"></i>
                  </span>
                  <input id="gitpath" type="text" class="form-control" placeholder="gitrepo url" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="col-lg-4">
                <button id="grademe" type="button" class="btn btn-success" aria-label="Left Align">
                  Grade me
                </button>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div id="buildinprogress" class="alert alert-warning alert-dismissible hidden" role="alert">
                      <p id="loading" class=""></p>
                      <p id="buildconsoletext"></p>
                    </div>
                </div>
              </div>
              <p class="next-exercise">
                <a href="../02_html5_2/index.html">Következő feladatsor <i class="fa fa-angle-right"></i></a>
              </p>
            </div>
          </div>


    </div>
  </body>
</html>
