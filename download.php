<?php
// Path to your existing PDF file
$pdfPath = 'files/cv.pdf';

// Generate a filename with the current date
$currentDate = date('Y-m-d');
$filename = 'Alexey_Obukhov_cv_' . $currentDate . '.pdf';

// Set the appropriate headers for download
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Output the existing PDF file
readfile($pdfPath);
?>
