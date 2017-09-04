<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 6/13/2017
 * Time: 3:54 PM
 */

namespace App\DataTables;


use App\Data\Repositories\CategoryRepository;
use App\Data\Repositories\Sub_centreRepository;
use Illuminate\Contracts\view\Factory;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Services\DataTable;

class Sub_centerDatatable extends DataTable
{
    /**
     * @var CategoryRepository
     */
    protected $sub_centres;

    public function __construct(Datatables $datatables, Factory $viewFactory, Sub_centreRepository $repo)
    {
        parent::__construct($datatables, $viewFactory);
        $this->sub_centres = $repo;
        $this->sub_centres->setEnableRawOutput(true);
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
            ->addColumn('action', function ($sub_centre) {
                return view('sub_centres.action', compact('sub_centre'))->render();
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
        $query = $this->sub_centres->search();

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

            // [ 'name' => 'categories.category_id', 'data' => 'category_id', 'title' => 'Category Name' ],
            [ 'name' => 'sub_centres.name', 'data' => 'name', 'title' => 'Sub Centres Name' ],
            [ 'name' => 'sub_centres.description', 'data' => 'description', 'title' => ' Description' ],




        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'sub_centres_' . time();
    }


}