<?php

declare(strict_types=1);

namespace mashiji\Annihilation\permission;

use pocketmine\permission\DefaultPermissions;
use pocketmine\permission\Permission;
use pocketmine\permission\PermissionManager;

abstract class AnnihilationPermissions{

	public const ROOT_OPERATOR = AnnihilationPermissionNames::GROUP_OPERATOR;

	public static function registerPermissions(): void{
		$console = PermissionManager::getInstance()->getPermission(DefaultPermissions::ROOT_CONSOLE);
		$op = PermissionManager::getInstance()->getPermission(DefaultPermissions::ROOT_OPERATOR);
		$everyone = PermissionManager::getInstance()->getPermission(DefaultPermissions::ROOT_USER);

		$operator = DefaultPermissions::registerPermission(new Permission(self::ROOT_OPERATOR));

		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::EXECUTE_DEFAULT), [$operator]);
		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::EXECUTE_OP), [$operator, $op]);
		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::EXECUTE_EVERYONE), [$everyone]);

		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::COMMAND), [$operator, $console]);
		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::COMMAND_RELOAD), [$operator, $console]);
		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::COMMAND_NEW), [$operator]);
		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::COMMAND_PERM), [$operator]);
		DefaultPermissions::registerPermission(new Permission(AnnihilationPermissionNames::COMMAND_CUSTOM_NAME), [$operator]);
	}
}
