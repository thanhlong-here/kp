<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

use App\Models\Category;

class Req extends Component
{
 
  public $service_id, $category_id ;
  public $services, $categories ;

  public function serviceSelected()
  {
    $this->categories   = $this->service_id ?
      Category::wherePrefix('service')->whereParentId($this->service_id)->get() : null;
    
  }
 

  public function mount()
  {
    
    $this->services     = Category::root()->wherePrefix('service')->get();
   
  }


  public function render()
  {
    return view('livewire.category.req');
  }
}
