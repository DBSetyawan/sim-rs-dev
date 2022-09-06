<?php

namespace App\Lib\Repositories;

use Illuminate\Http\Client\Request;

interface StoredDocumentTHREEInterface
{
    public function StoredDocumentComponentOrdersTHREE(Object $data, $generateID, $NEXT);
}