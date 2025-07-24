@props([
    'title' => 'Stat Title',
    'value' => '0',
    'icon' => null,
    'iconColor' => 'text-green-500',
    'iconBg' => 'bg-green-100',
    'trend' => null,
    'trendColor' => 'text-green-500',
    'description' => null,
    'size' => 'md' 
])

@php
    $sizeClasses = [
        'sm' => 'p-4',
        'md' => 'p-6',
        'lg' => 'p-8'
    ];
    
    $textSizes = [
        'sm' => 'text-xl',
        'md' => 'text-2xl',
        'lg' => 'text-3xl'
    ];
    
    $iconSizes = [
        'sm' => 'w-8 h-8',
        'md' => 'w-10 h-10',
        'lg' => 'w-12 h-12'
    ];
    
    $iconContainerSizes = [
        'sm' => 'w-10 h-10',
        'md' => 'w-12 h-12',
        'lg' => 'w-14 h-14'
    ];
@endphp

<div {{ $attributes->merge(['class' => 'bg-white rounded-lg shadow-sm border border-gray-200 ' . $sizeClasses[$size]]) }}>
    <div class="flex items-start justify-between">
        <div class="flex-1">
            <div class="flex items-center gap-3 mb-2">
                @if($icon)
                    <div class="{{ $iconBg }} {{ $iconContainerSizes[$size] }} rounded-lg flex items-center justify-center">
                        <svg class="{{ $iconColor }} {{ $iconSizes[$size] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $icon !!}
                        </svg>
                    </div>
                @endif
                
                <div>
                    <p class="text-sm font-medium text-gray-600">{{ $title }}</p>
                    <p class="font-bold {{ $textSizes[$size] }} text-gray-900">{{ $value }}</p>
                </div>
            </div>
            
            @if($trend || $description)
                <div class="flex items-center gap-2 text-sm">
                    @if($trend)
                        <span class="{{ $trendColor }} font-medium">{{ $trend }}</span>
                    @endif
                    @if($description)
                        <span class="text-gray-500">{{ $description }}</span>
                    @endif
                </div>
            @endif
        </div>
        
        {{ $slot }}
    </div>
</div>