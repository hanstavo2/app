<?php

require_once( dirname( __FILE__ ) . '/../../commandLine.inc' );

global $wgDevelEnvironment, $wgOptimizelyUrl, $wgOptimizelyDevUrl;

$urlPrefix = 'http:';
$curlUrl = $wgDevelEnvironment ? $wgOptimizelyDevUrl : $wgOptimizelyUrl;

if ( substr( $curlUrl, 0, strlen( $urlPrefix ) ) !== $urlPrefix ) {
	$curlUrl .= $urlPrefix;
}

$curlHandle = curl_init( $curlUrl );

// don't print the output, assign it to a variable instead
curl_setopt( $curlHandle, CURLOPT_RETURNTRANSFER, true );
$curlData = curl_exec( $curlHandle );

if ( $curlData !== false ) {
	$storageModel = new MysqlKeyValueModel();
	$storedData = $storageModel->get( OptimizelyController::OPTIMIZELY_SCRIPT_KEY );

	if ( empty( $storedData ) || $storedData !== $curlData ) {
		$storageModel->set( OptimizelyController::OPTIMIZELY_SCRIPT_KEY, $curlData );
	}
}

curl_close( $curlHandle );
