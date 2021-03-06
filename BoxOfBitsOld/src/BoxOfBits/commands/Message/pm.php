<?php

/*
*  ____             ____   __ ____  _ _       
* |  _ \           / __ \ / _|  _ \(_) |      
* | |_) | _____  _| |  | | |_| |_) |_| |_ ___ 
* |  _ < / _ \ \/ / |  | |  _|  _ <| | __/ __|
* | |_) | (_) >  <| |__| | | | |_) | | |_\__ \
* |____/ \___/_/\_\\____/|_| |____/|_|\__|___/
* 
* The growing plugin with so many features
*
* @author BoxOfDevs Team
* @link http://boxofdevs.x10host.com/
* 
*/

namespace BoxOfBits\Commands\Message;

use BoxOfBits\Loader;
use BoxOfBits\utils\SymbolFormat;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\PluginCommand;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\Server;

class pm extends Loader{

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if(strolower($cmd->getName() == "pm")){
            if(!($sender instanceof Player)){
                if(!(isset($args[1]))){
                    $sender->sendMessage(TF::DARK_RED."Usage: /pm <player> <message...>");
                }else{
                    $name = $args[0];
                    $player = $this->getServer()->getPlayer($name);
                    if($player === null){
                        $sender->sendMessage(TF::DARK_RED."Player not found");
                    }else{
                        unset($args[0]);
                        $message = implode(" ", $args);
                        $player->sendMessage($message);
                    }
                }
            }elseif($sender instanceof Player){
                if(!(isset($args[1]))){
                    $sender->sendMessage(TF::DARK_RED."Usage: /pm <player> <message...>");
                }else{
                    $name = $args[0];
                    $player = $this->getServer()->getPlayer($name);
                    if($player === null){
                        $sender->sendMessage(TF::DARK_RED."Player not found");
                    }else{
                        unset($args[0]);
                        $message = implode(" ", $args);
                        $player->sendMessage($message);
                    }
                }
            }
        }
        return true;
    }

}

?>
