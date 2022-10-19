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

            <div class="row mt-2">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">SEO Title</label>
                        <input type="text" name="seo_title" class="form-control" value="{{ Settings::get('seo_title') }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">SEO Keywords</label>
                        <input type="text" name="key_words" class="form-control" value="{{ Settings::get('key_words') }}">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">SEO Description</label>
                        <textarea name="seo_desc" class="form-control" rows="3"> {{ Settings::get('seo_desc') }} </textarea>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">@lang('settings::settings.attributes.facebook_pixel')</label>
                        <textarea name="facebook_pixel" class="form-control" rows="3"> {{ Settings::get('facebook_pixel') }} </textarea>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">@lang('settings::settings.attributes.google_id_header')</label>
                        <textarea name="google_id_head" class="form-control" rows="3"> {{ Settings::get('google_id_head') }} </textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">@lang('settings::settings.attributes.google_id_footer')</label>
                        <textarea name="google_id_footer" class="form-control" rows="3"> {{ Settings::get('google_id_footer') }} </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Google Tag Manger</label>
                        <textarea name="google_tag_manger" class="form-control" rows="3"> {{ Settings::get('google_tag_manger') }} </textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">@lang('settings::settings.attributes.google_analects')</label>
                        <textarea name="google_analects" class="form-control" rows="3"> {{ Settings::get('google_analects') }} </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Hotjar</label>
                        <textarea name="hotjar" class="form-control" rows="3"> {{ Settings::get('hotjar') }} </textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Linked Tag</label>
                        <textarea name="linked_tag" class="form-control" rows="3"> {{ Settings::get('linked_tag') }} </textarea>
                    </div>
                </div>
            </div>


        </div>
    </div>

    {{-- last 11 --}}

</div>
