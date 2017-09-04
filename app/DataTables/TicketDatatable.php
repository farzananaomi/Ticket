<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 8/12/2017
 * Time: 12:38 PM
 */

namespace App\DataTables;


use App\Data\Repositories\TicketRepository;
use Illuminate\Contracts\View\Factory;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Services\DataTable;

class TicketDatatable extends DataTable
{
    protected $tickets;

    public function __construct(Datatables $datatables, Factory $viewFactory, TicketRepository $repo)
    {
        parent::__construct($datatables, $viewFactory);
        $this->tickets = $repo;
        $this->tickets->setEnableRawOutput(true);
    }

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', function ($ticket) {
                return view('tickets.action', compact('ticket'))->render();
            })

            ->addColumn('user_id', function ($m) {

                return $m->user ? $m->user->name : '';
            })

            ->addColumn('sub_centre_id', function ($m) {

                return $m->sub_centre ? $m->sub_centre->name : '';
            })
            ->addColumn('pop_id', function ($m) {

                return $m->pop ? $m->pop->name : '';
            })
            ->make(true);

        /**
         * Get the query object to be processed by dataTables.
         *
         * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
         */
    }

    public function query()
    {
        $query = $this->tickets->search();

        return $this->applyScopes($query);
    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->ajax('')
            ->addAction([ 'className' => 'td-actions text-right' ])
            ->parameters([
                'dom'     => '<"top"lf<"clearfix">><"table-responsive"t><"bottom"<"clearfix">ip><"clearfix"r>',
                'buttons' => [
                    'reload',
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [ 'name' => 'tickets.user_id', 'data' => 'user_id', 'title' => 'Full Name' ],
            [ 'name' => 'tickets.sub_centre_id', 'data' => 'sub_centre_id', 'title' => 'Sub Center Name' ],
            [ 'name' => 'tickets.pop_id', 'data' => 'pop_id', 'title' => 'POP' ],
            [ 'name' => 'tickets.request_date', 'data' => 'request_date', 'title' => 'Date' ],
            [ 'name' => 'tickets.work_dscription', 'data' => 'work_dscription', 'title' => 'Description' ],

        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ticket_' . time();
    }

}