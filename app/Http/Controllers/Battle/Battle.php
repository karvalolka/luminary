<?php

namespace App\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Models\Char;

class Battle extends Controller
{
    public $hero1;
    public $hero2;

    public function __construct($hero1, $hero2) {
        $this->hero1 = $hero1;
        $this->hero2 = $hero2;
    }

    public function attack($attacker, $defender) {
        $def_power = $defender->def_power;
        $damage = $attacker->getTotalAttackPower() - $def_power;

        if ($damage > 0) {
            $defender->hp -= $damage;
            echo "{$attacker->nickname} атакует {$defender->nickname} на {$damage} урона.\n";
        } else {
            echo "{$attacker->nickname} не пробивает защиту {$defender->nickname}.\n";
        }

        if ($defender->hp <= 0) {
            echo "{$defender->nickname} DEAD\n";
            return true;
        }

        return false;
    }

    public function battle() {
        while ($this->hero1->hp > 0 && $this->hero2->hp > 0) {
            if ($this->attack($this->hero1, $this->hero2)) break;
            if ($this->attack($this->hero2, $this->hero1)) break;
        }
    }
}
