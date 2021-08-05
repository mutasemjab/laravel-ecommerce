<?php

function getFolders(){
    return app()->getLocale()=='ar'?'css-rtl':'css';
}
