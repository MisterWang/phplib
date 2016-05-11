<?php

namespace math;
class math
{
	/**
	 * 将小数转成 1/n 的形式
	 * @param  string $float 字符串形式的浮点数
	 * @return string        返回作为1/n形式的分母
	 */
	public static function tofraction($float)
	{
		if(is_numeric($float))
			$float=number_format($float,16,'.','');
		
		$len=strlen($float);
		$point=strpos($float, '.');
		$exp=$len-$point-1;
		$bot=bcpow(10, $exp);
		$res=bcmul($float,$bot,16);

		/*if(defined('_DEBUG'))
			echo "raw:$float,len:$len,point:$point,exp:$exp,bot:$bot,res:$res"._;*/

		if($res>1) $bot=bcdiv($bot,$res);

		return $bot;
	}
}