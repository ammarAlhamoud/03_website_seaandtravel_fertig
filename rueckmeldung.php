<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Sea and Travel | Bestätigung</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <header>
            <h1>Vielen Dank für Ihr Interesse</h1>
        </header>
        <main>
            <article class="container">
                <div class="item">
                    <h2>Ihre Anfrage an uns enthält folgende Daten:</h2>
                    <?php
                    $vorname = $_POST['vorname'];
                    print "<p>Vorname: $vorname <br>
                            Nachname: " . $_POST['nachname'] .
                        " <br>E-Mail-Adresse: " . $_POST['email'].
                        "<br>Telefon: " . $_POST['phone'] . 
                        "<br>Ihre Nachricht: " . $_POST['comments'] . "<br>";
                    
                    echo "<h3>Es geht also nach  <br> " . "<span class='rot'> " . $_POST["rziel"] . "</span>";
                    echo " in ein " . $_POST["htyp"] . "-Sterne-Hotel<br>";
                    if ($_POST["rziel"] == "schottland")
                    {
                        if ($_POST["htyp"] == "Drei") $ang = 7;
                        else                          $ang = 1;
                    }
                    else if ($_POST["rziel"] == "norwegen")
                    {
                        if ($_POST["htyp"] == "Drei") $ang = 12;
                        else                          $ang = 2;
                    }
                    else
                    {
                        if ($_POST["htyp"] == "Drei") $ang = 5;
                        else                          $ang = 4;
                    }
                    echo "<br>Dazu haben wir <br> $ang Angebote </h3>";
                       
                    echo " <h3>Sie wünschen folgende Verpflegung: " . $_POST["verpflegung"]. "</h3>";
                    
                 
                    
                    
                    ?>
                    <br> 
                    <p style="text-align:center"><a class="button" href="index.html" >Zu den Angeboten</a></p>
                    
                    <br>
                </div>
                <div class="item">
                    <h2>Haben Sie weitere Fragen? </h2>
                    <p>Nehmen Sie gerne telefonisch Kontakt auf unter 07125-3265-0.</p>
                </div>
            </article>

        </main>
        <footer>
            <p><strong>Sea  &amp; Travel</strong> &#124; Telefon: 07125-3265-0 &#124; 

            </p>
        </footer>
    </body>
</html>