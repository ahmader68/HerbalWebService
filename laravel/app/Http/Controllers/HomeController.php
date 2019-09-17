<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 09/17/2019
 * Time: 12:04 PM
 */

namespace App\Http\Controllers;


use App\tbl_disease;
use App\tbl_plant;
use App\tbl_plant_disease;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    public function plant(){
        $plants = tbl_plant::All();
        return $plants;
    }
    public function disease(){
        $disease = tbl_disease::All();
        return $disease;
    }
    public function plantDisease(){
            $plantDisease = tbl_plant_disease::All();
            return $plantDisease;
    }

    public function getSpecificPlant($id){
        $SpecificPlant = DB::table('tbl_plants')
            ->join('tbl_plant_diseases' , 'tbl_plants.id' , "=" ,'tbl_plant_diseases.plant_id')
            ->where('tbl_plant_diseases.disease_id' , '=' , $id)
            ->select('tbl_plants.per_name' , 'tbl_plant_diseases.description')
            ->get();

        return $SpecificPlant;
    }
}