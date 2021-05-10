<?php
    namespace App\thuvien_xuly;

    class Strings{

        function rand_string( $length ) 
        {  
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@_";  
            $size = strlen( $chars );  

            $str = "";
            for( $i = 0; $i < $length; $i++ ) 
            {  
                $str .= $chars[ rand( 0, $size - 1 ) ];    
            }  

            return $str;
        }  
    }
?>