<?php
class Controller extends \Presto\Core\Controller implements InjectableInterface {}
class Service extends \Presto\Core\Service implements InjectableInterface {}
class Command extends \Presto\Core\Consoles\Command implements InjectableInterface {}

/**
 * @property \App\Services\TestService $testService
 * @property \App\Services\Admin\AdminAuthService $AdminAuthService
 *
 * @property \App\Services\Game\Master\MasterDeckService $masterDeckService
 * @property \App\Services\Game\Player\PlayerDeckService $playerDeckService
 * @property \App\Services\Game\Battle\BattleService $battleService
 * @property \App\Services\Game\Battle\SkillService $skillService
 * @property \App\Services\Game\Quest\QuestService $questService
 *
 *
 * @property \App\Models\Repositories\Admin\AdminRepository $Admin
 *
 *
 * @property \App\Models\Repositories\Player\PlayerCharacterRepository $PlayerCharacter
 * @property \App\Models\Repositories\Player\PlayerDeckRepository $PlayerDeck
 * @property \App\Models\Repositories\Player\PlayerWeaponRepository $PlayerWeapon
 * @property \App\Models\Repositories\PlayerManage\PlayerManageRepository $PlayerManage
 */
interface InjectableInterface {}