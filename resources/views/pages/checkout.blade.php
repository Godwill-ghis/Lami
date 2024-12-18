<x-layout>
    <x-container class="content-center">
        <h1 class="text-center text-blue-500 text-2xl font-mono font-bold">Checkout</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th
                            class="px-6 py-3 border border-gray-300 text-left text-sm font-medium text-gray-600 uppercase">
                            Plan
                        </th>
                        <th
                            class="px-6 py-3 border border-gray-300 text-left text-sm font-medium text-gray-600 uppercase">
                            Amount
                        </th>
                        <th
                            class="px-6 py-3 border border-gray-300 text-left text-sm font-medium text-gray-600 uppercase">
                            Role
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">{{$plan->name}}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">${{$plan->price}}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{auth()->user()->role}}</td>
                        <td class="px-6 py-4 text-center">
                            <form action="/checkout" method="POST">
                                @csrf
                                <button
                                    class="px-3 py-1 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">Checkouts</button>
                            </form>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-container>
</x-layout>