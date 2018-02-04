<html>
<head>
<meta name="viewport" content="width=device-width" />
 <style>
    input.gonder{
    color: #224059;
    background-color: #FFDEAD;
    border-top: 2px #cce3ff solid;
    border-left: 2px #cce3ff solid;
    border-bottom: 2px #31557f solid;
    border-right: 2px #31557f solid;
    font:bold 24px Arial, Helvetica, sans-serif;
    width:70px;
    height:35px;
}
       
        </style>

<title>ev kontrol</title>
</head>
         <body>
         <body background="fig.gif">
         <div align="center">
        <font color="#00e65b"><? echo "; ?>AKILLI EV DONANIMI PROTOTİPİ</font>
         
                 <form method="get" action="index.php">
                
                 <input type="submit" class="gonder" value="7a"  name="7a">
                 <input type="submit" class="gonder" value="7k"  name="7k">&nabla;
                 
                 <input type="submit" class="gonder" value="0a" name="0a">
                 <input type="submit" class="gonder" value="0k" name="0k"></a><br />
                  </a><br />
		 <input type="submit" class="gonder" value="4a" name="4a">
                 <input type="submit" class="gonder" value="4k" name="4k">&nabla;

                 <input type="submit" class="gonder" value="2a" name="2a">
                 <input type="submit" class="gonder" value="2k" name="2k"></a><br />
                  </a><br />

		 <input type="submit" class="gonder" value="5a" name="5a">
                 <input type="submit" class="gonder" value="5k" name="5k">&nabla;
             
                 <input type="submit" class="gonder" value="3a" name="3a">
                 <input type="submit" class="gonder" value="3k" name="3k"></a><br />
                  </a><br />

		 <input type="submit" class="gonder" value="6a" name="6a">
                 <input type="submit" class="gonder" value="6k" name="6k"> &nabla;
        
                 <input type="submit" class="gonder" value="21a" name="21a">
                 <input type="submit" class="gonder" value="21k" name="21k"></a><br />
                  </a><br />

                 <input type="submit" class="gonder" value="26a" name="26a">
                 <input type="submit" class="gonder" value="26k" name="26k">&nabla;

                 <input type="submit" class="gonder" value="22a" name="22a">
                 <input type="submit" class="gonder" value="22k" name="22k"></a><br />
                  </a><br />

                 <input type="submit" class="gonder" value="27a" name="27a">
                 <input type="submit" class="gonder" value="27k" name="27k">&nabla;

                 <input type="submit" class="gonder" value="23a" name="23a">
                 <input type="submit" class="gonder" value="23k" name="23k"></a><br />
                  </a><br />

                 <input type="submit" class="gonder" value="28a" name="28a">
                 <input type="submit" class="gonder" value="28k" name="28k">&nabla;

                 <input type="submit" class="gonder" value="24a" name="24a">
                 <input type="submit" class="gonder" value="24k" name="24k"></a><br />
                  </a><br />
                 <input type="submit" class="gonder" value="29a" name="29a">
                 <input type="submit" class="gonder" value="29k" name="29k">&nabla;

                 <input type="submit" class="gonder" value="25a" name="25a">
                 <input type="submit" class="gonder" value="25k" name="25k"></a><br />
                  </a><br />
                 
                 <font color="#00e65b"><? echo ""; ?>KAPI BTONU</font></a><br />
                 </a><br />
                 <input type="submit" class="gonder" value="1ai"  name="1ai">
                 <input type="submit" class="gonder"value="1k"  name="1k">
                 <input type="submit" class="gonder"value="1aD"  name="1aD"></a><br />
                  </a><br />
              
                <font color="#e6e600"><? echo "; ?>V1</font>





               






         </form>             
                 
         <?php

        
         if(isset($_GET['7a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 7 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 7 1");
                 echo "7 AÇILDI";
         }
         else if(isset($_GET['7k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 7 0");
                 echo "7 KAPANDI";
         }



        
         if(isset($_GET['0a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 0 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 0 1");
                 echo "2 AÇILDI";
         }
         else if(isset($_GET['0k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 0 0");
                 echo "0 KAPANDI";
         }



        
         if(isset($_GET['2a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 2 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 2 1");
                 echo "2 AÇILDI";
         }
         else if(isset($_GET['2k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 2 0");
                 echo "2 KAPANDI";
         }



         
         if(isset($_GET['3a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 3 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 3 1");
                 echo "3 AÇILDI";
         }
         else if(isset($_GET['3k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 3 0");
                 echo "3 KAPANDI";
         }



        
         if(isset($_GET['21a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 21 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 21 1");
                 echo "21 AÇILDI";
         }
         else if(isset($_GET['21k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 21 0");
                 echo "21 KAPANDI";
         }



        
         if(isset($_GET['22a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 22 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 22 1");
                 echo "22 AÇILDI";
         }
         else if(isset($_GET['22k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 22 0");
                 echo "22 KAPANDI";
         }



       
         if(isset($_GET['23a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 23 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 23 1");
                 echo "23 AÇILDI";
         }
         else if(isset($_GET['23k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 23 0");
                 echo "23 KAPANDI";
         }



       
         if(isset($_GET['24a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 24 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 24 1");
                 echo "24 AÇILDI";
         }
         else if(isset($_GET['24k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 24 0");
                 echo "24 KAPANDI";
         }



         
         if(isset($_GET['25a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 25 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 25 1");
                 echo "25 AÇILDI";
         }
         else if(isset($_GET['25k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 25 0");
                 echo "25 KAPANDI";
         }


               
         
              if(isset($_GET['1ai'])){
                exec("gpio mode 1 pwm");
                exec("gpio pwm-ms");
                exec("gpio pwmc 1920");
                exec("gpio pwmr 200"); 
		
                shell_exec("gpio pwm 1 1");
             
                
         }
         else if(isset($_GET['1k'])){
                shell_exec("gpio pwm 1 12");
             
                
         }
             

         else if(isset($_GET['1aD'])){
                shell_exec("gpio pwm 1 23");
                          
         }



        
         if(isset($_GET['4a'])){
                  $setmode12 = shell_exec("/usr/local/bin/gpio mode 4 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 4 1");
                 echo "4 AÇILDI";
         }
         else if(isset($_GET['4k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 4 0");
                 echo "4 KAPANDI";
         }



         
         if(isset($_GET['5a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 5 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 5 1");
                 echo "5 AÇILDI";
         }
         else if(isset($_GET['5k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 5 0");
                 echo "5 KAPANDI";
         }



         
         if(isset($_GET['6a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 6 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 6 1");
                 echo "6 AÇILDI";
         }
         else if(isset($_GET['6k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 6 0");
                 echo "6 KAPANDI";
         }



         
         if(isset($_GET['26a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 2 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 26 1");
                 echo "26 AÇILDI";
         }
         else if(isset($_GET['26k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 26 0");
                 echo "26 KAPANDI";
         }



        
         if(isset($_GET['27a'])){
                  $setmode12 = shell_exec("/usr/local/bin/gpio mode 27 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 27 1");
                 echo "27 AÇILDI";
         }
         else if(isset($_GET['27k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 27 0");
                 echo "27 KAPANDI";
         }



         
         if(isset($_GET['28a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 28 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 28 1");
                 echo "28 AÇILDI";
         }
         else if(isset($_GET['28k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 28 0");
                 echo "28 KAPANDI";
         }



         
         if(isset($_GET['29a'])){
                 $setmode12 = shell_exec("/usr/local/bin/gpio mode 29 out");
                 $gpio_on = shell_exec("/usr/local/bin/gpio write 29 1");
                 echo "29 AÇILDI";
         }
         else if(isset($_GET['29k'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio write 29 0");
                 echo "29 KAPANDI";
         }

         ?>
        </body>
</html>