
<!DOCTYPE html>

<html>

  <head>


    <meta charset="utf-8">
    <title>MAD LIBS</title>

    <link rel="stylesheet" href="style.css">

  </head>

  <body>



    <main>

    <h1>MAD LIBS</h1>

    <div class="container">
      <nav>
        <a class="a1" href="index.php">Er heerst paniek...</a> <a class="a2" href="index3.php">Onkunde</a>
       </nav>

       <p class="p1">Er heerst paniek in het koninkrijk <?php echo $_POST["land"]; ?>, koning <?php echo $_POST["docent"]; ?>
       is ten einde raad en als koning <?php echo $_POST["docent"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"]; ?>.</p>

       <p class="p1">"<?php echo $_POST["persoon"]; ?>! Het is een ramp! Het is een schande!"</p>

       <p class="p1">"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

       <p class="p1">"Mijn <?php echo $_POST["dier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["kind"]; ?> voor hem gekocht!"</p>

       <p class="p1">"Majesteit, uw <?php echo $_POST["dier"]; ?> komt vast vanzelf weer terug?"</p>

       <p class="p1">"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezig"]; ?> leren?"</p>

       <p class="p1">"Maar Sire, daar kunt u toch uw <?php echo $_POST["kopen"]; ?> voor gebruiken."</p>

       <p class="p1">"<?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

       <p class="p1">"<?php echo $_POST["verveel"]; ?>, Sire."</p>

    </div>

  </main>



  </body>

</html>
