<div class="color clicked d-flex">
    <div class="toggle-settings">
        <i class="fas fa-cog"></i>
    </div>
    <ul class="list-unstyled">
        <form action="{{ route('change.theme') }}" method="POST">
            @csrf
            <input type="hidden" name="theme" value="dark">
            <button type="submit" style="border:none;background-color: transparent;">
                <li class="black {{ Settings::get('theme') == 'dark' ? 'active' : '' }}"></li>
            </button>
        </form>

        <form action="{{ route('change.theme') }}" method="POST">
            @csrf
            <input type="hidden" name="theme" value="light">
            <button type="submit" style="border:none;background-color: transparent;">
                <li class="white {{ Settings::get('theme') == 'light' ? 'active' : '' }}"></li>
            </button>
        </form>
    </ul>
</div>
