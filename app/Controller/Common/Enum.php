<?php

namespace App\Controller\Common;

/**
 *
 */
class Enum
{
    //游戏状态
    const LOGIN        = 1;
    const SELECT       = 2;
    const GAME         = 3;
    const DISCONNECTED = 4;

    const AccountCharacter = 4; //允许最大创建角色数

    //允许的分辨率
    const AllowedResolution = 1024; //支持1024(1024, 768),1280(1280, 800),1366(1366, 768)

    const AllowGroup = 1; //允许组队

    //权限控制
    //TODO
    const AllowNewAccount      = true; //允许新建账户
    const AllowChangePassword  = true; //允许修改密码
    const AllowLogin           = true; //允许登录
    const AllowNewCharacter    = true; //允许新建角色
    const AllowDeleteCharacter = true; //允许删除角色
    const AllowStartGame       = true; //允许开始游戏
    const AllowCreateAssassin  = true; //允许创建刺客
    const AllowCreateArcher    = true; //允许创建弓箭手

    const MirGenderMale   = 0; //男
    const MirGenderFemale = 1; //女

    const MirClassWarrior  = 0; //战士
    const MirClassWizard   = 1; //法师
    const MirClassTaoist   = 2; //道士
    const MirClassAssassin = 3; //刺客
    const MirClassArcher   = 4; //弓箭手

    //地图灯光控制
    const LightSetting        = 0; //无
    const LightSettingNormal  = 0; //无
    const LightSettingDawn    = 1; //黎明
    const LightSettingDay     = 2; //白天
    const LightSettingEvening = 3; //傍晚
    const LightSettingNight   = 4; //夜晚

    const MirDirectionUp        = 0;
    const MirDirectionUpRight   = 1;
    const MirDirectionRight     = 2;
    const MirDirectionDownRight = 3;
    const MirDirectionDown      = 4;
    const MirDirectionDownLeft  = 5;
    const MirDirectionLeft      = 6;
    const MirDirectionUpLeft    = 7;
    const MirDirectionCount     = 8; // 方向个数;

    const ItemTypeNothing          = 0;
    const ItemTypeWeapon           = 1;
    const ItemTypeArmour           = 2;
    const ItemTypeHelmet           = 4;
    const ItemTypeNecklace         = 5;
    const ItemTypeBracelet         = 6;
    const ItemTypeRing             = 7;
    const ItemTypeAmulet           = 8;
    const ItemTypeBelt             = 9;
    const ItemTypeBoots            = 10;
    const ItemTypeStone            = 11;
    const ItemTypeTorch            = 12;
    const ItemTypePotion           = 13;
    const ItemTypeOre              = 14;
    const ItemTypeMeat             = 15;
    const ItemTypeCraftingMaterial = 16;
    const ItemTypeScroll           = 17;
    const ItemTypeGem              = 18;
    const ItemTypeMount            = 19;
    const ItemTypeBook             = 20;
    const ItemTypeScript           = 21;
    const ItemTypeReins            = 22;
    const ItemTypeBells            = 23;
    const ItemTypeSaddle           = 24;
    const ItemTypeRibbon           = 25;
    const ItemTypeMask             = 26;
    const ItemTypeFood             = 27;
    const ItemTypeHook             = 28;
    const ItemTypeFloat            = 29;
    const ItemTypeBait             = 30;
    const ItemTypeFinder           = 31;
    const ItemTypeReel             = 32;
    const ItemTypeFish             = 33;
    const ItemTypeQuest            = 34;
    const ItemTypeAwakening        = 35;
    const ItemTypePets             = 36;
    const ItemTypeTransform        = 37;

    const ItemGradeNone      = 0;
    const ItemGradeCommon    = 1;
    const ItemGradeRare      = 2;
    const ItemGradeLegendary = 3;
    const ItemGradeMythical  = 4;

    const RequiredTypeLevel    = 0;
    const RequiredTypeMaxAC    = 1;
    const RequiredTypeMaxMAC   = 2;
    const RequiredTypeMaxDC    = 3;
    const RequiredTypeMaxMC    = 4;
    const RequiredTypeMaxSC    = 5;
    const RequiredTypeMaxLevel = 6;
    const RequiredTypeMinAC    = 7;
    const RequiredTypeMinMAC   = 8;
    const RequiredTypeMinDC    = 9;
    const RequiredTypeMinMC    = 10;
    const RequiredTypeMinSC    = 11;

    const RequiredClassWarrior  = 1;
    const RequiredClassWizard   = 2;
    const RequiredClassTaoist   = 4;
    const RequiredClassAssassin = 8;
    const RequiredClassArcher   = 16;

    const RequiredGenderMale   = 1;
    const RequiredGenderFemale = 2;

