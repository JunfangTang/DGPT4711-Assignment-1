<?php

namespace App\Controllers;
 class Travel extends BaseController
 {
 public function index()
 {
     // connect to the model
 $places = new \App\Models\ActorsInfo();
 // retrieve all the records
 $records = $places->findAll();
 
 // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions
// return $parser->setData(['records' => $records])
// // and have it render the template with those
// ->render('placeslist');

      
 $table = new \CodeIgniter\View\Table();
 
 $headings = $places->fields;
 $displayHeadings = [$headings[1],$headings[8]];
 $table->setHeading(array_map('ucfirst', $displayHeadings));
 
// foreach ($records as $record) {
//$table->addRow($record->name,$record->image);
//}

foreach ($records as $record) {
             $nameLink = anchor("Travel/showme/$record->id",$record->name);
             $table->addRow($nameLink,"<img src=\"/image/".$record->image."\"/>");
         }

$template = [
'table_open' => '<table cellpadding="9px">',
'cell_start' => '<td style="border: 4px solid #dddddd;">',
'row_alt_start' => '<tr style="background-color:#dddddd">',
];
$table->setTemplate($template);

$fields = [
             'title' => 'Deathing Standing',
             'heading' => 'Deathing Standing',
             'footer' => 'Tang Junfang'
             ];
          return $parser->setData($fields)
                         ->render('templates\top') .
                  $table->generate() .
                  $parser->setData($fields)
                         ->render('templates\bottom');
          
return $table->generate();
 
 }
 
 
 
 public function showme($id)
 {
     // connect to the model
 $places = new \App\Models\Places();
 // retrieve all the records
 $record = $places->find($id);
 
 // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions
 return $parser->setData($record)
 // and have it render the template with those
 ->render('oneplace');
 
//  $table = new \CodeIgniter\View\Table();
// 
// $headings = $places->fields;
// $displayHeadings = array_slice($headings, 1, 2);
// $table->setHeading(array_map('ucfirst', $displayHeadings));
// 
//$table->addRow($record->id);
//$table->addRow($record->name);
//$table->addRow($record->state);
//$table->addRow($record->sex);
//$table->addRow($record->age);
//$table->addRow($record->evaluate);
//$table->addRow($record->description);
//return $table->generate();


 }
 
 }

