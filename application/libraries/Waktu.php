<?php
	class Waktu{
		private $CI;
		function __construct(){
			$this->CI = &get_instance();
		}
		
		public function mysql_to_js_date($tgl){
			if($tgl){
				preg_match("/^([0-9]+)-([0-9]+)-([0-9]+)/", $tgl, $matches);
				$tgl = $matches[3] . '/' . $matches[2] . '/' . $matches[1];
			}
			return($tgl);
		}
		
		public function js_to_mysql_date($tgl){
			preg_match("/^([0-9]+)\/([0-9]+)\/([0-9]+)/", $tgl, $matches);
			$tgl = $matches[3] . '-' . $matches[2] . '-' . $matches[1];
			return($tgl);
		}
		
		function nama_bulan($bln){
			$arr = array('1'=>"Januari", "Februari", "Maret", 
						 "April", "Mei", "Juni",
						 "Juli", "Agustus", "September",
						 "Oktober", "November", "Desember");
			
			return $arr[$bln];
		}
		
		public function mysql_to_indo_time($time, $type=1){
			if($time){
				preg_match("/^([0-9]+)-([0-9]+)-([0-9]+) ([0-9:]+)/", $time, $matches);
				$time = $matches[3] . ' ' . $this->nama_bulan((int)$matches[2]) . ' ' . $matches[1] . ' ' . $matches[4];
				if($type==2){
					$time = substr($time, 0, -3) . ' WITA';
				}
			}
			return($time);
		}
		
		public function mysql_to_indo_date($date,$type=1){
			if($date){				
				preg_match("/^([0-9]+)-([0-9]+)-([0-9]+)/", $date, $matches);
				$date = $matches[3] . ' ' . $this->nama_bulan((int)$matches[2]) . ' ' . $matches[1];
			}
			return($date);
		}
	}
?>