<?php

namespace Beep;

class Beep
{
    const DEFAULT_FREQUENCY = Note::A4;
    const DEFAULT_LENGTH = 50;

    public function play()
    {
        $args = func_get_args();

        if (is_array($args[0])) {
            foreach ($args[0] as $key => $value) {
                if (!$key) {
                    $frequency = $value;
                    $length = self::DEFAULT_LENGTH;
                } else {
                    $frequency = $key;
                    $length = $value;
                }
                shell_exec("beep -f {$frequency} -l {$length}");
            }
            return;
        }

        if (!isset($args[0])) {
            $frequency = self::DEFAULT_FREQUENCY;
        } else {
            $frequency = $args[0];
        }

        if (!isset($args[1])) {
            $length = self::DEFAULT_LENGTH;
        } else {
            $length = $args[1];
        }

        shell_exec("beep -f {$frequency} -l $length");
        return;
    }
}

