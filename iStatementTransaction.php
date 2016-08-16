<?php


namespace omj\financetools\statementstandart;

interface iStatementTransaction {
    public function bankReference();
    public function CorD(); //Credit or debit; automatically implemented in FIDAVISTA but must describe for others
    public function payeeAccount();
    public function payeeBankCode(); //bank swift
    public function payeeCode(); //personal ID code
    public function payeeName();
    public function paymentAmt();
    public function paymentDate();
    public function paymentInfo();
}

