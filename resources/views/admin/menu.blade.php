<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
    <aside id="sidebar"
        class="fixed h-[100vh] top-0 left-0 z-20 flex-col flex-shrink-0 hidden w-64 lg:h-full pt-16 font-normal duration-75 lg:flex  transition-transform animate-fadeIn"
        aria-label="Sidebar">
        <div
            class="relative h-[100vh] flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                <div
                    class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{route('admin.dashboard')}}"
                            @php 
                                $menu = "DASHBOARD";
                                $isActive = $activeMenu === $menu;
                            @endphp
                            @class([
                                'flex',
                                'items-center',
                                'bg-gray-100' => $isActive ,
                                'p-2',
                                'text-base',
                                'text-gray-900',
                                'rounded-lg',
                                'hover:bg-gray-100',
                                'dark:bg-gray-300/50' => $isActive,
                                'dark:text-gray-200',
                                'dark:hover:bg-gray-700',
                                'group',
                            ])>
                                <svg class="w-6 h-6 transition duration-75 text-emerald-500 group-hover:text-emerald-500 dark:text-emerald-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3" sidebar-toggle-item>Dashboard Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.survey')}}"
                            @php 
                                $menu = "SURVEY";
                                $isActive = $activeMenu === $menu;
                            @endphp
                            @class([
                                'flex',
                                'items-center',
                                'bg-gray-100' => $isActive ,
                                'p-2',
                                'text-base',
                                'text-gray-900',
                                'rounded-lg',
                                'hover:bg-gray-100',
                                'dark:bg-gray-300/50' => $isActive,
                                'dark:text-gray-200',
                                'dark:hover:bg-gray-700',
                                'group',
                            ])><svg class="w-6 h-6 transition duration-75 text-emerald-500 group-hover:text-emerald-500 dark:text-emerald-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3" sidebar-toggle-item>Survey</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.questions')}}"
                            @php 
                                $menu = "QUESTION";
                                $isActive = $activeMenu === $menu;
                            @endphp
                            @class([
                                'flex',
                                'items-center',
                                'bg-gray-100' => $isActive ,
                                'p-2',
                                'text-base',
                                'text-gray-900',
                                'rounded-lg',
                                'hover:bg-gray-100',
                                'dark:bg-gray-300/50' => $isActive,
                                'dark:text-gray-200',
                                'dark:hover:bg-gray-700',
                                'group',
                            ])><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 transition duration-75 text-emerald-500 group-hover:text-emerald-500 dark:text-emerald-400 dark:group-hover:text-white">
                                    <path d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z" />
                                    <path d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z" />
                                    <path d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z" />
                                </svg>
                                <span class="ml-3" sidebar-toggle-item>Questions</span>
                            </a>
                        </li>
                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                    </path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Users</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-layouts" 
                            @php
                                $isActive=in_array($activeMenu, ["RESPONDEN","ADMIN"]);
                            @endphp
                            @class([
                                'py-2',
                                'space-y-2',
                                'hidden' => !$isActive,
                            ])
                            >
                                <li>
                                    <a href="{{route('admin.responden')}}"
                                    @php 
                                        $menu = "RESPONDEN";
                                        $isActive = $activeMenu === $menu;
                                    @endphp
                                    @class([
                                        'flex',
                                        'items-center',
                                        'bg-gray-100' => $isActive ,
                                        'p-2',
                                        'text-base',
                                        'text-gray-900',
                                        'transition',
                                        'duration-75',
                                        'pl-11 group',
                                        'rounded-lg',
                                        'hover:bg-gray-100',
                                        'dark:bg-gray-300/50' => $isActive,
                                        'dark:text-gray-200',
                                        'dark:hover:bg-gray-700',
                                    ])
                                    >Responden</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.admin')}}"
                                    @php 
                                        $menu = "ADMIN";
                                        $isActive = $activeMenu === $menu;
                                    @endphp
                                    @class([
                                        'flex',
                                        'items-center',
                                        'bg-gray-100' => $isActive ,
                                        'p-2',
                                        'text-base',
                                        'text-gray-900',
                                        'transition',
                                        'duration-75',
                                        'pl-11 group',
                                        'rounded-lg',
                                        'hover:bg-gray-100',
                                        'dark:bg-gray-300/50' => $isActive,
                                        'dark:text-gray-200',
                                        'dark:hover:bg-gray-700',
                                    ])
                                    >Admin</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- for backdorp when click button -->
    <div class="fixed inset-0 z-10 hidden lg:hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop">
    </div>
