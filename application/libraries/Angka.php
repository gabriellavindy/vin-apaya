<?php
	class Angka{
		private $CI;
		function __construct(){
			$this->CI = &get_instance();
		}
		
		public function zero_digit($i, $digit){
			if($i!=''){
				$hasil = $i;
				while(strlen($hasil) < $digit){
					$hasil = '0' . $hasil;
				}
				return($hasil);
			}
		}
		
		public function dua_digit($angka){
			return($this->zero_digit($angka, 2));
		}
		
		public function tiga_digit($angka){
			return($this->zero_digit($angka,3));
		}
		
		public function rp($inp=0){
			return number_format($inp, 2, ',', '.');
		}
		
		public function persen($inp=0){
			return($this->rp($inp));
		}
		
		public function angka($inp=0,$max_digit=0){
			$bil_bulat 	= floor($inp);
			$desimal	= $inp-$bil_bulat;
			$format = number_format($bil_bulat, 0, ',', '.');
			
			if($desimal > 0){
				$format .= ',' . substr(floatval(round($desimal,$max_digit)),2);	
			}
			return($format);
		}
		
		public function angka2num($inp=''){
			$outp = str_replace('.', '', $inp);
			$outp = str_replace(',', '.', $outp);
			return $outp;
		}
		
		public function rp2num($inp=''){
			$outp = str_replace('Rp. ', '', $inp);
			$outp = $this->angka2num($outp);
			return $outp;
		}
		
		public function bulatkanseribukeatas($angka){
			$hasil = round($angka, -3);
			if($hasil < $angka){
				$hasil += 1000;
			}
			return($hasil);
		}
	}
?>