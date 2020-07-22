<textarea id="{{$id}}" name="{{$name}}" {{$required}}>{!! $content !!}</textarea>
<script>
    var configs = {};
    @foreach($configs as $key => $config)
        configs[{{$key}}] = "{{$config}}";
    @endforeach
        configs["id"] = "{{$id}}";
    $('#{{$id}}').froalaEditor(configs)
        .on('froalaEditor.image.removed', function (e, editor, img) {
            $.ajax({
                method: "POST",
                url: "{{config('froala.remove_url')}}",
                data: {
                    src: img.attr('src')
                }
            })
                .done(function (data) {
                    console.log('image was deleted');
                })
                .fail(function () {
                    console.log('image delete problem');
                });
        });
    $('#{{$id}}').on('froalaEditor.contentChanged', function (e, editor, clickEvent) {
        $(window).trigger('resize');
    });
</script>
