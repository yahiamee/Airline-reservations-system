<!-- Begin Main Menu -->
<div class="ewMenu">
<?php $RootMenu = new crMenu(EWR_MENUBAR_ID); ?>
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(11, "mi_city_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("11", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "city_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(12, "mi_book_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("12", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "book_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(13, "mi_costumer_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("13", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "costumer_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(14, "mi_fly_report", $ReportLanguage->Phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("14", "MenuText") . $ReportLanguage->Phrase("DetailSummaryReportMenuItemSuffix"), "fly_reportsmry.php", -1, "", TRUE, FALSE);
$RootMenu->Render();
?>
</div>
<!-- End Main Menu -->
