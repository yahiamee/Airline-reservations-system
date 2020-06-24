<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

// Global variable for table object
$costumer_report = NULL;

//
// Table class for costumer_report
//
class crcostumer_report extends crTableBase {
	var $ShowGroupHeaderAsRow = FALSE;
	var $ShowCompactSummaryFooter = TRUE;
	var $ID;
	var $COSTUMER_ID;
	var $COSTUMER_NAME;
	var $NATIONALITY;
	var $NAT_TYPE;
	var $ID_NO;
	var $ADDRESS;
	var $PHONE;
	var $NATIONAL_ID;
	var $_EMAIL;
	var $JOB;
	var $USERNAME;
	var $PASSWORD;
	var $book_no;
	var $FLY_NO;
	var $book_level;
	var $book_state;
	var $account_no;
	var $states;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage, $gsLanguage;
		$this->TableVar = 'costumer_report';
		$this->TableName = 'costumer_report';
		$this->TableType = 'REPORT';
		$this->DBID = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0;

		// ID
		$this->ID = new crField('costumer_report', 'costumer_report', 'x_ID', 'ID', '`ID`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->ID->Sortable = TRUE; // Allow sort
		$this->ID->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['ID'] = &$this->ID;
		$this->ID->DateFilter = "";
		$this->ID->SqlSelect = "";
		$this->ID->SqlOrderBy = "";

		// COSTUMER_ID
		$this->COSTUMER_ID = new crField('costumer_report', 'costumer_report', 'x_COSTUMER_ID', 'COSTUMER_ID', '`COSTUMER_ID`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->COSTUMER_ID->Sortable = TRUE; // Allow sort
		$this->COSTUMER_ID->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['COSTUMER_ID'] = &$this->COSTUMER_ID;
		$this->COSTUMER_ID->DateFilter = "";
		$this->COSTUMER_ID->SqlSelect = "";
		$this->COSTUMER_ID->SqlOrderBy = "";

		// COSTUMER_NAME
		$this->COSTUMER_NAME = new crField('costumer_report', 'costumer_report', 'x_COSTUMER_NAME', 'COSTUMER_NAME', '`COSTUMER_NAME`', 200, EWR_DATATYPE_STRING, -1);
		$this->COSTUMER_NAME->Sortable = TRUE; // Allow sort
		$this->fields['COSTUMER_NAME'] = &$this->COSTUMER_NAME;
		$this->COSTUMER_NAME->DateFilter = "";
		$this->COSTUMER_NAME->SqlSelect = "";
		$this->COSTUMER_NAME->SqlOrderBy = "";

		// NATIONALITY
		$this->NATIONALITY = new crField('costumer_report', 'costumer_report', 'x_NATIONALITY', 'NATIONALITY', '`NATIONALITY`', 200, EWR_DATATYPE_STRING, -1);
		$this->NATIONALITY->Sortable = TRUE; // Allow sort
		$this->fields['NATIONALITY'] = &$this->NATIONALITY;
		$this->NATIONALITY->DateFilter = "";
		$this->NATIONALITY->SqlSelect = "";
		$this->NATIONALITY->SqlOrderBy = "";

		// NAT_TYPE
		$this->NAT_TYPE = new crField('costumer_report', 'costumer_report', 'x_NAT_TYPE', 'NAT_TYPE', '`NAT_TYPE`', 200, EWR_DATATYPE_STRING, -1);
		$this->NAT_TYPE->Sortable = TRUE; // Allow sort
		$this->fields['NAT_TYPE'] = &$this->NAT_TYPE;
		$this->NAT_TYPE->DateFilter = "";
		$this->NAT_TYPE->SqlSelect = "";
		$this->NAT_TYPE->SqlOrderBy = "";

		// ID_NO
		$this->ID_NO = new crField('costumer_report', 'costumer_report', 'x_ID_NO', 'ID_NO', '`ID_NO`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->ID_NO->Sortable = TRUE; // Allow sort
		$this->ID_NO->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['ID_NO'] = &$this->ID_NO;
		$this->ID_NO->DateFilter = "";
		$this->ID_NO->SqlSelect = "";
		$this->ID_NO->SqlOrderBy = "";

		// ADDRESS
		$this->ADDRESS = new crField('costumer_report', 'costumer_report', 'x_ADDRESS', 'ADDRESS', '`ADDRESS`', 200, EWR_DATATYPE_STRING, -1);
		$this->ADDRESS->Sortable = TRUE; // Allow sort
		$this->fields['ADDRESS'] = &$this->ADDRESS;
		$this->ADDRESS->DateFilter = "";
		$this->ADDRESS->SqlSelect = "";
		$this->ADDRESS->SqlOrderBy = "";

		// PHONE
		$this->PHONE = new crField('costumer_report', 'costumer_report', 'x_PHONE', 'PHONE', '`PHONE`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->PHONE->Sortable = TRUE; // Allow sort
		$this->PHONE->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['PHONE'] = &$this->PHONE;
		$this->PHONE->DateFilter = "";
		$this->PHONE->SqlSelect = "";
		$this->PHONE->SqlOrderBy = "";

		// NATIONAL_ID
		$this->NATIONAL_ID = new crField('costumer_report', 'costumer_report', 'x_NATIONAL_ID', 'NATIONAL_ID', '`NATIONAL_ID`', 200, EWR_DATATYPE_STRING, -1);
		$this->NATIONAL_ID->Sortable = TRUE; // Allow sort
		$this->fields['NATIONAL_ID'] = &$this->NATIONAL_ID;
		$this->NATIONAL_ID->DateFilter = "";
		$this->NATIONAL_ID->SqlSelect = "";
		$this->NATIONAL_ID->SqlOrderBy = "";

		// EMAIL
		$this->_EMAIL = new crField('costumer_report', 'costumer_report', 'x__EMAIL', 'EMAIL', '`EMAIL`', 200, EWR_DATATYPE_STRING, -1);
		$this->_EMAIL->Sortable = TRUE; // Allow sort
		$this->fields['_EMAIL'] = &$this->_EMAIL;
		$this->_EMAIL->DateFilter = "";
		$this->_EMAIL->SqlSelect = "";
		$this->_EMAIL->SqlOrderBy = "";

		// JOB
		$this->JOB = new crField('costumer_report', 'costumer_report', 'x_JOB', 'JOB', '`JOB`', 200, EWR_DATATYPE_STRING, -1);
		$this->JOB->Sortable = TRUE; // Allow sort
		$this->fields['JOB'] = &$this->JOB;
		$this->JOB->DateFilter = "";
		$this->JOB->SqlSelect = "";
		$this->JOB->SqlOrderBy = "";

		// USERNAME
		$this->USERNAME = new crField('costumer_report', 'costumer_report', 'x_USERNAME', 'USERNAME', '`USERNAME`', 200, EWR_DATATYPE_STRING, -1);
		$this->USERNAME->Sortable = TRUE; // Allow sort
		$this->fields['USERNAME'] = &$this->USERNAME;
		$this->USERNAME->DateFilter = "";
		$this->USERNAME->SqlSelect = "";
		$this->USERNAME->SqlOrderBy = "";

		// PASSWORD
		$this->PASSWORD = new crField('costumer_report', 'costumer_report', 'x_PASSWORD', 'PASSWORD', '`PASSWORD`', 200, EWR_DATATYPE_STRING, -1);
		$this->PASSWORD->Sortable = TRUE; // Allow sort
		$this->fields['PASSWORD'] = &$this->PASSWORD;
		$this->PASSWORD->DateFilter = "";
		$this->PASSWORD->SqlSelect = "";
		$this->PASSWORD->SqlOrderBy = "";

		// book_no
		$this->book_no = new crField('costumer_report', 'costumer_report', 'x_book_no', 'book_no', '`book_no`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->book_no->Sortable = TRUE; // Allow sort
		$this->book_no->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['book_no'] = &$this->book_no;
		$this->book_no->DateFilter = "";
		$this->book_no->SqlSelect = "";
		$this->book_no->SqlOrderBy = "";

		// FLY_NO
		$this->FLY_NO = new crField('costumer_report', 'costumer_report', 'x_FLY_NO', 'FLY_NO', '`FLY_NO`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->FLY_NO->Sortable = TRUE; // Allow sort
		$this->FLY_NO->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['FLY_NO'] = &$this->FLY_NO;
		$this->FLY_NO->DateFilter = "";
		$this->FLY_NO->SqlSelect = "";
		$this->FLY_NO->SqlOrderBy = "";

		// book_level
		$this->book_level = new crField('costumer_report', 'costumer_report', 'x_book_level', 'book_level', '`book_level`', 200, EWR_DATATYPE_STRING, -1);
		$this->book_level->Sortable = TRUE; // Allow sort
		$this->fields['book_level'] = &$this->book_level;
		$this->book_level->DateFilter = "";
		$this->book_level->SqlSelect = "";
		$this->book_level->SqlOrderBy = "";

		// book_state
		$this->book_state = new crField('costumer_report', 'costumer_report', 'x_book_state', 'book_state', '`book_state`', 200, EWR_DATATYPE_STRING, -1);
		$this->book_state->Sortable = TRUE; // Allow sort
		$this->fields['book_state'] = &$this->book_state;
		$this->book_state->DateFilter = "";
		$this->book_state->SqlSelect = "";
		$this->book_state->SqlOrderBy = "";

		// account_no
		$this->account_no = new crField('costumer_report', 'costumer_report', 'x_account_no', 'account_no', '`account_no`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->account_no->Sortable = TRUE; // Allow sort
		$this->account_no->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['account_no'] = &$this->account_no;
		$this->account_no->DateFilter = "";
		$this->account_no->SqlSelect = "";
		$this->account_no->SqlOrderBy = "";

		// states
		$this->states = new crField('costumer_report', 'costumer_report', 'x_states', 'states', '`states`', 200, EWR_DATATYPE_STRING, -1);
		$this->states->Sortable = TRUE; // Allow sort
		$this->fields['states'] = &$this->states;
		$this->states->DateFilter = "";
		$this->states->SqlSelect = "";
		$this->states->SqlOrderBy = "";
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
		return ($this->_SqlFrom <> "") ? $this->_SqlFrom : "`costumer_tb`";
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
