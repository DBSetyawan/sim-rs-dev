<?php

namespace App\Lib\Repositories;

use Illuminate\Http\Client\Request;

interface StoredDocumentFOURInterface
{
    public function StoredDocumentComponentOrdersFOUR(Object $data, $generateID, $NEXT);
}