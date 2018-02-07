<?php
	class mobil
	{
		public $warna;
		public $jumlah_ban;
		public $merk	;

		private $kecepatan;
		private $arah;
		private $speedometer;

		function __construct()
		{
			$this->warna = "putih";
			$this->jumlah_ban = 4;
			$this->merk = "Suzuki Spectre";

			$this->kecepatan = 0;
			$this->arah = "N";
			$this->speedometer = 0; 
		}

		public function getWarna()
		{
			return $this->warna;
		}

		public function getJumlahBan()
		{
			return $this->jumlah_ban;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function setWarna($warna)
		{
			$this->warna = $warna;
		}

		public function setMerk($merk)
		{
			$this->merk = $merk;
		}

		public function getArah()
		{
			return $this->arah;
		}

		public function serArah($arah)
		{
			$this->arah = $arah;
		}

		public function getKecepatan()
		{
			return $this->kecepatan;
		}

		public function tambahKecepatan($percepatan)
		{
			$this->kecepatan = $this->kecepatan + $percepatan;
		}

		public function kurangiKecepatan($percepatan)
		{
			$this->kecepatan = $this->kecepatan - $percepatan;
		}

		public function getSpeedometer()
		{
			return $this->speedometer;
		}

		public function tambahSpeedometer($meter)
		{
			$this->speedometer = $this->speedometer + $meter;
		}

		public function jalan($meter, $waktu)
		{
			if($this->getArah()=="F")
			{
				for ($i=0; $i < $waktu; $i++) { 
					$this->tambahKecepatan(($meter/$waktu));
				}
				$this->tambahSpeedometer($meter);
				echo "mobil maju ".$meter."meter <br>";
			}	
			else if($this->getArah() == "B")
			{
				for($i=0; $i<$waktu;$i++)
				{
					$this->kurangiKecepatan(($meter/$waktu));
				}
				$this->tambahSpeedometer($meter);
			}
			else
			{
				echo "mobil dalam keadaan netral";
			}
		}
	}

	$mobil = new Mobil();
	echo "Warna : ".$mobil->getWarna()."<br>";
	echo "Jumlah Ban : ".$mobil->getJumlahBan()."<br>";
	echo "Merk : ".$mobil->getMerk()."<br>";

	$mobil->setWarna('biru');
	$mobil->setMerk('Yamaha Lexi');
	echo "<br><br>Setelah diubah property nya<br>";

	echo "Warna : ".$mobil->getWarna()."<br>";
	echo "Jumlah Ban : ".$mobil->getJumlahBan()."<br>";
	echo "Merk : ".$mobil->getMerk()."<br>";
?>
<div style="margin-left: <?php echo $mobil->getKecepatan()+500;?>px; width: 100px; height: 40px; background-color: black;"></div>
<?php
	$mobil->serArah('F');
	$mobil->jalan(10,1);
	echo "Speedometer : ".$mobil->getSpeedometer()."m<br>";

	$mobil->jalan(100,5);
	echo "Speedometer : ".$mobil->getSpeedometer()."m<br>";

	$mobil->setArah('B');
	$mobil->jalan(500,10);
	echo "<br>Speedometer : ".$mobil->getSpeedometer()."m<br>";
?>
</div>

/*
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/tercyduck123/X---RPL.git
git push -u origin master
*/