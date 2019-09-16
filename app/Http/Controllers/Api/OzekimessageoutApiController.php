<?php
/**
 * Created by PhpStorm.
 * User: khouloud
 * Date: 03/12/2017
 * Time: 11:32
 */

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;

use App\Ozekimessageout;

class OzekimessageoutApiController
{
    public function index ()
    {
        return response()->json(['ozekimessageouts' => Ozekimessageout::all()]);
    }

    public function store (Request $request)
    {
        $ozekimessageout = new Ozekimessageout;
      //  $ozekimessageout->sender = $request->sender;
        $ozekimessageout->receiver = $request->receiver;
        $ozekimessageout->msg = "Vous etes ajoutes au tirage au sort avec Agil";
      /*  $ozekimessageout->senttime = $request->senttime;
        $ozekimessageout->receivedtime = $request->receivedtime;*/
        $ozekimessageout->status = "send";
      /*  $ozekimessageout->msgtype = $request->msgtype;
        $ozekimessageout->operator = $request->operator;*/
        $ozekimessageout->save();

        return response()->json(['status' => true]);
    }

    public function show (Request $request)
    {
        $ozekimessageout = Ozekimessageout::find($request->id);
        if ($ozekimessageout == null) {
            //customer not found
            return response()->json(['status' => false]);
        }

        return response()->json(['customer' => $ozekimessageout]);

    }

    public function delete (Request $request)
    {
        Ozekimessageout::destroy($request->id);

        return response()->json(['status' => true]);
    }

    public function update (Request $request)
    {
        $ozekimessageout = Ozekimessageout::find($request->id);
        if ($ozekimessageout == null) {
            return response()->json(['status' => false]);
        }
        $ozekimessageout->sender = $request->sender;
        $ozekimessageout->receiver = $request->receiver;
        $ozekimessageout->msg = $request->msg;
        $ozekimessageout->senttime = $request->senttime;
        $ozekimessageout->receivedtime = $request->receivedtime;
        $ozekimessageout->status = $request->status;
        $ozekimessageout->msgtype = $request->msgtype;
        $ozekimessageout->operator = $request->operator;
        $ozekimessageout->save();
        return response()->json(['status' => true]);

    }
}