    const ItemSetNone       = 0;
    const ItemSetSpirit     = 1;
    const ItemSetRecall     = 2;
    const ItemSetRedOrchid  = 3;
    const ItemSetRedFlower  = 4;
    const ItemSetSmash      = 5;
    const ItemSetHwanDevil  = 6;
    const ItemSetPurity     = 7;
    const ItemSetFiveString = 8;
    const ItemSetMundane    = 9;
    const ItemSetNokChi     = 10;
    const ItemSetTaoProtect = 11;
    const ItemSetMir        = 12;
    const ItemSetBone       = 13;
    const ItemSetBug        = 14;
    const ItemSetWhiteGold  = 15;
    const ItemSetWhiteGoldH = 16;
    const ItemSetRedJade    = 17;
    const ItemSetRedJadeH   = 18;
    const ItemSetNephrite   = 19;
    const ItemSetNephriteH  = 20;
    const ItemSetWhisker1   = 21;
    const ItemSetWhisker2   = 22;
    const ItemSetWhisker3   = 23;
    const ItemSetWhisker4   = 24;
    const ItemSetWhisker5   = 25;
    const ItemSetHyeolryong = 26;
    const ItemSetMonitor    = 27;
    const ItemSetOppressive = 28;
    const ItemSetPaeok      = 29;
    const ItemSetSulgwan    = 30;

    const LevelEffectsNone       = 0;
    const LevelEffectsMist       = 0x0001;
    const LevelEffectsRedDragon  = 0x0002;
    const LevelEffectsBlueDragon = 0x0004;

    const ChatTypeNormal       = 0;
    const ChatTypeShout        = 1;
    const ChatTypeSystem       = 2;
    const ChatTypeHint         = 3;
    const ChatTypeAnnouncement = 4;
    const ChatTypeGroup        = 5;
    const ChatTypeWhisperIn    = 6;
    const ChatTypeWhisperOut   = 7;
    const ChatTypeGuild        = 8;
    const ChatTypeTrainer      = 9;
    const ChatTypeLevelUp      = 10;
    const ChatTypeSystem2      = 11;
    const ChatTypeRelationship = 12;
    const ChatTypeMentor       = 13;
    const ChatTypeShout2       = 14;
    const ChatTypeShout3       = 15;

    const MirGridTypeNone           = 0;
    const MirGridTypeInventory      = 1;
    const MirGridTypeEquipment      = 2;
    const MirGridTypeTrade          = 3;
    const MirGridTypeStorage        = 4;
    const MirGridTypeBuyBack        = 5;
    const MirGridTypeDropPanel      = 6;
    const MirGridTypeInspect        = 7;
    const MirGridTypeTrustMerchant  = 8;
    const MirGridTypeGuildStorage   = 9;
    const MirGridTypeGuestTrade     = 10;
    const MirGridTypeMount          = 11;
    const MirGridTypeFishing        = 12;
    const MirGridTypeQuestInventory = 13;
    const MirGridTypeAwakenItem     = 14;
    const MirGridTypeMail           = 15;
    const MirGridTypeRefine         = 16;
    const MirGridTypeRenting        = 17;
    const MirGridTypeGuestRenting   = 18;
    const MirGridTypeCraft          = 19;

    const AttackMode           = 0;
    const AttackModePeace      = 0;
    const AttackModeGroup      = 1;
    const AttackModeGuild      = 2;
    const AttackModeEnemyGuild = 3;
    const AttackModeRedBrown   = 4;
    const AttackModeAll        = 5;

// Spell 技能翻译参考自：https://github.com/cjlaaa/mir2/blob/4132c5b1f198e1353152839d799eefc667003d35/Common.cs#L3753

