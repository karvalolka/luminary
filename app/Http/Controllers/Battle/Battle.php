<?php

namespace App\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Models\Char;

class Battle extends Controller
{
    public $hero1;
    public $hero2;

    public function __construct(Char $hero1, Char $hero2) {
        $this->hero1 = $hero1;
        $this->hero2 = $hero2;
    }

    public function attack(Char $attacker, Char $defender) {
        $def_power = $defender->def_power;
        $damage = $attacker->getTotalAttackPower() - $def_power;

        if ($damage > 0) {
            $defender->hp -= $damage;
            $messages[] = "{$attacker->nickname} атакует {$defender->nickname} на {$damage}";
        } else {
            $messages[] = "{$attacker->nickname} не пробивает защиту {$defender->nickname}.";
        }

        if ($defender->hp <= 0) {
            $defender->hp = 0;
            $messages[] = "{$defender->nickname} проиграл\n";
            return ['messages' => $messages, 'isDead' => true];
        }

        return ['messages' => $messages, 'isDead' => false];
    }

    public function battle() {
        $allMessages = [];

        while ($this->hero1->hp > 0 && $this->hero2->hp > 0) {
            $attackResult1 = $this->attack($this->hero1, $this->hero2);
            $allMessages = array_merge($allMessages, $attackResult1['messages']);
            if ($attackResult1['isDead']) break;

            $attackResult2 = $this->attack($this->hero2, $this->hero1);
            $allMessages = array_merge($allMessages, $attackResult2['messages']);
            if ($attackResult2['isDead']) break;
        }

        return $allMessages;
    }
}
