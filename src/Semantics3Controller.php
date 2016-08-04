<?php

namespace Subbe\Semantics3;

use App\Http\Controllers\Controller;

// require(dirname(__FILE__) . '/lib/library/OAuthStore.php');
include_once dirname(__FILE__)."/lib/oauth-php/library/OAuthStore.php";
// include_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequester.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequest.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequester.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequestSigner.php";
require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequestVerifier.php";

class Semantics3Controller extends Controller
{
    public function index()
    {
        // $key = env('SEMANTICS3_SECRET_KEY');
        // $secret = env('SEMANTICS3_PUBLIC_KEY');

        // $requestor = new \Semantics3_Products($key, $secret);

        // # Build the request
        // $requestor->products_field( "search", "SUNQUICK ORANGE FLAVOR SYRUP 840 ML" );
        // $requestor->products_field( "site", "amazon.com" );

        // # Run the request
        // $results = $requestor->get_products();

        // # View the results of the request
        // return $results;

        // return \Semantics3::test();


        // $semantics3 = new Semantics3();

        // $search = $semantics3->site_query('iphone', 'amazon.com');

        // $search = Semantics3::site_query('SUNQUICK', 'amazon.com');

        // return $search;

    }
}