<x-app-layout>
    <div class="border-b -mt-8 py-16">
        <x-container>
            <div class="flex">
                
                <div>
                    <h1 class="font-semibold mb-3">{{ $user->name }}</h1>
                    <h1 class="font-semibold mb-3">{{ $user->email }}</h1>
                    <h1 class="font-semibold mb-3">{{ $user->biodata }}</h1>
                    <h1 class="font-semibold mb-3">{{ $user->role }}</h1>
                    <div class="text-sm text-gray-500">
                         {{ $user->created_at->diffForHumans() }}
                    </div>

                </div>

            </div>
        </x-container>

        
    </div>
    
      
   

    <x-container>
        <div class="grid grid-cols-2">
            <div class="space-y-5">
               
            </div>
        </div>
    </x-container>
</x-app-layout>
