<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div>
                            <h4 class="text-muted fw-medium mt-1 mb-2">{{ __('Total Contacts') }}</h4>
                            <h4>{{ $contacts ?? 0 }}</h4>
                        </div>
                    </div>
                </div>

                <p class="font-italic">{{ __('Total Number Of Contacts') }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div>
                            <h4 class="text-muted fw-medium mt-1 mb-2">{{ __('Most Commen Reason') }}</h4>
                            <h4>{{ $reason }}</h4>
                        </div>
                    </div>
                </div>

                <p class="font-italic">{{ __('Most Commen Reason Infirm People About US') }}</p>
            </div>
        </div>
    </div>
</div>
