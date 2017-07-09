<?php

class UGeneral{
    
    public function sanitizeString($string) {
	if (get_magic_quotes_gpc()){
            $string = stripslashes($string);
        }
	$string = htmlentities($string);
	$string = strip_tags($string);
	return $string;
    }
    
}

