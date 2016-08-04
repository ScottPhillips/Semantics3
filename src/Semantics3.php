<?php

namespace Subbe\Semantics3;

// require(dirname(__FILE__) . '/lib/library/OAuthStore.php');
// include_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequester.php";
include_once dirname(__FILE__)."/lib/oauth-php/library/OAuthStore.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequest.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequester.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequestSigner.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequestVerifier.php";

class Semantics3
{

    public static function search($item) {

        if (!$item) {
            return ['code'=>400, 'message'=>'Search request missing a product.'];
        }

        $key = env('SEMANTICS3_SECRET_KEY');
        $secret = env('SEMANTICS3_PUBLIC_KEY');

        $requestor = new \Semantics3_Products($key, $secret);

        # Build the request
        $requestor->products_field( "search", $item );

        # Run the request
        $results = $requestor->get_products();

        # View the results of the request
        return $results;
    }

    public static function upc($item) {

        if (!$item) {
            return ['code'=>400, 'message'=>'Search request missing a product.'];
        }

        $key = env('SEMANTICS3_SECRET_KEY');
        $secret = env('SEMANTICS3_PUBLIC_KEY');

        $requestor = new \Semantics3_Products($key, $secret);

        # Build the request
        $requestor->products_field("upc", $item );

        # Run the request
        $results = $requestor->get_products();

        # View the results of the request
        return $results;
    }

    public static function site_query($item, $site) {

        if (!$item && !$site) {
            return ['code'=>400, 'message'=>'Requires an item and a website to search from.'];
        }

        $key = env('SEMANTICS3_SECRET_KEY');
        $secret = env('SEMANTICS3_PUBLIC_KEY');

        $requestor = new \Semantics3_Products($key, $secret);

        # Build the request
        $requestor->products_field("search", $item );
        $requestor->products_field("site", $site );

        # Run the request
        $results = $requestor->get_products();

        # View the results of the request
        return $results;
    }
}
