<div class="modal fade" id="new-invoice" data-bs-keyboard="false" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog {{-- modal-dialog-scrollable --}} modal-xl" role="document">
        <div class="modal-content">
            <div class="divider my-0">
                <div class="divider-text">
                    <h5 class="h3 modal-title text-capitalize" id="modalScrollableTitle">new invoice</h5>
                </div>
            </div>
            <form id="form-invoice" action="{{ route('invoice.add') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="d-flex flex-row">
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
                                <input required name="invoiceDate" type="date"
                                    value="@php echo Date('Y-m-d') @endphp" min="@php echo Date('Y-m-d') @endphp"
                                    class="form-control rounded-0" id="invoiceDate" placeholder="Buyer/Customer Name"
                                    aria-describedby="buyerHelp">
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
                    <div class="table-responsive text-nowrap" style="width: 100%">
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
                                        <div class="form-group ui-widget">
                                            {{-- <select required name="medicine[]" id="medicine" class="form-select">
                                                <option value="" selected disabled>Select drug</option>
                                            </select> --}}
                                            <input type="text" name="medicine[]" id="medicine"
                                                class="form-control medicine" onfocus="this.type='search'" />
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="form-group">
                                            <input readonly type="text" name="price[]" type="text"
                                                onfocus="this.type='number'" value="0" id="price"
                                                class="form-control" value="0" />
                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" name="quantity[]" onfocus="this.type='number'"
                                                id="qty" class="form-control qty" />
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="form-group">
                                            <input readonly type="text" value="0" name="total[]"
                                                id="total" class="form-control total" />
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <div class="d-flex justify-content-center">
                        <div class="form-group me-2">
                            <label class="fw-semibold text-dark mb-1" for="paid_amt">Amount Paying:</label>
                            <input type="text" value="" name="paid_amt" id="paid_amt"
                                class="form-control" />
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
                    <div class="d-flex flex-start mt-3">
                        <button type="button" onclick="addNewRow()" class="btn btn-warning add-row"><i
                                class="bx bx-plus"></i>
                            Add Row </button>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save Invoice</button>
                    </div>
                    {{-- <button type="button" class="btn btn-success">Save and Print</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>
@if (session('invoice'))
    @section('js')
        <script type="text/javascript">
            alert('{{ session('invoice') }}');
            /* const showSuccessAlert = Swal.mixin({
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
            }); */
            if (window.confirm("Click Okay to print receipt")) {
                window.location.href = '/print-invoice?'
            }
        </script>
    @endsection
@endif
@section('js')
    <script> /* 
        $('.medicine').autocomplete({
            source: "/drugs",
            minLength: 2,
        }); */ 
    </script>
    <script type="text/javascript" src="{{ url('assets/js/misc/invoice.js') }}"></script>
@endsection
