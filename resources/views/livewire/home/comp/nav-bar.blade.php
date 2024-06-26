<div class="h-full w-[15%]">
    <div class="bg-[#112031f8] w-full h-full center justify-start flex-col md:pl-0 lg:pl-8 py-4 gap-y-8">
        <div class="w-full h-auto">
            <span class="text-2xl text-white font-semibold">TnScans</span>
        </div>

        <div class="w-full h-auto flex center lg:n-center flex-col gap-y-4">
            <p class="text-slate-500">Menu</p>


            <div class="flex flex-col gap-y-6">
                <x-mlink param="index" url="/" aicon="solar:home-smile-bold" nicon="solar:home-smile-linear">
                    Home
                </x-mlink>

                <x-mlink param="discover" url="/discover" aicon="solar:compass-bold" nicon="solar:compass-linear">
                    Discover
                </x-mlink>

                <x-mlink param="category" url="/category" aicon="solar:layers-minimalistic-bold-duotone"
                    nicon="solar:layers-minimalistic-linear">
                    Category
                </x-mlink>

                <x-mlink param="newest" url="/newest" aicon="solar:alarm-bold" nicon="solar:alarm-linear">
                    Newest
                </x-mlink>
            </div>
        </div>

        <div class="w-full center">
            <div class="w-full border-t border-slate-700"></div>
        </div>

        <div class="w-full h-auto flex center lg:n-center flex-col gap-y-4">
            <p class="text-slate-500">Library</p>


            <div class="flex flex-col gap-y-6">
                <x-mlink param="recent" url="/recent" aicon="solar:clock-circle-bold"
                    nicon="solar:clock-circle-linear">
                    Recent
                </x-mlink>

                <x-mlink param="discover" url="/discover" aicon="solar:folder-with-files-bold"
                    nicon="solar:folder-with-files-linear">
                    My Collection
                </x-mlink>

                <x-mlink param="bookmark" url="/bookmark" aicon="solar:bookmark-square-minimalistic-bold"
                    nicon="solar:bookmark-square-minimalistic-linear">
                    Bookmark
                </x-mlink>
            </div>
        </div>

        <div class="w-full center">
            <div class="w-full border-t border-slate-700"></div>
        </div>

        <div class="w-full h-auto flex center lg:n-center flex-col gap-y-4">
            <div class="flex flex-col gap-y-6">
                <x-mlink param="settings" url="/settings" aicon="solar:settings-bold" nicon="solar:settings-linear">
                    Settings
                </x-mlink>

                @auth
                    <x-mlink param="logout" url="/logout" aicon="solar:login-3-bold" nicon="solar:login-3-linear">
                        Logout
                    </x-mlink>
                @else
                    <x-mlink param="login" url="/login" aicon="solar:login-3-bold" nicon="solar:login-3-linear">
                        Login
                    </x-mlink>
                @endauth
            </div>
        </div>
    </div>
</div>
