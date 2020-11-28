<?php

namespace App\Actions;
use TCG\Voyager\Actions\AbstractAction;

class PrintAction extends AbstractAction{
    public function getTitle()
    {
        // Action title which display in button based on current status
        return 'Print';
    }

    public function getIcon()
    {
        // Action icon which display in left of button based on current status
        return 'voyager-external';
    }

    public function getAttributes()
    {
        // Action button class
        return [
            'class' => 'btn btn-sm btn-primary pull-left',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        // show or hide the action button, in this case will show for posts model
        return $this->dataType->slug == 'expenses';
    }

    public function getDefaultRoute()
    {
        // URL for action button when click
        return route('expenses.print', $this->data->id);
    }
}