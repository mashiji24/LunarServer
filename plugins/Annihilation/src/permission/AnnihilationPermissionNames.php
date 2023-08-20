<?php

declare(strict_types=1);

namespace mashiji\Annihilation\permission;

final class AnnihilationPermissionNames{

	public const GROUP_OPERATOR = "annihilation.group.operator";

	public const EXECUTE_DEFAULT = "annihilation.execute.default";
	public const EXECUTE_OP = "annihilation.execute.op";
	public const EXECUTE_EVERYONE = "annihilation.execute.everyone";

	public const COMMAND = "annihilation.command";
	public const COMMAND_RELOAD = "annihilation.command.reload";
	public const COMMAND_NEW = "annihilation.command.new";
	public const COMMAND_PERM = "annihilation.command.perm";
	public const COMMAND_CUSTOM_NAME = "annihilation.command.custom_name";
}
