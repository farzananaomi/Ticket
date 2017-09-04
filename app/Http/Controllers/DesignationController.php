<?php

namespace App\Http\Controllers;


use App\Data\Repositories\DesignationRepository;
use App\DataTables\DesignationDatatable;
use Illuminate\Http\Request;
use App\Data\Repositories\CategoryRepository;
use App\DataTables\CategoryDatatable;
use App\Data\Repositories\Sub_centreRepository;
use App\DataTables\Sub_centerDatatable;
use Carbon\Carbon;

use PDF;

class DesignationController extends Controller
{
    protected $designations;
    public function __construct(DesignationRepository $designations)
    {
        $this->designations = $designations;
    }
    /**
     * Display a listing of the Zone.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (DesignationDatatable $datatable)
    {


        return $datatable->render('designations.index');
    }



    /*public function create()
    {
        return view('categories.create');
    }*/
    public function store(Request $request)
    {
        $data      = $request->only('name', 'description');
        $designation = $this->designations->store($data);
        if ($designation) {
            if ($request->ajax()) {
                return response()->json([
                        'status'  => 'Ok',
                        'message' => 'Operation stored successfully!!',
                        'data'    => $designation,
                    ]
                );
            }
            return redirect()->route('designations.index');
        }
    }
    public function show($id, Request $request)
    {
        $designation = $this->designations->find($id);
        return view('designations.show', compact('designation'));
    }
    public function edit($id)
    {
        $designation = $this->designations->find($id);
        return view('designations.edit', compact('designation'));
    }
    public function update($id, Request $request)
    {
        $data = $request->only(['name', 'description']);
        $designation = $this->designations->update($id, $data);
        return redirect()->route('designations.index');
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
