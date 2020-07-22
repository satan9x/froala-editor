<textarea id="{{$id}}" name="{{$name}}" {{$required}}>{!! $content !!}</textarea>
<script>
    var configs = {};
    @foreach($configs as $key => $config)
        configs["{{$key}}"] = "{{$config}}";
    @endforeach
        configs["id"] = "{{$id}}";
    (function () {
        const editorInstance = new FroalaEditor('#{{$id}}', configs)
    })()
</script>
