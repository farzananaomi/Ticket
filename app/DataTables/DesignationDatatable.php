<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 8/9/2017
 * Time: 11:44 PM
 */

namespace app\DataTables;


use Illuminate\Contracts\View\Factory;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Services\DataTable;
use App\Data\Repositories\DesignationRepository;

class DesignationDatatable extends DataTable
{
    /**
     * @var DesignationDatatable
     *
     */
    protected $designations;

    public function __construct(Datatables $datatables, Factory $viewFactory, DesignationRepository $repo)
    {
        parent::__construct($datatables, $viewFactory);
        $this->designations = $repo;
        $this->designations->setEnableRawOutput(true);
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
            ->addColumn('action', function ($designation) {
                return view('designations.action', compact('designation'))->render();
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
        $query = $this->designations->search();

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
            [ 'name' => 'designations.name', 'data' => 'name', 'title' => 'Name' ],
            [ 'name' => 'designations.description', 'data' => 'description', 'title' => 'Description' ],
        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'designation_' . time();
    }


}
