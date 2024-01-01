<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Freelancer;
use App\Models\Media;

use Illuminate\Http\Request;
use App\Classes\Search;


class ProductController extends DevController
{
  protected $reg  = [
    'name'    => 'required|string|min:3',
    'avatar'  => 'max:1024',
  ];

  public function all()
  {
    $search = (new search('product_all'))->get();
    $query  = Product::root()->where('status', '<>', 'draft')->inventory();
    $query->search($search)->so();
    return view('dev.product.all', compact('query'));
  }

  public function change(Request $request, Product $product)
  {
    $product->status  = $request->status;
    $product->save();
    return response()->json(
      [
        'status' => $product->status
      ],
      200
    );
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Freelancer $freelancer)
  {
    $search = (new search('product'))->get();
    $query  = Product::root()->inventory()->whereFreelancerId($freelancer->id);
    $query->search($search)->so();
    return view('dev.product.index', compact('query', 'freelancer'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Freelancer $freelancer)
  {
    $category = request('category', 0);
    return view('dev.product.create', compact('freelancer', 'category'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request, Freelancer $freelancer)
  {
    $this->data = $request->input();
    $this->reg['category_id']  = 'required';
    //$this->reg['type_id']  = 'required';

    if ($this->validator()->fails()) return $this->backErr();

    $product =  new Product;
    $product->name        = $request->name;
    $product->category_id = $request->category_id;
    $product->type_id     = $request->type_id;
    $product->meta        = json_encode($request->meta);
    $product->freelancer_id = $freelancer->id;

    $product->save();

    /*
    if ($request->hasFile('avatar')) {
      $product->upAvatar($request->avatar);
    }
    $this->afterSave($request, $product);
    */
    return redirect()->route('products.edit', [$product, 'tab' => 'pricing'])->with('toastr', [
      'status' => 'success', 'message' => 'Record created!'
    ]);
  }

  /**
   * Create Order.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function show(Product $product)
  {
    $recommend  = Product::root()->inventory()
      ->whereStatus('publish')
      ->where('freelancer_id', '<>', $product->freelancer_id)
      ->whereCategoryId($product->category_id);

    return view('page.product.detail')->with([
      'productType'       =>  $product->type,
      'productCategory'   =>  $product->category,
      'product'           =>  $product,
      'freelancer'        =>  $product->freelancer,
      'recommend'         =>  $recommend,
      'packs'             =>  $product->getPacks()->get(),
      'tabs'              =>  [
        'description',
        'portfolio',
        'price',
        'recommendations',
        'review'
      ],
    ]);
  }



  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product,$step = 'overview')
  {
    return view('dev.product.edit', compact('product'));
  }



  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {
    $this->data = $request->input();
    $next = 'publish';
    switch ($request->step) {
      case  'trans':
        $product->update(["trans_$request->lang" => json_encode($request->trans)]);
        return redirect()->back();
        break;

      case 'pricing':
        $options = [];
        if ($request->ext_option) {
          $ext =  $request->ext_option;

          for ($i = 0; $i < count($ext['price']); $i++) {
            if ($ext['price'][$i]) {
              $options[] = [
                'price' =>  $ext['price'][$i],
                'title' =>  $ext['title'][$i],
                'description' =>  $ext['description'][$i],
              ];
            }
          }
          $this->data['options'] = json_encode($options);
        }
        //dd($request->ext_option);
        $product->update($this->data);
        $this->afterSave($request, $product);
        $next = 'description';
        break;
      case  'description':
        $product->update($this->data);
        $next = 'requirement';
        break;
      case  'description':
        $product->update($this->data);
        $next = 'gallery';
        break;
      case  'gallery':
        if ($request->hasFile('avatar')) {
          $product->storeAvatar($request->avatar);
        }
        if ($request->file('slide')) {

          foreach ($request->file('slide') as $media) {
            Media::up($media, $product);
          }
        }
        $product->update($this->data);
        $this->afterSave($request, $product);
        $next = 'publish';
        break;

      case  'publish':
        $product->status  = 'preview';
        $product->save();
        break;
      default:
        $this->data['meta']  = isset($request->meta) ? $request->meta : [];
        $product->update($this->data);
        $next = 'pricing';
        break;
    }
    
    return redirect()->route('products.edit', [$product, 'tab' => $next])->with('toastr', [
      'status' => 'success', 'message' => 'Record updated!'
    ]);
  }




  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    $product->delete();
    return $this->back(['status' => 'success', 'message' => 'Record deleted!']);
  }
  function afterSave(Request $request, Product $product)
  {

    if (empty($request->extend)) return;

    foreach (config('dev.packs')  as $pack) {
      if (in_array($pack, $request->extend)) {
        if (empty($pp)) {
          $pp = $product->ext();
          $pp->pack = $pack;
        }
        foreach (config('dev.attributes') as $atb) {
          $attribute = $pack . "_$atb";
          if (isset($this->data[$attribute]))
            $pp->$atb = $this->data[$attribute];
        }
        $pp->save();
      } elseif (isset($pp)) {
        $pp->delete();
      }
    }
  }

  function beforeSave(Request $request)
  {
    $this->packs = config('dev.packs');

    if ($request->extends) {
      foreach ($request->extends as $p) {
        $this->reg[$p . '_price']  = 'required|numeric|min:4';
      }
    }
  }
}
