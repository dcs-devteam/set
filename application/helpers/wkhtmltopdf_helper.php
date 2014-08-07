<?php
// use mikehaertl\wkhtmlto\Pdf;

require_once FCPATH.'vendor/knplabs/knp-snappy/src/autoload.php';

use Knp\Snappy\Pdf;

if (!defined('BASEPATH')) exit('No direct script access allowed');
	function pdf_create($html, $filename) {
		$snappy = new Pdf();		
		$snappy->setBinary('C:\wkhtmltopdf\bin\wkhtmltopdf.exe');

		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
		echo $snappy->getOutput(base_url('assets/temp/report.php'));

		// $options = array(
		// 	'page-size' => 'Letter'
		// 	);
		// // You can pass a filename, a HTML string or an URL to the constructor
		// $pdf = new Pdf($options);

		// // If you installed the binary through composer, you need to configure
		// // the right path to the binary (modify to match your path/version):
		// $pdf->binary = FCPATH . 'vendor\bin\wkhtmltopdf-i386';

		// $pdf->addPage(base_url('assets/temp/report.php'));

		// // $pdf->saveAs('assets/temp/report.pdf');
		// // $pdf->send($filename.'.pdf');
		// if (!$pdf->saveAs('assets/temp/report.pdf')) {
		// 	echo 'Could not create PDF: '.$pdf->getError();
		// }
	}