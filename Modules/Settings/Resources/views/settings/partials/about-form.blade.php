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
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ __('About Us') }}
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                @bsMultilangualFormTabs
                    {{ BsForm::textarea('foundation')->required()->rows(3)->attribute('class', 'form-control textarea')->value(Settings::locale($locale->code)->get('foundation'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.association_foundation')) }}

                    {{ BsForm::textarea('sub_foundation')->required()->rows(3)->attribute('class', 'form-control textarea')->value(Settings::locale($locale->code)->get('sub_foundation'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.association_sub_foundation')) }}

                    {{ BsForm::textarea('our_vision')->required()->rows(3)->attribute('class', 'form-control textarea')->value(Settings::locale($locale->code)->get('our_vision'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_vision')) }}

                    {{ BsForm::textarea('our_message')->required()->rows(3)->attribute('class', 'form-control textarea')->value(Settings::locale($locale->code)->get('our_message'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_message')) }}

                    {{ BsForm::textarea('our_goals')->required()->rows(3)->attribute('class', 'form-control textarea')->value(Settings::locale($locale->code)->get('our_goals'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_goals')) }}
                @endBsMultilangualFormTabs
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFour">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    {{ __('Media') }}
                </button>
            </h2>
        </div>

        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                {{-- @isset($about)
                    {{ BsForm::image('image')->collection('images')->files($about->getMediaResource('images'))->label(trans('settings::settings.attributes.image')) }}
                @else
                    {{ BsForm::image('image')->collection('images')->label(trans('settings::settings.attributes.image')) }}
                @endisset --}}

                <label>{{ __('settings::settings.attributes.image') }}</label>
                @isset($about)
                    @include('dashboard::layouts.apps.file1', [
                        'file' => $about->getFirstMediaUrl('images'),
                        'name' => 'image',
                    ])
                @else
                    @include('dashboard::layouts.apps.file1', ['name' => 'image'])
                @endisset
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    {{ __('Video') }}
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <!-- video input -->

                @bsMultilangualFormTabs
                    {{ BsForm::text('video_title')->required()->attribute('class', 'form-control')->value(Settings::locale($locale->code)->get('video_title'))->label(__('settings::settings.attributes.video_title')) }}
                    {{ BsForm::textarea('video_description')->required()->rows(3)->attribute('class', 'form-control')->value(Settings::locale($locale->code)->get('video_description'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.video_description')) }}
                @endBsMultilangualFormTabs

                {{-- @isset($about)
                    {{ BsForm::image('vid_image')->collection('images')->files($about->getMediaResource('images'))->label(trans('settings::settings.attributes.vidImage')) }}
                @else
                    {{ BsForm::image('vid_image')->collection('images')->label(trans('settings::settings.attributes.vidImage')) }}
                @endisset --}}

                <label>{{ __('settings::settings.attributes.vidImage') }}</label>
                @isset($about)
                    @include('dashboard::layouts.apps.file1', [
                        'file' => $about->getFirstMediaUrl('videoImages'),
                        'name' => 'vid_image',
                    ])
                @else
                    @include('dashboard::layouts.apps.file1', ['name' => 'vid_image'])
                @endisset

                <div class="form-group">
                    <label for="">{{ __('settings::settings.attributes.video_type') }}</label>
                    <select class="form-control video_type" name="video_type" id="video_type">
                        <option>{{ __('Select one') }}</option>
                        <option value="upload"
                            @isset($about) {{ $about->video_type === 'upload' ? 'selected' : '' }} @endisset>
                            {{ __('Upload') }}</option>
                        <option value="link"
                            @isset($about) {{ $about->video_type === 'link' ? 'selected' : '' }} @endisset>
                            {{ __('Link') }}</option>
                    </select>
                </div>

                @isset($about)
                    <div style="display: none" class="link-wrapper hide_div">
                        {{ BsForm::text('video_link')->attribute('class', 'form-control')->label(__('settings::settings.attributes.video_link'))->attribute('id', 'url-link')->attribute('placeholder', 'www.example.com')->attribute('data-parsley-type', 'url')->attribute('data-parsley-type-message', __('input data must be url'))->attribute('data-parsley-trigger', 'keyup')->attribute('data-parsley-required-message', __('link is required'))->value($about->video_link)->note(__('link must be embed')) }}
                    </div>

                    <div style="display: none" class="upload-wrapper hide_div">
                        <div class="form-group">
                            <label for="category-image">{{ __('settings::settings.attributes.video') }}</label>
                            {{-- <file-uploader :unlimited="false" collection="video"
                                :media="{{ $about->getMediaResource('video') }}"
                                :tokens="{{ json_encode(old('media', [])) }}"
                                notes="Supported types: flv, mp4,wmv,avi | Max File Size:25MB"
                                accept="video/x-flv,video/mp4,video/x-ms-wmv,video/avi">
                            </file-uploader> --}}

                            @include('dashboard::layouts.apps.video', [
                                'file' => $about->getFirstMediaUrl('video'),
                                'name' => 'video',
                            ])

                        </div>
                    </div>
                @else
                    <div style="display: none" class="link-wrapper hide_div">
                        {{ BsForm::text('video_link')->attribute('class', 'form-control')->label(__('settings::settings.attributes.video_link'))->attribute('id', 'url-link')->attribute('placeholder', 'https://www.example.com')->attribute('data-parsley-type', 'url')->attribute('data-parsley-type-message', __('input data must be url'))->attribute('data-parsley-trigger', 'keyup')->attribute('data-parsley-required-message', __('link is required'))->note(__('link must be embed')) }}
                    </div>

                    <div style="display: none" class="upload-wrapper hide_div">
                        <div class="form-group">
                            <label for="category-image">{{ __('settings::settings.attributes.video') }}</label>
                            {{-- <file-uploader :unlimited="false" collection="video"
                                :tokens="{{ json_encode(old('media', [])) }}"
                                notes="Supported types: flv, mp4,wmv,avi | Max File Size:25MB"
                                accept="video/x-flv,video/mp4,video/x-ms-wmv,video/avi"></file-uploader> --}}

                            @include('dashboard::layouts.apps.video', ['name' => 'video'])

                        </div>
                    </div>
                @endisset

                <hr>

                @include('dashboard::seo.inputs')

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    {{ __('Address and Location') }}
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">

                <!-- address input -->
                @bsMultilangualFormTabs
                    {{ BsForm::text('address')->required()->attribute('class', 'form-control')->value(Settings::locale($locale->code)->get('address'))->label(__('settings::settings.attributes.address')) }}
                @endBsMultilangualFormTabs

                <!-- address input -->
                {{-- @isset($about)
                    <div class="form-group col-12">
                        <label style="margin-top: 28px;" class="col-xs-3 control-label">{{ __('Location On Map') }}</label>
                        <div class="col-xs-9">
                            <input type="hidden" name="map_address" id="map_latLon"
                                value="{{ $about->latitude . ',' . $about->longitude }}">
                            <div id="map" style="height: 400px; width: 100%;"></div>
                        </div>
                    </div>
                @else
                    <div class="form-group col-12">
                        <label style="margin-top: 28px;"
                            class="col-xs-3 control-label">{{ __('Location On Map') }}</label>
                        <div class="col-xs-9">
                            <input type="hidden" name="map_address" id="map_latLon"
                                value="{{ old('map_address', '30.033333,31.233334') }}">
                            <div id="map" style="height: 400px; width: 100%;"></div>
                        </div>
                    </div>
                @endisset --}}

                @if (($about->latitude != null) & ($about->longitude != null))
                    <div class="form-group">
                        <label for="address_address">
                            {{ __('Map Address') }}
                        </label>
                        <input type="text" id="address-input" name="map_address" class="form-control map-input"
                            value="{{ $about->map_address }}">
                        <input type="hidden" name="latitude" id="address-latitude" value="{{ $about->latitude }}" />
                        <input type="hidden" name="longitude" id="address-longitude"
                            value="{{ $about->longitude }}" />
                    </div>
                    <div id="address-map-container" style="width:100%;height:400px; ">
                        <div style="width: 100%; height: 100%" id="address-map"></div>
                    </div>
                @else
                    <div class="form-group">
                        <label for="address_address">
                            {{ __('Map Address') }}
                        </label>
                        <input type="text" id="address-input" name="address_address"
                            class="form-control map-input">
                        <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                        <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                    </div>
                    <div id="address-map-container" style="width:100%;height:400px; ">
                        <div style="width: 100%; height: 100%" id="address-map"></div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
