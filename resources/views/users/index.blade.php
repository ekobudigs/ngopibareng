<x-app-layout>
    <x-container>
        
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Post</h1>
        </div>
    
        @if (session()->has('success'))
            <div class="bg-green-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
    
        @endif
        <div class="table-responsive col-lg-8">
            <a href="/users/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Create New Post</a>
            <table class="table table-striped table-sm ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="/users/{{ $user->id }}" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat</a>
                                <a href="/users/{{ $user->id }}/edit" class="bg-pink-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="/users/{{ $user->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are You Sure?')">Hapus</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $users->links() }}
    </x-container>
</x-app-layout>