@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md focus:border-zhort-primary active:border-zhort-primary dark:bg-zhort-darker dark:border-zhort-darkish dark:text-zhort-gray']) !!}>
