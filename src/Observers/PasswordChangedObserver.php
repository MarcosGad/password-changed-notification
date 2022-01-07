<?php

namespace MAG\PasswordChangedNotification\Observers;

use Illuminate\Support\Facades\Mail;
use MAG\PasswordChangedNotification\Contracts\PasswordChangedNotificationContract;

class PasswordChangedObserver
{
    public function updated(PasswordChangedNotificationContract $model)
    {
      //  if($model->wasChanged('password')){
      //     Mail::to($model->email)->send(new PasswordChangedNotificationMail);
      //     //dd('ss');
      //  }

      $model->sendPasswordChangedNotification();
    }
}
 