@component('dashboard::layouts.components.sidebarItem')
    @slot('url', route('dashboard.home'))
    @slot('name', trans('dashboard::dashboard.home'))
    @slot('icon', 'fas fa-layer-group')
    @slot('routeActive', 'dashboard.home')
@endcomponent
<!-- Admins -->
@include('accounts::admins.sidebar')

@include('settings::requests.sidebar')

<!--Reasons -->
@include('howknow::sidebar')

<!-- settings -->
@include('dashboard::sidebar.settings')


