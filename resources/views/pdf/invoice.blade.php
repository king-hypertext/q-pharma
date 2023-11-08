<!DOCTYPE html>
<html lang="en" lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="favicon.png" />
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/boxicons.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/print.css') }}" media="all" />
    <script src="{{ url('/assets/jquery-3.4.1.js') }}"></script>
    <title>Q-Pharma | PRINT INVOICE</title>
</head>

<body>
    <div class="print-layout">
        <h2 class="h6 text-center">Q-Pharma Official Receipt</h2>
        <div class="d-flex justify-content-end">
            {{ $date->updated_at }}
        </div>
        <table class="table table-borderless mb-0">
            <thead>
                <tr class="">
                    <th class="col-md-6" title="Name">Customer Name: </th>
                    <td class="col-md-6">
                        {{ $name->customerName }}
                    </td>
                </tr>
                <tr>
                    <th class="col-md-6" title="Phone">Customer Phone: </th>
                    <td class="col-md-6">
                        {{ $phone->customerPhone }}
                    </td>
                </tr>
            </thead>
        </table>
        <table class="table table-bordered mb-0">
            <thead>
                <tr class="">
                    <th class="col-md-8" scope="col" title="Item Name">Item Name</th>
                    <th class="col-md-1" scope="col" title="Quantity">Qty</th>
                    <th class="col-md-3" scope="col" title="Price">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $k => $value)
                    <tr class="">
                        <td class="col-md-6">
                            {{ $k + 1 }}.
                            {{ $value->medicine }}
                        </td>
                        <td class="col-md-4">
                            {{ $value->quantity }}
                        </td>
                        <td class="col-md-2">
                            {{ $value->price }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button id="print" class="btn btn-primary">Print</button>
    </div>
    <script>
        var print_btn = $('#print');
        var print_body = $('.print-layout');
        print_btn.on('click', function() {
            window.print(print_body);
        })
    </script>
</body>

</html>
