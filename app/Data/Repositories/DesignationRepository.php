<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 8/9/2017
 * Time: 11:35 PM
 */

namespace app\Data\Repositories;


use App\Data\Repositories\Interfaces\PaginatedResultInterface;
use App\Data\Repositories\Interfaces\RawQueryBuilderOutputInterface;
use App\Data\Repositories\Traits\PaginatedOutputTrait;
use App\Data\Repositories\Traits\ProcessOutputTrait;
use App\Data\Repositories\Traits\RawQueryBuilderOutputTrait;
use App\Data\Models\Designation;
class DesignationRepository implements PaginatedResultInterface, RawQueryBuilderOutputInterface
{
    use ProcessOutputTrait, PaginatedOutputTrait, RawQueryBuilderOutputTrait;

    public function search($filter = [])
    {
        $designations = Designation::query();

        return $this->output($designations);


    }

    public function lists()
    {
        return Designation::where('id', '>', 0)->pluck('name', 'id');
    }

    public function find($id)
    {
        return Designation::find($id);

    }

    public function all()
    {
        return Designation::where('id', '>', '0')
            ->get();
    }

    public function store($data)
    {
        $designation = new Designation();
        $designation->name = $data['name'];
        $designation->description = $data['description'];
        $designation->save();
        return $designation;
    }

    public function update($id, $data)
    {
        $designation = Designation::find($id);
        $designation->name = $data['name'];
        $designation->description = $data['description'];
        $designation->save();
        return $designation;
    }
}