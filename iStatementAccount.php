<?php


namespace omj\financetools\statementstandart;

interface iStatementAccount {
    public function name();
    public function addCurrency(iStatementCurrency $ccy);
    public function getCurrencies();
}
