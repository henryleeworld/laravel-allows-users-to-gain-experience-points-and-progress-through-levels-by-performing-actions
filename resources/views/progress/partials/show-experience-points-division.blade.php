<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Experience Points') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        </p>
    </header>
    <div>
        <x-input-label for="points" :value="__('Points')" />
        <x-text-input id="points" name="points" type="text" class="mt-1 block w-full read-only:bg-gray-100" :value="$user->getPoints()" required autofocus autocomplete="points" readonly/>
    </div>
</section>
