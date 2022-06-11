<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Tutors\TutorsService;

class TutorsController extends Controller
{

    public TutorsService $tutorsService;

    public function __construct(TutorsService $tutorsService)
    {
        $this->tutorsService = $tutorsService;
    }

    public function list(Request $request)
    {
        $name = $request->get("name");
        $subject = $request->get("subject");
        $tutors = $this->tutorsService->list($name, $subject);
        return view('tutors.list', ["tutors" => $tutors]);
    }
}
