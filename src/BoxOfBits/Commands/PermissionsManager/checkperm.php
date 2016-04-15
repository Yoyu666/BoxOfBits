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

namespace BoxOfBits\Commands;

use BoxOfBits\Loader;
use BoxOfBits\utils\SymbolFormat;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\PluginCommand;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\permission\Permission;

class checkperm extends Loader{

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if(strolower($cmd->getName() == "checkperm")){
            if(!($sender instanceof Player)){
                if(!isset($args[1])){
                    $sender->sendMessage(TF::DARK_RED."Usage: /checkperm <player> <permission>");
                }else{
                    $player = $args[0];
                    $perm = $args[1];
                    if($player->hasPermission($perm)){
                        $sender->sendMessage(TF::GREEN."$player has permission $perm!");
                    }else{
                        $sender->sendMessage(TF::GREEN."$player doesn't have permission $perm!");
                    }
            }elseif($sender instanceof Player){
                if(!isset($args[1])){
                    $sender->sendMessage(TF::DARK_RED."Usage: /checkperm <player> <permission>");
                }else{
                    $player = $args[0];
                    $perm = $args[1];
                    if($player->hasPermission($perm)){
                        $sender->sendMessage(TF::GREEN."$player has permission $perm!");
                    }else{
                        $sender->sendMessage(TF::GREEN."$player doesn't have permission $perm!");
                    }
                }
            }
        }
        return true;
    }

}

?>
