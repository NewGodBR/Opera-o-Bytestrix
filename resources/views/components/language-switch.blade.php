<div>
    <form action="{{ route('language.swap') }}" method="POST" style="display: inline-block;">
        @csrf
        <select name="locale" onchange="this.form.submit()">
            <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
            <option value="pt" {{ session('locale') == 'pt' ? 'selected' : '' }}>Português</option>
        </select>
    </form>
</div>
