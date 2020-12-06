<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;
use TCG\Voyager\Actions\AbstractAction;

class PayCommision extends AbstractAction{
    public function getTitle()
    {
        $s = $this->data->sub_order_id;
        $checkit = DB::table('sub_orders')->where('id',$s)->first()->status;

        // Action button class
        if($checkit == 'completed')
        {

            // Action title which display in button based on current status
            return 'Pay';
        }
        else
        {
            return '';
        }


    }

    public function getIcon()
    {
        $s = $this->data->sub_order_id;
        $checkit = DB::table('sub_orders')->where('id',$s)->first()->status;

        // Action button class
        if($checkit == 'completed')
        {
            // Action icon which display in left of button based on current status
            return 'voyager-external';
        }
        else
        {
            return '';
        }

    }

    public function getAttributes()
    {

        $s = $this->data->sub_order_id;
        $checkit = DB::table('sub_orders')->where('id',$s)->first()->status;

        // Action button class
        if($checkit == 'completed')
        {
            return [
                'class' => 'btn btn-sm btn-primary pull-left',
            ];
        }
        else
        {
            return [
                'class' => 'd-none',
            ];
        }
    }

    public function shouldActionDisplayOnDataType()
    {
        // show or hide the action button, in this case will show for posts model
        return $this->dataType->slug == 'sub-order-items';

    }

    public function getDefaultRoute()
    {
        // URL for action button when click
        return route('pay.com', $this->data->id);
    }
}
