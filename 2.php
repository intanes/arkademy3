<?php
     function username($username) 
     {
          return preg_match('/^[0-9]{1}[a-z]{3,6}[0-9]{1}$/',$username) ;
     }
     if (username("9bngy9")) {
		echo "Username anda diterima" ;
     } else {
         echo "Username anda ditolak" ;
     }

     echo "<br>";
     
     function password($password)
     {
     	return preg_match('/^[0-9a-zA-Z]{6,10}[!,@,#,$,%,^,&,*,?,_,~,-]{1}$/i', $password);
     }

     if (password("9bngry*")) {
		echo "password anda diterima" ;
     } else {
         echo "password anda ditolak" ;
     }
     



?>