<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('TCPDF/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

require_once "../koneksi.php";
$query = "SELECT * FROM surat_masuk";


$data = mysqli_query($db,$query);

// create some HTML content
$html = '<h1 align="center">SURAT MASUK</h1>


<table border="1" cellpadding="5">
	<tr>
		<th align="center" width="5%"><strong>NO</strong></th>
		<th align="center" width="15%"><strong>TANGGAL SURAT</strong></th>
		<th align="center" width="15%"><strong>NOMOR SURAT</strong></th>
		<th align="center" width="20%"><strong>ISI SURAT</strong></th>
		<th align="center" width="15%"><strong>PENGIRIM</strong></th>
		<th align="center" width="15%"><strong>WAKTU</strong></th>
		<th align="center" width="15%"><strong>TEMPAT</strong></th>
	</tr>
	</table>';

	$nomor=0;

	while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
	{
		$nomor++;

	$html .= '<table border="1" cellpadding="5">
		<tr>
			<td align="center" width="5%">' .$nomor. '</td>
			<td width="15%">' .$row['t_surat']. '</td>
    		<td width="15%">' .$row['no_surat']. '</td>
    		<td width="20%">' .$row['isi_surat']. '</td>
    		<td width="15%">' .$row['alamat_pengirim']. '</td>
    		<td width="15%">' .$row['waktu']. '</td>
    		<td width="15%">' .$row['tempat']. '</td>
    	</tr>		
			</table>';

			
} 
//;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('surat_masuk.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
