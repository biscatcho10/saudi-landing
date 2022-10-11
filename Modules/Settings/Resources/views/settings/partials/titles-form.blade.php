@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="accordion" id="accordionExample">

    <div class="row">
        <div class="col-12">
            {{ BsForm::text('thank_title')->value(Settings::get('thank_title'))->label(__('Thanks Page Title')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            {{ BsForm::textarea('thank_desc')->value(Settings::get('thank_desc'))->rows(3)->label(__('Thanks Page Description')) }}
        </div>
    </div>

</div>
