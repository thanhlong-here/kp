@props([
'product',
])

@php 
$requiment = $product->getRequiment();


$note_requirement = Block::pull('service_requiment','note')->first();

@endphp


<x-form class="form" action="{{ route('products.update',$product) }}" enctype="multipart/form-data" method="PUT">
    <input name="step" value="requirement" type="hidden" />
    <div id="requirements" class="card">
        <div class="card-header">
            <h2> {{__('Yêu cầu')}} </h2>
            <label class="text-bold-600">
                {!! $note_requirement->tran->content !!} </label>
        </div>

        <div class="card-body">

            <h4 class="text-xs-center"> {{__('Câu hỏi của bạn')}}</h4>

            <div class="card-block">

                @foreach($requiment->elements as $element )
                <div class="form-group row mb-2">
                    <label class="pull-left font-medium-2 ">
                        {{$element->name}}
                    </label>
                    <button type="button" data-toggle="modal" data-target="#edit-question-{{$element->id}}" class="pull-right btn btn-sm btn-primary">
                        <i class="ft ft-edit"></i>
                    </button>
                    <button type="button" data-toggle="modal" data-target="#modal-delete-{{$element->id}}" class="pull-right mr-1 btn btn-sm btn-danger">
                        <i class="ft ft-x"></i>
                    </button>
                </div>
                @push('outer')
                <x-modal class="mt-0 h-100" style="overflow: auto;" id="edit-question-{{$element->id}}">
                    <x-product.questions.edit :element="$element" />
                </x-modal>
                <x-modal.delete :row="$element" action="elements.destroy" />
                @endpush
                @endforeach
            </div>
            <div class="card-block">
                <button type="button" data-toggle="modal" data-target="#add_question" class="btn btn-secondary"> + {{__('Thêm câu hỏi')}} </button>
            </div>
        </div>

        <div class="card-footer">
            <div class="pull-right">

                <a href="{{ Theme::url(['tab'=>'gallery' ]) }} " class="btn btn-primary">
                    {{__( 'Tiếp tục' )}}
                </a>

            </div>
        </div>
    </div>
    @push('outer')
    <x-modal class="mt-0 h-100" style="overflow: auto;" id="add_question">
        <x-product.questions.add :requiment="$requiment" />
    </x-modal>
    @endpush
</x-form>