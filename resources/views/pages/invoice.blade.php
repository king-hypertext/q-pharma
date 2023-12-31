@extends('layout.layout')
@section('content')
    <div class="card overflow-x-hidden">
        <div class="divider my-0">
            <div class="divider-text">
                <h5 class="h3 text-capitalize">new invoice</h5>
            </div>
        </div>
        <div class="card-body">
            <form id="form-invoice" action="{{ route('invoice.add') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mx-2">
                            <label for="buyer" class="fw-semibold text-dark mb-1">Buyer Name:</label>
                            <input type="text" name="customerName" class="form-control rounded-0" id="buyer"
                                placeholder="Buyer/Customer Name" aria-describedby="buyerHelp">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mx-2">
                            <label for="buyer" class="fw-semibold text-dark mb-1">Buyer Contact Number:</label>
                            <input type="text" name="customerPhone" onfocus="this.type='number'"
                                class="form-control rounded-0" id="customerPhone" placeholder="Buyer/Customer Name"
                                aria-describedby="buyerHelp">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mx-2">
                            <label for="buyer" class="fw-semibold text-dark mb-1">Date:</label>
                            <input required name="invoiceDate" type="date" value="@php echo Date('Y-m-d') @endphp"
                                min="@php echo Date('Y-m-d') @endphp" class="form-control rounded-0" id="invoiceDate"
                                placeholder="Buyer/Customer Name" aria-describedby="buyerHelp">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mx-2">
                            <label for="buyer" class="fw-semibold text-dark mb-1">Payment Type:</label>
                            <select required name="paymentType" type="select" class="form-select rounded-0"
                                id="paymentType">
                                <option value="cash" selected readonly>Cash</option>
                                <option value="momo">Momo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr class="hr text-dark" />
                <div class="table-responsive text-nowrap">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr class="">
                                <th class="col-md-4" scope="col">Medicine Name</th>
                                <th class="col-md-3" scope="col" title="Price">MRP</th>
                                <th class="col-md-2" scope="col">Quantity</th>
                                <th class="col-md-3" scope="col">Total (GHC)</th>
                            </tr>
                        </thead>
                        <tbody id="td-parent">
                            <tr class="form_row">
                                <td class="col-md-4">
                                    <div class="">
                                        <div class="">
                                            <div class="form-group">
                                                <select required name="medicine[]" id="medicine" class="form-select">
                                                    <option value="" selected disabled> Select drug </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3">
                                    <div class="form-group">
                                        <input readonly type="text" name="price[]" type="text"
                                            onfocus="this.type='number'" value="0" id="price" class="form-control"
                                            value="0" />
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" name="quantity[]" onfocus="this.type='number'" id="qty"
                                            class="form-control qty" />
                                    </div>
                                </td>
                                <td class="col-md-3">
                                    <div class="form-group">
                                        <input readonly type="text" value="0" name="total[]" id="total"
                                            class="form-control total" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between" style="padding: 20px">
                    <div class="d-flex justify-content-center">
                        <div class="form-group me-2">
                            <label class="fw-semibold text-dark mb-1" for="paid_amt">Amount Paying:</label>
                            <input type="text" value="" name="paid_amt" id="paid_amt" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="fw-semibold text-dark mb-1" for="change_amt">Change:</label>
                            <input readonly type="text" value="0" name="change_amt" id="change_amt"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group ms-1">
                            <label class="fw-semibold text-dark mb-1" for="total_amt">Total Amount To Pay:</label>
                            <input readonly type="text" value="0" name="totalAmount" id="total_amt"
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" onclick="addNewRow()" class="btn btn-warning add-row"><i
                            class="bx bx-plus"></i>
                        Add Row
                    </button>
                    <button type="submit" class="btn btn-primary">Save Invoice</button>
                </div>
            </form>
        </div>
    </div>
    @if (session('invoice'))
        <script type="text/javascript">
            const showSuccessAlert = Swal.mixin({
                position: 'top-end',
                toast: true,
                timer: 5500,
                showConfirmButton: false,
                timerProgressBar: false,
            });
            showSuccessAlert.fire({
                icon: 'success',
                text: '{{ session('invoice') }}',
                padding: '10px',
                width: 'auto'
            });
            if (window.confirm("Click Okay to print receipt")) {
                window.location.href = "{{ url('/print-invoice/') }}" + "{{ session('print') }}";
            }
        </script>
    @endif
@section('js')
    <script>
        $(document).ready(function() {
            'use strict'
            var drugs;
            $.ajax({
                method: "GET",
                url: "/drugs",
                success: function(res) {
                    drugs = res;
                }
            });
            $('#medicine').on('mouseover', function() {
                // e.stopPropagation();
                $(this).select2({
                    theme: 'bootstrap-5',
                    data: drugs,
                    cache: true
                })
            });
        })
    </script>
@endsection

@endsection
