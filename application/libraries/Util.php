<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Util {
    public function areSetPost($varArray){
        foreach($varArray as $value){
            if(!isset($_POST[$value]))
                return false;
        }
        return true;
    }
}