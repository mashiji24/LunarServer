<?php

declare(strict_types=1);

namespace mashiji\ServerManager;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements \pocketmine\event\Listener{

	public function onEnable(): void
	{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function joinServer(\pocketmine\event\player\PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$player->sendMessage("Welcome to LunarServer!!");
	}
}
