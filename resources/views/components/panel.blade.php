@php
    $panelclass ="p-4 bg-white/5 rounded-xl border border-transparet hover:border-blue-800 group transition-colors duration-300"
@endphp

<div {{$attributes(['class'=>$panelclass])}}>
    {{$slot}}
</div>
