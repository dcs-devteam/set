<?php
require_once FCPATH.'vendor/knplabs/knp-snappy/src/autoload.php';
use Knp\Snappy\Pdf;

if (!defined('BASEPATH')) exit('No direct script access allowed');

	function pdf_create($html, $filename) {
		$snappy = new Pdf();		
		$snappy->setBinary('C:\wkhtmltopdf\bin\wkhtmltopdf.exe');
		$snappy->setOption('page-size', 'Letter');
		$snappy->setOption('footer-right', '[page]/[toPage]');

		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
		echo $snappy->getOutput(base_url('assets/temp/temp.php'));
	}