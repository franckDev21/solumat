<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex bg-primary bg-opacity-80 hover:bg-opacity-100 items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  focus:outline-none focus:border-gray-900 focus:ring  disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
