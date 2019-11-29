<?php

	class UnholyFactory
	{
		private $absorbed_fighters;

		public function __construct()
		{
			$this->absorbed_fighters = [];
		}

		public function absorb($fighter)
		{
			if ($fighter instanceof Fighter)
			{
				foreach($this->absorbed_fighters as $absf)
				{
					if (get_class($absf) == get_class($fighter))
					{
						print("(Factory already absorbed a fighter of type "
							.$fighter->type.")". PHP_EOL);
						return ;
					}
				}
				$this->absorbed_fighters[] = $fighter;
				print("(Factory absorbed a fighter of type "
				.$fighter->type.")". PHP_EOL);
			}
			else
				print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
		}

		public function fabricate($fighter)
		{
			foreach($this->absorbed_fighters as $absf)
			{
				if ($fighter == $absf->type)
				{
					print("(Factory fabricates a fighter of type ".
						$fighter.")".PHP_EOL);
					return $absf;
				}
			}
			print("(Factory hasn't absorbed any fighter of type ".$fighter
				.")".PHP_EOL);
		   	return null;
		}
	}	

?>
