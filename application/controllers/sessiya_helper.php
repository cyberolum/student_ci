<?php

function has_session($session){
    if(isset($_SESSION[$session])){
        return TRUE;
    }else{
        return FALSE;
    }

}

