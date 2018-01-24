<?php

namespace Core\Base;

class View {
	protected $filename;
	protected $layout;
	
	public function __construct($controller, $view)
	{
		$this->filename = ROOT . "App\View\\" . strtolower(str_replace("Controller", "", $controller)) ."\\" .strtolower($view) . ".php";
		$this->layout = ROOT . "App\View\layout\index.php";
	}
	
	public function render($vars)
	{
	    if (is_array($vars)) extract ($vars);
	    
	    ob_start();
	    if (is_file($this->filename))
        {
            require $this->filename;
        }
        else    
        {
            echo "Вид $this->filename не найден";
        }
        $content = ob_get_clean();
        
        if (is_file($this->layout))
        {
            require $this->layout;
        }
        else    
        {
            echo "Шаблон $this->layout не найден";
        }
	    	    

	}
}