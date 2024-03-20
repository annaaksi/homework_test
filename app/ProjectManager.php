<?php

namespace App;

class ProjectManager implements Manager
{
    public const CONST = 3;
    public function taskEvaluation($hours): int
    {
        return $hours * self::CONST;
    }
}
