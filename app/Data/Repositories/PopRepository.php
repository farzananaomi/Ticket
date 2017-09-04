<?php

namespace App\Data\Repositories;

use App\Data\Models\Category;
use App\Data\Models\Pop;
use App\Data\Repositories\Interfaces\PaginatedResultInterface;
use App\Data\Repositories\Interfaces\RawQueryBuilderOutputInterface;
use App\Data\Repositories\Traits\PaginatedOutputTrait;
use App\Data\Repositories\Traits\ProcessOutputTrait;
use App\Data\Repositories\Traits\RawQueryBuilderOutputTrait;


class PopRepository implements PaginatedResultInterface, RawQueryBuilderOutputInterface
{
    use ProcessOutputTrait, PaginatedOutputTrait, RawQueryBuilderOutputTrait;
    const DEFAULT_OPERATION_ID = 1;

    public function search($filter = [])
    {
        $pops = Pop::query()->where('id', '>', 0);

        return $this->output($pops);
    }

    public function lists()
    {
        return Pop::where('id', '>', 0)->pluck('name', 'id');
    }

    public function find($id)
    {
        return Pop::find($id);

    }

    public function all()
    {
        return Pop::where('id', '>', '0')
            ->get();
    }


    public function store($data)
    {


        $pop = new Pop;
        $pop->name = $data['name'];
        $pop->description = $data['description'];
        $pop->save();
        return $pop;
    }
    public function update($id, $data)
    {

        $pop = Pop::find($id);
        $pop->name = $data['name'];
        $pop->description = $data['description'];
        $pop->save();
        return $pop;
    }
}