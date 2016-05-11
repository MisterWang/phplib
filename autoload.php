<?php
/**
 * 按命名空间加载类
 * @param  $class 命名空间
 * @return [type]
 */
function autoload($class)
{
	$fpath=str_replace("\\",'/',$class);

	if(file_exists(__DIR__.'/'.$fpath.'.php'))
		require __DIR__.'/'.$fpath.'.php';
}
spl_autoload_register('autoload');

/**
 * 辅助加载(加载不包含命名空间的版本较旧的文件)
 * @param  [type] $path 文件路径,相对于此文件
 * @return [type]        [description]
 */
function _libload($path)
{
	if(file_exists(__DIR__.'/'.$path.'.php'))
		require __DIR__.'/'.$path.'.php';
}