<?php

namespace pocketmine\entity\behavior;

use pocketmine\entity\Mob;

abstract class Behavior{
	
	public $entity;
	
	public function __construct(Mob $entity){
		$this->entity = $entity;
	}
	
	public abstract function getName() : string;
	
	public abstract function shouldStart() : bool;
	
	public abstract function onTick();
	
	public abstract function onEnd();
	
	public abstract function canContinue() : bool;
}
?>