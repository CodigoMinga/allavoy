@csrf

<label>
    Entrega a: <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label>
    Direccion <br>
    <input type="text" name="address" value="{{ old('address', $project->address) }}">
</label>
<br>
<label>
    Valor declarado <br>
    <input type="text" name="address" value="{{ old('address', $project->address) }}">
</label>
<br>
<button>{{ $btnText }}</button>