<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl">
            Create User
        </h1>
    </x-slot>

    <x-container>

        <div class="flex">
            <div class="w-full lg:w-1/2">


                <x-card>
                   
                        <form method="post" action="/users" class="mb-5" enctype="multipart/form-data">
                            
                        @csrf


                        <div class="mb-5">
                            <x-label for="name">
                                name
                            </x-label>
                            <x-input value="{{ old('name') }}" type="text" name="name" id="name"
                                class="mt-1 w-full" />
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <x-label for="email">
                                Email
                            </x-label>
                            <x-input value="{{ old('email') }}" type="email" name="email" id="email"
                                class="mt-1 w-full" />
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <x-label for="biodata">
                                biodata
                            </x-label>
                            <x-input value="{{ old('biodata') }}" type="text" name="biodata"
                                id="biodata" class="mt-1 w-full" />
                            @error('biodata')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <x-label for="username">
                                Username
                            </x-label>
                            <x-input value="{{ old('username') }}" type="text" name="username"
                                id="username" class="mt-1 w-full" />
                            @error('username')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-5">
                            <x-label for="password">
                                password
                            </x-label>
                            <x-input value="{{ old('password') }}" type="password" name="password"
                                id="password" class="mt-1 w-full" />
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-5">
                            <x-label for="username">
                                Role
                            </x-label>
                            <select id="countries" name="role" id="role"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Silahkan Pilih</option>
                                <option value="moderator">Moderator</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            @error('role')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>



                        <x-button>Tambah Data</x-button>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>