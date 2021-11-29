<?php
function base_url(){
return BASE_URL;
}
function dep($data){
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}
function headerHome($data=""){
    $view_header="Views/Template/header_home.php";
    require_once ($view_header);  
}

function footerHome($data=""){
    $view_footer="Views/Template/footer_home.php";
    require_once ($view_footer);  
}


function strClean($strCadena){
 $string= preg_replace('/\s\s+/', ' ', $strCadena); 
 $string = trim($string);
 $string = stripslashes($string);
 $string = str_ireplace("<script>","",$string);
 $string = str_ireplace("</script>","",$string);
 $string = str_ireplace("<script src>","",$string);
 $string = str_ireplace("<script type=>","",$string);
 $string = str_ireplace("SELECT * FROM","",$string);
 $string = str_ireplace("DELETE FROM","",$string);
 $string = str_ireplace("INSERT INTO","",$string);
 $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
 $string = str_ireplace("DROP TABLE","",$string);
 $string = str_ireplace("OR '1'='1'","",$string);
 $string = str_ireplace('OR "1"="1"',"",$string);
 $string = str_ireplace("IS NULL --","",$string);
 $string = str_ireplace('IS NULL --',"",$string);
 $string = str_ireplace("LIKE '","",$string);
 $string = str_ireplace('LIKE "',"",$string);
 $string = str_ireplace("OR 'a'='a","",$string);
 $string = str_ireplace('OR "a"="a',"",$string);
 $string = str_ireplace("--","",$string);
 $string = str_ireplace("^","",$string);
 $string = str_ireplace("[","",$string);
 $string = str_ireplace("]","",$string);
 $string = str_ireplace("==","",$string);
 return $string;
}
function pasGenerator($Length = 10){
    $pass = "";
    $longitudPass = $Length;
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuwxyz1234567890"; 
    $longitudPass = strlen($cadena);
    for($i = 1;$i<=10;$i++){
        $pas = rand(0,$longitudPass-1);
        $pass .= substr($cadena,$pas,1);
    }
    return $pass;
}
function token(){
    $r1 = bin2hex(random_bytes(10));
    $r2 = bin2hex(random_bytes(10));
    $r3 = bin2hex(random_bytes(10));
    $r4 = bin2hex(random_bytes(10));
    $token = $r1."-".$r2."-".$r3."-".$r4;
    return $token;
}

?>

