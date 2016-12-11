<?php

namespace ondraczsk\BetterHelp;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;

// My first non-copied plugin! I learning from Plugin school web :P

class Main extends PluginBase{
  public function onLoad(){
    $this->getLogger()->info("Plugin Napoveda se nacita..");
  }
  public function onEnable(){
    $this->getLogger()->info("Plugin Napoveda zapnut..");
  }
  public function onDisable(){
    $this->getLogger()->info("Plugin Napoveda vypnut..");

   
}
