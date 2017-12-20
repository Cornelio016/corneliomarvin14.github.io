<?php
function grn_str_sel($sep,$str,$sel)
{
	//$sep - indicates the separator used in explosion
	//$str - string to explode
	//$sel - part of an array to be selected

	$exp=explode($sep,$str);
	return $exp[$sel];
}
function grn_str_rep($str,$rep,$tar,$cnt=null)
{
	//$str - specifies the value to find
	//$rep - specifies the value to replace the value in $str
	//$tar - specifies the string to be searched
	//$cnt - a variable that counts the number of replacements (OPTIONAL)

	$rep=str_replace($str,$rep,$tar,$cnt);
	return $rep;
}
function grn_str_fin($str,$fin)
{
	//$str - string to be used to be searched of
	//$fin - specific word or characted to search in $str

	if(stripos($str,$fin)!==false)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
function grn_str_get($str,$loc1,$loc2=null)
{
	//$str - string to be used to be searched of
	//$loc1 - location of the chatacter to get
	//$loc2 - location of the uninclude character combined wid $loc1 as unincluded

	$get=($loc2==null?substr($str,$loc1):substr($str,$loc1,$loc2));
	return $get;
}
function grn_str_trn($trn,$str)
{
	//$trn - identify the type of string transformation
		// ac - for all characters in capital form
		// as - for all characters in small form
		// fc - for each words in a string turns into a capital letter
	//$str - specifies the string to transform
	switch($trn)
	{
		case "ac": return strtoupper($str);break;
		case "as": return strtolower($str);break;
		case "fc": return ucfirst($str);break;
		default: return $str;
	}
}