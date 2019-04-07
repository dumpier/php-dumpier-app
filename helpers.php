<?php
/**
 * @property \App\Services\Admin\AdminAuthService $AdminAuthService
 * @property \App\Services\Game\Battle\BattleService $BattleService
 * @property \App\Services\Game\Battle\SkillService $SkillService
 * @property \App\Services\Game\Player\PlayerCharacterService $PlayerCharacterService
 * @property \App\Services\Game\Player\PlayerDeckService $PlayerDeckService
 * @property \App\Services\Game\Player\PlayerRegistService $PlayerRegistService
 * @property \App\Services\Game\Player\PlayerTutorialService $PlayerTutorialService
 * @property \App\Services\Game\Player\Manage\PlayerManageService $PlayerManageService
 * @property \App\Services\Game\Quest\PlayerQuestService $PlayerQuestService
 * @property \App\Services\Game\Quest\QuestService $QuestService
 *
 * @property \App\Models\Repositories\Admin\AdminRepository $Admin
 * @property \App\Models\Repositories\Master\MasterCharacterLevelRepository $MasterCharacterLevel
 * @property \App\Models\Repositories\Master\MasterCharacterOriginalRepository $MasterCharacterOriginal
 * @property \App\Models\Repositories\Master\MasterCharacterRepository $MasterCharacter
 * @property \App\Models\Repositories\Master\MasterQuestAreaRepository $MasterQuestArea
 * @property \App\Models\Repositories\Master\MasterQuestMapRepository $MasterQuestMap
 * @property \App\Models\Repositories\Master\MasterQuestStageRepository $MasterQuestStage
 * @property \App\Models\Repositories\Master\MasterTutorialCharacterRepository $MasterTutorialCharacter
 * @property \App\Models\Repositories\Player\PlayerCharacterRepository $PlayerCharacter
 * @property \App\Models\Repositories\Player\PlayerDeckRepository $PlayerDeck
 * @property \App\Models\Repositories\Player\PlayerQuestRepository $PlayerQuest
 * @property \App\Models\Repositories\Player\Manage\PlayerManageRepository $PlayerManage
 */
interface InjectableInterface {}

class Controller extends \Presto\Core\Controller implements InjectableInterface {}
class Service extends \Presto\Core\Service implements InjectableInterface {}
class Command extends \Presto\Core\Consoles\Command implements InjectableInterface {}