@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-gray-700 dark:text-zhort-gray']) }}>
    {{ $value ?? $slot }}
</label>
