<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class timelineController extends Controller
{
    /**
     * Constructs timeline and returns if there's errors with input
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function inicio(){
        return view('inicio');
    }

    public function gettimeline(Request $request)
    {
        //set Tag names
        $tagsArray = $request->input('tags');
        $base = null;
        $response = "";
        if (!empty($tagsArray)) {
            $tagsArray = str_replace(" ", ",",$tagsArray);
            $base = $this->getData($tagsArray);
        }

        if (!$base) {
            $base = $this->getData('gobierno');
            if (!empty($tagsArray)) {
                $response = "No se encontraron resultados";
            }
        }

        if (!$base) {
            return 'Server Error';
        }
        $json = $this->convertToTimelineFormat($base);
        return view('welcome', [
            'json' => json_encode($json),
            'response' => $response
        ]);

    }

    public function getData($tagsArray)
    {
        //Config Server
        $server = 'http://www.erbol.com.bo/timeline/tags/';
        // Strip tags
        $tags = rawurlencode($tagsArray);
        $url = $server . $tags . ".json";
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

        if (!empty($base->result) && $base->result == "No encontrados.")
            return false;
        return $base;
    }

    public function convertToTimelineFormat($base)
    {

        $json = [];
        $events = [];

        $c = 0;
        foreach ($base as $row) {
//            gmdate("Y-m-d\TH:i:s\Z", $row->created);
//            Handling Dates
//            $events[$c]['start_date']=date($row->created);
            if (!empty($row->created)) {
                $events[$c]['start_date']['year'] = gmdate("Y", $row->created);
                $events[$c]['start_date']['month'] = gmdate("m", $row->created);
                $events[$c]['start_date']['day'] = gmdate("d", $row->created);
            }

//            Handling Titles
            $url = empty($row->url) ? '#' : $row->url;
            $title = empty($row->title) ? '' : $row->title;
            $events[$c]['text']['headline'] = !empty($row->title) ? $row->title : '';
            $events[$c]['text']['headline'] = "<a href='" . $url . "'>" . $title . "</a>";
            $events[$c]['text']['text'] = !empty($row->lead) ? $row->lead : '';

//            Handling Media
            if (!empty($row->photo) && !is_array($row->photo)) {
                $events[$c]['media']['url'] = $row->photo;
                $events[$c]['media']['caption'] = !empty($row->caption) ? $row->caption : "";

            }


            $c++;
        }
        $json['events'] = $events;
        return json_encode($json);

    }

    public function getTypeaheadTags(Request $request)
    {
        $input = $request->all();
        $server = 'http://www.erbol.com.bo/taxonomy/autocomplete/field_tags/';
        $q = str_replace(' ', '%20', $input['q']);
        $url = $server . $q;

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

        $format = array();
        $c = 0;
        $resp = json_decode($resp);
        if (!empty($resp)) {
            foreach ($resp as $row) {
                $format[$c]['id'] = $row;
                $format[$c]['name'] = $row;
                $format[$c]['value'] = $row;
                $c++;
            }
        }


        return json_encode($format);
    }

}