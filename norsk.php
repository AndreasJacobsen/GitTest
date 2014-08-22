<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <H2>Velkommen til http://student.cs.hioa.no/~s236778/norsk.php </H2>   
    <?php
        echo "<p> Hovedstaden i Norge er:";
        echo "<strong>oslo</strong>";
        echo "<br />";
     
#        echo " tekst her "; #Det har ingenting eller lite å si om du bruker ()
#        echo ' tekst her '; #Forskjellen på " og ' er at " kan inneholde $funksjoner
#        echo (" tekst her "); #gir samme output som "tekst her"
#        print (" tekst her "); #alle disse gir det samme outputtet
    
   
        echo "<p> Et lite tall er 7, og et større er 25 ";
        echo "25 pluss 3 er 28 <br />";
        echo "25 minus 3 er 22 <br /></p>";
        ?>
  <script language="php">  echo '<p>lol</p> ' </script>
    
I dag er det den <?php echo date("d.m.Y.");?>
<p>Mvh. Mr. Pimp Player</p>
</p>
<?php
$Alder = 23; 
$inntekt=  13.00; 
$test1 = "Tulledata tihi %&# bla bla ! 123 er lagret her snørrunger"; 
$dagens_dato = date ("d.m.Y");
$fornavn = "Rumpe";
$mellomnavn = "Andreas";
$Fornavn = "Analt Sett";
$Alder = 17; #Når du har to av en $Funksjon brukes den siste funksjonen, den første ignoreres
echo "<p>Alderen til $Fornavn er $Alder <br />"; 
echo "$fornavn $mellomnavn er en dame </p>";
echo "WHAT IS THE TIME BITCH!? " .date( "h:i:sa");

?>