    const SpellNone             = 0;
    const SpellFencing          = 1; // 基本剑术 Warrior 战士;
    const SpellSlaying          = 2; // 攻杀剑术;
    const SpellThrusting        = 3; // 刺杀剑术;
    const SpellHalfMoon         = 4; // 半月弯刀;
    const SpellShoulderDash     = 5; // 野蛮冲撞;
    const SpellTwinDrakeBlade   = 6; // 双龙斩;
    const SpellEntrapment       = 7; // 捕绳剑;
    const SpellFlamingSword     = 8; // 烈火剑法;
    const SpellLionRoar         = 9; // 狮子吼;
    const SpellCrossHalfMoon    = 10; // 圆月弯刀;
    const SpellBladeAvalanche   = 11; // 攻破斩;
    const SpellProtectionField  = 12; // 护身气幕;
    const SpellRage             = 13; // 剑气爆;
    const SpellCounterAttack    = 14; // 反击;
    const SpellSlashingBurst    = 15; // 日闪;
    const SpellFury             = 16; // 血龙剑法;
    const SpellImmortalSkin     = 17;
    const SpellFireBall         = 31; // 火球术 Wizard 法师;
    const SpellRepulsion        = 32; // 抗拒火环;
    const SpellElectricShock    = 33; // 诱惑之光;
    const SpellGreatFireBall    = 34; // 大火球;
    const SpellHellFire         = 35; // 地狱火;
    const SpellThunderBolt      = 36; // 雷电术;
    const SpellTeleport         = 37; // 瞬息移动;
    const SpellFireBang         = 38; // 爆裂火焰;
    const SpellFireWall         = 39; // 火墙;
    const SpellLightning        = 40; // 疾光电影;
    const SpellFrostCrunch      = 41; // 寒冰掌;
    const SpellThunderStorm     = 42; // 地狱雷光;
    const SpellMagicShield      = 43; // 魔法盾;
    const SpellTurnUndead       = 44; // 圣言术;
    const SpellVampirism        = 45; // 嗜血术;
    const SpellIceStorm         = 46; // 冰咆哮;
    const SpellFlameDisruptor   = 47; // 火龙术;
    const SpellMirroring        = 48; // 分身术;
    const SpellFlameField       = 49; // 火龙气焰;
    const SpellBlizzard         = 50; // 天霜冰环;
    const SpellMagicBooster     = 51; // 深延术;
    const SpellMeteorStrike     = 52; // 流星火雨;
    const SpellIceThrust        = 53; // 冰焰术;
    const SpellFastMove         = 54;
    const SpellStormEscape      = 55;
    const SpellHealing          = 61; // 治愈术 Taoist 道士;
    const SpellSpiritSword      = 62; // 精神力战法;
    const SpellPoisoning        = 63; // 施毒术;
    const SpellSoulFireBall     = 64; // 灵魂火符;
    const SpellSummonSkeleton   = 65; // 召唤骷髅;
    const SpellHiding           = 67; // 隐身术;
    const SpellMassHiding       = 68; // 集体隐身术;
    const SpellSoulShield       = 69; // 幽灵盾;
    const SpellRevelation       = 70; // 心灵启示;
    const SpellBlessedArmour    = 71; // 神圣战甲术;
    const SpellEnergyRepulsor   = 72; // 气功波;
    const SpellTrapHexagon      = 73; // 困魔咒;
    const SpellPurification     = 74; // 净化术;
    const SpellMassHealing      = 75; // 群体治疗术;
    const SpellHallucination    = 76; // 迷魂术;
    const SpellUltimateEnhancer = 77; // 无极真气;
    const SpellSummonShinsu     = 78; // 召唤神兽;
    const SpellReincarnation    = 79; // 复活术;
    const SpellSummonHolyDeva   = 80; // 召唤月灵;
    const SpellCurse            = 81; // 诅咒术;
    const SpellPlague           = 82; // 瘟疫;
    const SpellPoisonCloud      = 83; // 毒云;
    const SpellEnergyShield     = 84; // 阴阳盾;
    const SpellPetEnhancer      = 85; // 血龙水;
    const SpellHealingCircle    = 86;
    const SpellFatalSword       = 91; //Assassin;
    const SpellDoubleSlash      = 92;
    const SpellHaste            = 93;
    const SpellFlashDash        = 94;
    const SpellLightBody        = 95;
    const SpellHeavenlySword    = 96;
    const SpellFireBurst        = 97;
    const SpellTrap             = 98;
    const SpellPoisonSword      = 99;
    const SpellMoonLight        = 100;
    const SpellMPEater          = 101;
    const SpellSwiftFeet        = 102;
    const SpellDarkBody         = 103;
    const SpellHemorrhage       = 104;
    const SpellCrescentSlash    = 105;
    const SpellMoonMist         = 106;
    const SpellFocus            = 121; //Archer;
    const SpellStraightShot     = 122;
    const SpellDoubleShot       = 123;
    const SpellExplosiveTrap    = 124;
    const SpellDelayedExplosion = 125;
    const SpellMeditation       = 126;
    const SpellBackStep         = 127;
    const SpellElementalShot    = 128;
    const SpellConcentration    = 129;
    const SpellStonetrap        = 130;
    const SpellElementalBarrier = 131;
    const SpellSummonVampire    = 132;
    const SpellVampireShot      = 133;
    const SpellSummonToad       = 134;
    const SpellPoisonShot       = 135;
    const SpellCrippleShot      = 136;
    const SpellSummonSnakes     = 137;
    const SpellNapalmShot       = 138;
    const SpellOneWithNature    = 139;
    const SpellBindingShot      = 140;
    const SpellMentalState      = 141;
    const SpellBlink            = 151; //Custom;
    const SpellPortal           = 152;
    const SpellBattleCry        = 153;
    const SpellDigOutZombie     = 200; //Map Events;
    const SpellRubble           = 201;
    const SpellMapLightning     = 202;
    const SpellMapLava          = 203;
    const SpellMapQuake1        = 204;
    const SpellMapQuake2        = 205;

    const PanelTypeBuy            = 0;
    const PanelTypeSell           = 1;
    const PanelTypeRepair         = 2;
    const PanelTypeSpecialRepair  = 3;
    const PanelTypeConsign        = 4;
    const PanelTypeCraft          = 5;
    const PanelTypeRefine         = 6;
    const PanelTypeCheckRefine    = 7;
    const PanelTypeDisassemble    = 8;
    const PanelTypeDowngrade      = 9;
    const PanelTypeReset          = 10;
    const PanelTypeCollectRefine  = 11;
    const PanelTypeReplaceWedRing = 12;

    const CellAttributeWalk     = 0;
    const CellAttributeHighWall = 1;
    const CellAttributeLowWall  = 2;

    const PetMode           = 0;
    const PetModeBoth       = 0;
    const PetModeMoveOnly   = 1;
    const PetModeAttackOnly = 2;
    const PetModeNone       = 3;

    const UserItemTypeInventory      = 0;
    const UserItemTypeEquipment      = 1;
    const UserItemTypeQuestInventory = 2;
    const UserItemTypeStorage        = 3;

    const PoisonTypeNone             = 0;
    const PoisonTypeGreen            = 1;
    const PoisonTypeRed              = 2;
    const PoisonTypeSlow             = 4;
    const PoisonTypeFrozen           = 8;
    const PoisonTypeStun             = 16;
    const PoisonTypeParalysis        = 32;
    const PoisonTypeDelayedExplosion = 64;
    const PoisonTypeBleeding         = 128;
    const PoisonTypeLRParalysis      = 256;

