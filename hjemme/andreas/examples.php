<html> 
    <head><title> Eksempler 22.08.14</title></head>
    <body bgcolor='grey'>
        <?php 
        $username = "Fred Smith";
        echo '<h4> Variabler.</h4>';
        echo $username;
        echo "<br>";
        $current_user = $username;
        echo $current_user;
        $count = 17.5;
        echo '<h4> Desimaltall. </h4>';
        #echo '<br>';
        echo $count;
        $team = array('Bill','Mary','Mike','Chris','Anne');
        #echo '<br>'; 
        echo '<h4> Enkel array. </h4>';
        echo $team[3]; //viser navnet Chris
        #echo '<p>';
        $oxo = array(array('x',' ', 'o'),
                     array('o', 'o', 'x'),
                     array('x', 'o', ' ')); 
        echo "<h4>3D array.</h4>";
        echo $oxo[1][2]; /*[1] referer til rad nummer 2 (starter på 0)
                         [2] referer til objekt nummer 3 på rad 2*/
        echo '<br>'; 
        echo '<h4> Proof that PHP can run simple mathemematical opperations. </h4>';
        echo 10 - 10 + 2; //PHP kan gjøre mattematiske opperasjoner enkelt
        
       $count1 = 5;
       $count1 += 1; //+= endrer verdien satt til VENSTRE for $count 1 
                     //istedenfor å ta over hele variabelen 
       echo '<h4> Operators, change the value of variables without PHP ignoring them due to a new like variable.</h4>';
       echo $count1; // $count1 = $count1 +1; hadde også fungert
       $hour = 13;         
       #if ($hour >  12 && $hour <14) dolunch();
       $text = 'My spelling\'s atrsoshu'; /*for å ha tegn som ' i tekst må du  
       ha \ forran slik at PHP tolker det bokstavelig istedenfor som kode */
       echo "<h4> Remember to use \ inside strings/variables to be able to use '' or PHP will interprete it as code.</h4>";                                 
       echo $text; 
       $info = 'Preface variables with a $ like this: $variable'; /* kan skrive
       $ fordi jeg bruker enkeltfnatter, med dobeltfnatter ville det blitt lest som en variabel*/ 
       echo '<h4> Use \' text \' when you want echo to print everything in your text, not interprete as code. Use " " when you want it to inteprete text and code.</h4>'; // \' forran ' sier at ' skal printes, ikke slutte på fnatt.
       echo $info; 
       
       $msg = 5;
       
       echo "<h4> String concetenations, binds strings of text together, even with a variabler in between.</h4>";
       echo "You have " . $msg . " messages."; // punktummene binder strengene sammen
       //vi kan også feste variabler sammen med punktum
       echo '<br>';
       echo "This week $count1 people have viewed your profile"; //i " " kan $variabler brukes
       $newsflash='HIoA overbooked the IT-classes this year too';
       $bullettin='This just in: ';
       $bullettin .=$newsflash; //setter sammen bullettin og newsflash så de printes sammen
                                // istedenfor at $bullettin hadde blitt til newsflash, slik som hadde skjedd uten .
       echo '<h4> String concetenations also work on variables alone.</h4>';
       echo $bullettin;
       //triks for å forenkle å bruke '' eller "" i php
       $text1 = "She write upon it, \"Return to sender\"."; // noter \ forran hver " for å si at PHP skal pritne det som tekst
       echo '<h4> We can enclose text in \\ \\ to make it easier to use "" and \'\'. This is called escape characters.</h4>'; 
       echo $text1;
       
       $heading = "Date\tName\tPayment"; //\t setter inn mellomrom. 
       echo '<br>';
       echo $heading;
       
       $author = "Scott Adams ";
       echo '<h4> We can have as many lines as we want between " " when writing an echo, but PHP will interpete it as one line.</h4>';  
       echo "Debugging is twice as hard as writing the code in the first place.<br> 
       Therefore, if you write the code as cleverly as possible, you are, <br> 
       by definition, not smart enough to debug it. <br>
               - $author";   
        
       echo '<p> </p>';
       
       
       
                 
        
        
        
        
        
/*
Navn: examples.php
Forfatter: Andreas Jacobsen
Kilde: Learning PHP, MySQL, CSS and HTML5; Robin Nixon
Sidetall: 50 - 60  
 */ 
        
        
?> 
 <a href="http://pastebin.com/eUx4hxHv">Kildekode </a>   
</body>
</html> 