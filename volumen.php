<html>
		<head>
			<meta charset="utf-8"/>
			<title>Volumenberechnung</title>
		</head>
		<body>
			<h2>Berechnung</h2>
		</body>
	</html>

<?php


class Koerper {
	protected $radius;
	protected $height;
    protected $pi;
	
	public function getradius() {
		return $this->radius;
	}
	function setradius($radius) {
		$this->radius = $radius;
	}

	public function getheight() {
		return $this->height;
	}
	function setheight($height) {
		$this->height = $height;
	}

	public function getpi() {
		return $this->pi;
	}
	function setpi($pi) {
		$this->pi = $pi;
	}
}

class Zylinder extends Koerper {
	private $volumenzylinder;
	
	function volumenzylinder($volumenzylinder) {
        $volumenzylinder = $radius*$radius*$pi*$height
		}
	}
}

class Kegel extends Koerper {
	private $volumenkegel;
	
	function volumenkegel($volumenkegel) {
		$volumenkegel = ($radius*$radius*$pi*$height)/3
		}
	}
}

$zylinder = new Zylinder();
$zylinder->volume = "";
echo "Zylindervolume ist $volumezylinder";

$kegel = new Kegel
$kegel->volume = "";
echo "Kegelvolume ist $volumekegel";

}

?>
