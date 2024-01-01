<?php

namespace App\Traits;

use App\Classes\Setting;
trait HasTran
{
  public function getTranAttribute()
  {
    $info   =   Setting::get();
    $prefix = $this->prefix."_".$info->locale;
    $tran   = static::wherePrefix($prefix)->whereParentId($this->id)->first();
    if($tran){
      $block  = $tran;
      $method = 'PUT';
      $action = route('blocks.update',$block);
    }
    return empty($tran) ? $this : $tran;
  }

  
}
