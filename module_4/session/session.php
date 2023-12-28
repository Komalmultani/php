<?php  
session : session is a super global variable i.e stored temporary information one page to another page.
        session is work on server side 
        session is used to some function 
        
        a) how to start session 
                 session_start();
                 
        b) how to stored data in session 
        
                 $_SESSION["id"];
                 $_SESSION["email"];
                 $_SESSION["name"];
                 
                 
        c) how to unset data from session 
               unset() : unset is a function i.e used to remove session data from file.
               
               unset($_SESSION["id"]);
               unset($_SESSION["email"]);
               unset($_SESSION["name"]);


         d) how to destroy  session 
            session_destroy();    



?>