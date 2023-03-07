<?php

namespace Brainlight\BrainlightForLaravel;

use Illuminate\Contracts\View\Engine;
use Brainlight\BrainlightPhp\Engine as Brainlight;

class BrainlightEngine extends Brainlight implements Engine
{
    public function get($path, array $data = [])
    {
        return $this->render($path, $data);
    }
}
