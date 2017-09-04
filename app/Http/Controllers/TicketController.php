<?php

namespace App\Http\Controllers;

use App\Data\Repositories\TicketRepository;
use App\DataTables\TicketAssignDatatable;
use App\DataTables\TicketDatatable;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    protected $tickets;


    public function __construct(TicketRepository $tickets)
    {
        $this->tickets = $tickets;

    }

    public function index (TicketDatatable $datatable)
    {


        return $datatable->render('tickets.index');
    }

    public function indexassignbyme (TicketAssignDatatable $datatable)
    {


        return $datatable->render('tickets.assignbyme');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //  dd($data);
        $ticket = $this->tickets->store($data);
//dd($ticket);
        return redirect()->route('tickets.index');
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
            $ticket = $this->tickets->find($id);

            return view('tickets.edit', compact('ticket'));
        }

    public function adminedit($id)

    {
        $ticket = $this->tickets->find($id);

        return view('tickets.adminedit', compact('ticket'));
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
        $data = $request->all();

        $ticket = $this->tickets->update($id, $data);

        return redirect()->route('tickets.index');
    }

    public function adminupdate(Request $request, $id)
    {
        $data = $request->all();

        $ticket = $this->tickets->adminupdate($id, $data);

        return redirect()->route('tickets.index');
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
