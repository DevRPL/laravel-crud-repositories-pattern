<select class="form-control sel-status" name="{{ $name }}">
    @foreach ($depertements as $depertement)
        <option value="{{ $depertement->id }}"> {{ $depertement->depertement_name }}</option>
    @endforeach
</select>