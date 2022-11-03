<?php

namespace App\Http\Controllers\Contacts;

use Illuminate\Http\Request;
use App\Services\Contacts;

/**
 * コンタクトコントローラー
 */
class ContactsController
{
    /**
     * コンタクトサービスクラス
     */
    private ContactsService $ContactsService;

    /**
     * コンストラクタ
     */
    public function __construct(
        ContactsService $ContactsService,
    )
    {
        $this->ContactsService = $ContactsService;
    }
    
    /**
     * コンタクトページを表示する
     * return view
    **/
    public function show()
    {
        return view('Contacts/contacts');
    }
}
