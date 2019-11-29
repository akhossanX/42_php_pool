<?php
	function ft_is_sort($arr)
	{
		$dsc = true;
		$asc = true;
		$ar_asc = $arr;
		$ar_dsc = $arr;
		sort($ar_asc, $sort_flags = SORT_STRING);
		rsort($ar_dsc, $sort_flags = SORT_STRING);
		foreach ($arr as $key => $value)
		{
			if (strcmp($value, $ar_asc[$key]))
			{
				$asc = false;
				break ;
			}
		}
		foreach ($arr as $key => $value)
		{
			if (strcmp($value, $ar_dsc[$key]))
			{
				$dsc = false;
				break ;
			}
		}
		return $dsc || $asc;
	}
?>
