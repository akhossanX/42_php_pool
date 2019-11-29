<?php

class NightsWatch
{
	private $recruited = [];

	public function recruit($person)
	{
			$this->recruited[] = $person;
	}

	public function fight()
	{
		foreach ($this->recruited as $obj)
			if ($obj instanceof IFighter)
			{
				$obj->fight();
			}
	}
}

?>
