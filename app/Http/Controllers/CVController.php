<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Hobby;
use App\Models\Language;
use App\Models\Me;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certificate;
use App\Models\PersonalProjects;

class CVController extends Controller
{
    public function me()
    {
        return [
            "me" => Me::all()->first(),
            "contacts" => Contact::all(),
            "skills" => Skill::all(),
            "languages" => Language::all(),
            "hobbies" => Hobby::all(),
            "experiences" => Experience::where('status',1)->get(),
            "education" => Education::all(),
            "certificates" => Certificate::all(),
            "personal_projects" => PersonalProjects::all(),
        ];
    }

    public function vue()
    {
        return view('cv/vue');
    }
}