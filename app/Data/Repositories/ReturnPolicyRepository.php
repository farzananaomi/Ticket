<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 7/29/2017
 * Time: 9:50 PM
 */

namespace app\Data\Repositories;


use App\Data\Models\ReturnPolicy;
use App\Data\Repositories\Interfaces\PaginatedResultInterface;
use App\Data\Repositories\Interfaces\RawQueryBuilderOutputInterface;
use App\Data\Repositories\Traits\PaginatedOutputTrait;
use App\Data\Repositories\Traits\ProcessOutputTrait;
use App\Data\Repositories\Traits\RawQueryBuilderOutputTrait;

class ReturnPolicyRepository implements PaginatedResultInterface, RawQueryBuilderOutputInterface
{
    use ProcessOutputTrait, PaginatedOutputTrait, RawQueryBuilderOutputTrait;

    public function search($filter = [])
    {
        $return_policies = ReturnPolicy::query();

        return $this->output($return_policies);
    }

    public function find($id)
    {
        return ReturnPolicy::find($id);
    }

    public function lists($id = 0)
    {
        return ReturnPolicy::where('category_id', $id)->pluck('return_policy_name', 'id');
    }

    public function store($data)
    {
        $return_policy = new ReturnPolicy();
        $return_policy->invoice_id = $data['invoice_id'];
        $return_policy->user_id = $data['user_id'];
        $return_policy->title=$data['title'];
        $return_policy->description = $data['description'];
        $return_policy->return_date = $data['return_date'];

        $return_policy->save();

        return $return_policy;
    }

    public function update($id, $data)
    {
        $return_policy = ReturnPolicy::find($id);
        // $return_policy->category_id = $data['category_id'];
        $return_policy->return_policy_name = $data['return_policy_name'];
        $return_policy->description = $data['description'];
        $return_policy->size = $data['size'];

        $return_policy->save();

        return $return_policy;
    }
}
