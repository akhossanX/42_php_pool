<?php

	abstract class Fighter
	{
		public $type;

		public function __construct($type)
		{
			$this->type = $type;
		}

		public abstract function fight($someone);
	}

?>
