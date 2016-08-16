<?php



namespace omj\financetools\statementstandart;

//vienots interfeiss visiem datu standartiem - gan FIDAVISTA< gan LT utt

interface iStatement {
    public function addAccount(iStatementAccount $acct);
    public function getAccounts();  //ret array of FidavistaAccount objects
    public function getStatement(); //ret array
    public function saveToDb();     //returns successfully saved rows
}