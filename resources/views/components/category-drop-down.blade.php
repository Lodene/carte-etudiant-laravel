<div>
    <form action="/posts" method="get">
        <select name="category" id="categories" onchange="this.form.submit();">
            <option value="">--Categories--</option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}
                </option>
            @endforeach
            {{-- @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif --}}
        </select>
    </form>
</div>