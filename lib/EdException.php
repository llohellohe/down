<?php
function handleError($errno, $errstr, $errfile, $errline, array $errcontext)
{

    if (0 === error_reporting()) {
        return false;
    }

    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}


function go404(){
	# require('404.php'); 
    # @header('HTTP/1.1 404 Not Found'); 
    # @header('Status: 404 Not Found'); 
    # exit; 
}
#set_error_handler('handleError')
?>