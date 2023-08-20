<?php

declare(strict_types=1);

namespace mashiji\Annihilation;

use mashiji\Annihilation\_7f34121fa09cef08965cCortexPE\Commando\PacketHooker;
use mashiji\Annihilation\command\AnnihilationCommand;
use mashiji\Annihilation\listener\AnnihilationEventListener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	private static self $instance;

	protected function onLoad(): void{
		self::$instance = $this;
	}

	protected function onEnable(): void{
		OperatorsStore::load($this->getDataFolder());

		if(!PacketHooker::isRegistered()) PacketHooker::register($this);
		$this->getServer()->getCommandMap()->register($this->getName(), new AnnihilationCommand($this, "annihilation", "Annihilation commands"));
	}
}
