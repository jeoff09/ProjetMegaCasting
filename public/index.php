<?php function __autoload($pClassNname) 
    {
        $pClassNname  = str_replace('_', '/', $pClassNname);
        $pClassNname = '../application/models/'.$pClassNname.'.php';
        require_once $pClassNname;
    }
    

    $ctrl = '../application/process/ctrl-'.$_GET['page'].'.php';    
    $view = '../application/views/view-'.$_GET['page'].'.php';
    
    if (is_file($ctrl) == TRUE) 
    {
        require $ctrl;
    }
    if (is_file($view) == TRUE) 
    {
        
        require $view;
    }

