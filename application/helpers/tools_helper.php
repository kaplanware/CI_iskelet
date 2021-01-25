<?php
function convertToSeo($text){
    $turkce=array("ç","Ç","ğ","Ğ","ü","Ü","ö","Ö","ı","İ","ş","Ş",".",",","!","'"," ","?","*","_","|","=","(",")","[","]","{","}");
    $convert=array("c","C","g","G","u","U","o","O","i","i","s","S","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-");
    return $seo=strtolower(str_replace($turkce,$convert,$text));
}

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

function get_readable_date($date){
    setlocale(LC_TIME,"Turkish");
    return strftime('%A %d %B %Y' , strtotime($date));
}

function dateTimeFormat($date){
    setlocale(LC_TIME,"Turkish");
    return strftime('%d %B %A %Y' , strtotime($date));
}



function fileUploads($input,$path){
    $ci =& get_instance();
    $file_name = pathinfo($_FILES[$input]["name"], PATHINFO_FILENAME) . "." . pathinfo($_FILES[$input]["name"], PATHINFO_EXTENSION);
    $config["allowed_types"] = "jpg|jpeg|png|jfif";
    $config["upload_path"] = $path;
    $config['encrypt_name'] = TRUE;

    $ci->load->library("upload", $config);
    $upload = $ci->upload->do_upload($input);

    if ($upload) {
        $uploaded_file = $ci->upload->data("file_name");
        return  $uploaded_file;
    }
    return false;

}

function codeprint($array){
    echo "<pre>";
    return print_r($array);
}

function loadView($değer){
    $ci = & get_instance();
    return $ci->load->view($değer);
}

function getUserData($değer){
    $ci = & get_instance();
    return $ci->session->userdata($değer);
}