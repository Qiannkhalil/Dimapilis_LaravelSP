@props(['href', 'type' => 'primary'])

@php
    // Base Bootstrap classes + your custom pill shape & animation
    $baseClasses = "btn btn-sm text-white shadow-sm";

    // Define styles matching your Bootstrap + Custom CSS
    $styles = [
        // The 'Add New' button (Green in your code, but let's make it Hot Pink to match the theme!)
        'primary' => "btn-primary", 
        
        // The 'View' button (Info Blue)
        'view' => "btn-info",
        
        // The 'Edit' button (Warning Yellow/Blue)
        'edit' => "btn-warning",
    ];

    // Select the class based on input
    $themeClass = $styles[$type] ?? $styles['primary'];
    
    // Combine everything
    $finalClass = "$baseClasses $themeClass";
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $finalClass]) }}>
    {{ $slot }}
</a>