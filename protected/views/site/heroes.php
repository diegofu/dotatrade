<link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/heroes.css" />
<script src="<?=Yii::app()->request->baseUrl.'/js/heroes.js' ?>"></script>
<div id="centerColTopShadow"></div>
<div id="centerColTop"></div>
<div id="centerColContainer">
   <div id="centerColContent">
      <div class="redboxOuter">
         <div class="redboxContent">
            <div class="redboxTop"></div>
            <div id="heroPickerInner">
               <div id="heroBioArea">
                  <div id="bioBoxFade"><img src="http://media.steampowered.com/apps/dota2/images/heropedia/biobox_fade.png" width="874" height="26" /></div>
                  <h2 id="heroBioLoading">Choose a hero</h2>
                  <div style="display:none" id="heroBioDynamic">
                     <h1 id="heroBioName"></h1>
                     <div class="bioBoxHR"></div>
                     <p id="heroBioRoles"></p>
                  </div>
               </div>
               <div class="heroColLeft">
                  <div id="columnHeader"><span id="columnHeaderTextStr">Strength</span></div>
                  <div class="heroIcons">
                     <a id="link_earthshaker" class="heroPickerIconLink" href="http://www.dota2.com/hero/Earthshaker/">
                     <img id="hover_earthshaker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/earthshaker_hphover.png' ?>" />
                     <img id="base_earthshaker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/earthshaker_sb.png' ?>" />
                     </a>
                     <a id="link_sven" class="heroPickerIconLink" href="http://www.dota2.com/hero/Sven/">
                     <img id="hover_sven" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/sven_hphover.png' ?>" />
                     <img id="base_sven" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/sven_sb.png' ?>" />
                     </a>
                     <a id="link_tiny" class="heroPickerIconLink" href="http://www.dota2.com/hero/Tiny/">
                     <img id="hover_tiny" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tiny_hphover.png' ?>" />
                     <img id="base_tiny" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tiny_sb.png' ?>" />
                     </a>
                     <a id="link_kunkka" class="heroPickerIconLink" href="http://www.dota2.com/hero/Kunkka/">
                     <img id="hover_kunkka" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/kunkka_hphover.png' ?>" />
                     <img id="base_kunkka" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/kunkka_sb.png' ?>" />
                     </a>
                     <a id="link_beastmaster" class="heroPickerIconLink" href="http://www.dota2.com/hero/Beastmaster/">
                     <img id="hover_beastmaster" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/beastmaster_hphover.png' ?>" />
                     <img id="base_beastmaster" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/beastmaster_sb.png' ?>" />
                     </a>
                     <a id="link_dragon_knight" class="heroPickerIconLink" href="http://www.dota2.com/hero/Dragon_Knight/">
                     <img id="hover_dragon_knight" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/dragon_knight_hphover.png' ?>" />
                     <img id="base_dragon_knight" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/dragon_knight_sb.png' ?>" />
                     </a>
                     <a id="link_rattletrap" class="heroPickerIconLink" href="http://www.dota2.com/hero/Clockwerk/">
                     <img id="hover_rattletrap" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/clockwerk_hphover.png' ?>" />
                     <img id="base_rattletrap" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/clockwerk_sb.png' ?>" />
                     </a>
                     <a id="link_omniknight" class="heroPickerIconLink" href="http://www.dota2.com/hero/Omniknight/">
                     <img id="hover_omniknight" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/omniknight_hphover.png' ?>" />
                     <img id="base_omniknight" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/omniknight_sb.png' ?>" />
                     </a>
                     <a id="link_huskar" class="heroPickerIconLink" href="http://www.dota2.com/hero/Huskar/">
                     <img id="hover_huskar" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/huskar_hphover.png' ?>" />
                     <img id="base_huskar" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/huskar_sb.png' ?>" />
                     </a>
                     <a id="link_alchemist" class="heroPickerIconLink" href="http://www.dota2.com/hero/Alchemist/">
                     <img id="hover_alchemist" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/alchemist_hphover.png' ?>" />
                     <img id="base_alchemist" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/alchemist_sb.png' ?>" />
                     </a>
                     <a id="link_brewmaster" class="heroPickerIconLink" href="http://www.dota2.com/hero/Brewmaster/">
                     <img id="hover_brewmaster" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/brewmaster_hphover.png' ?>" />
                     <img id="base_brewmaster" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/brewmaster_sb.png' ?>" />
                     </a>
                     <a id="link_treant" class="heroPickerIconLink" href="http://www.dota2.com/hero/Treant_Protector/">
                     <img id="hover_treant" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/treant_protector_hphover.png' ?>" />
                     <img id="base_treant" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/treant_protector_sb.png' ?>" />
                     </a>
                     <a id="link_wisp" class="heroPickerIconLink" href="http://www.dota2.com/hero/Io/">
                     <img id="hover_wisp" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/io_hphover.png' ?>" />
                     <img id="base_wisp" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/io_sb.png' ?>" />
                     </a>
                     <a id="link_centaur" class="heroPickerIconLink" href="http://www.dota2.com/hero/Centaur_Warrunner/">
                     <img id="hover_centaur" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/centaur_warrunner_hphover.png' ?>" />
                     <img id="base_centaur" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/centaur_warrunner_sb.png' ?>" />
                     </a>
                     <a id="link_shredder" class="heroPickerIconLink" href="http://www.dota2.com/hero/Timbersaw/">
                     <img id="hover_shredder" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/timbersaw_hphover.png' ?>" />
                     <img id="base_shredder" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/timbersaw_sb.png' ?>" />
                     </a>
                     <a id="link_bristleback" class="heroPickerIconLink" href="http://www.dota2.com/hero/Bristleback/">
                     <img id="hover_bristleback" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bristleback_hphover.png' ?>" />
                     <img id="base_bristleback" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bristleback_sb.png' ?>" />
                     </a>
                     <a id="link_tusk" class="heroPickerIconLink" href="http://www.dota2.com/hero/Tusk/">
                     <img id="hover_tusk" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tusk_hphover.png' ?>" />
                     <img id="base_tusk" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tusk_sb.png' ?>" />
                     </a>
                     <a id="link_elder_titan" class="heroPickerIconLink" href="http://www.dota2.com/hero/Elder_Titan/">
                     <img id="hover_elder_titan" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/elder_titan_hphover.png' ?>" />
                     <img id="base_elder_titan" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/elder_titan_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColMiddle">
                  <div id="columnHeader"><span id="columnHeaderTextAgi">Agility</span></div>
                  <div class="heroIcons">
                     <a id="link_antimage" class="heroPickerIconLink" href="http://www.dota2.com/hero/Anti-Mage/">
                     <img id="hover_antimage" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/anti-mage_hphover.png' ?>" />
                     <img id="base_antimage" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/anti-mage_sb.png' ?>" />
                     </a>
                     <a id="link_drow_ranger" class="heroPickerIconLink" href="http://www.dota2.com/hero/Drow_Ranger/">
                     <img id="hover_drow_ranger" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/drow_ranger_hphover.png' ?>" />
                     <img id="base_drow_ranger" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/drow_ranger_sb.png' ?>" />
                     </a>
                     <a id="link_juggernaut" class="heroPickerIconLink" href="http://www.dota2.com/hero/Juggernaut/">
                     <img id="hover_juggernaut" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/juggernaut_hphover.png' ?>" />
                     <img id="base_juggernaut" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/juggernaut_sb.png' ?>" />
                     </a>
                     <a id="link_mirana" class="heroPickerIconLink" href="http://www.dota2.com/hero/Mirana/">
                     <img id="hover_mirana" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/mirana_hphover.png' ?>" />
                     <img id="base_mirana" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/mirana_sb.png' ?>" />
                     </a>
                     <a id="link_morphling" class="heroPickerIconLink" href="http://www.dota2.com/hero/Morphling/">
                     <img id="hover_morphling" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/morphling_hphover.png' ?>" />
                     <img id="base_morphling" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/morphling_sb.png' ?>" />
                     </a>
                     <a id="link_phantom_lancer" class="heroPickerIconLink" href="http://www.dota2.com/hero/Phantom_Lancer/">
                     <img id="hover_phantom_lancer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_lancer_hphover.png' ?>" />
                     <img id="base_phantom_lancer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_lancer_sb.png' ?>" />
                     </a>
                     <a id="link_vengefulspirit" class="heroPickerIconLink" href="http://www.dota2.com/hero/Vengeful_Spirit/">
                     <img id="hover_vengefulspirit" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/vengeful_spirit_hphover.png' ?>" />
                     <img id="base_vengefulspirit" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/vengeful_spirit_sb.png' ?>" />
                     </a>
                     <a id="link_riki" class="heroPickerIconLink" href="http://www.dota2.com/hero/Riki/">
                     <img id="hover_riki" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/riki_hphover.png' ?>" />
                     <img id="base_riki" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/riki_sb.png' ?>" />
                     </a>
                     <a id="link_sniper" class="heroPickerIconLink" href="http://www.dota2.com/hero/Sniper/">
                     <img id="hover_sniper" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/sniper_hphover.png' ?>" />
                     <img id="base_sniper" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/sniper_sb.png' ?>" />
                     </a>
                     <a id="link_templar_assassin" class="heroPickerIconLink" href="http://www.dota2.com/hero/Templar_Assassin/">
                     <img id="hover_templar_assassin" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/templar_assassin_hphover.png' ?>" />
                     <img id="base_templar_assassin" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/templar_assassin_sb.png' ?>" />
                     </a>
                     <a id="link_luna" class="heroPickerIconLink" href="http://www.dota2.com/hero/Luna/">
                     <img id="hover_luna" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/luna_hphover.png' ?>" />
                     <img id="base_luna" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/luna_sb.png' ?>" />
                     </a>
                     <a id="link_bounty_hunter" class="heroPickerIconLink" href="http://www.dota2.com/hero/Bounty_Hunter/">
                     <img id="hover_bounty_hunter" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bounty_hunter_hphover.png' ?>" />
                     <img id="base_bounty_hunter" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bounty_hunter_sb.png' ?>" />
                     </a>
                     <a id="link_ursa" class="heroPickerIconLink" href="http://www.dota2.com/hero/Ursa/">
                     <img id="hover_ursa" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/ursa_hphover.png' ?>" />
                     <img id="base_ursa" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/ursa_sb.png' ?>" />
                     </a>
                     <a id="link_gyrocopter" class="heroPickerIconLink" href="http://www.dota2.com/hero/Gyrocopter/">
                     <img id="hover_gyrocopter" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/gyrocopter_hphover.png' ?>" />
                     <img id="base_gyrocopter" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/gyrocopter_sb.png' ?>" />
                     </a>
                     <a id="link_lone_druid" class="heroPickerIconLink" href="http://www.dota2.com/hero/Lone_Druid/">
                     <img id="hover_lone_druid" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lone_druid_hphover.png' ?>" />
                     <img id="base_lone_druid" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lone_druid_sb.png' ?>" />
                     </a>
                     <a id="link_naga_siren" class="heroPickerIconLink" href="http://www.dota2.com/hero/Naga_Siren/">
                     <img id="hover_naga_siren" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/naga_siren_hphover.png' ?>" />
                     <img id="base_naga_siren" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/naga_siren_sb.png' ?>" />
                     </a>
                     <a id="link_troll_warlord" class="heroPickerIconLink" href="http://www.dota2.com/hero/Troll_Warlord/">
                     <img id="hover_troll_warlord" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/troll_warlord_hphover.png' ?>" />
                     <img id="base_troll_warlord" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/troll_warlord_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColRight">
                  <div id="columnHeader"><span id="columnHeaderTextInt">Intelligence</span></div>
                  <div class="heroIcons">
                     <a id="link_crystal_maiden" class="heroPickerIconLink" href="http://www.dota2.com/hero/Crystal_Maiden/">
                     <img id="hover_crystal_maiden" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/crystal_maiden_hphover.png' ?>" />
                     <img id="base_crystal_maiden" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/crystal_maiden_sb.png' ?>" />
                     </a>
                     <a id="link_puck" class="heroPickerIconLink" href="http://www.dota2.com/hero/Puck/">
                     <img id="hover_puck" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/puck_hphover.png' ?>" />
                     <img id="base_puck" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/puck_sb.png' ?>" />
                     </a>
                     <a id="link_storm_spirit" class="heroPickerIconLink" href="http://www.dota2.com/hero/Storm_Spirit/">
                     <img id="hover_storm_spirit" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/storm_spirit_hphover.png' ?>" />
                     <img id="base_storm_spirit" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/storm_spirit_sb.png' ?>" />
                     </a>
                     <a id="link_windrunner" class="heroPickerIconLink" href="http://www.dota2.com/hero/Windrunner/">
                     <img id="hover_windrunner" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/windrunner_hphover.png' ?>" />
                     <img id="base_windrunner" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/windrunner_sb.png' ?>" />
                     </a>
                     <a id="link_zuus" class="heroPickerIconLink" href="http://www.dota2.com/hero/Zeus/">
                     <img id="hover_zuus" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/zeus_hphover.png' ?>" />
                     <img id="base_zuus" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/zeus_sb.png' ?>" />
                     </a>
                     <a id="link_lina" class="heroPickerIconLink" href="http://www.dota2.com/hero/Lina/">
                     <img id="hover_lina" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lina_hphover.png' ?>" />
                     <img id="base_lina" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lina_sb.png' ?>" />
                     </a>
                     <a id="link_shadow_shaman" class="heroPickerIconLink" href="http://www.dota2.com/hero/Shadow_Shaman/">
                     <img id="hover_shadow_shaman" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_shaman_hphover.png' ?>" />
                     <img id="base_shadow_shaman" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_shaman_sb.png' ?>" />
                     </a>
                     <a id="link_tinker" class="heroPickerIconLink" href="http://www.dota2.com/hero/Tinker/">
                     <img id="hover_tinker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tinker_hphover.png' ?>" />
                     <img id="base_tinker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tinker_sb.png' ?>" />
                     </a>
                     <a id="link_furion" class="heroPickerIconLink" href="http://www.dota2.com/hero/Natures_Prophet/">
                     <img id="hover_furion" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/nature\'s_prophet_hphover.png' ?>" />
                     <img id="base_furion" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/nature\'s_prophet_sb.png' ?>" />
                     </a>
                     <a id="link_enchantress" class="heroPickerIconLink" href="http://www.dota2.com/hero/Enchantress/">
                     <img id="hover_enchantress" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/enchantress_hphover.png' ?>" />
                     <img id="base_enchantress" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/enchantress_sb.png' ?>" />
                     </a>
                     <a id="link_jakiro" class="heroPickerIconLink" href="http://www.dota2.com/hero/Jakiro/">
                     <img id="hover_jakiro" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/jakiro_hphover.png' ?>" />
                     <img id="base_jakiro" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/jakiro_sb.png' ?>" />
                     </a>
                     <a id="link_chen" class="heroPickerIconLink" href="http://www.dota2.com/hero/Chen/">
                     <img id="hover_chen" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/chen_hphover.png' ?>" />
                     <img id="base_chen" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/chen_sb.png' ?>" />
                     </a>
                     <a id="link_silencer" class="heroPickerIconLink" href="http://www.dota2.com/hero/Silencer/">
                     <img id="hover_silencer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/silencer_hphover.png' ?>" />
                     <img id="base_silencer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/silencer_sb.png' ?>" />
                     </a>
                     <a id="link_ogre_magi" class="heroPickerIconLink" href="http://www.dota2.com/hero/Ogre_Magi/">
                     <img id="hover_ogre_magi" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/ogre_magi_hphover.png' ?>" />
                     <img id="base_ogre_magi" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/ogre_magi_sb.png' ?>" />
                     </a>
                     <a id="link_rubick" class="heroPickerIconLink" href="http://www.dota2.com/hero/Rubick/">
                     <img id="hover_rubick" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/rubick_hphover.png' ?>" />
                     <img id="base_rubick" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/rubick_sb.png' ?>" />
                     </a>
                     <a id="link_disruptor" class="heroPickerIconLink" href="http://www.dota2.com/hero/Disruptor/">
                     <img id="hover_disruptor" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/disruptor_hphover.png' ?>" />
                     <img id="base_disruptor" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/disruptor_sb.png' ?>" />
                     </a>
                     <a id="link_keeper_of_the_light" class="heroPickerIconLink" href="http://www.dota2.com/hero/Keeper_of_the_Light/">
                     <img id="hover_keeper_of_the_light" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/keeper_of_the_light_hphover.png' ?>" />
                     <img id="base_keeper_of_the_light" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/keeper_of_the_light_sb.png' ?>" />
                     </a>
                     <a id="link_skywrath_mage" class="heroPickerIconLink" href="http://www.dota2.com/hero/Skywrath_Mage/">
                     <img id="hover_skywrath_mage" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/skywrath_mage_hphover.png' ?>" />
                     <img id="base_skywrath_mage" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/skywrath_mage_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColLeft">
                  <div class="heroIcons">
                     <a id="link_axe" class="heroPickerIconLink" href="http://www.dota2.com/hero/Axe/">
                     <img id="hover_axe" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/axe_hphover.png' ?>" />
                     <img id="base_axe" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/axe_sb.png' ?>" />
                     </a>
                     <a id="link_pudge" class="heroPickerIconLink" href="http://www.dota2.com/hero/Pudge/">
                     <img id="hover_pudge" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/pudge_hphover.png' ?>" />
                     <img id="base_pudge" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/pudge_sb.png' ?>" />
                     </a>
                     <a id="link_sand_king" class="heroPickerIconLink" href="http://www.dota2.com/hero/Sand_King/">
                     <img id="hover_sand_king" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/sand_king_hphover.png' ?>" />
                     <img id="base_sand_king" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/sand_king_sb.png' ?>" />
                     </a>
                     <a id="link_slardar" class="heroPickerIconLink" href="http://www.dota2.com/hero/Slardar/">
                     <img id="hover_slardar" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/slardar_hphover.png' ?>" />
                     <img id="base_slardar" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/slardar_sb.png' ?>" />
                     </a>
                     <a id="link_tidehunter" class="heroPickerIconLink" href="http://www.dota2.com/hero/Tidehunter/">
                     <img id="hover_tidehunter" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tidehunter_hphover.png' ?>" />
                     <img id="base_tidehunter" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tidehunter_sb.png' ?>" />
                     </a>
                     <a id="link_skeleton_king" class="heroPickerIconLink" href="http://www.dota2.com/hero/Skeleton_King/">
                     <img id="hover_skeleton_king" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/skeleton_king_hphover.png' ?>" />
                     <img id="base_skeleton_king" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/skeleton_king_sb.png' ?>" />
                     </a>
                     <a id="link_life_stealer" class="heroPickerIconLink" href="http://www.dota2.com/hero/Lifestealer/">
                     <img id="hover_life_stealer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lifestealer_hphover.png' ?>" />
                     <img id="base_life_stealer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lifestealer_sb.png' ?>" />
                     </a>
                     <a id="link_night_stalker" class="heroPickerIconLink" href="http://www.dota2.com/hero/Night_Stalker/">
                     <img id="hover_night_stalker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/night_stalker_hphover.png' ?>" />
                     <img id="base_night_stalker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/night_stalker_sb.png' ?>" />
                     </a>
                     <a id="link_doom_bringer" class="heroPickerIconLink" href="http://www.dota2.com/hero/Doom/">
                     <img id="hover_doom_bringer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/doom_hphover.png' ?>" />
                     <img id="base_doom_bringer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/doom_sb.png' ?>" />
                     </a>
                     <a id="link_spirit_breaker" class="heroPickerIconLink" href="http://www.dota2.com/hero/Spirit_Breaker/">
                     <img id="hover_spirit_breaker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/spirit_breaker_hphover.png' ?>" />
                     <img id="base_spirit_breaker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/spirit_breaker_sb.png' ?>" />
                     </a>
                     <a id="link_lycan" class="heroPickerIconLink" href="http://www.dota2.com/hero/Lycanthrope/">
                     <img id="hover_lycan" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lycanthrope_hphover.png' ?>" />
                     <img id="base_lycan" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lycanthrope_sb.png' ?>" />
                     </a>
                     <a id="link_chaos_knight" class="heroPickerIconLink" href="http://www.dota2.com/hero/Chaos_Knight/">
                     <img id="hover_chaos_knight" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/chaos_knight_hphover.png' ?>" />
                     <img id="base_chaos_knight" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/chaos_knight_sb.png' ?>" />
                     </a>
                     <a id="link_undying" class="heroPickerIconLink" href="http://www.dota2.com/hero/Undying/">
                     <img id="hover_undying" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/undying_hphover.png' ?>" />
                     <img id="base_undying" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/undying_sb.png' ?>" />
                     </a>
                     <a id="link_magnataur" class="heroPickerIconLink" href="http://www.dota2.com/hero/Magnus/">
                     <img id="hover_magnataur" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/magnus_hphover.png' ?>" />
                     <img id="base_magnataur" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/magnus_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColMiddle">
                  <div class="heroIcons">
                     <a id="link_bloodseeker" class="heroPickerIconLink" href="http://www.dota2.com/hero/Bloodseeker/">
                     <img id="hover_bloodseeker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bloodseeker_hphover.png' ?>" />
                     <img id="base_bloodseeker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bloodseeker_sb.png' ?>" />
                     </a>
                     <a id="link_nevermore" class="heroPickerIconLink" href="http://www.dota2.com/hero/Shadow_Fiend/">
                     <img id="hover_nevermore" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_fiend_hphover.png' ?>" />
                     <img id="base_nevermore" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_fiend_sb.png' ?>" />
                     </a>
                     <a id="link_razor" class="heroPickerIconLink" href="http://www.dota2.com/hero/Razor/">
                     <img id="hover_razor" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/razor_hphover.png' ?>" />
                     <img id="base_razor" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/razor_sb.png' ?>" />
                     </a>
                     <a id="link_venomancer" class="heroPickerIconLink" href="http://www.dota2.com/hero/Venomancer/">
                     <img id="hover_venomancer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/venomancer_hphover.png' ?>" />
                     <img id="base_venomancer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/venomancer_sb.png' ?>" />
                     </a>
                     <a id="link_faceless_void" class="heroPickerIconLink" href="http://www.dota2.com/hero/Faceless_Void/">
                     <img id="hover_faceless_void" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/faceless_void_hphover.png' ?>" />
                     <img id="base_faceless_void" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/faceless_void_sb.png' ?>" />
                     </a>
                     <a id="link_phantom_assassin" class="heroPickerIconLink" href="http://www.dota2.com/hero/Phantom_Assassin/">
                     <img id="hover_phantom_assassin" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_assassin_hphover.png' ?>" />
                     <img id="base_phantom_assassin" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_assassin_sb.png' ?>" />
                     </a>
                     <a id="link_viper" class="heroPickerIconLink" href="http://www.dota2.com/hero/Viper/">
                     <img id="hover_viper" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/viper_hphover.png' ?>" />
                     <img id="base_viper" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/viper_sb.png' ?>" />
                     </a>
                     <a id="link_clinkz" class="heroPickerIconLink" href="http://www.dota2.com/hero/Clinkz/">
                     <img id="hover_clinkz" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/clinkz_hphover.png' ?>" />
                     <img id="base_clinkz" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/clinkz_sb.png' ?>" />
                     </a>
                     <a id="link_broodmother" class="heroPickerIconLink" href="http://www.dota2.com/hero/Broodmother/">
                     <img id="hover_broodmother" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/broodmother_hphover.png' ?>" />
                     <img id="base_broodmother" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/broodmother_sb.png' ?>" />
                     </a>
                     <a id="link_weaver" class="heroPickerIconLink" href="http://www.dota2.com/hero/Weaver/">
                     <img id="hover_weaver" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/weaver_hphover.png' ?>" />
                     <img id="base_weaver" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/weaver_sb.png' ?>" />
                     </a>
                     <a id="link_spectre" class="heroPickerIconLink" href="http://www.dota2.com/hero/Spectre/">
                     <img id="hover_spectre" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/spectre_hphover.png' ?>" />
                     <img id="base_spectre" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/spectre_sb.png' ?>" />
                     </a>
                     <a id="link_meepo" class="heroPickerIconLink" href="http://www.dota2.com/hero/Meepo/">
                     <img id="hover_meepo" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/meepo_hphover.png' ?>" />
                     <img id="base_meepo" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/meepo_sb.png' ?>" />
                     </a>
                     <a id="link_nyx_assassin" class="heroPickerIconLink" href="http://www.dota2.com/hero/Nyx_Assassin/">
                     <img id="hover_nyx_assassin" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/nyx_assassin_hphover.png' ?>" />
                     <img id="base_nyx_assassin" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/nyx_assassin_sb.png' ?>" />
                     </a>
                     <a id="link_slark" class="heroPickerIconLink" href="http://www.dota2.com/hero/Slark/">
                     <img id="hover_slark" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/slark_hphover.png' ?>" />
                     <img id="base_slark" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/slark_sb.png' ?>" />
                     </a>
                     <a id="link_medusa" class="heroPickerIconLink" href="http://www.dota2.com/hero/Medusa/">
                     <img id="hover_medusa" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/medusa_hphover.png' ?>" />
                     <img id="base_medusa" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/medusa_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColRight">
                  <div class="heroIcons">
                     <a id="link_bane" class="heroPickerIconLink" href="http://www.dota2.com/hero/Bane/">
                     <img id="hover_bane" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bane_hphover.png' ?>" />
                     <img id="base_bane" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bane_sb.png' ?>" />
                     </a>
                     <a id="link_lich" class="heroPickerIconLink" href="http://www.dota2.com/hero/Lich/">
                     <img id="hover_lich" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lich_hphover.png' ?>" />
                     <img id="base_lich" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lich_sb.png' ?>" />
                     </a>
                     <a id="link_lion" class="heroPickerIconLink" href="http://www.dota2.com/hero/Lion/">
                     <img id="hover_lion" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lion_hphover.png' ?>" />
                     <img id="base_lion" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lion_sb.png' ?>" />
                     </a>
                     <a id="link_witch_doctor" class="heroPickerIconLink" href="http://www.dota2.com/hero/Witch_Doctor/">
                     <img id="hover_witch_doctor" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/witch_doctor_hphover.png' ?>" />
                     <img id="base_witch_doctor" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/witch_doctor_sb.png' ?>" />
                     </a>
                     <a id="link_enigma" class="heroPickerIconLink" href="http://www.dota2.com/hero/Enigma/">
                     <img id="hover_enigma" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/enigma_hphover.png' ?>" />
                     <img id="base_enigma" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/enigma_sb.png' ?>" />
                     </a>
                     <a id="link_necrolyte" class="heroPickerIconLink" href="http://www.dota2.com/hero/Necrolyte/">
                     <img id="hover_necrolyte" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/necrolyte_hphover.png' ?>" />
                     <img id="base_necrolyte" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/necrolyte_sb.png' ?>" />
                     </a>
                     <a id="link_warlock" class="heroPickerIconLink" href="http://www.dota2.com/hero/Warlock/">
                     <img id="hover_warlock" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/warlock_hphover.png' ?>" />
                     <img id="base_warlock" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/warlock_sb.png' ?>" />
                     </a>
                     <a id="link_queenofpain" class="heroPickerIconLink" href="http://www.dota2.com/hero/Queen_of_Pain/">
                     <img id="hover_queenofpain" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/queen_of_pain_hphover.png' ?>" />
                     <img id="base_queenofpain" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/queen_of_pain_sb.png' ?>" />
                     </a>
                     <a id="link_death_prophet" class="heroPickerIconLink" href="http://www.dota2.com/hero/Death_Prophet/">
                     <img id="hover_death_prophet" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/death_prophet_hphover.png' ?>" />
                     <img id="base_death_prophet" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/death_prophet_sb.png' ?>" />
                     </a>
                     <a id="link_pugna" class="heroPickerIconLink" href="http://www.dota2.com/hero/Pugna/">
                     <img id="hover_pugna" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/pugna_hphover.png' ?>" />
                     <img id="base_pugna" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/pugna_sb.png' ?>" />
                     </a>
                     <a id="link_dazzle" class="heroPickerIconLink" href="http://www.dota2.com/hero/Dazzle/">
                     <img id="hover_dazzle" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/dazzle_hphover.png' ?>" />
                     <img id="base_dazzle" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/dazzle_sb.png' ?>" />
                     </a>
                     <a id="link_leshrac" class="heroPickerIconLink" href="http://www.dota2.com/hero/Leshrac/">
                     <img id="hover_leshrac" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/leshrac_hphover.png' ?>" />
                     <img id="base_leshrac" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/leshrac_sb.png' ?>" />
                     </a>
                     <a id="link_dark_seer" class="heroPickerIconLink" href="http://www.dota2.com/hero/Dark_Seer/">
                     <img id="hover_dark_seer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/dark_seer_hphover.png' ?>" />
                     <img id="base_dark_seer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/dark_seer_sb.png' ?>" />
                     </a>
                     <a id="link_batrider" class="heroPickerIconLink" href="http://www.dota2.com/hero/Batrider/">
                     <img id="hover_batrider" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/batrider_hphover.png' ?>" />
                     <img id="base_batrider" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/batrider_sb.png' ?>" />
                     </a>
                     <a id="link_ancient_apparition" class="heroPickerIconLink" href="http://www.dota2.com/hero/Ancient_Apparition/">
                     <img id="hover_ancient_apparition" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/ancient_apparition_hphover.png' ?>" />
                     <img id="base_ancient_apparition" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/ancient_apparition_sb.png' ?>" />
                     </a>
                     <a id="link_invoker" class="heroPickerIconLink" href="http://www.dota2.com/hero/Invoker/">
                     <img id="hover_invoker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/invoker_hphover.png' ?>" />
                     <img id="base_invoker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/invoker_sb.png' ?>" />
                     </a>
                     <a id="link_obsidian_destroyer" class="heroPickerIconLink" href="http://www.dota2.com/hero/Outworld_Devourer/">
                     <img id="hover_obsidian_destroyer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/outworld_devourer_hphover.png' ?>" />
                     <img id="base_obsidian_destroyer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/outworld_devourer_sb.png' ?>" />
                     </a>
                     <a id="link_shadow_demon" class="heroPickerIconLink" href="http://www.dota2.com/hero/Shadow_Demon/">
                     <img id="hover_shadow_demon" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_demon_hphover.png' ?>" />
                     <img id="base_shadow_demon" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_demon_sb.png' ?>" />
                     </a>
                     <a id="link_visage" class="heroPickerIconLink" href="http://www.dota2.com/hero/Visage/">
                     <img id="hover_visage" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/visage_hphover.png' ?>" />
                     <img id="base_visage" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/visage_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <br clear="left" />
            </div>
            <div class="redboxBottom"></div>
         </div>
      </div>
   </div>
</div>
<div id="centerColBottom"></div>
<div id="centerColBottomShadow"></div>

