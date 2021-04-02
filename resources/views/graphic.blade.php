<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            График расходов
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>

                <script language = "JavaScript">

                    $(document).ready(function() {
                        var title = {
                            text: 'Расход по категориям'
                        };

                        var series = [{
                            type: 'pie',
                            data: {!! json_encode($data) !!},
                        }];

                        var json = {};
                        json.title = title;
                        json.series = series;
                        $('#container').highcharts(json);
                    });
                </script>

            </div>
        </div>
    </div>
</x-app-layout>
