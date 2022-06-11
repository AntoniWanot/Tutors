<?php

namespace App\Services\Tutors;

use App\Models\Tutor;

class TutorsService
{
    public Tutor $tutorModel;

    public function __construct(Tutor $tutorModel)
    {
        $this->tutorModel = $tutorModel;
    }

    public function list($name, $subject)
    {
        return $this->tutorModel->FilterByName($name)->FilterBySubject($subject)->get();
    }
}
