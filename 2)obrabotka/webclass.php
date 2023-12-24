<?php 
class SiteClass {
	private $conn = ""; 	
	public function __construct(){
	//$this->conn=mysqli_connect("localhost","root","root","");
	}	

			
				 
				 
	public function year_select(){
		$years = range(1995, 2009);
	 
		 	$i=0;
			 foreach($years as $month => $value){
				$i=0;
			   echo "<option value={$value}>{$value}</option>";
			}
	 
	}
	public function mouth_select(){
		
		$months = [
			"январь" => 1,
			"февраль" => 2,
			"март" => 3,
			"апрель" => 4,
			"май" => 5,
			"июнь" => 6,
			"июль" => 7,
			"август" => 8,
			"сентябрь" => 9,
			"октябрь" => 10,
			"ноябрь" => 11,
			"декабрь" => 12,
		];
		 
		 	 
			 foreach($months as $month => $value){
				 
			   echo "<option value={$value}>{$month}</option>";
			}
	 
	}
	function countFullWeeks($n) {
		$totalWeeks = floor($n / 7); // Количество целых недель в промежутке
		
		return $totalWeeks;
	  }
		public function result(){
			$year=(int)$_POST['year'];
			$month=(int)$_POST['mouth'];
			$days = [
				31 => 1,
				28 => 2 , 
				31=>3,
				30=>4  ,
				31=> 5 ,
				30=>6  ,
				31=>7  ,
				30=>8  ,
				30=>9 ,
				31=>10  ,
				30=>11 ,
				31=>12 
			];
			switch ($month) {
				case 1:
				$days = 31;
				break;
				case 2:
				$days = 28;
				break;
				case 3:
				$days = 31;
				break;
				case 4:
				$days = 30;
				break;
				case 5:
				$days = 31;
				break;
				case 6:
				$days = 30;
				break;
				case 7:
				$days = 31;
				break;
				case 8:
				$days = 31;
				break;
				case 9:
				$days = 30;
				break;
				case 10:
				$days = 31;
				break;
				case 11:
				$days = 30;
				break;
				case 12:
				$days = 31;
				break;
				default:
				$days = "Invalid month";
				}

				//2)
				$firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
				$lastDayOfMonth = mktime(0, 0, 0, $month + 1, 0, $year);
			
				$firstDayOfWeek = date('l', $firstDayOfMonth);
				$lastDayOfWeek = date('l', $lastDayOfMonth);
			
				//3)

					// Получение количества дней в заданном месяце
					$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

					// Переменная для хранения количества суббот
					$countSaturdays = 0;

					// Перебор всех дней в заданном месяце
					for ($day = 1; $day <= $daysInMonth; $day++) {
						// Получение дня недели для текущего дня
						$dayOfWeek = date('N', strtotime("$year-$month-$day"));

						// Если текущий день - суббота (6 - суббота)
						if ($dayOfWeek == 6) {
							$countSaturdays++;
						}
					}

					// Вывод результата
				 
				echo "<h2>Первый день недели: " . $firstDayOfWeek . "</h2><br>";
				echo "<h2>Последний день недели: " .$lastDayOfWeek."</h2>";
				echo "<h2>Количество дней в месяце : ".$days ."</h2>";
				echo "<h2>Количество суббот в $month месяце года: $countSaturdays </h2>";

		}	
		 
		  
}

 ?>