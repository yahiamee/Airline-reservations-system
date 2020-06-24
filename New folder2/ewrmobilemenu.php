<!-- Begin Main Menu -->
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(11, "mmi_city_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("11", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "city_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(12, "mmi_book_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("12", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "book_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(13, "mmi_costumer_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("13", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "costumer_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(14, "mmi_fly_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("14", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "fly_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->Render();
?>
<!-- End Main Menu -->
