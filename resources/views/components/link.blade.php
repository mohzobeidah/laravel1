
@props(['href'])

<a {{ $attributes->merge(['class' => 'btn btn-success' , 'href'=>$href]  ) }}>
    {{$slot}}
</a>
