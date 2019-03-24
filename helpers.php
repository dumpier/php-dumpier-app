<?php
/**
 * @property \App\Services\TestService $testService
 * @property \App\Services\Admin\AdminAuthService $AdminAuthService
 *
 * @property \App\Models\Repositories\Admin\AdminRepository $Admin
 *
 * @property \App\Models\Repositories\Player\PlayerCharacterRepository $PlayerCharacter
 * @property \App\Models\Repositories\Player\PlayerDeckRepository $PlayerDeck
 * @property \App\Models\Repositories\Player\PlayerWeaponRepository $PlayerWeapon
 * @property \App\Models\Repositories\PlayerManage\PlayerManageRepository $PlayerManage
 */
class Controller extends \Presto\Core\Controller {}

/**
 * @property \App\Services\TestService $testService
 *
 * @property \App\Models\Repositories\Admin\AdminRepository $admin
 *
 * @property \App\Models\Repositories\Player\PlayerCharacterRepository $playerCharacter
 * @property \App\Models\Repositories\Player\PlayerDeckRepository $playerDeck
 * @property \App\Models\Repositories\Player\PlayerWeaponRepository $playerWeapon
 * @property \App\Models\Repositories\PlayerManage\PlayerManageRepository $playerManage
 */
class Service extends \Presto\Core\Service {}

/**
 * @property \App\Services\TestService $testService
 *
 * @property \App\Models\Repositories\Admin\AdminRepository $admin
 *
 * @property \App\Models\Repositories\Player\PlayerCharacterRepository $playerCharacter
 * @property \App\Models\Repositories\Player\PlayerDeckRepository $playerDeck
 * @property \App\Models\Repositories\Player\PlayerWeaponRepository $playerWeapon
 * @property \App\Models\Repositories\PlayerManage\PlayerManageRepository $playerManage
 */
class Command extends \Presto\Core\Consoles\Command {}