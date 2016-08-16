<?php

/* 
 * Implemetē saskarni iStatement intf objektiem ar MySQL
 */

namespace omj\financetools\statementstandart;


interface iAccountStatementDbController {
    
    
    public function executeDataImport();
    
    public function executeDataImportIncoming();
    
}

