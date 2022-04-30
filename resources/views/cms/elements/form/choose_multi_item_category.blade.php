<select name="{!! isset($name)?$name:'' !!}[]" @if(isset($id)) id="{!! $id !!}" @endif class="chosen-select-item @if(isset($class)) {!! $class !!} @endif"
        data-placeholder="{{ isset($text_hint)?$text_hint:'' }}"  multiple="" tabindex="5" style="width: 100%;">
    <option value="">{{ isset($text_hint)?$text_hint:'' }}</option>
    @if(!empty($datas))
        @foreach($datas as $item)
            <option @if(isset($selected) && in_array($item->id, $selected)) selected @endif value="{!! $item->id !!}">{!! $item->title !!}</option>
        @endforeach
    @endif
</select>

<script type="text/javascript">
    $(document).ready(function () {
        $('.chosen-select-item').chosen();
        $('.chosen-container').css('width', '800px').css('max-width', '100%');
    });
</script>
