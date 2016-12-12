<?php

namespace ondraczsk\BetterHelp;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\utils\Config;
use pocketmine\command\CommandSender;

// My first non-copied plugin! I learning from Plugin school web :P

class Main extends PluginBase{
  public function onLoad(){
    $this->getLogger()->info("Plugin Napoveda se nacita..");
  }
  public function onEnable(){
    $this->getLogger()->info("Plugin Napoveda zapnut..");
    getServer()->getPluginManager()->registerEvents($this,$this);@mkdir($this->getDataFolder()); $this->config = new Config ($this->getDataFolder() . "config.yml" , Config::YAML, array());
  }
  

  public function onJoin(PlayerJoinEvent $event){ $player = $event->getPlayer(); $name = $player->getName();
                                                 
  public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
    if($cmd->getName() == "help")
      { $sender->sendMessage("Test!"); } return true;
  }
  
  }
  
  
  public function onDisable(){
    $this->getLogger()->info("Plugin Napoveda vypnut..");
  }

   
}
