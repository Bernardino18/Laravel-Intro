<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    function index()
    {
        $building = request()->get("building");
        if($building == "")
        {
            $building = "https://www.washingtonpost.com/resizer/I9IJifRLgy3uHVKcwZlvdjUBirc=/1484x0/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/ZQIB4NHDUMI6RKZMWMO42U6KNM.jpg";
        }
        return view("Building")->with("building",$building);
    }
}
