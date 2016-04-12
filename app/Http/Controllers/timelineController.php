<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class timelineController extends Controller
{
    //
    public function gettimeline(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'tags' => 'required',
//
//        ]);
//        if ($validator->fails()) {
//            return redirect('/')
//                ->withInput()
//                ->withErrors($validator);
//        }
        //Set tags name
        $tagsArray = $request->input('tags');
        if(empty($tagsArray)){
            return redirect('/');
//                ->withInput()
//                ->withErrors($validator);
        }

        //Config Server
        $server = 'http://www.erbol.com.bo/timeline/tags/';
        // Strip tags
        $div = '%2C';
        $tags = '';
        $last_tag = array_pop($tagsArray);
        foreach ($tagsArray as $tag){
            $tags = $tags . $tag . $div;
        }
        $tags=$tags . $last_tag;

        $offset = 10;
        $page = 1;
        $url = $server . $tags . "/$offset/$page.json";
// Get cURL resource
        $curl = curl_init();
// Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_USERAGENT => 'cURL Request'
        ));
// Send the request & save response to $resp
        $resp = curl_exec($curl);
// Close request to clear up some resources
        curl_close($curl);

        $base = json_decode($resp);


        return $base;

        //
    }
}
