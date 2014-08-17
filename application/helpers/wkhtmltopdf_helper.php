<?php
require_once FCPATH.'vendor/knplabs/knp-snappy/src/autoload.php';
use Knp\Snappy\Pdf;

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Generate PDF file for download using the wkhtmltopdf program.
 * @param  string $html			HTML string/file
 * @param  string $filename	filename of file
 */
	function pdf_create($html, $filename) {
		$snappy = new Pdf();
		//change value to where wkhtmltopdf binary is found
		$snappy->setBinary('C:\wkhtmltopdf\bin\wkhtmltopdf.exe');

		$snappy->setOption('page-size', 'Letter');
		$snappy->setOption('footer-right', '[page]/[toPage]');

		header('Content-Type: application/pdf');
		//save as
		// header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
		// open in browser
		header('Content-Disposition: inline; filename="'.$filename.'.pdf"');
		echo $snappy->getOutput(base_url('assets/temp/temp.php'));
	}