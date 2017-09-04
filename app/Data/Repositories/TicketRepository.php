<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 8/11/2017
 * Time: 1:53 PM
 */

namespace App\Data\Repositories;


use App\Data\Repositories\Interfaces\PaginatedResultInterface;
use App\Data\Repositories\Interfaces\RawQueryBuilderOutputInterface;
use App\Data\Repositories\Traits\PaginatedOutputTrait;
use App\Data\Repositories\Traits\ProcessOutputTrait;
use App\Data\Repositories\Traits\RawQueryBuilderOutputTrait;
use App\Data\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketRepository implements PaginatedResultInterface, RawQueryBuilderOutputInterface
{
    use ProcessOutputTrait, PaginatedOutputTrait, RawQueryBuilderOutputTrait;

    public function search($filter = [])
    {
        $users = Ticket::query()->where('approval_status','=',2);

        return $this->output($users);
    }
    public function searchassign($filter = [])
    {

if (Auth::user()->role=='admin'){
    $users = Ticket::query()->where('user_id','>',0)->where('approval_status','<>',2);
    }
      else{
          $users = Ticket::query()->where('user_id','=',Auth::id());
      }

        return $this->output($users);
    }
    public function find($id)
    {
        return Ticket::find($id);
    }
    public function store($data)
    {
        $ticket                = new Ticket();
        $ticket->user_id          = Auth::id();
        $ticket->sub_centre_id    = $data['sub_centre_id'];
        $ticket->pop_id            = $data['pop_id'];
        $ticket->request_date       = $data['request_date'];

            //date("Y-m-d",strtotime($data['request_date']));

        $ticket->work_dscription       = $data['work_dscription'];


        $ticket->save();

        return $ticket;

    }


    public function update($id, $data)
    {
        $ticket = Ticket::find($id);
        $ticket->user_id          = Auth::id();
        $ticket->sub_centre_id    = $data['sub_centre_id'];
        $ticket->approval_id          = Auth::id();
        $ticket->pop_id            = $data['pop_id'];
        $ticket->request_date       = $data['request_date'];
        $ticket->approval_status=isset($data['approval_status'])?$data['approval_status']:0;
        //date("Y-m-d",strtotime($data['request_date']));

        $ticket->work_dscription       = $data['work_dscription'];

        $ticket->save();

        return $ticket;
    }
    public function adminupdate($id, $data)
    {
        $ticket = Ticket::find($id);

        $ticket->approval_id          = Auth::id();
        $ticket->request_date       = date("Y-m-d");
        $ticket->approval_status=isset($data['approval_status'])?$data['approval_status']:0;


        $ticket->save();

        return $ticket;
    }

}