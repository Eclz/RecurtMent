<?php

namespace App\Http\Controllers\Messege;

use App\Http\Controllers\Controller;
use App\Models\Messege\Messege;
use Illuminate\Http\Request;

class MessegeController extends Controller
{
    public function index(Request $request)
    {

        if( $_SERVER['REQUEST_METHOD'] === 'POST'){
                $app = Messege::where('name_user', 'LIKE', '%'.$request->search.'%')
                ->orwhere('email', 'LIKE', '%'.$request->search.'%')
                ->orwhere('subject', 'LIKE', '%'.$request->search.'%')
                ->orwhere('message', 'LIKE', '%'.$request->search.'%')
                ->paginate(10);
        }else{
            $app = Messege::orderBy('created_at','DESC')
            ->orderBy('status','ASC')
            ->paginate(10);
        }

        return view('Main.Admin.messeges',[
            'applicant' =>$app
        ]);
    }

    public function update(Request $request, $id){
        $update =  Messege::findOrFail(intval($id));

        $update->update([
          'status'=>1
        ]);

        return response()->json(['code'=>200]);

    }

    public function destroy($id)
    {

        Messege::findOrFail(intval($id))->delete();
        return response()->json(['code'=>200]);
    }
}
