<?php

namespace pocketmine\entity\behavior;

class PanicBehavior extends StrollBehavior{
	
	public function shouldStart() : bool{
		return $this->entity->getLastDamageCause() != null;
	}
}
?>
