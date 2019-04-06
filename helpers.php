<?php
/**
 * @property \AppServices\Admin\AdminAuthService $AdminAuthService
 * @property \AppServices\Game\Battle\BattleService $BattleService
 * @property \AppServices\Game\Battle\SkillService $SkillService
 * @property \AppServices\Game\Master\MasterDeckService $MasterDeckService
 * @property \AppServices\Game\Player\PlayerDeckService $PlayerDeckService
 * @property \AppServices\Game\Player\PlayerRegistService $PlayerRegistService
 * @property \AppServices\Game\Player\PlayerTutorialService $PlayerTutorialService
 * @property \AppServices\Game\Player\Manage\PlayerManageService $PlayerManageService
 * @property \AppServices\Game\Quest\QuestService $QuestService
 *
 * @property \AppModels\Repositories\\Admin\AdminRepository $Admin
 * @property \AppModels\Repositories\\Master\MasterCharacterOriginalRepository $MasterCharacterOriginal
 * @property \AppModels\Repositories\\Master\MasterCharacterRepository $MasterCharacter
 * @property \AppModels\Repositories\\Master\MasterTutorialCharacterRepository $MasterTutorialCharacter
 * @property \AppModels\Repositories\\Player\PlayerCharacterRepository $PlayerCharacter
 * @property \AppModels\Repositories\\Player\PlayerDeckRepository $PlayerDeck
 * @property \AppModels\Repositories\\Player\PlayerWeaponRepository $PlayerWeapon
 * @property \AppModels\Repositories\\Player\Manage\PlayerManageRepository $PlayerManage
 */
interface InjectableInterface {}

class Controller extends \Presto\Core\Controller implements InjectableInterface {}
class Service extends \Presto\Core\Service implements InjectableInterface {}
class Command extends \Presto\Core\Consoles\Command implements InjectableInterface {}