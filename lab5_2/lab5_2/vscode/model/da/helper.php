<?php 
class Helper 
{ 
    //http://localhost:8080/project/ 
    public static function get_url($url = '') 
    { 
        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING); 
        $app_path = explode('/', $uri); 
        return 'http://' . $_SERVER['HTTP_HOST'] . '/' . $app_path[1] . '/' . $url; 
    } 
    public static function redirect($url) 
    { 
        header("Location:{$url}"); 
        exit(); 
    } 
    public static function test_input($data) { 
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); 
        return $data; 
    } 
 
    public static function input_value($inputname,$filter=FILTER_DEFAULT) 
    { 
        $value = filter_input(INPUT_POST, self::test_input($inputname),$filter); 
        if ($value == NULL)  
            $value = filter_input(INPUT_GET,self::test_input($inputname),$filter); 
        return $value; 
    } 
    public static function is_submit($hidden) 
    { 
        return (!empty(self::input_value('action')) && self::input_value('action') == $hidden); 
    } 
} 