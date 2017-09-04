<?php

namespace App\Http\Controllers;

use App\Data\Repositories\PopRepository;
use App\DataTables\PopDatatable;
use Illuminate\Http\Request;
use App\Data\Repositories\CategoryRepository;
use App\DataTables\CategoryDatatable;
use App\Data\Repositories\Sub_centreRepository;
use App\DataTables\Sub_centerDatatable;
use Carbon\Carbon;

use PDF;

class PopController extends Controller

{
    protected $pops;
    public function __construct(PopRepository $pops)
    {
        $this->pops = $pops;
    }
    /**
     * Display a listing of the Zone.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (PopDatatable $datatable)
    {


        return $datatable->render('pops.index');
    }



    /*public function create()
    {
        return view('categories.create');
    }*/
    public function store(Request $request)
    {
        $data      = $request->only('name', 'description');
        $pop = $this->pops->store($data);
        if ($pop) {
            if ($request->ajax()) {
                return response()->json([
                        'status'  => 'Ok',
                        'message' => 'Operation stored successfully!!',
                        'data'    => $pop,
                    ]
                );
            }
            return redirect()->route('pops.index');
        }
    }
    public function show($id, Request $request)
    {
        $pop = $this->pops->find($id);
        return view('pops.show', compact('pop'));
    }
    public function edit($id)
    {
        $pop = $this->pops->find($id);
        return view('pops.edit', compact('pop'));
    }
    public function update($id, Request $request)
    {
        $data = $request->only(['name', 'description']);
        $pop = $this->pops->update($id, $data);
        return redirect()->route('pops.index');
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
