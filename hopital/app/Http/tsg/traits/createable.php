<?php
trait UpdatableAndCreatable{
public function bootCreateable($model)
{
    // si l'ultilisateur est loggé
    if (auth()->check()) {
        //fonction creation
        static::creating(function($model){
            $model->created_by_user_id = auth()->user()->id;
        });

        //fonction update
        static::updating(function($model){
            $model->updated_by_user_id = auth()->user()->id;
        });
    }
}
}

?>