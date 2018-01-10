<?php

namespace App\Console\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class DiceCommand extends Command
{
    protected $name = 'dice';
    protected $description = 'Comando Dice para lanzar dados';

    public function handle($arguments)
    {
        $num = rand(1, 100);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->replyWithMessage(['text' => $num]);
    }
}
