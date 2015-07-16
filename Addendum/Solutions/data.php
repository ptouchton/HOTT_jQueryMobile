<?php
	if($_GET['choice'] == 'patriots')
	{
		$names = array('Tom Brady', 'Darrelle Revis', 'Rob Gronkowski', 'Julian Edelman','Vince Wilfork',
'Jerod Mayo');
		echo getHTML($names);
	}
	else if($_GET['choice'] == 'cowboys')
	{
		$names = array('Tony Romo', 'DeMarco Murray', 'Terrance Williams', 'Miles Austin', 'Dez Bryant','Jason Witten');
		echo getHTML($names);
	}
	function getHTML($names)
	{
		$strResult = '<ul>';
		for($i=0; $i<count($names); $i++)
		{
			$strResult.= '<li>'.$names[$i].'</li>';
		}
		$strResult.= '</ul>';
		
		return $strResult;
	}
?>