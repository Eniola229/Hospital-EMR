<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        @if (session('status'))
        <div class="text-red-500">
            {{ session('status') }}
        </div>
      @endif

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

   <form method="post" action="{{ route('profile.update') }}" class="container mt-4">
    @csrf
    @method('patch')

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="first_name" class="form-label">{{ __('First Name') }}</label>
            <input id="first_name" name="first_name" type="text" class="form-control" value="{{ old('first_name', $user->first_name) }}" required autofocus autocomplete="first_name" />
            @error('first_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
            <input id="last_name" name="last_name" type="text" class="form-control" value="{{ old('last_name', $user->last_name) }}" required autofocus autocomplete="last_name" />
            @error('last_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="qualification" class="form-label">{{ __('Qualification') }}</label>
            <input id="qualification" name="qualification" type="text" class="form-control" value="{{ old('qualification', $user->qualification) }}" required autofocus autocomplete="qualification" />
            @error('qualification')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="specialization" class="form-label">{{ __('Specialization') }}</label>
            <input id="specialization" name="specialization" type="text" class="form-control" value="{{ old('specialization', $user->specialization) }}" required autofocus autocomplete="specialization" />
            @error('specialization')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="intro" class="form-label">{{ __('Intro') }}</label>
            <input id="intro" name="intro" type="text" class="form-control" value="{{ old('intro', $user->intro) }}" required autofocus autocomplete="intro" />
            @error('intro')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="years_of_experience" class="form-label">{{ __('Years Of Experience') }}</label>
            <input id="years_of_experience" name="years_of_experience" type="number" class="form-control" value="{{ old('years_of_experience', $user->years_of_experience) }}" required autofocus autocomplete="years_of_experience" />
            @error('years_of_experience')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="location" class="form-label">{{ __('Location') }}</label>
            <input id="location" name="location" type="text" class="form-control" value="{{ old('location', $user->location) }}" required autofocus autocomplete="location" />
            @error('location')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="date_of_birth" class="form-label">{{ __('Date Of Birth') }}</label>
            <input id="date_of_birth" name="date_of_birth" type="date" class="form-control" value="{{ old('date_of_birth', $user->date_of_birth) }}" required autofocus autocomplete="date_of_birth" />
            @error('date_of_birth')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
            <input id="phone_number" name="phone_number" type="text" class="form-control" value="{{ old('phone_number', $user->phone_number) }}" required autofocus autocomplete="phone_number" />
            @error('phone_number')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username" />
            @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-warning">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="btn btn-link">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success mt-2">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

        @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-success mb-0"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
</form>

</section>
