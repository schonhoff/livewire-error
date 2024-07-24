<div>
    @foreach($this->someData as $key => $value)
        {{ $key.': '.$value }}
    @endforeach>
    @foreach($this->someOtherData as $key => $value)
        {{ $key.': '.$value }}
    @endforeach
</div>
