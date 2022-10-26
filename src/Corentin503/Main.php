<?php

namespace Corentin503;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Le plugin c'est bien activé !");
    }
    public function onHunger(PlayerExhaustEvent $event)
    {
        $event->cancel();
    }
}
