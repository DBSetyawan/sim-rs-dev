<?php

namespace App\Lib\Repositories;

use Illuminate\Http\Client\Request;

interface StoredSingleDocumentInterface
{
    public function StoredSingleDocumentComponentOrders(Object $data, $generateID, $NEXT);
}