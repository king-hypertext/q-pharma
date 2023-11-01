$(document).ready(function () {
    var row = 1;
    var paid_amt = $('#paid_amt')[0],
        change_amt = $('#change_amt')[0],
        drug_input_1,
        input_row_price_1,
        input_row_qty_1,
        input_row_total_1,
        drug_input_2,
        input_row_price_2,
        input_row_qty_2,
        input_row_total_2,
        drug_input_3,
        input_row_price_3,
        input_row_qty_3,
        input_row_total_3,
        drug_input_4,
        input_row_price_4,
        input_row_qty_4,
        input_row_total_4,
        drug_input_5,
        input_row_price_5,
        input_row_qty_5,
        input_row_total_5,
        drug_input_6,
        input_row_price_6,
        input_row_qty_6,
        input_row_total_6,
        drug_input_7,
        input_row_price_7,
        input_row_qty_7,
        input_row_total_7;

    var $drug_lists;
    $.ajax({
        method: "GET",
        url: "/drugs",
        success: function (res) {
            $drug_lists = res;
        }
    })
    window.addNewRow = function () {
        var newInvoiceRow =
            `<tr class="" id="form_row_${row}">
            <td class="col-md-4">
                <div class="form-group ui-widget">
                    <input type="text" name="medicine[]" id="medicine_${row}" class="form-control medicine" onfocus="this.type='search'" />
                </div>
            </td>
            <td class="col-md-3">
                <div class="form-group">
                    <input readonly type="text" name="price[]" value="0" id="price_${row}" onfocus="this.type='number'" class="form-control" value="0"/>
                </div>
            </td>
            <td class="col-md-2">
                <div class="form-group">
                    <input type="text" name="quantity[]" id="qty_${row}" onfocus="this.type='number'" class="form-control qty" />
                </div>
            </td>
            <td class="col-md-3">
                <div class="form-group">
                    <input type="text" readonly value="0" name="total[]" id="total_${row}" class="form-control total_${row}" />
                </div>
                <td>
                    <button type="button"  id="removeRow" title="Click to remove row"
                    style="width: 35px;height:35px;font-weight: 900;padding: 0;font-size: 26px"
                    class="btn text-danger">
                    &times;
                    </button>
                </td>
            </td>
        </tr>`;
        if (row <= 6) {
            $('tbody#td-parent').append(newInvoiceRow)
            $(function () {
                $('input.medicine').autocomplete({
                    source: $drug_lists,
                    minLength: 1,
                    // delay: 0,
                });
                drug_input_2 = $('tr#form_row_1 > td > div > input')[0];
                input_row_price_2 = $('tr#form_row_1 > td > div > input')[1];
                input_row_qty_2 = $('tr#form_row_1 > td > div > input')[2];
                input_row_total_2 = $('tr#form_row_1 > td > div > input')[3];
                input_row_qty_2 && (input_row_qty_2.onkeyup = function (elem) {
                    input_row_total_2.value = Number.parseInt(elem.target.value).toFixed(2) * Number.parseFloat(input_row_price_2.value).toFixed(2);
                });
                drug_input_2 && (
                    drug_input_2.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: 'GET',
                            url: "drug-price",
                            data: elem,
                            success: function (price) {
                                input_row_price_2.value = price;
                            }
                        })
                    });
                drug_input_3 = $('tr#form_row_2 > td > div > input')[0];
                input_row_price_3 = $('tr#form_row_2 > td > div > input')[1];
                input_row_qty_3 = $('tr#form_row_2 > td > div > input')[2];
                input_row_total_3 = $('tr#form_row_2 > td > div > input')[3];
                input_row_qty_3 && (input_row_qty_3.onkeyup = function (elem) {
                    input_row_total_3.value = Number.parseInt(elem.target.value).toFixed(2) * Number.parseFloat(input_row_price_3.value).toFixed(2);
                });
                drug_input_3 && (
                    drug_input_3.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: 'GET',
                            url: "drug-price",
                            data: elem,
                            success: function (price) {
                                input_row_price_3.value = price;
                            }
                        })
                    }
                )
                drug_input_4 = $('tr#form_row_3 > td > div > input')[0];
                input_row_price_4 = $('tr#form_row_3 > td > div > input')[1];
                input_row_qty_4 = $('tr#form_row_3 > td > div > input')[2];
                input_row_total_4 = $('tr#form_row_3 > td > div > input')[3];
                input_row_qty_4 && (input_row_qty_4.onkeyup = function (elem) {
                    input_row_total_4.value = Number.parseInt(elem.target.value).toFixed(2) * Number.parseFloat(input_row_price_4.value).toFixed(2);
                });
                drug_input_4 && (drug_input_4.onchange = function (elem) {
                    elem = elem.target.value;
                    $.ajax({
                        method: 'GET',
                        url: "drug-price",
                        data: elem,
                        success: function (price) {
                            input_row_price_4.value = price;
                        }
                    })
                });
                drug_input_5 = $('tr#form_row_4 > td > div > input')[0];
                input_row_price_5 = $('tr#form_row_4 > td > div > input')[1];
                input_row_qty_5 = $('tr#form_row_4 > td > div > input')[2];
                input_row_total_5 = $('tr#form_row_4 > td > div > input')[3];
                input_row_qty_5 && (input_row_qty_5.onkeyup = function (elem) {
                    input_row_total_5.value = Number.parseInt(elem.target.value).toFixed(2) * Number.parseFloat(input_row_price_5.value).toFixed(2);
                });
                drug_input_5 && (drug_input_5.onchange = function (elem) {
                    elem = elem.target.value;
                    $.ajax({
                        method: 'GET',
                        url: "drug-price",
                        data: elem,
                        success: function (price) {
                            input_row_price_5.value = price;
                        }
                    })
                });
                drug_input_6 = $('tr#form_row_5 > td > div > input')[0];
                input_row_price_6 = $('tr#form_row_5 > td > div > input')[1];
                input_row_qty_6 = $('tr#form_row_5 > td > div > input')[2];
                input_row_total_6 = $('tr#form_row_5 > td > div > input')[3];
                input_row_qty_6 && (input_row_qty_6.onkeyup = function (elem) {
                    input_row_total_6.value = Number.parseInt(elem.target.value).toFixed(2) * Number.parseFloat(input_row_price_6.value).toFixed(2);
                });

                drug_input_6 && (
                    drug_input_6.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: 'GET',
                            url: "drug-price",
                            data: elem,
                            success: function (price) {
                                input_row_price_6.value = price;
                            }
                        })
                    }
                );
                drug_input_7 = $('tr#form_row_6 > td > div > input')[0];
                input_row_price_7 = $('tr#form_row_6 > td > div > input')[1];
                input_row_qty_7 = $('tr#form_row_6 > td > div > input')[2];
                input_row_total_7 = $('tr#form_row_6 > td > div > input')[3];
                input_row_qty_7 && (input_row_qty_7.onkeyup = function (elem) {
                    input_row_total_7.value = Number.parseInt(elem.target.value).toFixed(2) * Number.parseFloat(input_row_price_7.value).toFixed(2);
                });
                drug_input_7 && (drug_input_7.onchange = function (elem) {
                    elem = elem.target.value;
                    $.ajax({
                        method: 'GET',
                        url: "drug-price",
                        data: elem,
                        success: function (price) {
                            input_row_price_7.value = price;
                        }
                    })
                });

            });
            row++;
        } else {
            alert('A maximum of 6 fields are allowed to be added')
        }
    }
    $(document).on('click', '#removeRow', function (ev) {
        ev.preventDefault();
        var currentRow = $(this).parent().parent();
        $(currentRow).remove();
        row--;
    })
    const sumNumbers = arr => arr.reduce((totalNumbers, Num) => Number.parseFloat(totalNumbers) + Number.parseFloat(Num), 0)
    $(function () {
        drug_input_1 = $('tr.form_row > td > div > input')[0];
        input_row_price_1 = $('tr.form_row > td > div > input')[1];
        input_row_qty_1 = $('tr.form_row > td > div > input')[2];
        input_row_total_1 = $('tr.form_row > td > div > input')[3];
        input_row_qty_1.onkeyup = function (elem) {
            input_row_total_1.value = Number.parseInt(elem.target.value).toFixed(2) * Number.parseFloat(input_row_price_1.value).toFixed(2);
        }
        drug_input_1.onchange = function (elem) {
            elem = elem.target.value;
            $.ajax({
                method: 'GET',
                url: "drug-price",
                data: elem,
                success: function (price) {
                    input_row_price_1.value = price;
                }
            })
        }
        $(document).on('keyup', '.qty', function () {
            var $array = [];
            $array.push($('input.total')[0].value);
            $array.push($('input.total_1')[0] ? $('input.total_1')[0].value : 0);
            $array.push($('input.total_2')[0] ? $('input.total_2')[0].value : 0);
            $array.push($('input.total_3')[0] ? $('input.total_3')[0].value : 0);
            $array.push($('input.total_4')[0] ? $('input.total_4')[0].value : 0);
            $array.push($('input.total_5')[0] ? $('input.total_5')[0].value : 0);
            $array.push($('input.total_6')[0] ? $('input.total_6')[0].value : 0);
            $array.push($('input.total_7')[0] ? $('input.total_7')[0].value : 0);
            $('#total_amt').val(sumNumbers($array));
        })
    })
    paid_amt.onkeyup = function (elem) {
        change_amt.value = Number.parseFloat(elem.target.value).toFixed(2) - Number.parseFloat($('#total_amt')[0].value).toFixed(2);
    }
});
