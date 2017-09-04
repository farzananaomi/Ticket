<?php

namespace App\Data\Repositories;

use App\Data\Models\Category;
use App\Data\Models\Sub_centre;
use App\Data\Repositories\Interfaces\PaginatedResultInterface;
use App\Data\Repositories\Interfaces\RawQueryBuilderOutputInterface;
use App\Data\Repositories\Traits\PaginatedOutputTrait;
use App\Data\Repositories\Traits\ProcessOutputTrait;
use App\Data\Repositories\Traits\RawQueryBuilderOutputTrait;


class Sub_centreRepository implements PaginatedResultInterface, RawQueryBuilderOutputInterface
{
    use ProcessOutputTrait, PaginatedOutputTrait, RawQueryBuilderOutputTrait;
    const DEFAULT_OPERATION_ID = 1;

    public function search($filter = [])
    {
        $sub_centres = Sub_centre::query()->where('id', '>', 0);

        return $this->output($sub_centres);
    }

    public function lists()
    {
        return Sub_centre::where('id', '>', 0)->pluck('name', 'id');
    }

    public function find($id)
    {
        return Sub_centre::find($id);


    }

    public function all()
    {
        return Sub_centre::where('id', '>', '0')
            ->get();
    }


    public function store($data)
    {


        $sub_centre = new Sub_centre;
        $sub_centre->name = $data['name'];
        $sub_centre->description = $data['description'];
        $sub_centre->save();
        return $sub_centre;
    }


    public function update($id, $data)
    {
        $sub_centre =  Sub_centre::find($id);
        $sub_centre->name = $data['name'];
        $sub_centre->description = $data['description'];
        $sub_centre->save();
        return $sub_centre;
    }
}