    const SpellEffectNone                 = 0;
    const SpellEffectFatalSword           = 1;
    const SpellEffectTeleport             = 2;
    const SpellEffectHealing              = 3;
    const SpellEffectRedMoonEvil          = 4;
    const SpellEffectTwinDrakeBlade       = 5;
    const SpellEffectMagicShieldUp        = 6;
    const SpellEffectMagicShieldDown      = 7;
    const SpellEffectGreatFoxSpirit       = 8;
    const SpellEffectEntrapment           = 9;
    const SpellEffectReflect              = 10;
    const SpellEffectCritical             = 11;
    const SpellEffectMine                 = 12;
    const SpellEffectElementalBarrierUp   = 13;
    const SpellEffectElementalBarrierDown = 14;
    const SpellEffectDelayedExplosion     = 15;
    const SpellEffectMPEater              = 16;
    const SpellEffectHemorrhage           = 17;
    const SpellEffectBleeding             = 18;
    const SpellEffectAwakeningSuccess     = 19;
    const SpellEffectAwakeningFail        = 20;
    const SpellEffectAwakeningMiss        = 21;
    const SpellEffectAwakeningHit         = 22;
    const SpellEffectStormEscape          = 23;
    const SpellEffectTurtleKing           = 24;
    const SpellEffectBehemoth             = 25;
    const SpellEffectStunned              = 26;
    const SpellEffectIcePillar            = 27;

    const BuffTypeNone             = 0;
    const BuffTypeTemporalFlux     = 1;
    const BuffTypeHiding           = 2;
    const BuffTypeHaste            = 3;
    const BuffTypeSwiftFeet        = 4;
    const BuffTypeFury             = 5;
    const BuffTypeSoulShield       = 6;
    const BuffTypeBlessedArmour    = 7;
    const BuffTypeLightBody        = 8;
    const BuffTypeUltimateEnhancer = 9;
    const BuffTypeProtectionField  = 10;
    const BuffTypeRage             = 11;
    const BuffTypeCurse            = 12;
    const BuffTypeMoonLight        = 13;
    const BuffTypeDarkBody         = 14;
    const BuffTypeConcentration    = 15;
    const BuffTypeVampireShot      = 16;
    const BuffTypePoisonShot       = 17;
    const BuffTypeCounterAttack    = 18;
    const BuffTypeMentalState      = 19;
    const BuffTypeEnergyShield     = 20;
    const BuffTypeMagicBooster     = 21;
    const BuffTypePetEnhancer      = 22;
    const BuffTypeImmortalSkin     = 23;
    const BuffTypeMagicShield      = 24;

    const BuffTypeGameMaster      = 100;
    const BuffTypeGeneral         = 101;
    const BuffTypeExp             = 102;
    const BuffTypeDrop            = 103;
    const BuffTypeGold            = 104;
    const BuffTypeBagWeight       = 105;
    const BuffTypeTransform       = 106;
    const BuffTypeRelationshipEXP = 107;
    const BuffTypeMentee          = 108;
    const BuffTypeMentor          = 109;
    const BuffTypeGuild           = 110;
    const BuffTypePrison          = 111;
    const BuffTypeRested          = 112;
    const BuffTypeImpact          = 200;
    const BuffTypeMagic           = 201;
    const BuffTypeTaoist          = 202;
    const BuffTypeStorm           = 203;
    const BuffTypeHealthAid       = 204;
    const BuffTypeManaAid         = 205;
    const BuffTypeDefence         = 206;
    const BuffTypeMagicDefence    = 207;
    const BuffTypeWonderDrug      = 208;
    const BuffTypeKnapsack        = 209;

