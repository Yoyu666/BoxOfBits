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

namespace BoxOfBits\Commands\PermissionsManager;

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

class rmperm extends Loader{

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if(strolower($cmd->getName() == "rmperm")){
            if(!($sender instanceof Player)){
                if(!isset($args[1])){
                    $sender->sendMessage(TF::DARK_RED."Usage: /rmperm <player> <permission>");
                }else{
                    $player = $args[0];
                    $perm = $args[1];
                    $player->removePermission($perm);
                    $sender->sendMessage(TF::GREEN."$perm successfully removed from $name!");
                }
            }elseif($sender instanceof Player){
                if(!isset($args[1])){
                    $sender->sendMessage(TF::DARK_RED."Usage: /rmperm <player> <permission>");
                }else{
                    $player = $args[0];
                    $perm = $args[1];
                    $player->removePermission($perm);
                    $sender->sendMessage(TF::GREEN."$perm successfully removed from $name!");
                }
            }
        }
        return true;
    }

}

?>
