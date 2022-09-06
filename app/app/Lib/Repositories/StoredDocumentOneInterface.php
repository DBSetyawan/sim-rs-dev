<?php

namespace App\Lib\Repositories;

use Illuminate\Http\Client\Request;

interface StoredDocumentOneInterface
{
    public function StoredDocumentComponentOrdersOne(Object $data, $generateID, $NEXT);
}