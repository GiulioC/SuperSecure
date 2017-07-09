<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class UPassword {
    
    // These constants may be changed without breaking existing hashes.
    const PBKDF2_HASH_ALGORITHM = "sha256";
    const PBKDF2_ITERATIONS = 64000;
    const PBKDF2_SALT_BYTES = 32;
    const PBKDF2_OUTPUT_BYTES = 32;

    /*
    * PBKDF2 key derivation function as defined by RSA's PKCS #5: https://www.ietf.org/rfc/rfc2898.txt
    * $algorithm - The hash algorithm to use. Recommended: SHA256
    * $password - The password.
    * $salt - A salt that is unique to the password.
    * $count - Iteration count. Higher is better, but slower. Recommended: At least 1000.
    * $key_length - The length of the derived key in bytes.
    * $raw_output - If true, the key is returned in raw binary format. Hex encoded otherwise.
    * Returns: A $key_length-byte key derived from the password and salt.
    *
    * Test vectors can be found here: https://www.ietf.org/rfc/rfc6070.txt
    *
    * This implementation of PBKDF2 was originally created by https://defuse.ca
    * With improvements by http://www.variations-of-shadow.com
    */
    function pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false)
    {
        if ($algorithm == NULL){
            $algorithm = self::PBKDF2_HASH_ALGORITHM;
        }
        else {
            $algorithm = strtolower($algorithm);
        }
        
        if ($count == NULL){
            $count = self::PBKDF2_ITERATIONS;
        }
        
        if ($key_length == NULL){
            $key_length = self::PBKDF2_OUTPUT_BYTES;
        }
        
        if(!in_array($algorithm, hash_algos(), true)) {
            trigger_error('PBKDF2 ERROR: Invalid hash algorithm.', E_USER_ERROR);
        }
        if($count <= 0 || $key_length <= 0) {
            trigger_error('PBKDF2 ERROR: Invalid parameters.', E_USER_ERROR);
        }

        if (function_exists("hash_pbkdf2")) {
            // The output length is in NIBBLES (4-bits) if $raw_output is false!
            if (!$raw_output) {
                $key_length = $key_length * 2;
            }
            return hash_pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output);
        }

        $hash_length = strlen(hash($algorithm, "", true));
        $block_count = ceil($key_length / $hash_length);

        $output = "";
        for($i = 1; $i <= $block_count; $i++) {
            // $i encoded as 4 bytes, big endian.
            $last = $salt . pack("N", $i);
            // first iteration
            $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
            // perform the other $count - 1 iterations
            for ($j = 1; $j < $count; $j++) {
                $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
            }
            $output .= $xorsum;
        }

        if($raw_output) {
            return substr($output, 0, $key_length);
        }
        else {
            return bin2hex(substr($output, 0, $key_length));
        }
    }
    
    function generateRandomSalt($length = self::PBKDF2_SALT_BYTES){
        /*if ($length == NULL){
            $length = self::PBKDF2_SALT_BYTES;
        }*/
        return openssl_random_pseudo_bytes($length, $cstrong);
    }
    
    function stretchPassword($arg1, $arg2){
        return $this->pbkdf2(NULL, $arg1, $arg2, NULL, NULL);
    }
    
    function generateHash($pass){
        return hash(self::PBKDF2_HASH_ALGORITHM, $pass);
    }
    
}