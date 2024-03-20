<?php

namespace App;

class TaskEvaluation
{
    public static function developerRating(string $programLanguage): ?int
    {
        switch ($programLanguage) {
            case 'Php':
                $phpDeveloper = new PhpDeveloper('Anna', 30, 'Junior');
                $result = $phpDeveloper->taskEvaluation();
                break;
            case 'Java':
                $javaDeveloper = new JavaDeveloper('Anastasia', 25, 'Middle');
                $result = $javaDeveloper->taskEvaluation();
                break;
            case 'Python':
                $pythonDeveloper = new PythonDeveloper();
                $result = $pythonDeveloper->taskEvaluation();
                break;
            case 'C':
                $cDeveloper = new CDeveloper();
                $result = $cDeveloper->taskEvaluation();
                break;
            default:
                $result = null;
                break;
        }

        return $result;
    }

    public static function generateFinalGrade( string $programLanguage): int
    {
        $projectManager = new ProjectManager();

        return $projectManager->taskEvaluation(TaskEvaluation::developerRating($programLanguage));

    }
}
