<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\Repositories\CategoryRepository;
use App\DataTables\CategoryDatatable;
use App\Data\Repositories\Sub_centreRepository;
use App\DataTables\Sub_centerDatatable;
use Carbon\Carbon;

use PDF;

class Sub_centreController extends Controller
{
    protected $sub_centres;
    public function __construct(Sub_centreRepository $sub_centres)
    {
        $this->sub_centres = $sub_centres;
    }
    /**
     * Display a listing of the Zone.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Sub_centerDatatable $datatable)
    {


        return $datatable->render('sub_centres.index');
    }



    /*public function create()
    {
        return view('categories.create');
    }*/
    public function store(Request $request)
    {
        $data      = $request->only('name', 'description');
        $sub_centre = $this->sub_centres->store($data);
        if ($sub_centre) {
            if ($request->ajax()) {
                return response()->json([
                        'status'  => 'Ok',
                        'message' => 'Operation stored successfully!!',
                        'data'    => $sub_centre,
                    ]
                );
            }
            return redirect()->route('sub_centres.index');
        }
    }
    public function show($id, Request $request)
    {
        $sub_centre = $this->sub_centres->find($id);
        return view('sub_centres.show', compact('sub_centre'));
    }
     public function edit($id)
     {
         $sub_centre = $this->sub_centres->find($id);
         return view('sub_centres.edit', compact('sub_centre'));
     }
     public function update($id, Request $request)
     {
         $data = $request->only(['name', 'description']);
         $sub_centre = $this->sub_centres->update($id, $data);
         return redirect()->route('sub_centres.index');
     }
     /**
      * Remove the specified Zone from storage.
      *
      * @param  int $id
      *
      * @return \Illuminate\Http\Response
      */
    public function destroy($id)
     {
         //
     }
}
