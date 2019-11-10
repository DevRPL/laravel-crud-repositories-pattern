<select class="form-control" name="{{ $name }}">
    @foreach ($depertements as $depertement)
        <option value="{{ $depertement->id }}" {{ $depertement->id == $selected ? 'selected':'' }}>{{ $depertement->name }}</option>
    @endforeach
</select>