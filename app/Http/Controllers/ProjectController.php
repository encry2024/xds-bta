<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Excel;
use DB;
use App\Item;

class ProjectController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $items = Item::with(['project'])->get();

      return view('admin.mrf.project.index', compact('items'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      return view('admin.mrf.project.create');
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      DB::transaction(function() use ($request) {
         $project = new Project();
         $project->name = $request->get('name');
         $project->subject = $request->get('subject');
         $project->location = $request->get('location');
         $project->project_date = date('Y-m-d');
         $project->save();

         if($request->hasFile('project')){
            $path = $request->file('project')->getRealPath();

            $data = Excel::load($path, function($reader) {})->get();

               if(!empty($data) && $data->count()){

                  foreach ($data->toArray() as $key => $value) {
                     $insert[] = [
                        'project_id' => $project->id,
                        'category' => $value['category'],
                        'sub_category' => $value['sub_category'],
                        'item_type' => $value['item_type'],
                        'description' => $value['description'],
                        'item' => $value['item'],
                        'quantity' => $value['quantity'],
                        'unit' => $value['unit'],
                        'price' => $value['material'],
                        'created_at' => date('Y-m-d h:i:s'),
                        'updated_at' => date('Y-m-d h:i:s')
                     ];
                  }


                  if(!empty($insert)){
                     Item::insert($insert);
                     return back()->with('success','Insert Record successfully.');
                  }

               }

            }

            return back()->with('error','Please Check your file, Something is wrong there.');
         });
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
   }
