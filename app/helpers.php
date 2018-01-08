<?php	

	function getMonthName($month_number)
	{
		$months = [
			'januari',
			'februari',
			'maart',
			'april',
			'mei',
			'juni',
			'juli',
			'augustus',
			'september',
			'oktober',
			'november',
			'december'
		];
			
		return $months[intVal($month_number - 1)];
	}
?>