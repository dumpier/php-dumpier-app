<?php
use App\Helpers\CharacterHelper;

class Controller extends \Presto\Core\Controller implements InjectableInterface {}
class Service extends \Presto\Core\Service implements InjectableInterface {}
class Command extends \Presto\Core\Consoles\Command implements InjectableInterface {}

/**
 *
 * ******************************************
 * Services
 * ******************************************
 * Admin
 * @property \App\Services\Admin\AdminAuthService $AdminAuthService
 *
 * Master
 * @property \App\Services\Game\Master\MasterDeckService $MasterDeckService
 *
 * PlayerManage
 * @property \App\Services\Game\Player\Manage\PlayerManageService $PlayerManageService
 *
 * Player
 * @property \App\Services\Game\Player\PlayerDeckService $PlayerDeckService
 * @property \App\Services\Game\Battle\BattleService $BattleService
 * @property \App\Services\Game\Battle\SkillService $SkillService
 * @property \App\Services\Game\Quest\QuestService $QuestService
 *
 *
 * ******************************************
 * Repository
 * ******************************************
 * Admin
 * @property \App\Models\Repositories\Admin\AdminRepository $Admin
 *
 * PlayerManage
 * @property \App\Models\Repositories\Player\Manage\PlayerManageRepository $PlayerManage
 *
 * Player
 * @property \App\Models\Repositories\Player\PlayerCharacterRepository $PlayerCharacter
 * @property \App\Models\Repositories\Player\PlayerDeckRepository $PlayerDeck
 * @property \App\Models\Repositories\Player\PlayerWeaponRepository $PlayerWeapon
 */
interface InjectableInterface {}


if(! function_exists("character")) { /** @return string */ function character() { return CharacterHelper::instance(); } }