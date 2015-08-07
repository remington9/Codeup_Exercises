<?php

class Log{
    private $filename;
    private $handle;

    public function __construct($prefix ='log'){
        if($this->setFileName($prefix)){
            $this->handle = fopen($this->filename, 'a');
        }
    }

    protected function setFileName($prefix){
        if(is_string($prefix)){
            $this->filename = $prefix. "-" . date("Y-m-d") . '.log';
            if(touch($this->filename) && is_writable($this->filename)){
                return $this->filename;
            }else{
                die('the file is either not writable or touchable');    
            }
        }else{
            die('the prefix is not a string');
        }
    }

    public function logMessage($logLevel, $message){
        fwrite($this->handle,PHP_EOL . date("Y-m-d H:i:s ")."[{$logLevel}] $message");
    }

    public function info($message){
        $this->logMessage("INFO",$message);
    }
    public function error($message){
        $this->logMessage("ERROR",$message);
    }

    public function __destruct(){
        if(isset($this->handle)){
            fclose($this->handle);
        }
    }

}
$log1 = new Log('cli');
$log1->info('hi');

