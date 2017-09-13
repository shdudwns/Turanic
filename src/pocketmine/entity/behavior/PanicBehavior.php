<?php

namespace pocketmine\entity\behaviorsl;

class PanicBehavior extends StrollBehavior{
	
	public function shouldStart() : bool{
		return $this->entity->getLastDamageCause() != null;
	}
}
?>