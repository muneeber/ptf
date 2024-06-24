<div class="bg-black">
    <x-slot name="header">
        <div class="flex justify-between max-w-6xl">
            <div class="">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Project Category Edit ') }}
                </h2>
            </div>
            <div class="">
                <button  wire:click='hi'
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-100 text-blue-900 hover:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-blue-900 dark:text-blue-400">Add
                    New Category</button>
            </div>
        </div>

    </x-slot>

    <div class="p-3">
        @foreach ($projectsCategory as $item)
        <section class="grid gap-5 p-5 md:p-0">
            <div class="text-xl font-bold text-highlight">{{ $item->name }}</div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl::grid-cols-5 gap-5">
                @foreach ($item->projects as $item)

                <div class="flex flex-col gap-3">
                    <a target="_blank" href="/">
                        <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Solidity" loading="lazy"
                                decoding="async" data-nimg="fill" class="object-cover"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                sizes="100vw" src="{{ Storage::url($item->image) }}">
                            <div class="progress-bar">
                                <div class="h-full bg-btnHighlight" style="width:{{ $item->progress_bar }}%"></div>
                            </div>
                        </div>
                    </a>
                    <div class="grid gap-2 px-2">
                        <div class="text-highlight font-bold">{{ $item->title }}</div>
                        <div class="flex gap-2 md:gap-10"><a target="_blank"
                                class="flex items-center text-info text-xs gap-1" href="{{ $item->link }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-code">
                                    <polyline points="16 18 22 12 16 6"></polyline>
                                    <polyline points="8 6 2 12 8 18"></polyline>
                                </svg>{{ $item->code_lines }}</a><a target="_blank"
                                class="flex items-center text-info text-xs gap-1" href="/"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-history">
                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M12 7v5l4 2"></path>
                                </svg>{{ $item->days_ago }} day ago</a></div>
                    </div>
                </div>
                @endforeach
                <div class="flex flex-col gap-3">
                    <a wire:click='add'>
                        <div class="relative aspect-video rounded-lg overflow-hidden">
                            <img alt="Add new project" loading="lazy" decoding="async" class=" object-cover"
                                src="{{ Storage::url("photos/E0olQ8vVZtQCh2agQj89dYP1KqLFlGMWMsj92LD1.jpg") }}">
                            {{-- <img alt="Solidity" loading="lazy" decoding="async" data-nimg="fill"
                                class="object-cover"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                sizes="100vw" src="{{ Storage::url($item->image) }}"> --}}
                            <div class="progress-bar">
                                <div class="h-full bg-btnHighlight" style="width:{{ $item->progress_bar }}%"></div>
                            </div>
                        </div>
                    </a>

                </div>


            </div>
        </section>
        @endforeach

        {{-- <section class="grid gap-5 p-5 md:p-0">
            <div class="text-xl font-bold text-highlight">Others</div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl::grid-cols-5 gap-5">
                <div class="flex flex-col gap-3"><a target="_blank" href="/">
                        <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Rest API" loading="lazy"
                                decoding="async" data-nimg="fill" class="object-cover"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                sizes="100vw"
                                src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fothers%2Frest.png&w=3840&q=75">
                            <div class="progress-bar">
                                <div class="h-full bg-btnHighlight" style="width:90%"></div>
                            </div>
                        </div>
                    </a>
                    <div class="grid gap-2 px-2">
                        <div class="text-highlight font-bold">Rest API</div>
                        <div class="flex gap-2 md:gap-10"><a target="_blank"
                                class="flex items-center text-info text-xs gap-1" href="/"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-code">
                                    <polyline points="16 18 22 12 16 6"></polyline>
                                    <polyline points="8 6 2 12 8 18"></polyline>
                                </svg>1,128</a><a target="_blank" class="flex items-center text-info text-xs gap-1"
                                href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history">
                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M12 7v5l4 2"></path>
                                </svg>1 day ago</a></div>
                    </div>
                </div>
                <div class="flex flex-col gap-3"><a target="_blank" href="/">
                        <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="SOAP API" loading="lazy"
                                decoding="async" data-nimg="fill" class="object-cover"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                sizes="100vw"
                                src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fothers%2Fsoap.jpg&w=3840&q=75">
                            <div class="progress-bar">
                                <div class="h-full bg-btnHighlight" style="width:70%"></div>
                            </div>
                        </div>
                    </a>
                    <div class="grid gap-2 px-2">
                        <div class="text-highlight font-bold">SOAP API</div>
                        <div class="flex gap-2 md:gap-10"><a target="_blank"
                                class="flex items-center text-info text-xs gap-1" href="/"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-code">
                                    <polyline points="16 18 22 12 16 6"></polyline>
                                    <polyline points="8 6 2 12 8 18"></polyline>
                                </svg>1,128</a><a target="_blank" class="flex items-center text-info text-xs gap-1"
                                href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history">
                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M12 7v5l4 2"></path>
                                </svg>1 day ago</a></div>
                    </div>
                </div>
                <div class="flex flex-col gap-3"><a target="_blank" href="/">
                        <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="GraphQl" loading="lazy"
                                decoding="async" data-nimg="fill" class="object-cover"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                sizes="100vw"
                                src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fothers%2Fgraphql.png&w=3840&q=75">
                            <div class="progress-bar">
                                <div class="h-full bg-btnHighlight" style="width:70%"></div>
                            </div>
                        </div>
                    </a>
                    <div class="grid gap-2 px-2">
                        <div class="text-highlight font-bold">GraphQl</div>
                        <div class="flex gap-2 md:gap-10"><a target="_blank"
                                class="flex items-center text-info text-xs gap-1" href="/"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-code">
                                    <polyline points="16 18 22 12 16 6"></polyline>
                                    <polyline points="8 6 2 12 8 18"></polyline>
                                </svg>1,128</a><a target="_blank" class="flex items-center text-info text-xs gap-1"
                                href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history">
                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M12 7v5l4 2"></path>
                                </svg>1 day ago</a></div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div> {{-- The Master doesn't talk, he acts. --}}

    @if($model)
    <div id="modal" class="fixed inset-0 z-[80] flex items-center justify-center overflow-x-hidden overflow-y-auto">
        <!-- Backdrop overlay -->
        <div class="fixed inset-0 bg-black opacity-50"></div>

        <!-- Modal content -->
        <div
            class="mt-7 opacity-100 duration-500 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto relative z-[90]">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        {{ $projectId ? 'Edit Project' : 'Add New Main Project' }}
                    </h3>
                    <button type="button" wire:click="closeModel"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <form wire:submit.prevent="
                  {{ $projectId ? 'update' : 'create' }}
                   " class="max-w-sm mx-auto bg-white shadow p-3 m-4 mt-8">
                        <div class="mb-5">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" id="title" wire:model="title"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Enter Project's Title Here" required />
                        </div>
                        <div class="mb-5">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Days:</label>
                            <input type="text" id="description" wire:model="description"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Next.js 13, React Hook Form, Zustand, Radix UI, Typescript, Tailwind CSS"
                                required />
                        </div>
                        <div class="mb-5">
                            <label for="link" class="block mb-2 text-sm font-medium text-gray-900">Code Lines:</label>
                            <input type="text" id="link" wire:model="link"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="https://github.com/nwaliaez/eCommerce" required />
                        </div>
                        <div class="mb-5">
                            <label for="header_image" class="block text-gray-700 text-sm font-bold mb-2">Header
                                Image</label>
                            <label for="file-input" class="sr-only">Choose file</label>
                            <input type="file" id="file-input" wire:model="image" name="file-input"
                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4">
                            @if ($image)
                            <div class="mt-2">
                                <span class="block text-sm font-medium text-gray-700">New Image Preview:</span>
                                <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="mt-2 rounded-md">
                            </div>
                            @endif
                            @if ($projectId && !$image)
                            <div class="mt-2">
                                <span class="block text-sm font-medium text-gray-700">Current Image:</span>
                                <img src="{{ Storage::url($projects->find($projectId)->image) }}" alt="Project Image"
                                    class="mt-2 rounded-md">
                            </div>
                            @endif
                            @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="flex justify-end w-full">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                {{ $projectId ? 'Update Project' : 'Add New Main Project' }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" wire:click="closeModel"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Close
                    </button>
                    @if($projectId)
                    <button type="button" wire:click="update"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
    @if($Catmodel)
    <div id="modal" class="fixed inset-0 z-[80] flex items-center justify-center overflow-x-hidden overflow-y-auto">
        <!-- Backdrop overlay -->
        <div class="fixed inset-0 bg-black opacity-50"></div>

        <!-- Modal content -->
        <div
            class="mt-7 opacity-100 duration-500 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto relative z-[90]">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Add New Project Category
                    </h3>
                    <button type="button" wire:click="closeModel"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <form wire:submit.prevent="
                  {{ $projectId ? 'update' : 'create' }}
                   " class="  bg-white  p-3 ">
                        <div class="mb-5">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" id="title" wire:model="title"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Enter Project's Title Here" required />
                        </div>
                  
                      
                           
                    </form>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" wire:click="closeModel"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Close
                    </button>
                   
                    <button type="button" wire:click="update"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                   
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- In work, do what you enjoy. --}}
</div>