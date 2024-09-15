<?php

class X {
	private $count = 1;
	public function __toString() {
		return $this->count++;
	}
}

$x = new X();

if ($x == '1' && $x == '2' && $x == '3') {
	echo 'php made easy';
	exit;
}
echo 'code like there\'s no tomorrow!';
exit;

