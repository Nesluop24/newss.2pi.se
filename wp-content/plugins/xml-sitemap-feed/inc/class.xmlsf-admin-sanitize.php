<?php

// sanitization

class XMLSF_Admin_Sanitize
{

	public static function sitemaps_settings( $new )
	{
		if ( '1' !== get_option('blog_public') ) {
			return '';
		}

		$old = get_option( 'xmlsf_sitemaps' );
		$sanitized = array();

		if ( $old !== $new ) {
			// when sitemaps are added or removed, ask for rewrite rules flush
			update_option( 'xmlsf_permalinks_flushed', 0 );

			// switched on news sitemap
			if ( ! empty( $new['sitemap-news'] ) && empty( $old['sitemap-news'] ) ) {
				// check news tag settings
				if ( ! get_option( 'xmlsf_news_tags' ) ) {
					add_option( 'xmlsf_news_tags', xmlsf()->default_news_tags );
				}
			}
		}

		if ( !empty($new['sitemap']) ) {
			$sanitized['sitemap'] = apply_filters( 'xmlsf_sitemap_filename', $new['sitemap'] );
		}

		if ( !empty($new['sitemap-news']) ) {
			$sanitized['sitemap-news'] = apply_filters( 'xmlsf_sitemap_news_filename', $new['sitemap-news'] );
		}

		return $sanitized;
	}

	public static function domains_settings( $new )
	{
		$default = parse_url( home_url(), PHP_URL_HOST );

		// clean up input
		if(is_array($new)) {
			$new = array_filter($new);
			$new = reset($new);
		}
		$input = $new ? explode( PHP_EOL, strip_tags( $new ) ) : array();

		// build sanitized output
		$sanitized = array();
		foreach ( $input as $line ) {
			$line = trim($line);
			$parsed_url = parse_url( trim( filter_var( $line, FILTER_SANITIZE_URL ) ) );
			// Before PHP version 5.4.7, parse_url will return the domain as path when scheme is omitted so we do:
			if ( !empty($parsed_url['host']) ) {
				$domain = trim( $parsed_url['host'] );
			} else {
				$domain_arr = explode('/', $parsed_url['path']);
				$domain_arr = array_filter($domain_arr);
				$domain = array_shift( $domain_arr );
				$domain = trim( $domain );
			}

			// filter out empties and default domain
			if(!empty($domain) && $domain !== $default && strpos($domain,".".$default) === false)
				$sanitized[] = $domain;
		}

		return (!empty($sanitized)) ? $sanitized : '';
	}

	public static function ping_settings( $new )
	{
		return is_array($new) ? $new : array();
	}

	public static function robots_settings( $new )
	{
		$old = get_option('xmlsf_robots');

		// clean up input
		if ( is_array( $new ) ) {
			$new = array_filter( $new );
			$new = reset( $new );
		}

		return strip_tags( $new );
	}
}
