<?php

class Snakes
{

    public function connect()
    {
        $json_file = 'Snakes.json';

        $json_data = file_get_contents($json_file);

        $snakes = json_decode($json_data, true);

        return $snakes;
    }
}
$snakes = new Snakes();
