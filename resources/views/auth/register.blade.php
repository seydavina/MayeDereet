<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Prenom -->
        <div>
            <x-input-label for="firstname" :value="__('Votre prénom')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Nom -->
        <div>
            <x-input-label for="name" :value="__('Votre nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Date de naissance -->
        <div>
            <x-input-label for="ddn" :value="__('Votre date de naissance')" />
            <x-text-input id="ddn" class="block mt-1 w-full" type="date" name="ddn" :value="old('ddn')" required autofocus autocomplete="ddn" />
            <x-input-error :messages="$errors->get('ddn')" class="mt-2" />
        </div>

        <!-- Addresse -->
        <div>
            <x-input-label for="adresse" :value="__('Adresse domicile')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <!-- Mot de passe -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe*')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmation mot de passe -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmation mot de passe*')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Vous avez déjà un compte?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Se connecter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
