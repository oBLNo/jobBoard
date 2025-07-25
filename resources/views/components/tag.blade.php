@props(['size' => 'base', 'tag'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 ";

    $classes .= match ($size){
        'base' => " px-5 py-1 text-sm",
        'small' => " px-3 py-1 text-xs"
    };

@endphp

<a href="/tags/{{strtolower($tag->name)}}" class="{{ $classes }}">{{ $tag->name }}</a>

