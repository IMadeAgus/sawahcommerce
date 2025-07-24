<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6 text-gray-900">
                    <x-dashboard-admin-item
                        title="Users" 
                        value="{{ $usersCount ?? 0 }}"
                        description="Data user yang telah terdaftar dengan role user"
                        icon-color="text-blue-500"
                        icon-bg="bg-blue-100"
                        trend-color="text-green-500"
                        :icon="'<path d=\'M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z\'/>'">
                    </x-dashboard-admin-item>
                    <x-dashboard-admin-item
                        title="Products" 
                        value="{{ $productsCount ?? 0 }}"
                        description="Data product yang telah dibuat"
                        icon-color="text-blue-500"
                        icon-bg="bg-blue-100"
                        trend-color="text-green-500"
                        :icon="'<path xmlns=\'http://www.w3.org/2000/svg\' d=\'M9 11V6C9 4.34315 10.3431 3 12 3C13.6569 3 15 4.34315 15 6V10.9673M10.4 21H13.6C15.8402 21 16.9603 21 17.816 20.564C18.5686 20.1805 19.1805 19.5686 19.564 18.816C20 17.9603 20 16.8402 20 14.6V12.2C20 11.0799 20 10.5198 19.782 10.092C19.5903 9.71569 19.2843 9.40973 18.908 9.21799C18.4802 9 17.9201 9 16.8 9H7.2C6.0799 9 5.51984 9 5.09202 9.21799C4.71569 9.40973 4.40973 9.71569 4.21799 10.092C4 10.5198 4 11.0799 4 12.2V14.6C4 16.8402 4 17.9603 4.43597 18.816C4.81947 19.5686 5.43139 20.1805 6.18404 20.564C7.03968 21 8.15979 21 10.4 21Z\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/>'">
                    </x-dashboard-admin-item>
                    <x-dashboard-admin-item
                        title="Admin" 
                        value="{{ $adminsCount ?? 0 }}"
                        description="Data admin yang telah terdaftar"
                        icon-color="text-blue-500"
                        icon-bg="bg-blue-100"
                        trend-color="text-green-500"
                        :icon="'<svg xmlns=\'http://www.w3.org/2000/svg\'>
                        <path d=\'M10.49 2.23006L5.50003 4.10005C4.35003 4.53005 3.41003 5.89004 3.41003 7.12004V14.55C3.41003 15.73 4.19005 17.28 5.14005 17.99L9.44003 21.2001C10.85 22.2601 13.17 22.2601 14.58 21.2001L18.88 17.99C19.83 17.28 20.61 15.73 20.61 14.55V7.12004C20.61 5.89004 19.67 4.53005 18.52 4.10005L13.53 2.23006C12.68 1.92006 11.32 1.92006 10.49 2.23006Z\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/>
                        <path d=\'M12.0001 10.92C11.9601 10.92 11.9101 10.92 11.8701 10.92C10.9301 10.89 10.1801 10.11 10.1801 9.16003C10.1801 8.19003 10.9701 7.40002 11.9401 7.40002C12.9101 7.40002 13.7001 8.19003 13.7001 9.16003C13.6901 10.12 12.9401 10.89 12.0001 10.92Z\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/>
                        <path d=\'M10.01 13.72C9.05004 14.36 9.05004 15.41 10.01 16.05C11.1 16.78 12.89 16.78 13.98 16.05C14.94 15.41 14.94 14.36 13.98 13.72C12.9 12.99 11.11 12.99 10.01 13.72Z\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/>
                        </svg>'">
                    </x-dashboard-admin-item>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
