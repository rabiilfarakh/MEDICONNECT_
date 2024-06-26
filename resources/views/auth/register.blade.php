<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" /><br> 
        </div>

        <!-- Role -->
        <div>
            <x-input-label for="role" :value="__('Role')" />
            <input type="radio" name="role" id="role_medecin" value="medecin" onchange="showSpecialiteSelect()"> Medecin
            <input type="radio" name="role" id="role_patient" value="patient" onchange="hideSpecialiteSelect()"> Patient
        </div>

        <!-- Specialites -->
        <div id="specialite_select" style="display: none;">
            <x-input-label for="specialite" :value="__('Specialite')" />
            <select id="specialite" name="specialite" >
                <option selected disabled>Choisir une spécialité</option>
                @foreach($specialites as $specialite)
                    <option value="{{$specialite->id}}">{{ $specialite->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function showSpecialiteSelect() {
            var specialiteSelect = document.getElementById('specialite_select');
            specialiteSelect.style.display = 'block';
        }

        function hideSpecialiteSelect() {
            var specialiteSelect = document.getElementById('specialite_select');
            specialiteSelect.style.display = 'none';
        }
    </script>
</x-guest-layout>
