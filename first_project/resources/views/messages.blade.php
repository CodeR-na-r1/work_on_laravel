@if ($errors->any())
        <div class="messages_div error_div">
            @foreach ($errors->all() as $error)
                <div class="div_inner">{{ $error }}</div>
            @endforeach
        </div>
        <br>
@endif

@if ($data = session()->pull('success'))
    <div class="messages_div success_div">
        <div class="div_inner"> {{ $data }} (Комментариев добавлено за последние 2 часа: {{ session('q_comments'); }}) </div>
    </div>
    <br>
@endif