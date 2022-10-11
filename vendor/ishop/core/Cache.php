<?php

namespace ishop;

class Cache {
	use Singletone;

	// Set cache
	public function set( $key, $data, $seconds = 3600 ) {
		if ( $seconds ) {
			// Set content
			$content['data'] = $data;
			// Set end time
			$content['end_time'] = time() + $seconds;
			// Save content to the file
			if ( file_put_contents( CACHE . '/' . md5( $key ) . '.txt', serialize( $content ) ) ) {
				return true;
			}
		}
		return false;
	}

	// Get cache
	public function get( $key ) {
		// Get file by key
		$file = CACHE . '/' . md5( $key ) . '.txt';
		if ( file_exists( $file ) ) {
			// Get content from file
			$content = unserialize( file_get_contents( $file ) );
			// Check cache live time and get content or delete file
			if ( time() <= $content['end_time'] ) {
				return $content;
			} else {
				unlink( $file );
			}
		}
		return false;
	}

	// Delete cache
	public function delete( $key ) {
		// Get file by key
		$file = CACHE . '/' . md5( $key ) . '.txt';
		if ( file_exists( $file ) ) {
			unlink( $file );
		}
	}
}