@if (session()->has('success'))
    <div class="container">
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    </div>
@endif

@if (count($errors) > 0)
    <div class="container">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
