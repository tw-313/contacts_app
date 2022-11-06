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
    private ContactsService $contactsService;

    /**
     * コンストラクタ
     */
    public function __construct(
        ContactsService $contactsService,
    )
    {
        $this->ContactsService = $contactsService;
    }

    /**
     * コンタクトページを表示する
     * return view
    **/
    public function show()
    {
        return view('Contacts/contacts')->with('binder');
    }
}
