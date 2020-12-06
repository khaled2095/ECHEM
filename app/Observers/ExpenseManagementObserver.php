<?php

namespace App\Observers;

use App\ExpenseManagement;

class ExpenseManagementObserver
{

    public function updating(ExpenseManagement $em)
    {

        if($em->due_collection > 0)
        {
            $em->previous_collection = $em->current_collection;
            $em->due_collection = $em->due_collection - $em->current_collection;

            //dd($em);
        }
    }
}
