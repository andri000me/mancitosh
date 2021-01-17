<?php
function bs_alert($message = 'BS-Allert', $alertClass = 'success')
{
	$tampil = '<div class="alert alert-' . $alertClass . ' alert-dismissible fade show" role="alert">';
	$tampil .= $message;
	$tampil .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
	$tampil .= '<span aria-hidden="true">&times;</span>';
	$tampil .= '</button>';
	$tampil .= '</div>';

	return $tampil;
}