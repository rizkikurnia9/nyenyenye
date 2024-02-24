<!-- resources/views/data/index.blade.php -->

@foreach($datas as $data)
    <p>{{ $data->nama }}</p>
    <form action="{{ route('data.destroy', $data->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@endforeach