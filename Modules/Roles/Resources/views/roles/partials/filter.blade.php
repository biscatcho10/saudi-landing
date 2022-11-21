@component('dashboard::layouts.components.accordion')
    @slot('title', trans('Import Contacts'))

    <div class="row">
        <form action="{{ route('dashboard.file-import') }}" method="POST" enctype="multipart/form-data" id="import-form">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </form>
    </div>

    @slot('footer')
        <button type="submit" class="btn btn-primary btn-sm" form="import-form">
            <i class="fas fa-file-import"></i>
            Import
        </button>
    @endslot
@endcomponent
