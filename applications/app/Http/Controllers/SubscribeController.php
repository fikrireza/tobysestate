<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Subscribe;

use Excel;
use PHPExcel_Worksheet_Drawing;
use PHPExcel_Worksheet_PageSetup;

class SubscribeController extends Controller
{



    public function index() {

      $subscribes   = Subscribe::paginate(10);

      return view('back.pages.subscribe.index', compact('subscribes'));
    }

    public function export($type)
    {
      $subscribe = Subscribe::select('email', 'name')->get()->toArray();


      return Excel::create('Subscribe News Letter', function($excel) use($subscribe){
        $excel->sheet('Emails', function($sheet) use ($subscribe)
        {
          $sheet->fromArray($subscribe, null, 'A1', true);
          $sheet->row(1, array(' Email', 'Name'));
          $sheet->cell('A1:B1', function($cell){
            $cell->setFontSize(12);
            $cell->setFontWeight('bold');
            $cell->setAlignment('center');
          });
          $sheet->setAllBorders('thin');
          $sheet->setFreeze('A2'); });
      })->download($type);
    }


}
