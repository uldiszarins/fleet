<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AuditController extends Controller
{
    public function index()
    {
        $return = [];

        $audit = DB::table('activity_log')
            ->orderByRaw('activity_log.created_at DESC')
            ->limit(25)
            ->get();
        
        foreach ($audit as $j) {

            if ($j->description == 'created') {

            } else {
                $json = json_decode($j->properties);

                foreach ($json->attributes as $key => $atr) {
                    if ($json->old->{$key} != $atr) {

                        if (!in_array($key, ['updated_at'])) {
                            $return[$j->id][] = [

                                $key => [
                                    'old' => $json->old->{$key}, 
                                    'new' => $atr
                                ]
                            ];
                        }
                    }
                }
            }
        }

        return view('audit', [
            'r' => $return,
            'dati' => $audit,
        ]);
    }
}
