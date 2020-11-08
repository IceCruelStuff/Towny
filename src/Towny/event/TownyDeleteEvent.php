<?php

declare(strict_types=1);

namespace Towny\event;

use pocketmine\player\Player;
use Towny\Towny;

class TownyDeleteEvent extends TownyEvent
{

    /** @var Player */
    private $deleter;

    public function __construct(Towny $towny, Player $player)
    {
        parent::__construct($towny);
        $this->deleter = $player;
    }

    public function getPlayer() : Player
    {
        return $this->deleter;
    }

}
