<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

// Global variable for table object
$book_report = NULL;

//
// Table class for book_report
//
class crbook_report extends crTableBase {
	var $ShowGroupHeaderAsRow = FALSE;
	var $ShowCompactSummaryFooter = TRUE;
	var $ID;
	var $BOOK_NO;
	var $FLY_NO;
	var $COSTUMER_ID;
	var $BOOK_LEVEL;
	var $BOOK_STATE;
	var $BOOK_DATE;
	var $AMOUNT;
	var $OK_BOOK;
	var $DATE;
	var $ACCOUNT;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage, $gsLanguage;
		$this->TableVar = 'book_report';
		$this->TableName = 'book_report';
		$this->TableType = 'REPORT';
		$this->DBID = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0;

		// ID
		$this->ID = new crField('book_report', 'book_report', 'x_ID', 'ID', '`ID`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->ID->Sortable = TRUE; // Allow sort
		$this->ID->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['ID'] = &$this->ID;
		$this->ID->DateFilter = "";
		$this->ID->SqlSelect = "";
		$this->ID->SqlOrderBy = "";

		// BOOK_NO
		$this->BOOK_NO = new crField('book_report', 'book_report', 'x_BOOK_NO', 'BOOK_NO', '`BOOK_NO`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->BOOK_NO->Sortable = TRUE; // Allow sort
		$this->BOOK_NO->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['BOOK_NO'] = &$this->BOOK_NO;
		$this->BOOK_NO->DateFilter = "";
		$this->BOOK_NO->SqlSelect = "";
		$this->BOOK_NO->SqlOrderBy = "";

		// FLY_NO
		$this->FLY_NO = new crField('book_report', 'book_report', 'x_FLY_NO', 'FLY_NO', '`FLY_NO`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->FLY_NO->Sortable = TRUE; // Allow sort
		$this->FLY_NO->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['FLY_NO'] = &$this->FLY_NO;
		$this->FLY_NO->DateFilter = "";
		$this->FLY_NO->SqlSelect = "";
		$this->FLY_NO->SqlOrderBy = "";

		// COSTUMER_ID
		$this->COSTUMER_ID = new crField('book_report', 'book_report', 'x_COSTUMER_ID', 'COSTUMER_ID', '`COSTUMER_ID`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->COSTUMER_ID->Sortable = TRUE; // Allow sort
		$this->COSTUMER_ID->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['COSTUMER_ID'] = &$this->COSTUMER_ID;
		$this->COSTUMER_ID->DateFilter = "";
		$this->COSTUMER_ID->SqlSelect = "";
		$this->COSTUMER_ID->SqlOrderBy = "";

		// BOOK_LEVEL
		$this->BOOK_LEVEL = new crField('book_report', 'book_report', 'x_BOOK_LEVEL', 'BOOK_LEVEL', '`BOOK_LEVEL`', 200, EWR_DATATYPE_STRING, -1);
		$this->BOOK_LEVEL->Sortable = TRUE; // Allow sort
		$this->fields['BOOK_LEVEL'] = &$this->BOOK_LEVEL;
		$this->BOOK_LEVEL->DateFilter = "";
		$this->BOOK_LEVEL->SqlSelect = "";
		$this->BOOK_LEVEL->SqlOrderBy = "";

		// BOOK_STATE
		$this->BOOK_STATE = new crField('book_report', 'book_report', 'x_BOOK_STATE', 'BOOK_STATE', '`BOOK_STATE`', 200, EWR_DATATYPE_STRING, -1);
		$this->BOOK_STATE->Sortable = TRUE; // Allow sort
		$this->fields['BOOK_STATE'] = &$this->BOOK_STATE;
		$this->BOOK_STATE->DateFilter = "";
		$this->BOOK_STATE->SqlSelect = "";
		$this->BOOK_STATE->SqlOrderBy = "";

		// BOOK_DATE
		$this->BOOK_DATE = new crField('book_report', 'book_report', 'x_BOOK_DATE', 'BOOK_DATE', '`BOOK_DATE`', 200, EWR_DATATYPE_STRING, -1);
		$this->BOOK_DATE->Sortable = TRUE; // Allow sort
		$this->fields['BOOK_DATE'] = &$this->BOOK_DATE;
		$this->BOOK_DATE->DateFilter = "";
		$this->BOOK_DATE->SqlSelect = "";
		$this->BOOK_DATE->SqlOrderBy = "";

		// AMOUNT
		$this->AMOUNT = new crField('book_report', 'book_report', 'x_AMOUNT', 'AMOUNT', '`AMOUNT`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->AMOUNT->Sortable = TRUE; // Allow sort
		$this->AMOUNT->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['AMOUNT'] = &$this->AMOUNT;
		$this->AMOUNT->DateFilter = "";
		$this->AMOUNT->SqlSelect = "";
		$this->AMOUNT->SqlOrderBy = "";

		// OK_BOOK
		$this->OK_BOOK = new crField('book_report', 'book_report', 'x_OK_BOOK', 'OK_BOOK', '`OK_BOOK`', 200, EWR_DATATYPE_STRING, -1);
		$this->OK_BOOK->Sortable = TRUE; // Allow sort
		$this->fields['OK_BOOK'] = &$this->OK_BOOK;
		$this->OK_BOOK->DateFilter = "";
		$this->OK_BOOK->SqlSelect = "";
		$this->OK_BOOK->SqlOrderBy = "";

		// DATE
		$this->DATE = new crField('book_report', 'book_report', 'x_DATE', 'DATE', '`DATE`', 200, EWR_DATATYPE_STRING, -1);
		$this->DATE->Sortable = TRUE; // Allow sort
		$this->fields['DATE'] = &$this->DATE;
		$this->DATE->DateFilter = "";
		$this->DATE->SqlSelect = "";
		$this->DATE->SqlOrderBy = "";

		// ACCOUNT
		$this->ACCOUNT = new crField('book_report', 'book_report', 'x_ACCOUNT', 'ACCOUNT', '`ACCOUNT`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->ACCOUNT->Sortable = TRUE; // Allow sort
		$this->ACCOUNT->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['ACCOUNT'] = &$this->ACCOUNT;
		$this->ACCOUNT->DateFilter = "";
		$this->ACCOUNT->SqlSelect = "";
		$this->ACCOUNT->SqlOrderBy = "";
	}

	// Set Field Visibility
	function SetFieldVisibility($fldparm) {
		global $Security;
		return $this->$fldparm->Visible; // Returns original value
	}

	// Single column sort
	function UpdateSort(&$ofld) {
		if ($this->CurrentOrder == $ofld->FldName) {
			$sSortField = $ofld->FldExpression;
			$sLastSort = $ofld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$sThisSort = $this->CurrentOrderType;
			} else {
				$sThisSort = ($sLastSort == "ASC") ? "DESC" : "ASC";
			}
			$ofld->setSort($sThisSort);
			if ($ofld->GroupingFieldId == 0)
				$this->setDetailOrderBy($sSortField . " " . $sThisSort); // Save to Session
		} else {
			if ($ofld->GroupingFieldId == 0) $ofld->setSort("");
		}
	}

	// Get Sort SQL
	function SortSql() {
		$sDtlSortSql = $this->getDetailOrderBy(); // Get ORDER BY for detail fields from session
		$argrps = array();
		foreach ($this->fields as $fld) {
			if ($fld->getSort() <> "") {
				$fldsql = $fld->FldExpression;
				if ($fld->GroupingFieldId > 0) {
					if ($fld->FldGroupSql <> "")
						$argrps[$fld->GroupingFieldId] = str_replace("%s", $fldsql, $fld->FldGroupSql) . " " . $fld->getSort();
					else
						$argrps[$fld->GroupingFieldId] = $fldsql . " " . $fld->getSort();
				}
			}
		}
		$sSortSql = "";
		foreach ($argrps as $grp) {
			if ($sSortSql <> "") $sSortSql .= ", ";
			$sSortSql .= $grp;
		}
		if ($sDtlSortSql <> "") {
			if ($sSortSql <> "") $sSortSql .= ", ";
			$sSortSql .= $sDtlSortSql;
		}
		return $sSortSql;
	}

	// Table level SQL
	// From

	var $_SqlFrom = "";

	function getSqlFrom() {
		return ($this->_SqlFrom <> "") ? $this->_SqlFrom : "`book_tb`";
	}

	function SqlFrom() { // For backward compatibility
		return $this->getSqlFrom();
	}

	function setSqlFrom($v) {
		$this->_SqlFrom = $v;
	}

	// Select
	var $_SqlSelect = "";

	function getSqlSelect() {
		return ($this->_SqlSelect <> "") ? $this->_SqlSelect : "SELECT * FROM " . $this->getSqlFrom();
	}

	function SqlSelect() { // For backward compatibility
		return $this->getSqlSelect();
	}

	function setSqlSelect($v) {
		$this->_SqlSelect = $v;
	}

	// Where
	var $_SqlWhere = "";

	function getSqlWhere() {
		$sWhere = ($this->_SqlWhere <> "") ? $this->_SqlWhere : "";
		return $sWhere;
	}

	function SqlWhere() { // For backward compatibility
		return $this->getSqlWhere();
	}

	function setSqlWhere($v) {
		$this->_SqlWhere = $v;
	}

	// Group By
	var $_SqlGroupBy = "";

	function getSqlGroupBy() {
		return ($this->_SqlGroupBy <> "") ? $this->_SqlGroupBy : "";
	}

	function SqlGroupBy() { // For backward compatibility
		return $this->getSqlGroupBy();
	}

	function setSqlGroupBy($v) {
		$this->_SqlGroupBy = $v;
	}

	// Having
	var $_SqlHaving = "";

	function getSqlHaving() {
		return ($this->_SqlHaving <> "") ? $this->_SqlHaving : "";
	}

	function SqlHaving() { // For backward compatibility
		return $this->getSqlHaving();
	}

	function setSqlHaving($v) {
		$this->_SqlHaving = $v;
	}

	// Order By
	var $_SqlOrderBy = "";

	function getSqlOrderBy() {
		return ($this->_SqlOrderBy <> "") ? $this->_SqlOrderBy : "";
	}

	function SqlOrderBy() { // For backward compatibility
		return $this->getSqlOrderBy();
	}

	function setSqlOrderBy($v) {
		$this->_SqlOrderBy = $v;
	}

	// Table Level Group SQL
	// First Group Field

	var $_SqlFirstGroupField = "";

	function getSqlFirstGroupField() {
		return ($this->_SqlFirstGroupField <> "") ? $this->_SqlFirstGroupField : "";
	}

	function SqlFirstGroupField() { // For backward compatibility
		return $this->getSqlFirstGroupField();
	}

	function setSqlFirstGroupField($v) {
		$this->_SqlFirstGroupField = $v;
	}

	// Select Group
	var $_SqlSelectGroup = "";

	function getSqlSelectGroup() {
		return ($this->_SqlSelectGroup <> "") ? $this->_SqlSelectGroup : "SELECT DISTINCT " . $this->getSqlFirstGroupField() . " FROM " . $this->getSqlFrom();
	}

	function SqlSelectGroup() { // For backward compatibility
		return $this->getSqlSelectGroup();
	}

	function setSqlSelectGroup($v) {
		$this->_SqlSelectGroup = $v;
	}

	// Order By Group
	var $_SqlOrderByGroup = "";

	function getSqlOrderByGroup() {
		return ($this->_SqlOrderByGroup <> "") ? $this->_SqlOrderByGroup : "";
	}

	function SqlOrderByGroup() { // For backward compatibility
		return $this->getSqlOrderByGroup();
	}

	function setSqlOrderByGroup($v) {
		$this->_SqlOrderByGroup = $v;
	}

	// Select Aggregate
	var $_SqlSelectAgg = "";

	function getSqlSelectAgg() {
		return ($this->_SqlSelectAgg <> "") ? $this->_SqlSelectAgg : "SELECT * FROM " . $this->getSqlFrom();
	}

	function SqlSelectAgg() { // For backward compatibility
		return $this->getSqlSelectAgg();
	}

	function setSqlSelectAgg($v) {
		$this->_SqlSelectAgg = $v;
	}

	// Aggregate Prefix
	var $_SqlAggPfx = "";

	function getSqlAggPfx() {
		return ($this->_SqlAggPfx <> "") ? $this->_SqlAggPfx : "";
	}

	function SqlAggPfx() { // For backward compatibility
		return $this->getSqlAggPfx();
	}

	function setSqlAggPfx($v) {
		$this->_SqlAggPfx = $v;
	}

	// Aggregate Suffix
	var $_SqlAggSfx = "";

	function getSqlAggSfx() {
		return ($this->_SqlAggSfx <> "") ? $this->_SqlAggSfx : "";
	}

	function SqlAggSfx() { // For backward compatibility
		return $this->getSqlAggSfx();
	}

	function setSqlAggSfx($v) {
		$this->_SqlAggSfx = $v;
	}

	// Select Count
	var $_SqlSelectCount = "";

	function getSqlSelectCount() {
		return ($this->_SqlSelectCount <> "") ? $this->_SqlSelectCount : "SELECT COUNT(*) FROM " . $this->getSqlFrom();
	}

	function SqlSelectCount() { // For backward compatibility
		return $this->getSqlSelectCount();
	}

	function setSqlSelectCount($v) {
		$this->_SqlSelectCount = $v;
	}

	// Sort URL
	function SortUrl(&$fld) {
		return "";
	}

	// Setup lookup filters of a field
	function SetupLookupFilters($fld) {
		global $gsLanguage;
		switch ($fld->FldVar) {
		}
	}

	// Setup AutoSuggest filters of a field
	function SetupAutoSuggestFilters($fld) {
		global $gsLanguage;
		switch ($fld->FldVar) {
		}
	}

	// Table level events
	// Page Selecting event
	function Page_Selecting(&$filter) {

		// Enter your code here
	}

	// Page Breaking event
	function Page_Breaking(&$break, &$content) {

		// Example:
		//$break = FALSE; // Skip page break, or
		//$content = "<div style=\"page-break-after:always;\">&nbsp;</div>"; // Modify page break content

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here
	}

	// Cell Rendered event
	function Cell_Rendered(&$Field, $CurrentValue, &$ViewValue, &$ViewAttrs, &$CellAttrs, &$HrefValue, &$LinkAttrs) {

		//$ViewValue = "xxx";
		//$ViewAttrs["style"] = "xxx";

	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>);

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}

	// Load Filters event
	function Page_FilterLoad() {

		// Enter your code here
		// Example: Register/Unregister Custom Extended Filter
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A', 'GetStartsWithAFilter'); // With function, or
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A'); // No function, use Page_Filtering event
		//ewr_UnregisterFilter($this-><Field>, 'StartsWithA');

	}

	// Page Filter Validated event
	function Page_FilterValidated() {

		// Example:
		//$this->MyField1->SearchValue = "your search criteria"; // Search value

	}

	// Page Filtering event
	function Page_Filtering(&$fld, &$filter, $typ, $opr = "", $val = "", $cond = "", $opr2 = "", $val2 = "") {

		// Note: ALWAYS CHECK THE FILTER TYPE ($typ)! Example:
		//if ($typ == "dropdown" && $fld->FldName == "MyField") // Dropdown filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "extended" && $fld->FldName == "MyField") // Extended filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "popup" && $fld->FldName == "MyField") // Popup filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "custom" && $opr == "..." && $fld->FldName == "MyField") // Custom filter, $opr is the custom filter ID
		//	$filter = "..."; // Modify the filter

	}

	// Email Sending event
	function Email_Sending(&$Email, &$Args) {

		//var_dump($Email); var_dump($Args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		// Enter your code here
	}
}
?>
