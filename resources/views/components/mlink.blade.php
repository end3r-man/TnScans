<div>
    @props([
    'param' => '',
    'aicon' => '',
    'nicon' => '',
    'tag' => 'a',
    'url' => ''
    ])

    @if (Route::current()->getName() == $param)

        <{{$tag}} wire:navigate {{$attributes->merge(['href' => $url])}} {{ $attributes->merge(['class' => "center justify-start gap-x-2 text-xl m-active"]) }}>
            <iconify-icon class="text-[#2D9596] text-2xl" icon="{{$aicon}}"></iconify-icon>
            <span class="hidden lg:block">{{$slot}}</span>
        </{{$tag}}>
    @else
        <{{$tag}} wire:navigate {{$attributes->merge(['href' => $url])}} {{ $attributes->merge(['class' => "center justify-start gap-x-2 text-xl text-slate-600"]) }}>
            <iconify-icon class="text-white text-2xl" icon="{{$nicon}}"></iconify-icon>
            <span class="hidden lg:block">{{$slot}}</span>
        </{{$tag}}>
    @endif
    
</div>