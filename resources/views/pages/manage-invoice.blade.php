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
                        <th scope="col">Action</th>
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
                {data: 'customerName', name: 'customerName'},
                {data: 'customerPhone', name: 'customerPhone'},
                {data: 'medicine', name: 'medicine'},
                {data: 'quantity', name: 'quantity'},
                {data: 'price', name: 'price'},
                {data: 'total', name: 'total'},
                {data: 'paymentType', name: 'paymentType'},
                {data: 'invoiceDate', name: 'invoiceDate'},
                { data: 'Action',  name: 'Action',  orderable: true, searchable: true},
            ],
            processing: true,
            serverSide: true,
            search: {
                return: true
            }
        });
    </script>
@endsection
