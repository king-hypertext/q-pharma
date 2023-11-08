$(document).ready(function () {
    var row = 1;
    var paid_amt = $("#paid_amt")[0],
        change_amt = $("#change_amt")[0],
        di1,
        ip1,
        iq1,
        it1,
        di2,
        ip2,
        iq2,
        it2,
        di3,
        ip3,
        iq3,
        it3,
        di4,
        ip4,
        iq4,
        it4,
        di5,
        ip5,
        iq5,
        it5,
        di6,
        ip6,
        iq6,
        it6,
        di7,
        ip7,
        iq7,
        it7,
        di8,
        ip8,
        iq8,
        it8,
        di9,
        ip9,
        iq9,
        it9,
        di10,
        ip10,
        iq10,
        it10,
        di11,
        ip11,
        iq11,
        it11;
    var data;
    $.ajax({
        method: "GET",
        url: "/drugs",
        success: function (res) {
            data = res;
            // console.log(JSON.stringify(res));
        },
    });
    window.addNewRow = function () {
        var newInvoiceRow = `<tr class="" id="form_row_${row}">
            <td class="col-md-4">
                <div class="form-group">
                    <select required name="medicine[]" id="medicine_${row}" class="form-select medicine">
                        <option value="" selected disabled> Select drug </option>
                    </select>
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
        if (row <= 9) {
            $("tbody#td-parent").append(newInvoiceRow);
            $(function () {
                $(".medicine").select2({
                    theme: "bootstrap-5",
                    data: data,
                });
                di2 = $(".medicine")[0];
                ip2 = $("tr#form_row_1 > td > div > input")[0];
                iq2 = $("tr#form_row_1 > td > div > input")[1];
                it2 = $("tr#form_row_1 > td > div > input")[2];
                iq2 &&
                    (iq2.onkeyup = function (elem) {
                        it2.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip2.value).toFixed(2);
                    });
                di2 &&
                    (di2.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip2.value = price;
                            },
                        });
                    });
                di3 = $(".medicine")[1];
                ip3 = $("tr#form_row_2 > td > div > input")[0];
                iq3 = $("tr#form_row_2 > td > div > input")[1];
                it3 = $("tr#form_row_2 > td > div > input")[2];
                iq3 &&
                    (iq3.onkeyup = function (elem) {
                        it3.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip3.value).toFixed(2);
                    });
                di3 &&
                    (di3.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip3.value = price;
                            },
                        });
                    });
                di4 = $(".medicine")[2];
                ip4 = $("tr#form_row_3 > td > div > input")[0];
                iq4 = $("tr#form_row_3 > td > div > input")[1];
                it4 = $("tr#form_row_3 > td > div > input")[2];
                iq4 &&
                    (iq4.onkeyup = function (elem) {
                        it4.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip4.value).toFixed(2);
                    });
                di4 &&
                    (di4.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip4.value = price;
                            },
                        });
                    });
                di5 = $(".medicine")[3];
                ip5 = $("tr#form_row_4 > td > div > input")[0];
                iq5 = $("tr#form_row_4 > td > div > input")[1];
                it5 = $("tr#form_row_4 > td > div > input")[2];
                iq5 &&
                    (iq5.onkeyup = function (elem) {
                        it5.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip5.value).toFixed(2);
                    });
                di5 &&
                    (di5.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip5.value = price;
                            },
                        });
                    });
                di6 = $(".medicine")[4];
                ip6 = $("tr#form_row_5 > td > div > input")[0];
                iq6 = $("tr#form_row_5 > td > div > input")[1];
                it6 = $("tr#form_row_5 > td > div > input")[2];
                iq6 &&
                    (iq6.onkeyup = function (elem) {
                        it6.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip6.value).toFixed(2);
                    });

                di6 &&
                    (di6.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip6.value = price;
                            },
                        });
                    });
                di7 = $(".medicine")[5];
                ip7 = $("tr#form_row_6 > td > div > input")[0];
                iq7 = $("tr#form_row_6 > td > div > input")[1];
                it7 = $("tr#form_row_6 > td > div > input")[2];
                iq7 &&
                    (iq7.onkeyup = function (elem) {
                        it7.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip7.value).toFixed(2);
                    });
                di7 &&
                    (di7.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip7.value = price;
                            },
                        });
                    });

                di8 = $(".medicine")[6];
                ip8 = $("tr#form_row_7 > td > div > input")[0];
                iq8 = $("tr#form_row_7 > td > div > input")[1];
                it8 = $("tr#form_row_7 > td > div > input")[2];
                iq8 &&
                    (iq8.onkeyup = function (elem) {
                        it8.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip8.value).toFixed(2);
                    });
                di8 &&
                    (di8.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip8.value = price;
                            },
                        });
                    });
                di9 = $(".medicine")[7];
                ip9 = $("tr#form_row_8 > td > div > input")[0];
                iq9 = $("tr#form_row_8 > td > div > input")[1];
                it9 = $("tr#form_row_8 > td > div > input")[2];
                iq9 &&
                    (iq9.onkeyup = function (elem) {
                        it9.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip9.value).toFixed(2);
                    });
                di9 &&
                    (di9.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip9.value = price;
                            },
                        });
                    });
                di10 = $(".medicine")[8];
                ip10 = $("tr#form_row_9 > td > div > input")[0];
                iq10 = $("tr#form_row_9 > td > div > input")[1];
                it10 = $("tr#form_row_9 > td > div > input")[2];
                iq10 &&
                    (iq10.onkeyup = function (elem) {
                        it10.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip10.value).toFixed(2);
                    });
                di10 &&
                    (di10.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip10.value = price;
                            },
                        });
                    });
                di11 = $(".medicine")[9];
                ip11 = $("tr#form_row_10 > td > div > input")[0];
                iq11 = $("tr#form_row_10 > td > div > input")[1];
                it11 = $("tr#form_row_10 > td > div > input")[2];
                iq11 &&
                    (iq11.onkeyup = function (elem) {
                        it11.value =
                            Number.parseInt(elem.target.value).toFixed(2) *
                            Number.parseFloat(ip11.value).toFixed(2);
                    });
                di11 &&
                    (di11.onchange = function (elem) {
                        elem = elem.target.value;
                        $.ajax({
                            method: "GET",
                            url: "/drug-price",
                            data: elem,
                            success: function (price) {
                                ip11.value = price;
                            },
                        });
                    });
            });

            row++;
        } else {
            alert("A maximum of 10 fields are allowed to be added");
        }
    };
    $(document).on("click", "#removeRow", function (ev) {
        ev.preventDefault();
        var currentRow = $(this).parent().parent();
        $(currentRow).remove();
        row--;
    });
    const sumNumbers = (arr) =>
        arr.reduce(
            (totalNumbers, Num) =>
                Number.parseFloat(totalNumbers) + Number.parseFloat(Num),
            0
        );
    $(function () {
        di1 = $("#medicine")[0];
        ip1 = $("tr.form_row > td > div > input")[0];
        iq1 = $("tr.form_row > td > div > input")[1];
        it1 = $("tr.form_row > td > div > input")[2];
        iq1 &&
            (iq1.onkeyup = function (elem) {
                it1.value =
                    Number.parseInt(elem.target.value).toFixed(2) *
                    Number.parseFloat(ip1.value).toFixed(2);
            });
        di1 &&
            (di1.onchange = function (elem) {
                elem = elem.target.value;
                $.ajax({
                    method: "GET",
                    url: "/drug-price",
                    data: elem,
                    success: function (price) {
                        ip1.value = price;
                    },
                });
            });
        $(document).on("keyup", ".qty", function () {
            var $array = [];
            $array.push($("input.total")[0].value);
            $array.push(
                $("input.total_1")[0] ? $("input.total_1")[0].value : 0
            );
            $array.push(
                $("input.total_2")[0] ? $("input.total_2")[0].value : 0
            );
            $array.push(
                $("input.total_3")[0] ? $("input.total_3")[0].value : 0
            );
            $array.push(
                $("input.total_4")[0] ? $("input.total_4")[0].value : 0
            );
            $array.push(
                $("input.total_5")[0] ? $("input.total_5")[0].value : 0
            );
            $array.push(
                $("input.total_6")[0] ? $("input.total_6")[0].value : 0
            );
            $array.push(
                $("input.total_7")[0] ? $("input.total_7")[0].value : 0
            );
            $("#total_amt").val(sumNumbers($array));
        });
    });
    paid_amt &&
        (paid_amt.onkeyup = function (elem) {
            change_amt.value =
                Number.parseFloat(elem.target.value).toFixed(2) -
                Number.parseFloat($("#total_amt")[0].value).toFixed(2);
        });
});
