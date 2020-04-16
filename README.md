# beep
beeps your motherboard with php

## pre-requisites
- install beep:
```sh
$ sudo apt-get install beep
```
- enable pcspkr module:
```sh
$ sudo modprobe pcspkr
```

## notes
notes range from C1 to B8. sharp  (#) is represented by the letter S because # is not allowed in PHP, so C#4 becomes CS4.

## examples
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Beep\Beep;
use Beep\Note;

// plays default note (A4) & frequency (50ms)
Beep::play();

 // plays C4 note for 50ms
Beep::play(Note::C4);

 // plays D4 note for 100ms
Beep::play(Note::D4, 100);

// plays c major scale
Beep::play([
  Note::C4,
  Note::D4,
  Note::E4,
  Note::F4,
  Note::G4,
  Note::A4,
  Note::B4,
  Note::C5,
]);

// plays c major scale with different note length
Beep::play([
  Note::C4 => 50,
  Note::D4 => 60,
  Note::E4 => 70,
  Note::F4 => 80,
  Note::G4 => 90,
  Note::A4 => 100,
  Note::B4 => 110,
  Note::C4 => 120,
]);

// plays 3 octaves of major scale (very annoying)
Beep::play([
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
  Note::C6 => 50,
  Note::D6 => 50,
  Note::E6 => 50,
  Note::F6 => 50,
  Note::G6 => 50,
  Note::A6 => 50,
  Note::B6 => 50,
  Note::C7 => 50,
]);

```

## what can I use this for?
Whatever your creativity allows! I use it to notify status for jenkins builds
