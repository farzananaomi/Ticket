<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 7/29/2017
 * Time: 10:01 PM
 */

namespace app\DataTables;


use app\Data\Repositories\ReturnPolicyRepository;
use Illuminate\Contracts\View\Factory;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Services\DataTable;


class ReturnPolicyDatatable extends datatable
{
    /**
     * @var ReturnPolicyRepository
     */
    protected $return_policies;

    public function __construct(Datatables $datatables, Factory $viewFactory, ReturnPolicyRepository $repo)
    {
        parent::__construct($datatables, $viewFactory);
        $this->return_policies = $repo;
        $this->return_policies->setEnableRawOutput(true);
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
            ->addColumn('action', function ($return_policie) {
                return view('return_policies.action', compact('return_policie'))->render();
            })

            ->addColumn('category_id', function ($m) {

                return $m->category ? $m->category->name : '';
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
        $query = $this->return_policies->search();

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
            [ 'name' => 'return_policies.category_id', 'data' => 'category_id', 'title' => 'Category Name' ],
            [ 'name' => 'return_policies.return_policie_name', 'data' => 'return_policie_name', 'title' => 'Product Name' ],
            [ 'name' => 'return_policies.description', 'data' => 'description', 'title' => 'Product description' ],
            [ 'name' => 'return_policies.size', 'data' => 'size', 'title' => 'Size' ],

        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'return_policie_' . time();
    }
}