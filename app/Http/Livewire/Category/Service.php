<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

use App\Models\Category;

class Service extends Component
{
  public $product;

  public $service_id, $category_id, $type_id, $meta_options ;
  public $services, $categories, $types, $metadatas ;

  public function serviceSelected()
  {
    $this->categories   = $this->service_id ?
      Category::wherePrefix('service')->whereParentId($this->service_id)->get() : null;
      if($this->categories) $this->categorySelected();
  }
  public function categorySelected()
  {
    $parent_id        = isset($this->category_id) ? $this->category_id : $this->categories[0]->id;
    $this->types      = Category::wherePrefix('service_type')->whereParentId($parent_id)->get();
    $this->metadatas  = Category::wherePrefix('service_metadata')->whereParentId($parent_id)->get();
  
  }

  public function mount()
  {
    
    $this->services     = Category::root()->wherePrefix('service')->get();
    
    if (isset($this->product)) {
      $this->service_id     = $this->product->category->parent_id;
      $this->category_id    = $this->product->category_id;
      $this->categories     = Category::wherePrefix('service')->whereParentId($this->service_id)->get();

      $this->type_id        = $this->product->type_id;
      $this->types          = Category::wherePrefix('service_type')->whereParentId($this->category_id)->get();

      $this->meta_options   = json_decode($this->product->meta,true);
      $this->metadatas      = Category::wherePrefix('service_metadata')->whereParentId($this->category_id)->get();
      
    }
  
  }


  public function render()
  {
    return view('livewire.category.service');
  }
}
