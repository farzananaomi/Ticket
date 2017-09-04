<?php

namespace App\Http\Controllers;

use app\Data\Repositories\ReturnPolicyRepository;
use Illuminate\Http\Request;

class ReturnPolicyController extends Controller
{

    protected $return_policies;

    public function __construct(ReturnPolicyRepository $return_policies)
    {
        $this->return_policies = $return_policies;
    }


    public function index(ProductDatatable $datatable)
    {
        return $datatable->render('return_policies.index');
    }

    public function create()
    {
        return view('return_policies.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $category = $this->return_policies->store($data);
        return redirect()->route('return_policies.index');
    }

    /**
     * Display the specified Zone.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->return_policies->find($id);

        return view('category.show', compact('category'));
    }

    public function edit($id)
    {
        $product = $this->return_policies->find($id);

        return view('return_policies.edit', compact('product'));
    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        $category = $this->return_policies->update($id, $data);

        return redirect()->route('return_policies.index');
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

     }
}
