<?php

namespace core\lib\drive\log;

use core\lib\conf;

class file
{	
	public function __construct(){
		$conf = conf::get('OPTION','log');
		$this->path = $conf['PATH'];
	}
	public function log($msg,$file = 'log'){
		/**
		 * 1.确定文件储存位置是否存在	
		 * 2.新建目录	
		 * 3.写入日志
		 */		
		// $path = conf::get('OPTION','log');		
		// if(!is_dir($this->path.date("YmdH",time()))){			
		// 	mkdir($this->path.date("YmdH",time()),'0777',true);
		// }		
		// return file_put_contents($this->path.date("YmdH",time()).DIRECTORY_SEPARATOR.$file.'.php', date("Y-m-d H:i:s").json_encode($msg).PHP_EOL,FILE_APPEND);
	}
}
//文件系统