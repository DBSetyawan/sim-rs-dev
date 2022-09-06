<?php

namespace App\Helpers;

use App\Http\Controllers\packlane\EDPrepackbuiler;

class ClassBuilder
{
    static function Mailers($design_plan)
    {
        return EDPrepackbuiler::EventEmitSendMail($design_plan);
    }
}