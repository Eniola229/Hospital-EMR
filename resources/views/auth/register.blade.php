<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="mt-4">
            <x-input-label for="avatar" :value="__('Profile Picture')" />
            <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" :value="old('avatar')" required
                autofocus autocomplete="avatar" />
            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                required autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <select name="role" id="role" class="mt-4 width-100">
                <option value="" selected disabled>Choose Role</option>
                <option value="0">Nurse</option>
                <option value="3">Doctor</option>
                <option value="3">Pharmacy</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="qualification" :value="__('Qualification')" />
            <x-text-input id="qualification" class="block mt-1 w-full" type="text" name="qualification"
                :value="old('qualification')" required autofocus autocomplete="qualification" />
            <x-input-error :messages="$errors->get('qualification')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="intro" :value="__('Intro')" />
            <x-text-input id="intro" class="block mt-1 w-full" type="text" name="intro" :value="old('intro')"
                required autofocus autocomplete="intro" />
            <x-input-error :messages="$errors->get('intro')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="years_of_experience" :value="__('Years of Experience')" />
            <x-text-input id="years_of_experience" class="block mt-1 w-full" type="number" name="years_of_experience"
                :value="old('years_of_experience')" required autofocus autocomplete="years_of_experience" />
            <x-input-error :messages="$errors->get('years_of_experience')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="specialization" :value="__('Specialization')" />
            <x-text-input id="specialization" class="block mt-1 w-full" type="text" name="specialization"
                :value="old('specialization')" required autofocus autocomplete="specialization" />
            <x-input-error :messages="$errors->get('specialization')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')"
                required autofocus autocomplete="location" />
            <x-input-error :messages="$errors->get('location')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                :value="old('date_of_birth')" required autofocus autocomplete="date_of_birth" />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
