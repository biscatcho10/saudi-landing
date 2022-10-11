@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_reasons'])
    @slot('url', route('dashboard.reasons.index'))
    @slot('name', 'From Where List')
    @slot('isActive', request()->routeIs('*reasons*'))
    @slot('icon', 'fas fa-question')
    @slot('tree', [
        [
            'name' => trans('howknow::reasons.actions.list'),
            'url' => route('dashboard.reasons.index'),
            'can' => ['permission' => 'read_reasons'],
            'isActive' => request()->routeIs('*reasons.index'),
            'module' => 'HowKnow',
        ],
        [
            'name' => trans('howknow::reasons.actions.create'),
            'url' => route('dashboard.reasons.create'),
            'can' => ['permission' => 'create_reasons'],
            'isActive' => request()->routeIs('*reasons.create'),
            'module' => 'HowKnow',
        ],
    ])
@endcomponent
