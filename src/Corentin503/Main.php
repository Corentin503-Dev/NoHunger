<?php

namespace Corentin503;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getLogger()->info("Le plugin c'est bien activé !");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onHunger(PlayerExhaustEvent $event)
    {
        $event->cancel();
    }
}