    const MonsterGuard              = 0;
    const MonsterTaoistGuard        = 1;
    const MonsterGuard2             = 2;
    const MonsterHen                = 3;
    const MonsterDeer               = 4;
    const MonsterScarecrow          = 5;
    const MonsterHookingCat         = 6;
    const MonsterRakingCat          = 7;
    const MonsterYob                = 8;
    const MonsterOma                = 9;
    const MonsterCannibalPlant      = 10;
    const MonsterForestYeti         = 11;
    const MonsterSpittingSpider     = 12;
    const MonsterChestnutTree       = 13;
    const MonsterEbonyTree          = 14;
    const MonsterLargeMushroom      = 15;
    const MonsterCherryTree         = 16;
    const MonsterOmaFighter         = 17;
    const MonsterOmaWarrior         = 18;
    const MonsterCaveBat            = 19;
    const MonsterCaveMaggot         = 20;
    const MonsterScorpion           = 21;
    const MonsterSkeleton           = 22;
    const MonsterBoneFighter        = 23;
    const MonsterAxeSkeleton        = 24;
    const MonsterBoneWarrior        = 25;
    const MonsterBoneElite          = 26;
    const MonsterDung               = 27;
    const MonsterDark               = 28;
    const MonsterWoomaSoldier       = 29;
    const MonsterWoomaFighter       = 30;
    const MonsterWoomaWarrior       = 31;
    const MonsterFlamingWooma       = 32;
    const MonsterWoomaGuardian      = 33;
    const MonsterWoomaTaurus        = 34;
    const MonsterWhimperingBee      = 35;
    const MonsterGiantWorm          = 36;
    const MonsterCentipede          = 37;
    const MonsterBlackMaggot        = 38;
    const MonsterTongs              = 39;
    const MonsterEvilTongs          = 40;
    const MonsterEvilCentipede      = 41;
    const MonsterBugBat             = 42;
    const MonsterBugBatMaggot       = 43;
    const MonsterWedgeMoth          = 44;
    const MonsterRedBoar            = 45;
    const MonsterBlackBoar          = 46;
    const MonsterSnakeScorpion      = 47;
    const MonsterWhiteBoar          = 48;
    const MonsterEvilSnake          = 49;
    const MonsterBombSpider         = 50;
    const MonsterRootSpider         = 51;
    const MonsterSpiderBat          = 52;
    const MonsterVenomSpider        = 53;
    const MonsterGangSpider         = 54;
    const MonsterGreatSpider        = 55;
    const MonsterLureSpider         = 56;
    const MonsterBigApe             = 57;
    const MonsterEvilApe            = 58;
    const MonsterGrayEvilApe        = 59;
    const MonsterRedEvilApe         = 60;
    const MonsterCrystalSpider      = 61;
    const MonsterRedMoonEvil        = 62;
    const MonsterBigRat             = 63;
    const MonsterZumaArcher         = 64;
    const MonsterZumaStatue         = 65;
    const MonsterZumaGuardian       = 66;
    const MonsterRedThunderZuma     = 67;
    const MonsterZumaTaurus         = 68;
    const MonsterDigOutZombie       = 69;
    const MonsterClZombie           = 70;
    const MonsterNdZombie           = 71;
    const MonsterCrawlerZombie      = 72;
    const MonsterShamanZombie       = 73;
    const MonsterGhoul              = 74;
    const MonsterKingScorpion       = 75;
    const MonsterKingHog            = 76;
    const MonsterDarkDevil          = 77;
    const MonsterBoneFamiliar       = 78;
    const MonsterShinsu             = 79;
    const MonsterShinsu1            = 80;
    const MonsterSpiderFrog         = 81;
    const MonsterHoroBlaster        = 82;
    const MonsterBlueHoroBlaster    = 83;
    const MonsterKekTal             = 84;
    const MonsterVioletKekTal       = 85;
    const MonsterKhazard            = 86;
    const MonsterRoninGhoul         = 87;
    const MonsterToxicGhoul         = 88;
    const MonsterBoneCaptain        = 89;
    const MonsterBoneSpearman       = 90;
    const MonsterBoneBlademan       = 91;
    const MonsterBoneArcher         = 92;
    const MonsterBoneLord           = 93;
    const MonsterMinotaur           = 94;
    const MonsterIceMinotaur        = 95;
    const MonsterElectricMinotaur   = 96;
    const MonsterWindMinotaur       = 97;
    const MonsterFireMinotaur       = 98;
    const MonsterRightGuard         = 99;
    const MonsterLeftGuard          = 100;
    const MonsterMinotaurKing       = 101;
    const MonsterFrostTiger         = 102;
    const MonsterSheep              = 103;
    const MonsterWolf               = 104;
    const MonsterShellNipper        = 105;
    const MonsterKeratoid           = 106;
    const MonsterGiantKeratoid      = 107;
    const MonsterSkyStinger         = 108;
    const MonsterSandWorm           = 109;
    const MonsterVisceralWorm       = 110;
    const MonsterRedSnake           = 111;
    const MonsterTigerSnake         = 112;
    const MonsterYimoogi            = 113;
    const MonsterGiantWhiteSnake    = 114;
    const MonsterBlueSnake          = 115;
    const MonsterYellowSnake        = 116;
    const MonsterHolyDeva           = 117;
    const MonsterAxeOma             = 118;
    const MonsterSwordOma           = 119;
    const MonsterCrossbowOma        = 120;
    const MonsterWingedOma          = 121;
    const MonsterFlailOma           = 122;
    const MonsterOmaGuard           = 123;
    const MonsterYinDevilNode       = 124;
    const MonsterYangDevilNode      = 125;
    const MonsterOmaKing            = 126;
    const MonsterBlackFoxman        = 127;
    const MonsterRedFoxman          = 128;
    const MonsterWhiteFoxman        = 129;
    const MonsterTrapRock           = 130;
    const MonsterGuardianRock       = 131;
    const MonsterThunderElement     = 132;
    const MonsterCloudElement       = 133;
    const MonsterGreatFoxSpirit     = 134;
    const MonsterHedgeKekTal        = 135;
    const MonsterBigHedgeKekTal     = 136;
    const MonsterRedFrogSpider      = 137;
    const MonsterBrownFrogSpider    = 138;
    const MonsterArcherGuard        = 139;
    const MonsterKatanaGuard        = 140;
    const MonsterArcherGuard2       = 141;
    const MonsterPig                = 142;
    const MonsterBull               = 143;
    const MonsterBush               = 144;
    const MonsterChristmasTree      = 145;
    const MonsterHighAssassin       = 146;
    const MonsterDarkDustPile       = 147;
    const MonsterDarkBrownWolf      = 148;
    const MonsterFootball           = 149;
    const MonsterGingerBreadman     = 150;
    const MonsterHalloweenScythe    = 151;
    const MonsterGhastlyLeecher     = 152;
    const MonsterCyanoGhast         = 153;
    const MonsterMutatedManworm     = 154;
    const MonsterCrazyManworm       = 155;
    const MonsterMudPile            = 156;
    const MonsterTailedLion         = 157;
    const MonsterBehemoth           = 158; //done BOSS;
    const MonsterDarkDevourer       = 159; //done;
    const MonsterPoisonHugger       = 160; //done;
    const MonsterHugger             = 161; //done;
    const MonsterMutatedHugger      = 162; //done;
    const MonsterDreamDevourer      = 163; //done;
    const MonsterTreasurebox        = 164; //done;
    const MonsterSnowPile           = 165; //done;
    const MonsterSnowman            = 166; //done;
    const MonsterSnowTree           = 167; //done;
    const MonsterGiantEgg           = 168; //done;
    const MonsterRedTurtle          = 169; //done;
    const MonsterGreenTurtle        = 170; //done;
    const MonsterBlueTurtle         = 171; //done;
    const MonsterCatapult           = 172; //not added frames; //special 3 states in 1;
    const MonsterSabukWallSection   = 173; //not added frames;
    const MonsterNammandWallSection = 174; //not added frames;
    const MonsterSiegeRepairman     = 175; //not added frames;
    const MonsterBlueSanta          = 176; //done;
    const MonsterBattleStandard     = 177; //done;
    //const MonsterArcherGuard2 = 178,//done;
    const MonsterRedYimoogi         = 179; //done;
    const MonsterLionRiderMale      = 180; //frames not added;
    const MonsterLionRiderFemale    = 181; //frames not added;
    const MonsterTornado            = 182; //done;
    const MonsterFlameTiger         = 183; //done;
    const MonsterWingedTigerLord    = 184; //done BOSS;
    const MonsterTowerTurtle        = 185; //done;
    const MonsterFinialTurtle       = 186; //done;
    const MonsterTurtleKing         = 187; //done BOSS;
    const MonsterDarkTurtle         = 188; //done;
    const MonsterLightTurtle        = 189; //done;
    const MonsterDarkSwordOma       = 190; //done;
    const MonsterDarkAxeOma         = 191; //done;
    const MonsterDarkCrossbowOma    = 192; //done;
    const MonsterDarkWingedOma      = 193; //done;
    const MonsterBoneWhoo           = 194; //done;
    const MonsterDarkSpider         = 195; //done;
    const MonsterViscusWorm         = 196; //done;
    const MonsterViscusCrawler      = 197; //done;
    const MonsterCrawlerLave        = 198; //done;
    const MonsterDarkYob            = 199; //done;
    const MonsterFlamingMutant      = 200; //FINISH;
    const MonsterStoningStatue      = 201; //FINISH BOSS;
    const MonsterFlyingStatue       = 202; //FINISH;
    const MonsterValeBat            = 203; //done;
    const MonsterWeaver             = 204; //done;
    const MonsterVenomWeaver        = 205; //done;
    const MonsterCrackingWeaver     = 206; //done;
    const MonsterArmingWeaver       = 207; //done;
    const MonsterCrystalWeaver      = 208; //done;
    const MonsterFrozenZumaStatue   = 209; //done;
    const MonsterFrozenZumaGuardian = 210; //done;
    const MonsterFrozenRedZuma      = 211; //done;
    const MonsterGreaterWeaver      = 212; //done;
    const MonsterSpiderWarrior      = 213; //done;
    const MonsterSpiderBarbarian    = 214; //done;
    const MonsterHellSlasher        = 215; //done;
    const MonsterHellPirate         = 216; //done;
    const MonsterHellCannibal       = 217; //done;
    const MonsterHellKeeper         = 218; //done BOSS;
    const MonsterHellBolt           = 219; //done;
    const MonsterWitchDoctor        = 220; //done;
    const MonsterManectricHammer    = 221; //done;
    const MonsterManectricClub      = 222; //done;
    const MonsterManectricClaw      = 223; //done;
    const MonsterManectricStaff     = 224; //done;
    const MonsterNamelessGhost      = 225; //done;
    const MonsterDarkGhost          = 226; //done;
    const MonsterChaosGhost         = 227; //done;
    const MonsterManectricBlest     = 228; //done;
    const MonsterManectricKing      = 229; //done;
    const MonsterFrozenDoor         = 230; //done;
    const MonsterIcePillar          = 231; //done;
    const MonsterFrostYeti          = 232; //done;
    const MonsterManectricSlave     = 233; //done;
    const MonsterTrollHammer        = 234; //done;
    const MonsterTrollBomber        = 235; //done;
    const MonsterTrollStoner        = 236; //done;
    const MonsterTrollKing          = 237; //done BOSS;
    const MonsterFlameSpear         = 238; //done;
    const MonsterFlameMage          = 239; //done;
    const MonsterFlameScythe        = 240; //done;
    const MonsterFlameAssassin      = 241; //done;
    const MonsterFlameQueen         = 242; //finish BOSS;
    const MonsterHellKnight1        = 243; //done;
    const MonsterHellKnight2        = 244; //done;
    const MonsterHellKnight3        = 245; //done;
    const MonsterHellKnight4        = 246; //done;
    const MonsterHellLord           = 247; //done BOSS;
    const MonsterWaterGuard         = 248; //done;
    const MonsterIceGuard           = 249;
    const MonsterElementGuard       = 250;
    const MonsterDemonGuard         = 251;
    const MonsterKingGuard          = 252;
    const MonsterSnake10            = 253; //done;
    const MonsterSnake11            = 254; //done;
    const MonsterSnake12            = 255; //done;
    const MonsterSnake13            = 256; //done;
    const MonsterSnake14            = 257; //done;
    const MonsterSnake15            = 258; //done;
    const MonsterSnake16            = 259; //done;
    const MonsterSnake17            = 260; //done;
    const MonsterDeathCrawler       = 261;
    const MonsterBurningZombie      = 262;
    const MonsterMudZombie          = 263;
    const MonsterFrozenZombie       = 264;
    const MonsterUndeadWolf         = 265;
    const MonsterDemonwolf          = 266;
    const MonsterWhiteMammoth       = 267;
    const MonsterDarkBeast          = 268;
    const MonsterLightBeast         = 269;
    const MonsterBloodBaboon        = 270;
    const MonsterHardenRhino        = 271;
    const MonsterAncientBringer     = 272;
    const MonsterFightingCat        = 273;
    const MonsterFireCat            = 274;
    const MonsterCatWidow           = 275;
    const MonsterStainHammerCat     = 276;
    const MonsterBlackHammerCat     = 277;
    const MonsterStrayCat           = 278;
    const MonsterCatShaman          = 279;
    const MonsterJar1               = 280;
    const MonsterJar2               = 281;
    const MonsterSeedingsGeneral    = 282;
    const MonsterRestlessJar        = 283;
    const MonsterGeneralJinmYo      = 284;
    const MonsterBunny              = 285;
    const MonsterTucson             = 286;
    const MonsterTucsonFighter      = 287;
    const MonsterTucsonMage         = 288;
    const MonsterTucsonWarrior      = 289;
    const MonsterArmadillo          = 290;
    const MonsterArmadilloElder     = 291;
    const MonsterTucsonEgg          = 292;
    const MonsterPlaguedTucson      = 293;
    const MonsterSandSnail          = 294;
    const MonsterCannibalTentacles  = 295;
    const MonsterTucsonGeneral      = 296;
    const MonsterGasToad            = 297;
    const MonsterMantis             = 298;
    const MonsterSwampWarrior       = 299;
    const MonsterAssassinBird       = 300;
    const MonsterRhinoWarrior       = 301;
    const MonsterRhinoPriest        = 302;
    const MonsterSwampSlime         = 303;
    const MonsterRockGuard          = 304;
    const MonsterMudWarrior         = 305;
    const MonsterSmallPot           = 306;
    const MonsterTreeQueen          = 307;
    const MonsterShellFighter       = 308;
    const MonsterDarkBaboon         = 309;
    const MonsterTwinHeadBeast      = 310;
    const MonsterOmaCannibal        = 311;
    const MonsterOmaBlest           = 312;
    const MonsterOmaSlasher         = 313;
    const MonsterOmaAssassin        = 314;
    const MonsterOmaMage            = 315;
    const MonsterOmaWitchDoctor     = 316;
    const MonsterLightningBead      = 317;
    const MonsterHealingBead        = 318;
    const MonsterPowerUpBead        = 319;
    const MonsterDarkOmaKing        = 320;
    const MonsterCaveMage           = 321;
    const MonsterMandrill           = 322;
    const MonsterPlagueCrab         = 323;
    const MonsterCreeperPlant       = 324;
    const MonsterFloatingWraith     = 325;
    const MonsterArmedPlant         = 326;
    const MonsterAvengerPlant       = 327;
    const MonsterNadz               = 328;
    const MonsterAvengingSpirit     = 329;
    const MonsterAvengingWarrior    = 330;
    const MonsterAxePlant           = 331;
    const MonsterWoodBox            = 332;
    const MonsterClawBeast          = 333;
    const MonsterKillerPlant        = 334;
    const MonsterSackWarrior        = 335;
    const MonsterWereTiger          = 336;
    const MonsterKingHydrax         = 337;
    const MonsterHydrax             = 338;
    const MonsterHornedMage         = 339;
    const MonsterBasiloid           = 340;
    const MonsterHornedArcher       = 341;
    const MonsterColdArcher         = 342;
    const MonsterHornedWarrior      = 343;
    const MonsterFloatingRock       = 344;
    const MonsterScalyBeast         = 345;
    const MonsterHornedSorceror     = 346;
    const MonsterBoulderSpirit      = 347;
    const MonsterHornedCommander    = 348;
    const MonsterMoonStone          = 349;
    const MonsterSunStone           = 350;
    const MonsterLightningStone     = 351;
    const MonsterTurtlegrass        = 352;
    const MonsterMantree            = 353;
    const MonsterBear               = 354;
    const MonsterLeopard            = 355;
    const MonsterChieftainArcher    = 356;
    const MonsterChieftainSword     = 357;
    const MonsterStoningSpider      = 358; //Archer Spell mob (not yet coded;
    const MonsterVampireSpider      = 359; //Archer Spell mob;
    const MonsterSpittingToad       = 360; //Archer Spell mob;
    const MonsterSnakeTotem         = 361; //Archer Spell mob;
    const MonsterCharmedSnake       = 362; //Archer Spell mob;
    const MonsterFrozenSoldier      = 363;
    const MonsterFrozenFighter      = 364;
    const MonsterFrozenArcher       = 365;
    const MonsterFrozenKnight       = 366;
    const MonsterFrozenGolem        = 367;
    const MonsterIcePhantom         = 368;
    const MonsterSnowWolf           = 369;
    const MonsterSnowWolfKing       = 370;
    const MonsterWaterDragon        = 371;
    const MonsterBlackTortoise      = 372;
    const MonsterManticore          = 373;
    const MonsterDragonWarrior      = 374;
    const MonsterDragonArcher       = 375;
    const MonsterKirin              = 376;
    const MonsterGuard3             = 377;
    const MonsterArcherGuard3       = 378;
    const MonsterBunny2             = 379;
    const MonsterFrozenMiner        = 380;
    const MonsterFrozenAxeman       = 381;
    const MonsterFrozenMagician     = 382;
    const MonsterSnowYeti           = 383;
    const MonsterIceCrystalSoldier  = 384;
    const MonsterDarkWraith         = 385;
    const MonsterDarkSpirit         = 386;
    const MonsterCrystalBeast       = 387;
    const MonsterRedOrb             = 388;
    const MonsterBlueOrb            = 389;
    const MonsterYellowOrb          = 390;
    const MonsterGreenOrb           = 391;
    const MonsterWhiteOrb           = 392;
    const MonsterFatalLotus         = 393;
    const MonsterAntCommander       = 394;
    const MonsterCargoBoxwithlogo   = 395;
    const MonsterDoe                = 396;
    const MonsterReindeer           = 397; //frames not added;
    const MonsterAngryReindeer      = 398;
    const MonsterCargoBox           = 399;
    const MonsterRam1               = 400;
    const MonsterRam2               = 401;
    const MonsterKite               = 402;
    const MonsterEvilMir            = 900;
    const MonsterEvilMirBody        = 901;
    const MonsterDragonStatue       = 902;
    const MonsterHellBomb1          = 903;
    const MonsterHellBomb2          = 904;
    const MonsterHellBomb3          = 905;
    const MonsterSabukGate          = 950;
    const MonsterPalaceWallLeft     = 951;
    const MonsterPalaceWall1        = 952;
    const MonsterPalaceWall2        = 953;
    const MonsterGiGateSouth        = 954;
    const MonsterGiGateEast         = 955;
    const MonsterGiGateWest         = 956;
    const MonsterSSabukWall1        = 957;
    const MonsterSSabukWall2        = 958;
    const MonsterSSabukWall3        = 959;
    const MonsterBabyPig            = 10000; //Permanent;
    const MonsterChick              = 10001; //Special;
    const MonsterKitten             = 10002; //Permanent;
    const MonsterBabySkeleton       = 10003; //Special;
    const MonsterBaekdon            = 10004; //Special;
    const MonsterWimaen             = 10005; //Event;
    const MonsterBlackKitten        = 10006; //unknown;
    const MonsterBabyDragon         = 10007; //unknown;
    const MonsterOlympicFlame       = 10008; //unknown;
    const MonsterBabySnowMan        = 10009; //unknown;
    const MonsterFrog               = 10010; //unknown;
    const MonsterBabyMonkey         = 10011; //unknown;
    const MonsterAngryBird          = 10012;
    const MonsterFoxey              = 10013;

