<html>
  <head>
 <title> lekse uke 34 </title> 
 
  </head>
  <body bgcolor="DarkGoldenRod ">
    <p>
         
    <h1>Ukeoppgave for uke 34</h1>   
    <h2>Grunnleggende programmering</h2> 
    <h4>Andreas Jacobsen</h4> 
      
        <?php
    
      $age = 13 + 10;
      $ageF = 23 + 7;
      $nameF = 'Andreas';
      $nameL = 'Jacobsen'; 
      $adress = 'Anna Sethnes Gate 4B';
      $zipCode = '4673';
      $sex = 'mann';
      $yearN = 2020 - 2014; 
      $year = 2014 +  $yearN;
      $tall = 1; 
      $tallL=array("$tall" + 1, "$tall" + 2, "$tall" + 3, "$tall" + 4, "$tall" + 5, "$tall" + 6, "$tall" + 7, "$tall" + 8, "$tall" + 9);
     
      
      echo "$nameF $nameL er $age gammel, han bor i $adress, $zipCode Oslo.";
      echo "<p> Det var en gang en $sex som het $nameF og er $age år gammel. Han vil være $ageF i $year</p>  ";
      echo " tall fra 1 - 10: $tall " .$tallL[0]." " .$tallL[1]. " " .$tallL[2]. " " .$tallL[3]. " " .$tallL[4]. " " .$tallL[5]. " " .$tallL[6]. " " .$tallL[7]. " " .$tallL[8]. "." ;

      $navn = 'Andreas'; #jeg kan endre navnet til ett tall og da PLUSSES de sammen, ellers ignoreres navn.
      $alder = '23';        
      echo "<br/>"; #BR vil gi ett mellomromm. 
      echo  $navn + $alder ; 
              ?>
    </p>
  </body>
</html>