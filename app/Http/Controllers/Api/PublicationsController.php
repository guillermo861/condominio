<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Publication;

class PublicationsController extends Controller
{
    public function index(){
        $response = Publication::
            join('publications_to_states_grades', 'publications.id', '=', 'publications_to_states_grades.id_publication')
            ->join('scool_years', 'publications.id_scool_year', '=', 'scool_years.id')
            ->join('states', 'publications_to_states_grades.id_state', '=', 'states.id')
            ->join('grades', 'publications_to_states_grades.id_grade', '=', 'grades.id')
            ->join('status', 'publications.id_status', '=', 'status.id')
            ->select('name', 'state','grade','sku','scool_year','status')
            ->get()->all();
        return json_encode($response);
    }

    public function post(Request $publicationRequest){
        $publications = new Publication();
        $publications->status();
        $publications->save();
        return true;
    }
}
