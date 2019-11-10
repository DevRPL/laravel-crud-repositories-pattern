<select class="form-control" name="{{ $name }}">
    @foreach ($depertements as $depertement)
        <option value="{{ $depertement->id }}"> {{ $depertement->name }}</option>
    @endforeach
</select>