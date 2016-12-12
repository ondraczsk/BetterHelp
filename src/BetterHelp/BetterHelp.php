<?php

namespace BetterHelp;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;

class BetterHelp extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getLogger()->info("Enabled Plugin");
                    $this->getServer()->getPluginManager()->registerEvents($this,$this);
          }
          public function onJoin(PlayerJoinEvent $event){
   $player = $event->getPlayer();
   $name = $player->getName();
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
          }
}
