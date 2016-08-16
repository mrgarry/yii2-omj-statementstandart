<?php


namespace omj\financetools\statementstandart;

interface iStatementCurrency {
    public function name();
    public function addTransaction(iStatementTransaction $trx);
    public function getTransactions();
}