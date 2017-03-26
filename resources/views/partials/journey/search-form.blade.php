<form action="{{ route('journey') }}">
    <div class="form-group">
        <label for="source">From</label>
        <select class="form-control sl2" id="source" name="source">
            @foreach ($locations as $location)
                <option
                        value="{{$location->id}}"
                        @if (! empty($source) && $location->id === $source->id)
                        selected="selected"
                        @endif
                >
                    {{$location->name}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="target">To</label>
        <select class="form-control sl2" id="target" name="target">
            @foreach ($locations as $location)
                <option
                    value="{{$location->id}}"
                    @if (! empty($target) && $location->id === $target->id)
                        selected="selected"
                    @endif
                >
                    {{$location->name}}
                </option>
            @endforeach
        </select>
    </div>
    <fieldset disabled>
        <div class="form-group">
            <label for="journey">(Or Select Recent Journey)</label>
            <select class="form-control sl2" id="journey" name="journey">
                <option>Journey 1</option>
                <option>Journey 2</option>
            </select>
        </div>
    </fieldset>
    <div class=" text-center">
        <button type="submit" class="btn btn-primary">Let's Go</button>
    </div>
</form>