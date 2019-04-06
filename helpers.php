<?php
/**
 * @property \App\Services\Admin\AdminAuthService $AdminAuthService
 * @property \App\Services\Game\Battle\BattleService $BattleService
 * @property \App\Services\Game\Battle\SkillService $SkillService
 * @property \App\Services\Game\Master\MasterDeckService $MasterDeckService
 * @property \App\Services\Game\Player\PlayerCharacterService $PlayerCharacterService
 * @property \App\Services\Game\Player\PlayerDeckService $PlayerDeckService
 * @property \App\Services\Game\Player\PlayerRegistService $PlayerRegistService
 * @property \App\Services\Game\Player\PlayerTutorialService $PlayerTutorialService
 * @property \App\Services\Game\Player\Manage\PlayerManageService $PlayerManageService
 * @property \App\Services\Game\Player\Quest\PlayerMainQuestService $PlayerMainQuestService
 *
 * @property \App\Models\Repositories\Admin\AdminRepository $Admin
 * @property \App\Models\Repositories\Master\MasterCharacterOriginalRepository $MasterCharacterOriginal
 * @property \App\Models\Repositories\Master\MasterCharacterRepository $MasterCharacter
 * @property \App\Models\Repositories\Master\MasterMapAreaRepository $MasterMapArea
 * @property \App\Models\Repositories\Master\MasterMapRepository $MasterMap
 * @property \App\Models\Repositories\Master\MasterTutorialCharacterRepository $MasterTutorialCharacter
 * @property \App\Models\Repositories\Player\PlayerCharacterRepository $PlayerCharacter
 * @property \App\Models\Repositories\Player\PlayerDeckRepository $PlayerDeck
 * @property \App\Models\Repositories\Player\PlayerWeaponRepository $PlayerWeapon
 * @property \App\Models\Repositories\Player\Manage\PlayerManageRepository $PlayerManage
 */
interface InjectableInterface {}

class Controller extends \Presto\Core\Controller implements InjectableInterface {}
class Service extends \Presto\Core\Service implements InjectableInterface {}
class Command extends \Presto\Core\Consoles\Command implements InjectableInterface {}