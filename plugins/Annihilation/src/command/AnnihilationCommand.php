<?php

declare(strict_types=1);

namespace mashiji\Annihilation\command;

use mashiji\Annihilation\_7f34121fa09cef08965cCortexPE\Commando\BaseCommand;
use pocketmine\command\CommandSender;

class AnnihilationCommand extends BaseCommand{

	protected function prepare(): void{
		$this->setPermission();
	}

	public function onRun(CommandSender $sender, string $aliasUsed, array $args): void{
		$this->sendUsage();
	}
}
