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
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-12">
                    {{ BsForm::text('mail_subject')->value(Settings::get('mail_subject'))->label(__('Subject')) }}
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    {{ BsForm::textarea('mail_message')->rows(3)->attribute('class', 'form-control ckeditor')->attribute('id', 'mailEditor1')->value(Settings::get('mail_message'))->label(__('Message'))->note("You use these tags : {user_name}") }}
                </div>
            </div>
        </div>
    </div>
</div>


@push('js')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('mailEditor1', {
        filebrowserUploadUrl: "{{route('image.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace('mailEditor2', {
        filebrowserUploadUrl: "{{route('image.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace('mailEditor3', {
        filebrowserUploadUrl: "{{route('image.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace('mailEditor4', {
        filebrowserUploadUrl: "{{route('image.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush
