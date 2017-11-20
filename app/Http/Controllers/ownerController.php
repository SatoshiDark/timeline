<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use Storage;
use DateTime;
class ownerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('topic.topic');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->ajax()){
            if($request['pwd'] == 'timeline2017' &&
               $request['pwd'] != null &&
               $request['pwd'] != '') {
                $cntx = $this->storageInFile($request);
                return response()->json($cntx);
            } else {
                return response()->json([
                    "msg" => "Ops you don't have permission"
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDataList() {
        $contents = json_decode(Storage::disk('localDB')->get('topic.json'));
        return response()->json([
            "data" => $contents->lastTopics
        ]);
    }

    public function storageInFile($param) {
        $date = new DateTime();
        $contents = json_decode(Storage::disk('localDB')->get('topic.json'));
        $contents->principalTopic = $param['topic'];
        $storeObject = (object) [
            'id' => $date->getTimestamp(),
            'topic' => $param['topic'],
            'date' => $date
        ];
        array_push($contents->lastTopics, $storeObject);
        Storage::disk('localDB')->put('topic.json', json_encode($contents));
        return $contents;
    }
}
