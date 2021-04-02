<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Список расходов
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Сумма</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($expenditures as $expenditure)
                        <tr>
                            <th scope="row">{{ $expenditure->id }}</th>
                            <td>{{ $expenditure->name }}</td>
                            <td>{{ $expenditure->sum }}</td>
                            <td>{{ $expenditure->category->name }}</td>
                            <td>{{ $expenditure->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $expenditures->links('vendor.pagination.bootstrap-4') }}

            </div>
        </div>
    </div>
</x-app-layout>
