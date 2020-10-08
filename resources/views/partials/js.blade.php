@foreach($js as $j)
@if(strpos($j, "&") !== false)
<?php 
    $js_attribute = explode('#', $j);

?>
<script src="{{ admin_asset ("$js_attribute[0]") }}" {{$js_attribute[1]}}></script>
@else
<script src="{{ admin_asset ("$j") }}"></script>
@endif
@endforeach