    const DamageTypeHit      = 0;
    const DamageTypeMiss     = 1;
    const DamageTypeCritical = 2;

    const ObjectTypeNone     = 0;
    const ObjectTypePlayer   = 1;
    const ObjectTypeItem     = 2;
    const ObjectTypeMerchant = 3;
    const ObjectTypeSpell    = 4;
    const ObjectTypeMonster  = 5;
    const ObjectTypeDeco     = 6;
    const ObjectTypeCreature = 7;

    const DefenceTypeACAgility  = 0;
    const DefenceTypeAC         = 1;
    const DefenceTypeMACAgility = 2;
    const DefenceTypeMAC        = 3;
    const DefenceTypeAgility    = 4;
    const DefenceTypeRepulsion  = 5;
    const DefenceTypeNone       = 6;

    const BindModeNone                = 0; //;
    const BindModeDontDeathdrop       = 1; //0x0001;
    const BindModeDontDrop            = 2; //0x0002;
    const BindModeDontSell            = 4; //0x0004;
    const BindModeDontStore           = 8; //0x0008;
    const BindModeDontTrade           = 16; //0x0010;
    const BindModeDontRepair          = 32; //0x0020;
    const BindModeDontUpgrade         = 64; //0x0040;
    const BindModeDestroyOnDrop       = 128; //0x0080;
    const BindModeBreakOnDeath        = 256; //0x0100;
    const BindModeBindOnEquip         = 512; //0x0200;
    const BindModeNoSRepair           = 1024; //0x0400;
    const BindModeNoWeddingRing       = 2048; //0x0800;
    const BindModeUnableToRent        = 4096;
    const BindModeUnableToDisassemble = 8192;
    const BindModeNoMail              = 16384;

}
