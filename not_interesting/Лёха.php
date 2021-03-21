<?php
	function pain($arr)
	{
		if($arr<1)return 1;
		$ded=$arr*pain($arr-1);
		echo $ded;
		return $ded;
	}
	
	function deas($loss)
	{
		while($loss!=0)
		{
		$rock=($loss%2).$rock;
		$loss=(int)$loss/2;
		}
		return $rock;
	}
echo ' '.pain(4);
echo ' '.deas(4);
?>