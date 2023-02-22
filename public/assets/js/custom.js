// 01 Styling details (po breakdown)
var rowCount = 1;
function addMorepo(e) {
    rowCount++;
    var recRow =
        '<tr id="rowCount' +
        rowCount +
        '"><td><input type="text" class="form-control me-3" placeholder="Please type number of po..." autofocus name="po_number[]" value=""></td><td><input type="text" class="form-control me-3" placeholder="Please type po qty..." autofocus name="po_qty[]" id="po_qty' +
        rowCount +
        '" onkeyup="total_qty()" value=""></td><td><div class="input_icon"> <input type="date" class="form-control me-3" placeholder="DD/MM/YYYY" autofocus name="po_delivery_date[]" value="" id=""></div></td><td class="text-center"><button type="button" onclick="removeRow(' +
        rowCount +
        ')" class="btn btn-danger btn-sm"><i class="fas fa-minus"></i></button></td></tr>';

    jQuery("#addMoreRows").append(recRow);
}

function removeRow(removeNum) {
    var conf = confirm("Are you confirm to delete this record?");
    if (conf) {
        $("#rowCount" + removeNum).remove();
        rowCount--;
    }
}

/* 02 Lap Dip Start*/
var lapDiprowCount = 1;

function labDipaddMoreRows(frm) {
    lapDiprowCount++;
    var lapDiprecRow =
        '<tr id="lapDiprowCount' +
        lapDiprowCount +
        '"><td><div class="form-group"><input type="text" class="form-control" placeholder="Color Name" autofocus name="labdipcolor[]"  value=""> </div> </td><td><div class="form-group"><input  type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus name="labdippldate[]"  value=""></div> </td><td> <div class="form-group"> <input type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus disabled="disabled" name="labdipacdate[]" value=""> </div> </td> <td> <div class="form-group"> <select style="background: #ffbf00;" class="form-select" name="labdipstatus[]" id="lapdipcolorChange" aria-label="Default select example" onChange="labdipcolorchange()"> <option value="1">Pending</option> <option value="2">Approved</option> </select> </div></td> <td><div class="form-group"><input  type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus name="labdipapdate[]" disabled id="approved_date" value=""> </div></td><td> <input  type="text" class="form-control" placeholder="Reference" autofocus name="reference[]"  value=""> </td> <td> <div class="form-group">  <input  type="text" class="form-control" placeholder="Appshade" autofocus  name="appshade[]"  value=""> </div> </td> <td> <div class="form-group"><textarea class="form-control" placeholder="Remarks" name="labdipremarks[]" rows="1" id=""></textarea> </div> </td> <td class="text-center"><button type="button" onclick="labDipremoveRow(' +
        lapDiprowCount +
        ')" class="btn btn-danger btn-sm"><i class="fas fa-minus"></i></button></td> </tr>';

    jQuery("#labDipaddedRows").append(lapDiprecRow);
}

function labDipremoveRow(removeNum) {
    var conf = confirm("Are you confirm to delete this record?");
    if (conf) {
        $("#lapDiprowCount" + removeNum).remove();
        lapDiprowCount--;
    }
}
/*Lap Dip End*/

// Accessories Approval Status

var acc_rowCount = 1;

function accessoriesAddMoreRows(e) {
    acc_rowCount++;
    var acc_recRow =
        '<tr id="acc_rowCount' +
        acc_rowCount +
        '"><td><div class="form-group"><input type="text" class="form-control" placeholder="Accessories Name" autofocus name="accessories_name[]"  value=""></div></td><td> <div class="form-group"><select style="background: #ffbf00;" class="form-select" name="accessories_status[]" id="lapdipcolorChange" aria-label="Default select example"  onChange="accessoriesColorChange()"> <option value="1">Pending</option><option value="2">Approved</option> </select> </div> </td><td> <div class="form-group"> <input  type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus  name="accessories_approved_date[]" disabled id="accessories_approved_date" value=""> </div> </td><td> <div class="form-group">  <textarea class="form-control" placeholder="Remarks" name="accessories_remarks[]" rows="1" cols="" id=""></textarea> </div> </td> <td class="text-center"><button type="button" onclick="acc_removeRow(' +
        acc_rowCount +
        ')" class="btn btn-danger btn-sm"><i class="fas fa-minus"></i></button></td></tr>';
    jQuery("#accessoriesAddRows").append(acc_recRow);
}
function acc_removeRow(removeNum) {
    var conf = confirm("Are you confirm to delete this record?");
    //alert(conf);
    if (conf) {
        jQuery("#acc_rowCount" + removeNum).remove();
    }
}
// Style Wise Data Change (Quantity)
$(document).ready(function () {
    $("#style_details_id").change(function () {
        var style_qty = $(this).val();
        $("#style_quantity").val(style_qty);
    });
});
