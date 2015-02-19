<?php

class Account_Presenter {

    public function __construct($account) {
        $this->account = $account;
        $this->ci =& get_instance();
    }

    public function contadorRedis() {
        return $this->ci->bank->get($this->account->bank_id)->name . "-" . $account->title;
    }
}