@include('frontend.layouts.header')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <style>
        .dbb{
            position: relative;
        }

        .dbbox {
            position: absolute;
            top: 100%;
            left: 25%;
            display: none;
            color: grey;
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .dbb:hover .dbbox {
            display:block;
        }

    </style>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                  <div class="dbb">
                    <x-dropdown-link :href="route('dashboard')">
                            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                            <i class="bi bi-chevron-double-right"></i>&nbsp; {{ __('Go to Dashboard') }}
                            </h2>
                            <div class="dbbox">
                                <p>to see your donation history, image gallery etc.</p>
                            </div>
                    </x-dropdown-link>
                  </div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layouts.footer')
