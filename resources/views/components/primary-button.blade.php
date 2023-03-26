<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-center inline-flex items-center px-4 py-2 rounded-md text-white transition duration-400 dark:text-zhort-gray ease-in-out dark:hover:bg-zhort-secondary dark:bg-zhort-primary']) }}>
    {{ $slot }}
</button>
