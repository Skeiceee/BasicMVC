<?php namespace Router;

class Route{
    private $path;
    public $callback;
    public function __construct($path, $callback){
        $this->path = $path;
        $this->callback = $callback;
    }

    public function match($path){
        if($this->path == $path){
            return true;
        }else{
            return false;
        }
    }

    public function run()
    {
        call_user_func($this->callback);
    }
}
