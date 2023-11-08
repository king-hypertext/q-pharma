@extends('layout.layout')
@section('content')
    Manage invoice
    <div class="card">
        <div class="card-body">
            <table id="invoice-table" class="table table-sm table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">customer Name</th>
                        <th scope="col">customer phone</th>
                        <th scope="col">medicine</th>
                        <th scope="col">quantity</th>
                        <th scope="col">price</th>
                        <th scope="col">total</th>
                        <th scope="col">payment type</th>
                        <th scope="col">date</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new DataTable('#invoice-table', {
            ajax: '/invoices',
            columns:[
                {data: 'customerName'},
                {data: 'customerPhone'},
                {data: 'medicine'},
                {data: 'quantity'},
                {data: 'price'},
                {data: 'total'},
                {data: 'invoiceDate'},
                {data: 'paymentType'}
            ],
            processing: true,
            serverSide: true,
            search: {
                return: true
            }
        });
    </script>
@endsection
