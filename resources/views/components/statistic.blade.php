<div class="border-b mb-5">
    <x-container>
        <div class="flex justify-between items-center">
            <div class="flex">
                <a href="{{ route('profile', $user->username) }}" class="px-10 py-3  text-center border-r border-l">
                    <div class="text-2xl text-semibold mb-2">{{ $user->statuses->count() }}</div>
                    <div class="uppercase text-xs text-gray-600 ">Status</div>
                </a>
                <a href="{{ route('following.index', [$user->username, 'following']) }}"
                    class="px-10 py-3  text-center border-r border-l">
                    <div class="text-2xl text-semibold mb-2">{{ $user->follows->count() }}</div>
                    <div class="uppercase text-xs text-gray-600">Following</div>
                </a>
                <a href="{{ route('following.index', [$user->username, 'follower']) }}"
                    class="px-10 py-3  text-center border-r border-l">
                    <div class="text-2xl text-semibold mb-2">{{ $user->followers->count() }}</div>
                    <div class="uppercase text-xs text-gray-600">Followers</div>
                </a>
            </div>

            
            
            <div>
                {{-- @if (Auth::id() != $user->id) --}}
                @if (Auth::user()->isNot($user))
                <form action="{{ route('following.store', $user) }}" method="post">
                    @csrf
                    <x-button>
                        @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
                        Unfollow
                        @else
                        Follow
                        @endif
                        
                    </x-button>
                </form>
                @else

                <a href="" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-xl font-semibold text-sm text-white capitalize tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Edit Profile
                </a>
                @endif
            </div>
            
            
        </div>
    </x-container>
</div>
