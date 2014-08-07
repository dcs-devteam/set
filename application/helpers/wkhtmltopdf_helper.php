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
	}