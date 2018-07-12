@if ($errors->any())
    <div class="alert alert-danger">
        <h1 class="text-center mb-3">Errors found</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif