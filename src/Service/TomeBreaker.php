<?php

namespace App\Service;

class TomeBreaker {
    // the tome
    private $monolith;

    // the broken up tome
    private $chunks;

    private function __construct(string $monolith){
        $this->monolith = $monolith;
        $this->chunks = [];
    }

    public function chunkify(){
        $this->chunks = ['foo ', 'bar ', 'baz ', 'bah '];
        // todo MAKE THE SPLITTING LOGIC
        return $this->chunks;
    }
}