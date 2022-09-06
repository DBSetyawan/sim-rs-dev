<?php

namespace App\Lib\Repositories;

use Illuminate\Http\Client\Request;

interface StoredDocumentTWOInterface
{
    public function StoredDocumentComponentOrdersTWO(Object $data, $generateID, $NEXT);
}