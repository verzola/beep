<?php

require __DIR__ . '/vendor/autoload.php';

use Beep\Beep;
use Beep\Note;

Beep::play(
    [
        Note::C4 => 50,
        Note::D4 => 50,
        Note::E4 => 50,
        Note::F4 => 50,
        Note::G4 => 50,
        Note::A4 => 50,
        Note::B4 => 50,
        Note::C5 => 50,
        Note::D5 => 50,
        Note::E5 => 50,
        Note::F5 => 50,
        Note::G5 => 50,
        Note::A5 => 50,
        Note::B5 => 50,
        Note::C6 => 50
    ]
);
