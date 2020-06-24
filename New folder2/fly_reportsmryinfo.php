
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

// Global variable for table object
$fly_report = NULL;

//
// Table class for fly_report
//
class crfly_report extends crTableBase {
	var $ShowGroupHeaderAsRow = FALSE;
	var $ShowCompactSummaryFooter = TRUE;
	var $ID;
	var $FLY_NO;
	var $FROM;
	var $TO;
	var $SITE_NO1;
	var $SITE_NO2;
	var $SITE_NO3;
	var $PLANE_TYPE;
	var $AIRPORT_FROM;
	var $AIRPORT_TO;
	var $FLY_DATE;
	var $LINE;
	var $price_l1;
	var $price_l2;
	var $price_l3;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage, $gsLanguage;
		$this->TableVar = 'fly_report';
		$this->TableName = 'fly_report';
		$this->TableType = 'REPORT';
		$this->DBID = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0;

		// ID
		$this->ID = new crField('fly_report', 'fly_report', 'x_ID', 'ID', '`ID`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->ID->Sortable = TRUE; // Allow sort
		$this->ID->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['ID'] = &$this->ID;
		$this->ID->DateFilter = "";
		$this->ID->SqlSelect = "";
		$this->ID->SqlOrderBy = "";

		// FLY_NO
		$this->FLY_NO = new crField('fly_report', 'fly_report', 'x_FLY_NO', 'FLY_NO', '`FLY_NO`', 200, EWR_DATATYPE_STRING, -1);
		$this->FLY_NO->Sortable = TRUE; // Allow sort
		$this->fields['FLY_NO'] = &$this->FLY_NO;
		$this->FLY_NO->DateFilter = "";
		$this->FLY_NO->SqlSelect = "";
		$this->FLY_NO->SqlOrderBy = "";

		// FROM
		$this->FROM = new crField('fly_report', 'fly_report', 'x_FROM', 'FROM', '`FROM`', 200, EWR_DATATYPE_STRING, -1);
		$this->FROM->Sortable = TRUE; // Allow sort
		$this->fields['FROM'] = &$this->FROM;
		$this->FROM->DateFilter = "";
		$this->FROM->SqlSelect = "";
		$this->FROM->SqlOrderBy = "";

		// TO
		$this->TO = new crField('fly_report', 'fly_report', 'x_TO', 'TO', '`TO`', 200, EWR_DATATYPE_STRING, -1);
		$this->TO->Sortable = TRUE; // Allow sort
		$this->fields['TO'] = &$this->TO;
		$this->TO->DateFilter = "";
		$this->TO->SqlSelect = "";
		$this->TO->SqlOrderBy = "";

		// SITE_NO1
		$this->SITE_NO1 = new crField('fly_report', 'fly_report', 'x_SITE_NO1', 'SITE_NO1', '`SITE_NO1`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->SITE_NO1->Sortable = TRUE; // Allow sort
		$this->SITE_NO1->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['SITE_NO1'] = &$this->SITE_NO1;
		$this->SITE_NO1->DateFilter = "";
		$this->SITE_NO1->SqlSelect = "";
		$this->SITE_NO1->SqlOrderBy = "";

		// SITE_NO2
		$this->SITE_NO2 = new crField('fly_report', 'fly_report', 'x_SITE_NO2', 'SITE_NO2', '`SITE_NO2`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->SITE_NO2->Sortable = TRUE; // Allow sort
		$this->SITE_NO2->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['SITE_NO2'] = &$this->SITE_NO2;
		$this->SITE_NO2->DateFilter = "";
		$this->SITE_NO2->SqlSelect = "";
		$this->SITE_NO2->SqlOrderBy = "";

		// SITE_NO3
		$this->SITE_NO3 = new crField('fly_report', 'fly_report', 'x_SITE_NO3', 'SITE_NO3', '`SITE_NO3`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->SITE_NO3->Sortable = TRUE; // Allow sort
		$this->SITE_NO3->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['SITE_NO3'] = &$this->SITE_NO3;
		$this->SITE_NO3->DateFilter = "";
		$this->SITE_NO3->SqlSelect = "";
		$this->SITE_NO3->SqlOrderBy = "";

		// PLANE_TYPE
		$this->PLANE_TYPE = new crField('fly_report', 'fly_report', 'x_PLANE_TYPE', 'PLANE_TYPE', '`PLANE_TYPE`', 200, EWR_DATATYPE_STRING, -1);
		$this->PLANE_TYPE->Sortable = TRUE; // Allow sort
		$this->fields['PLANE_TYPE'] = &$this->PLANE_TYPE;
		$this->PLANE_TYPE->DateFilter = "";
		$this->PLANE_TYPE->SqlSelect = "";
		$this->PLANE_TYPE->SqlOrderBy = "";

		// AIRPORT_FROM
		$this->AIRPORT_FROM = new crField('fly_report', 'fly_report', 'x_AIRPORT_FROM', 'AIRPORT_FROM', '`AIRPORT_FROM`', 200, EWR_DATATYPE_STRING, -1);
		$this->AIRPORT_FROM->Sortable = TRUE; // Allow sort
		$this->fields['AIRPORT_FROM'] = &$this->AIRPORT_FROM;
		$this->AIRPORT_FROM->DateFilter = "";
		$this->AIRPORT_FROM->SqlSelect = "";
		$this->AIRPORT_FROM->SqlOrderBy = "";

		// AIRPORT_TO
		$this->AIRPORT_TO = new crField('fly_report', 'fly_report', 'x_AIRPORT_TO', 'AIRPORT_TO', '`AIRPORT_TO`', 200, EWR_DATATYPE_STRING, -1);
		$this->AIRPORT_TO->Sortable = TRUE; // Allow sort
		$this->fields['AIRPORT_TO'] = &$this->AIRPORT_TO;
		$this->AIRPORT_TO->DateFilter = "";
		$this->AIRPORT_TO->SqlSelect = "";
		$this->AIRPORT_TO->SqlOrderBy = "";

		// FLY_DATE
		$this->FLY_DATE = new crField('fly_report', 'fly_report', 'x_FLY_DATE', 'FLY_DATE', '`FLY_DATE`', 200, EWR_DATATYPE_STRING, -1);
		$this->FLY_DATE->Sortable = TRUE; // Allow sort
		$this->fields['FLY_DATE'] = &$this->FLY_DATE;
		$this->FLY_DATE->DateFilter = "";
		$this->FLY_DATE->SqlSelect = "";
		$this->FLY_DATE->SqlOrderBy = "";

		// LINE
		$this->LINE = new crField('fly_report', 'fly_report', 'x_LINE', 'LINE', '`LINE`', 200, EWR_DATATYPE_STRING, -1);
		$this->LINE->Sortable = TRUE; // Allow sort
		$this->fields['LINE'] = &$this->LINE;
		$this->LINE->DateFilter = "";
		$this->LINE->SqlSelect = "";
		$this->LINE->SqlOrderBy = "";

		// price_l1
		$this->price_l1 = new crField('fly_report', 'fly_report', 'x_price_l1', 'price_l1', '`price_l1`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->price_l1->Sortable = TRUE; // Allow sort
		$this->price_l1->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['price_l1'] = &$this->price_l1;
		$this->price_l1->DateFilter = "";
		$this->price_l1->SqlSelect = "";
		$this->price_l1->SqlOrderBy = "";

		// price_l2
		$this->price_l2 = new crField('fly_report', 'fly_report', 'x_price_l2', 'price_l2', '`price_l2`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->price_l2->Sortable = TRUE; // Allow sort
		$this->price_l2->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['price_l2'] = &$this->price_l2;
		$this->price_l2->DateFilter = "";
		$this->price_l2->SqlSelect = "";
		$this->price_l2->SqlOrderBy = "";

		// price_l3
		$this->price_l3 = new crField('fly_report', 'fly_report', 'x_price_l3', 'price_l3', '`price_l3`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->price_l3->Sortable = TRUE; // Allow sort
		$this->price_l3->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['price_l3'] = &$this->price_l3;
		$this->price_l3->DateFilter = "";
		$this->price_l3->SqlSelect = "";
		$this->price_l3->SqlOrderBy = "";
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
		return ($this->_SqlFrom <> "") ? $this->_SqlFrom : "`fly_tb`";
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
