<link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/heroes.css" />
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
                  <h2 id="heroBioLoading">CHOOSE A HERO</h2>
                  <h5 id="heroItemInfo" class ="text-center">
                  </h5>
               </div>
               <div class="heroColLeft">
                  <div id="columnHeader"><span id="columnHeaderTextStr">Strength</span></div>
                  <div class="heroIcons">
                     <a id="hero_id_7" class="heroPickerIconLink" data-name="Earthshaker" href="/heroes/items/7/">
                     <img id="hover_earthshaker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/earthshaker_hphover.png' ?>" />
                     <img id="base_earthshaker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/earthshaker_sb.png' ?>" />
                     </a>
                     <a id="hero_id_18" class="heroPickerIconLink" data-name="Sven" href="/heroes/items/18/">
                     <img id="hover_sven" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/sven_hphover.png' ?>" />
                     <img id="base_sven" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/sven_sb.png' ?>" />
                     </a>
                     <a id="hero_id_19" class="heroPickerIconLink" data-name="Tiny" href="/heroes/items/19/">
                     <img id="hover_tiny" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tiny_hphover.png' ?>" />
                     <img id="base_tiny" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tiny_sb.png' ?>" />
                     </a>
                     <a id="hero_id_23" class="heroPickerIconLink" data-name="Kunkka" href="/heroes/items/23/">
                     <img id="hover_kunkka" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/kunkka_hphover.png' ?>" />
                     <img id="base_kunkka" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/kunkka_sb.png' ?>" />
                     </a>
                     <a id="hero_id_38" class="heroPickerIconLink" data-name="Beastmaster" href="/heroes/items/38/">
                     <img id="hover_beastmaster" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/beastmaster_hphover.png' ?>" />
                     <img id="base_beastmaster" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/beastmaster_sb.png' ?>" />
                     </a>
                     <a id="hero_id_49" class="heroPickerIconLink" data-name="Dragon_Knight" href="/heroes/items/49/">
                     <img id="hover_dragon_knight" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/dragon_knight_hphover.png' ?>" />
                     <img id="base_dragon_knight" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/dragon_knight_sb.png' ?>" />
                     </a>
                     <a id="hero_id_51" class="heroPickerIconLink" data-name="Clockwerk" href="/heroes/items/51/">
                     <img id="hover_rattletrap" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/clockwerk_hphover.png' ?>" />
                     <img id="base_rattletrap" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/clockwerk_sb.png' ?>" />
                     </a>
                     <a id="hero_id_57" class="heroPickerIconLink" data-name="Omniknight" href="/heroes/items/57/">
                     <img id="hover_omniknight" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/omniknight_hphover.png' ?>" />
                     <img id="base_omniknight" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/omniknight_sb.png' ?>" />
                     </a>
                     <a id="hero_id_59" class="heroPickerIconLink" data-name="Huskar" href="/heroes/items/59/">
                     <img id="hover_huskar" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/huskar_hphover.png' ?>" />
                     <img id="base_huskar" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/huskar_sb.png' ?>" />
                     </a>
                     <a id="hero_id_73" class="heroPickerIconLink" data-name="Alchemist" href="/heroes/items/73/">
                     <img id="hover_alchemist" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/alchemist_hphover.png' ?>" />
                     <img id="base_alchemist" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/alchemist_sb.png' ?>" />
                     </a>
                     <a id="hero_id_78" class="heroPickerIconLink" data-name="Brewmaster" href="/heroes/items/78/">
                     <img id="hover_brewmaster" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/brewmaster_hphover.png' ?>" />
                     <img id="base_brewmaster" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/brewmaster_sb.png' ?>" />
                     </a>
                     <a id="hero_id_83" class="heroPickerIconLink" data-name="Treant_Protector" href="/heroes/items/83/">
                     <img id="hover_treant" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/treant_protector_hphover.png' ?>" />
                     <img id="base_treant" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/treant_protector_sb.png' ?>" />
                     </a>
                     <a id="hero_id_91" class="heroPickerIconLink" data-name="Io" href="/heroes/items/91/">
                     <img id="hover_wisp" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/io_hphover.png' ?>" />
                     <img id="base_wisp" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/io_sb.png' ?>" />
                     </a>
                     <a id="hero_id_96" class="heroPickerIconLink" data-name="Centaur_Warrunner" href="/heroes/items/96/">
                     <img id="hover_centaur" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/centaur_warrunner_hphover.png' ?>" />
                     <img id="base_centaur" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/centaur_warrunner_sb.png' ?>" />
                     </a>
                     <a id="hero_id_98" class="heroPickerIconLink" data-name="Timbersaw" href="/heroes/items/98/">
                     <img id="hover_shredder" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/timbersaw_hphover.png' ?>" />
                     <img id="base_shredder" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/timbersaw_sb.png' ?>" />
                     </a>
                     <a id="hero_id_99" class="heroPickerIconLink" data-name="Bristleback" href="/heroes/items/99/">
                     <img id="hover_bristleback" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bristleback_hphover.png' ?>" />
                     <img id="base_bristleback" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bristleback_sb.png' ?>" />
                     </a>
                     <a id="hero_id_100" class="heroPickerIconLink" data-name="Tusk" href="/heroes/items/100/">
                     <img id="hover_tusk" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tusk_hphover.png' ?>" />
                     <img id="base_tusk" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tusk_sb.png' ?>" />
                     </a>
                     <a id="hero_id_103" class="heroPickerIconLink" data-name="Elder_Titan" href="/heroes/items/103/">
                     <img id="hover_elder_titan" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/elder_titan_hphover.png' ?>" />
                     <img id="base_elder_titan" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/elder_titan_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColMiddle">
                  <div id="columnHeader"><span id="columnHeaderTextAgi">Agility</span></div>
                  <div class="heroIcons">
                     <a id="hero_id_1" class="heroPickerIconLink" href="http://www.dota2.com/hero/Anti-Mage/">
                     <img id="hover_antimage" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/anti-mage_hphover.png' ?>" />
                     <img id="base_antimage" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/anti-mage_sb.png' ?>" />
                     </a>
                     <a id="hero_id_6" class="heroPickerIconLink" data-name="Drow_Ranger" href="/heroes/items/6/">
                     <img id="hover_drow_ranger" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/drow_ranger_hphover.png' ?>" />
                     <img id="base_drow_ranger" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/drow_ranger_sb.png' ?>" />
                     </a>
                     <a id="hero_id_8" class="heroPickerIconLink" data-name="Juggernaut" href="/heroes/items/8/">
                     <img id="hover_juggernaut" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/juggernaut_hphover.png' ?>" />
                     <img id="base_juggernaut" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/juggernaut_sb.png' ?>" />
                     </a>
                     <a id="hero_id_9" class="heroPickerIconLink" data-name="Mirana" href="/heroes/items/9/">
                     <img id="hover_mirana" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/mirana_hphover.png' ?>" />
                     <img id="base_mirana" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/mirana_sb.png' ?>" />
                     </a>
                     <a id="hero_id_10" class="heroPickerIconLink" data-name="Morphling" href="/heroes/items/10/">
                     <img id="hover_morphling" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/morphling_hphover.png' ?>" />
                     <img id="base_morphling" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/morphling_sb.png' ?>" />
                     </a>
                     <a id="hero_id_12" class="heroPickerIconLink" data-name="Phantom_Lancer" href="/heroes/items/12/">
                     <img id="hover_phantom_lancer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_lancer_hphover.png' ?>" />
                     <img id="base_phantom_lancer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_lancer_sb.png' ?>" />
                     </a>
                     <a id="hero_id_20" class="heroPickerIconLink" data-name="Vengeful_Spirit" href="/heroes/items/20/">
                     <img id="hover_vengefulspirit" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/vengeful_spirit_hphover.png' ?>" />
                     <img id="base_vengefulspirit" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/vengeful_spirit_sb.png' ?>" />
                     </a>
                     <a id="hero_id_32" class="heroPickerIconLink" data-name="Riki" href="/heroes/items/32/">
                     <img id="hover_riki" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/riki_hphover.png' ?>" />
                     <img id="base_riki" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/riki_sb.png' ?>" />
                     </a>
                     <a id="hero_id_35" class="heroPickerIconLink" data-name="Sniper" href="/heroes/items/35/">
                     <img id="hover_sniper" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/sniper_hphover.png' ?>" />
                     <img id="base_sniper" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/sniper_sb.png' ?>" />
                     </a>
                     <a id="hero_id_46" class="heroPickerIconLink" data-name="Templar_Assassin" href="/heroes/items/46/">
                     <img id="hover_templar_assassin" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/templar_assassin_hphover.png' ?>" />
                     <img id="base_templar_assassin" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/templar_assassin_sb.png' ?>" />
                     </a>
                     <a id="hero_id_48" class="heroPickerIconLink" data-name="Luna" href="/heroes/items/48/">
                     <img id="hover_luna" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/luna_hphover.png' ?>" />
                     <img id="base_luna" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/luna_sb.png' ?>" />
                     </a>
                     <a id="hero_id_62" class="heroPickerIconLink" data-name="Bounty_Hunter" href="/heroes/items/62/">
                     <img id="hover_bounty_hunter" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bounty_hunter_hphover.png' ?>" />
                     <img id="base_bounty_hunter" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bounty_hunter_sb.png' ?>" />
                     </a>
                     <a id="hero_id_70" class="heroPickerIconLink" data-name="Ursa" href="/heroes/items/70/">
                     <img id="hover_ursa" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/ursa_hphover.png' ?>" />
                     <img id="base_ursa" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/ursa_sb.png' ?>" />
                     </a>
                     <a id="hero_id_72" class="heroPickerIconLink" data-name="Gyrocopter" href="/heroes/items/72/">
                     <img id="hover_gyrocopter" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/gyrocopter_hphover.png' ?>" />
                     <img id="base_gyrocopter" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/gyrocopter_sb.png' ?>" />
                     </a>
                     <a id="hero_id_80" class="heroPickerIconLink" data-name="Lone_Druid" href="/heroes/items/80/">
                     <img id="hover_lone_druid" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lone_druid_hphover.png' ?>" />
                     <img id="base_lone_druid" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lone_druid_sb.png' ?>" />
                     </a>
                     <a id="hero_id_89" class="heroPickerIconLink" data-name="Naga_Siren" href="/heroes/items/89/">
                     <img id="hover_naga_siren" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/naga_siren_hphover.png' ?>" />
                     <img id="base_naga_siren" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/naga_siren_sb.png' ?>" />
                     </a>
                     <a id="hero_id_95" class="heroPickerIconLink" data-name="Troll_Warlord" href="/heroes/items/95/">
                     <img id="hover_troll_warlord" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/troll_warlord_hphover.png' ?>" />
                     <img id="base_troll_warlord" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/troll_warlord_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColRight">
                  <div id="columnHeader"><span id="columnHeaderTextInt">Intelligence</span></div>
                  <div class="heroIcons">
                     <a id="hero_id_5" class="heroPickerIconLink" data-name="Crystal_Maiden" href="/heroes/items/5/">
                     <img id="hover_crystal_maiden" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/crystal_maiden_hphover.png' ?>" />
                     <img id="base_crystal_maiden" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/crystal_maiden_sb.png' ?>" />
                     </a>
                     <a id="hero_id_13" class="heroPickerIconLink" data-name="Puck" href="/heroes/items/13/">
                     <img id="hover_puck" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/puck_hphover.png' ?>" />
                     <img id="base_puck" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/puck_sb.png' ?>" />
                     </a>
                     <a id="hero_id_17" class="heroPickerIconLink" data-name="Storm_Spirit" href="/heroes/items/17/">
                     <img id="hover_storm_spirit" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/storm_spirit_hphover.png' ?>" />
                     <img id="base_storm_spirit" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/storm_spirit_sb.png' ?>" />
                     </a>
                     <a id="hero_id_21" class="heroPickerIconLink" data-name="Windrunner" href="/heroes/items/21/">
                     <img id="hover_windrunner" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/windrunner_hphover.png' ?>" />
                     <img id="base_windrunner" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/windrunner_sb.png' ?>" />
                     </a>
                     <a id="hero_id_22" class="heroPickerIconLink" data-name="Zeus" href="/heroes/items/22/">
                     <img id="hover_zuus" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/zeus_hphover.png' ?>" />
                     <img id="base_zuus" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/zeus_sb.png' ?>" />
                     </a>
                     <a id="hero_id_25" class="heroPickerIconLink" data-name="Lina" href="/heroes/items/25/">
                     <img id="hover_lina" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lina_hphover.png' ?>" />
                     <img id="base_lina" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lina_sb.png' ?>" />
                     </a>
                     <a id="hero_id_79" class="heroPickerIconLink" data-name="Shadow_Shaman" href="/heroes/items/79/">
                     <img id="hover_shadow_shaman" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_shaman_hphover.png' ?>" />
                     <img id="base_shadow_shaman" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_shaman_sb.png' ?>" />
                     </a>
                     <a id="hero_id_34" class="heroPickerIconLink" data-name="Tinker" href="/heroes/items/34/">
                     <img id="hover_tinker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tinker_hphover.png' ?>" />
                     <img id="base_tinker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tinker_sb.png' ?>" />
                     </a>
                     <a id="hero_id_53" class="heroPickerIconLink" data-name="Natures_Prophet" href="/heroes/items/53/">
                     <img id="hover_furion" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/nature\'s_prophet_hphover.png' ?>" />
                     <img id="base_furion" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/nature\'s_prophet_sb.png' ?>" />
                     </a>
                     <a id="hero_id_58" class="heroPickerIconLink" data-name="Enchantress" href="/heroes/items/58/">
                     <img id="hover_enchantress" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/enchantress_hphover.png' ?>" />
                     <img id="base_enchantress" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/enchantress_sb.png' ?>" />
                     </a>
                     <a id="hero_id_64" class="heroPickerIconLink" data-name="Jakiro" href="/heroes/items/64/">
                     <img id="hover_jakiro" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/jakiro_hphover.png' ?>" />
                     <img id="base_jakiro" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/jakiro_sb.png' ?>" />
                     </a>
                     <a id="hero_id_66" class="heroPickerIconLink" data-name="Chen" href="/heroes/items/66/">
                     <img id="hover_chen" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/chen_hphover.png' ?>" />
                     <img id="base_chen" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/chen_sb.png' ?>" />
                     </a>
                     <a id="hero_id_75" class="heroPickerIconLink" data-name="Silencer" href="/heroes/items/75/">
                     <img id="hover_silencer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/silencer_hphover.png' ?>" />
                     <img id="base_silencer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/silencer_sb.png' ?>" />
                     </a>
                     <a id="hero_id_84" class="heroPickerIconLink" data-name="Ogre_Magi" href="/heroes/items/84/">
                     <img id="hover_ogre_magi" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/ogre_magi_hphover.png' ?>" />
                     <img id="base_ogre_magi" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/ogre_magi_sb.png' ?>" />
                     </a>
                     <a id="hero_id_86" class="heroPickerIconLink" data-name="Rubick" href="/heroes/items/86/">
                     <img id="hover_rubick" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/rubick_hphover.png' ?>" />
                     <img id="base_rubick" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/rubick_sb.png' ?>" />
                     </a>
                     <a id="hero_id_87" class="heroPickerIconLink" data-name="Disruptor" href="/heroes/items/87/">
                     <img id="hover_disruptor" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/disruptor_hphover.png' ?>" />
                     <img id="base_disruptor" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/disruptor_sb.png' ?>" />
                     </a>
                     <a id="hero_id_90" class="heroPickerIconLink" data-name="Keeper_of_the_Light" href="/heroes/items/90/">
                     <img id="hover_keeper_of_the_light" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/keeper_of_the_light_hphover.png' ?>" />
                     <img id="base_keeper_of_the_light" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/keeper_of_the_light_sb.png' ?>" />
                     </a>
                     <a id="hero_id_101" class="heroPickerIconLink" href="/heroes/items/101" data-name="Skywrath_Mage">
                     <img id="hover_skywrath_mage" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/skywrath_mage_hphover.png' ?>" />
                     <img id="base_skywrath_mage" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/skywrath_mage_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColLeft">
                  <div class="heroIcons">
                     <a id="hero_id_2" class="heroPickerIconLink" data-name="Axe" href="/heroes/items/2/">
                     <img id="hover_axe" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/axe_hphover.png' ?>" />
                     <img id="base_axe" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/axe_sb.png' ?>" />
                     </a>
                     <a id="hero_id_14" class="heroPickerIconLink" data-name="Pudge" href="/heroes/items/14/">
                     <img id="hover_pudge" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/pudge_hphover.png' ?>" />
                     <img id="base_pudge" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/pudge_sb.png' ?>" />
                     </a>
                     <a id="hero_id_16" class="heroPickerIconLink" data-name="Sand_King" href="/heroes/items/16/">
                     <img id="hover_sand_king" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/sand_king_hphover.png' ?>" />
                     <img id="base_sand_king" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/sand_king_sb.png' ?>" />
                     </a>
                     <a id="hero_id_28" class="heroPickerIconLink" data-name="Slardar" href="/heroes/items/28/">
                     <img id="hover_slardar" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/slardar_hphover.png' ?>" />
                     <img id="base_slardar" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/slardar_sb.png' ?>" />
                     </a>
                     <a id="hero_id_29" class="heroPickerIconLink" data-name="Tidehunter" href="/heroes/items/29/">
                     <img id="hover_tidehunter" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/tidehunter_hphover.png' ?>" />
                     <img id="base_tidehunter" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/tidehunter_sb.png' ?>" />
                     </a>
                     <a id="hero_id_42" class="heroPickerIconLink" data-name="Skeleton_King" href="/heroes/items/42/">
                     <img id="hover_skeleton_king" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/skeleton_king_hphover.png' ?>" />
                     <img id="base_skeleton_king" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/skeleton_king_sb.png' ?>" />
                     </a>
                     <a id="hero_id_54" class="heroPickerIconLink" data-name="Lifestealer" href="/heroes/items/54/">
                     <img id="hover_life_stealer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lifestealer_hphover.png' ?>" />
                     <img id="base_life_stealer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lifestealer_sb.png' ?>" />
                     </a>
                     <a id="hero_id_60" class="heroPickerIconLink" data-name="Night_Stalker" href="/heroes/items/60/">
                     <img id="hover_night_stalker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/night_stalker_hphover.png' ?>" />
                     <img id="base_night_stalker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/night_stalker_sb.png' ?>" />
                     </a>
                     <a id="hero_id_69" class="heroPickerIconLink" data-name="Doom" href="/heroes/items/69/">
                     <img id="hover_doom_bringer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/doom_hphover.png' ?>" />
                     <img id="base_doom_bringer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/doom_sb.png' ?>" />
                     </a>
                     <a id="hero_id_71" class="heroPickerIconLink" data-name="Spirit_Breaker" href="/heroes/items/71/">
                     <img id="hover_spirit_breaker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/spirit_breaker_hphover.png' ?>" />
                     <img id="base_spirit_breaker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/spirit_breaker_sb.png' ?>" />
                     </a>
                     <a id="hero_id_77" class="heroPickerIconLink" data-name="Lycanthrope" href="/heroes/items/77/">
                     <img id="hover_lycan" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lycanthrope_hphover.png' ?>" />
                     <img id="base_lycan" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lycanthrope_sb.png' ?>" />
                     </a>
                     <a id="hero_id_81" class="heroPickerIconLink" data-name="Chaos_Knight" href="/heroes/items/81/">
                     <img id="hover_chaos_knight" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/chaos_knight_hphover.png' ?>" />
                     <img id="base_chaos_knight" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/chaos_knight_sb.png' ?>" />
                     </a>
                     <a id="hero_id_85" class="heroPickerIconLink" data-name="Undying" href="/heroes/items/85/">
                     <img id="hover_undying" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/undying_hphover.png' ?>" />
                     <img id="base_undying" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/undying_sb.png' ?>" />
                     </a>
                     <a id="hero_id_97" class="heroPickerIconLink" data-name="Magnus" href="/heroes/items/97/">
                     <img id="hover_magnataur" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/magnus_hphover.png' ?>" />
                     <img id="base_magnataur" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/magnus_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColMiddle">
                  <div class="heroIcons">
                     <a id="hero_id_4" class="heroPickerIconLink" data-name="Bloodseeker" href="/heroes/items/4/">
                     <img id="hover_bloodseeker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bloodseeker_hphover.png' ?>" />
                     <img id="base_bloodseeker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bloodseeker_sb.png' ?>" />
                     </a>
                     <a id="hero_id_11" class="heroPickerIconLink" data-name="Shadow_Fiend" href="/heroes/items/11/">
                     <img id="hover_nevermore" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_fiend_hphover.png' ?>" />
                     <img id="base_nevermore" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_fiend_sb.png' ?>" />
                     </a>
                     <a id="hero_id_15" class="heroPickerIconLink" data-name="Razor" href="/heroes/items/15/">
                     <img id="hover_razor" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/razor_hphover.png' ?>" />
                     <img id="base_razor" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/razor_sb.png' ?>" />
                     </a>
                     <a id="hero_id_40" class="heroPickerIconLink" data-name="Venomancer" href="/heroes/items/40/">
                     <img id="hover_venomancer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/venomancer_hphover.png' ?>" />
                     <img id="base_venomancer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/venomancer_sb.png' ?>" />
                     </a>
                     <a id="hero_id_41" class="heroPickerIconLink" data-name="Faceless_Void" href="/heroes/items/41/">
                     <img id="hover_faceless_void" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/faceless_void_hphover.png' ?>" />
                     <img id="base_faceless_void" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/faceless_void_sb.png' ?>" />
                     </a>
                     <a id="hero_id_44" class="heroPickerIconLink" data-name="Phantom_Assassin" href="/heroes/items/44/">
                     <img id="hover_phantom_assassin" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_assassin_hphover.png' ?>" />
                     <img id="base_phantom_assassin" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/phantom_assassin_sb.png' ?>" />
                     </a>
                     <a id="hero_id_47" class="heroPickerIconLink" data-name="Viper" href="/heroes/items/47/">
                     <img id="hover_viper" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/viper_hphover.png' ?>" />
                     <img id="base_viper" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/viper_sb.png' ?>" />
                     </a>
                     <a id="hero_id_56" class="heroPickerIconLink" data-name="Clinkz" href="/heroes/items/56/">
                     <img id="hover_clinkz" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/clinkz_hphover.png' ?>" />
                     <img id="base_clinkz" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/clinkz_sb.png' ?>" />
                     </a>
                     <a id="hero_id_61" class="heroPickerIconLink" data-name="Broodmother" href="/heroes/items/61/">
                     <img id="hover_broodmother" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/broodmother_hphover.png' ?>" />
                     <img id="base_broodmother" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/broodmother_sb.png' ?>" />
                     </a>
                     <a id="hero_id_63" class="heroPickerIconLink" data-name="Weaver" href="/heroes/items/63/">
                     <img id="hover_weaver" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/weaver_hphover.png' ?>" />
                     <img id="base_weaver" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/weaver_sb.png' ?>" />
                     </a>
                     <a id="hero_id_67" class="heroPickerIconLink" data-name="Spectre" href="/heroes/items/67/">
                     <img id="hover_spectre" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/spectre_hphover.png' ?>" />
                     <img id="base_spectre" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/spectre_sb.png' ?>" />
                     </a>
                     <a id="hero_id_82" class="heroPickerIconLink" data-name="Meepo" href="/heroes/items/82/">
                     <img id="hover_meepo" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/meepo_hphover.png' ?>" />
                     <img id="base_meepo" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/meepo_sb.png' ?>" />
                     </a>
                     <a id="hero_id_88" class="heroPickerIconLink" data-name="Nyx_Assassin" href="/heroes/items/88/">
                     <img id="hover_nyx_assassin" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/nyx_assassin_hphover.png' ?>" />
                     <img id="base_nyx_assassin" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/nyx_assassin_sb.png' ?>" />
                     </a>
                     <a id="hero_id_93" class="heroPickerIconLink" data-name="Slark" href="/heroes/items/93/">
                     <img id="hover_slark" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/slark_hphover.png' ?>" />
                     <img id="base_slark" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/slark_sb.png' ?>" />
                     </a>
                     <a id="hero_id_94" class="heroPickerIconLink" data-name="Medusa" href="/heroes/items/94/">
                     <img id="hover_medusa" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/medusa_hphover.png' ?>" />
                     <img id="base_medusa" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/medusa_sb.png' ?>" />
                     </a>
                  </div>
                  <br clear="left" />
               </div>
               <div class="heroColRight">
                  <div class="heroIcons">
                     <a id="hero_id_3" class="heroPickerIconLink" data-name="Bane" href="/heroes/items/3/">
                     <img id="hover_bane" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/bane_hphover.png' ?>" />
                     <img id="base_bane" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/bane_sb.png' ?>" />
                     </a>
                     <a id="hero_id_31" class="heroPickerIconLink" data-name="Lich" href="/heroes/items/31/">
                     <img id="hover_lich" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lich_hphover.png' ?>" />
                     <img id="base_lich" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lich_sb.png' ?>" />
                     </a>
                     <a id="hero_id_26" class="heroPickerIconLink" data-name="Lion" href="/heroes/items/26/">
                     <img id="hover_lion" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/lion_hphover.png' ?>" />
                     <img id="base_lion" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/lion_sb.png' ?>" />
                     </a>
                     <a id="hero_id_30" class="heroPickerIconLink" data-name="Witch_Doctor" href="/heroes/items/30/">
                     <img id="hover_witch_doctor" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/witch_doctor_hphover.png' ?>" />
                     <img id="base_witch_doctor" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/witch_doctor_sb.png' ?>" />
                     </a>
                     <a id="hero_id_33" class="heroPickerIconLink" data-name="Enigma" href="/heroes/items/33/">
                     <img id="hover_enigma" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/enigma_hphover.png' ?>" />
                     <img id="base_enigma" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/enigma_sb.png' ?>" />
                     </a>
                     <a id="hero_id_36" class="heroPickerIconLink" data-name="Necrolyte" href="/heroes/items/36/">
                     <img id="hover_necrolyte" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/necrolyte_hphover.png' ?>" />
                     <img id="base_necrolyte" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/necrolyte_sb.png' ?>" />
                     </a>
                     <a id="hero_id_37" class="heroPickerIconLink" data-name="Warlock" href="/heroes/items/37/">
                     <img id="hover_warlock" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/warlock_hphover.png' ?>" />
                     <img id="base_warlock" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/warlock_sb.png' ?>" />
                     </a>
                     <a id="hero_id_39" class="heroPickerIconLink" data-name="Queen_of_Pain" href="/heroes/items/39/">
                     <img id="hover_queenofpain" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/queen_of_pain_hphover.png' ?>" />
                     <img id="base_queenofpain" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/queen_of_pain_sb.png' ?>" />
                     </a>
                     <a id="hero_id_43" class="heroPickerIconLink" data-name="Death_Prophet" href="/heroes/items/43/">
                     <img id="hover_death_prophet" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/death_prophet_hphover.png' ?>" />
                     <img id="base_death_prophet" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/death_prophet_sb.png' ?>" />
                     </a>
                     <a id="hero_id_45" class="heroPickerIconLink" data-name="Pugna" href="/heroes/items/45/">
                     <img id="hover_pugna" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/pugna_hphover.png' ?>" />
                     <img id="base_pugna" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/pugna_sb.png' ?>" />
                     </a>
                     <a id="hero_id_50" class="heroPickerIconLink" data-name="Dazzle" href="/heroes/items/50/">
                     <img id="hover_dazzle" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/dazzle_hphover.png' ?>" />
                     <img id="base_dazzle" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/dazzle_sb.png' ?>" />
                     </a>
                     <a id="hero_id_52" class="heroPickerIconLink" data-name="Leshrac" href="/heroes/items/52/">
                     <img id="hover_leshrac" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/leshrac_hphover.png' ?>" />
                     <img id="base_leshrac" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/leshrac_sb.png' ?>" />
                     </a>
                     <a id="hero_id_55" class="heroPickerIconLink" data-name="Dark_Seer" href="/heroes/items/55/">
                     <img id="hover_dark_seer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/dark_seer_hphover.png' ?>" />
                     <img id="base_dark_seer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/dark_seer_sb.png' ?>" />
                     </a>
                     <a id="hero_id_65" class="heroPickerIconLink" data-name="Batrider" href="/heroes/items/65/">
                     <img id="hover_batrider" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/batrider_hphover.png' ?>" />
                     <img id="base_batrider" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/batrider_sb.png' ?>" />
                     </a>
                     <a id="hero_id_68" class="heroPickerIconLink" data-name="Ancient_Apparition" href="/heroes/items/68/">
                     <img id="hover_ancient_apparition" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/ancient_apparition_hphover.png' ?>" />
                     <img id="base_ancient_apparition" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/ancient_apparition_sb.png' ?>" />
                     </a>
                     <a id="hero_id_74" class="heroPickerIconLink" data-name="Invoker" href="/heroes/items/74/">
                     <img id="hover_invoker" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/invoker_hphover.png' ?>" />
                     <img id="base_invoker" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/invoker_sb.png' ?>" />
                     </a>
                     <a id="hero_id_76" class="heroPickerIconLink" data-name="Outworld_Devourer" href="/heroes/items/76/">
                     <img id="hover_obsidian_destroyer" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/outworld_devourer_hphover.png' ?>" />
                     <img id="base_obsidian_destroyer" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/outworld_devourer_sb.png' ?>" />
                     </a>
                     <a id="hero_id_27" class="heroPickerIconLink" data-name="Shadow_Demon" href="/heroes/items/27/">
                     <img id="hover_shadow_demon" class="heroHoverLarge" style="display:none;" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_demon_hphover.png' ?>" />
                     <img id="base_shadow_demon" class="heroHoverSmall" src="<?=Yii::app()->request->baseUrl.'images/heroes/shadow_demon_sb.png' ?>" />
                     </a>
                     <a id="hero_id_92" class="heroPickerIconLink" data-name="Visage" href="/heroes/items/92/">
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

