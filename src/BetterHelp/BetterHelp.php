<?php
///////////////////////////////
// Copyright 2017, ondraczsk //
///////////////////////////////
namespace ondraczsk\BetterHelp;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\Config;


class BetterHelp extends PluginBase implents Listener {

/*LOADING */
public function onLoad(){
$this->getLogger()->info("§f[§eBetter§6Help§f] §eNacitani...");
}


/*COLORS & */
 public function translateColors($symbol, $message){
    
    	$message = str_replace($symbol."0", TextFormat::BLACK, $message);
    	$message = str_replace($symbol."1", TextFormat::DARK_BLUE, $message);
    	$message = str_replace($symbol."2", TextFormat::DARK_GREEN, $message);
    	$message = str_replace($symbol."3", TextFormat::DARK_AQUA, $message);
    	$message = str_replace($symbol."4", TextFormat::DARK_RED, $message);
    	$message = str_replace($symbol."5", TextFormat::DARK_PURPLE, $message);
    	$message = str_replace($symbol."6", TextFormat::GOLD, $message);
    	$message = str_replace($symbol."7", TextFormat::GRAY, $message);
    	$message = str_replace($symbol."8", TextFormat::DARK_GRAY, $message);
    	$message = str_replace($symbol."9", TextFormat::BLUE, $message);
    	$message = str_replace($symbol."a", TextFormat::GREEN, $message);
    	$message = str_replace($symbol."b", TextFormat::AQUA, $message);
    	$message = str_replace($symbol."c", TextFormat::RED, $message);
    	$message = str_replace($symbol."d", TextFormat::LIGHT_PURPLE, $message);
    	$message = str_replace($symbol."e", TextFormat::YELLOW, $message);
    	$message = str_replace($symbol."f", TextFormat::WHITE, $message);
    
    	$message = str_replace($symbol."k", TextFormat::OBFUSCATED, $message);
    	$message = str_replace($symbol."l", TextFormat::BOLD, $message);
    	$message = str_replace($symbol."m", TextFormat::STRIKETHROUGH, $message);
    	$message = str_replace($symbol."n", TextFormat::UNDERLINE, $message);
    	$message = str_replace($symbol."o", TextFormat::ITALIC, $message);
    	$message = str_replace($symbol."r", TextFormat::RESET, $message);
    
    	return $message;
    }
    
/*ENABLE*/
public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this,$this);
@mkdir($this->getDataFolder()); 
$this->config = new Config ($this->getDataFolder() . "config.yml" , Config::YAML, array());
$this->getServer()->getCommandMap()->getCommand("help")->setLabel("helporiginal");
    $this->getServer()->getCommandMap()->getCommand("help")->unregister($this->getServer()->getCommandMap());
$this->getLogger()->info("§f[§eBetter§6Help§f] §2Zapnuto!...");
}


/*DISABLE*/
public function onDisable(){
$this->getLogger()->info("§f[§eBetter§6Help§f] §cVypnuto!...");
}
       public function onJoin(PlayerJoinEvent $event){ 
       $player = $event->getPlayer(); 
       $name = $player->getName(); 
    }

public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
  if($cmd->getName() == "help"){ 
  if(!isset($args[0])){  
  $sender->sendMessage("Zadavej: /help ");  
  }else{ 
	$cfg = $this->plugin->getConfig()->getAll();	
	$prefix = "";
  $player->sendMessage($this->plugin->translateColors("&", $prefix . $cfg["test-message"]));
      }
    }
  }
  
  
}
