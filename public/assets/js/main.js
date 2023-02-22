$(function () {
    $(".calendar").datepicker({
        dateFormat: "dd/mm/yy",
    });
});

$("#datepicker").datepicker({
    uiLibrary: "bootstrap5",
});
var rowCount = 1;

function total_qty() {
    var tqty = 0;
    for (var i = 1; i <= rowCount; i++) {
        tqty = tqty + parseFloat($("#po_qty" + i).val());
        //alert(tqty);
    }
    document.getElementById("total_po_qty1").value = tqty;
    //$('#totpoqty').html(tqty);
}
function check_po_qty() {
    var styleqty = document.getElementById("style_total_qty").value;
    var totpoeqty = document.getElementById("total_po_qty1").value;
    var totpono = document.getElementById("number_of_po").value;
    var tot_po = rowCount;
    //alert(styleqty);
    if (styleqty == totpoeqty) {
        if (totpono == tot_po) {
            //return true;
        } else {
            alert("P.O. Breakdown is not complete!");
            return false;
        }
        //$('#resres').html(res);
    } else {
        alert("Style QTY and P.O. QTY is not same.");
        return false;
    }
    //return true;
}

/* 02 Lap Dip Start*/
// var lapDiprowCount = 1;

// function labDipaddMoreRows(frm) {
//     lapDiprowCount++;
//     var lapDiprecRow =
//         '<tr id="lapDiprowCount' +
//         lapDiprowCount +
//         '"><td><input type="text" class="form-control"placeholder="Please type number of po..." autofocus name="labdipcolor[]"  value=""> </td> <td><div class="input_icon"><input style="width: 110px" type="text" class="form-control plan_date calendar" placeholder="DD/MM/YYYY" autofocus name="labdippldate[]"  value=""><span><i class="fas fa-calendar calendar"></i></span></div></td><td><div class="input_icon"><input style="width: 110px" type="text"class="form-control calendar actual_date" placeholder="DD/MM/YYYY" autofocus disabled name="labdipacdate[]" value=""><span><i class="fas fa-calendar calendar"></i></span></div></td><td><div style="width: 80px" class="form-group"> <select style="background: #ffbf00;" class="form-select" name="labdipstatus[]" id="lapdipcolorChange0' +
//         lapDiprowCount +
//         '"aria-label="Default select example"onChange="labdipcolorchange(0)"><option value="1">Pending</option><option value="2">Approved</option></select></div></td><td> <div class="input_icon"><input style="width: 110px" type="text"class="form-control calendar" placeholder="DD/MM/YYYY" autofocus name="labdipapdate[]" disabled id="approved_date" value=""><span><i class="fas fa-calendar calendar"></i></span></div></td><td><input  type="text" class="form-control"placeholder="Please type number of po..." autofocus name="reference[]"  value=""></td><td><input  type="text" class="form-control"placeholder="Please type number of po..." autofocus name="appshade[]"  value=""> </td><td><textarea class="form-control" name="labdipremarks[]" rows="1"id=""></textarea></td><td> <button class="btn btn-danger btn-sm" onclick="labDipremoveRow(' +
//         lapDiprowCount +
//         ')"><i class="fas fa-minus"></i></button></td></tr>';
//     jQuery("#labDipaddedRows").append(lapDiprecRow);
//     // Date
//     $(".calendar").datepicker({
//         dateFormat: "dd/mm/yy",
//     });
// }

// function labDipremoveRow(removeNum) {
//     var conf = confirm("Are you confirm to delete this record?");
//     //alert(conf);
//     if (conf) {
//         jQuery("#lapDiprowCount" + removeNum).remove();
//     }
// }
/*Lap Dip End*/

/* 06 Accessories Dip Start*/
// var acc_rowCount = 1;

// function acc_addMoreRows(frm) {
//     acc_rowCount++;
//     var acc_recRow =
//         '<tr id="acc_rowCount' +
//         acc_rowCount +
//         '"><td><div class="input_icon"><input type="text" class="form-control" placeholder="Please Type..."autofocus name="acc_name[]" value=""></div></td><td><div class="form-group"><select style="background: #ffbf00;" class="form-select"name="acc_status[]" id="acc_status' +
//         acc_rowCount +
//         '"aria-label="Default select example"onChange="accessoriescolorchange(' +
//         acc_rowCount +
//         ')"><option value="1">Pending</option><option value="2">Approved</option></select></div></td><td><div class="input_icon"><input type="text" class="form-control calendar"placeholder="DD/MM/YYYY" autofocus name="acc_apdate[]" value=""><span><i class="fa-solid fa-calendar-days calendar"></i></span></div></td><td><textarea class="form-control" name="remarks[]" rows="1"id=""></textarea></td><td> <a href="javascript:void(0);" onclick="acc_removeRow(' +
//         acc_rowCount +
//         ');"><i title="Delete" class="fas fa-trash text-lg text-danger"></i></td></tr>';
//     jQuery("#acc_addedRows").append(acc_recRow);
//     // Date
//     $(".calendar").datepicker({
//         dateFormat: "dd/mm/yy",
//     });
// }
// function acc_removeRow(removeNum) {
//     var conf = confirm("Are you confirm to delete this record?");
//     //alert(conf);
//     if (conf) {
//         jQuery("#acc_rowCount" + removeNum).remove();
//     }
// }

// Date
$(".calendar").datepicker({
    dateFormat: "dd/mm/yy",
});

// ----------------------------------------
//   13 Yarn Consumption brackdown
jQuery(document).ready(function ($) {
    var $total = $("#yarn_lbs"),
        $value = $("#yarncons_yarn_grm");
    $value.on("input", function (e) {
        var total = (37.8).toFixed(2);
        $value.each(function (index, elem) {
            if (!Number.isNaN(parseFloat(this.value)))
                total = (parseFloat(this.value) / total).toFixed(2);
        });
        $total.val(total);
    });
});

//13 Total yarn lbs qty
function getYarnLbs(element) {
    let yarn_qty = element.value;
    let combo_qty = document.getElementById("yarn_combo_qty").value;
    let total_lbs = document.getElementById("yarn_lbs").value;
    total_combo_yarn = ((combo_qty / 12) * total_lbs + 0.12).toFixed(2);
    document.getElementById("total_yarn_lbs").value = total_combo_yarn;
}
// 09 accessories name wise order qty
$(document).ready(function () {
    $("#changeData").change(function () {
        var poqty = $(this).val();
        $("#getaccQty").val(poqty);
    });
});
// 09 accessories name wise order qty
$(document).ready(function () {
    $("#changeData9").change(function () {
        var poqty = $(this).val();
        $("#getaccQty9").val(poqty);
    });
});
$(document).ready(function () {
    $("#changeData99").change(function () {
        var poqty = $(this).val();
        $("#getaccQty99").val(poqty);
    });
});
// 10 accessories name wise order qty
$(document).ready(function () {
    $("#changeData10").change(function () {
        var poqty = $(this).val();
        $("#getpoQty10").val(poqty);
    });
});
// 11 accessories name wise order qty
$(document).ready(function () {
    $("#changeData11").change(function () {
        var poqty = $(this).val();
        $("#getpoQty11").val(poqty);
    });
});
// Mohi added 12 po brackdown
$(document).ready(function () {
    $("#changeData12").change(function () {
        var poqty = $(this).val();
        $("#getpoQty12").val(poqty);
    });
});
// Mohi added 13 Yarn Comsumption(poqty)
$(document).ready(function () {
    $("#changeData13").change(function () {
        var poqty = $(this).val();
        $("#getpoQty13").val(poqty);
    });
});
// Mohi added 13 Yarn Comsumption(combo_qty)
$(document).ready(function () {
    $("#changeData14").change(function () {
        var poqty = $(this).val();
        $("#getpoQty14").val(poqty);
    });
});
// Mohi added Yarn Comsumption(combo_qty)
$(document).ready(function () {
    $("#changeData15").change(function () {
        var poqty = $(this).val();
        $("#getpoQty15").val(poqty);
    });
});
// Mohi added Yarn Comsumption(combo_qty)
$(document).ready(function () {
    $("#changeData16").change(function () {
        var poqty = $(this).val();
        $("#getpoQty16").val(poqty);
    });
});
// ----------------------------------------

// Select color change
function labdipcolorchange() {
    var labdipid = document.getElementById("lapdipcolorChange").value;
    //alert(labdipid);
    if (labdipid == 1) {
        document.getElementById("lapdipcolorChange").style.backgroundColor =
            "yellow";
        document.getElementById("lapdipcolorChange").style.color = "black";
    } else {
        document.getElementById("lapdipcolorChange").style.backgroundColor =
            "green";
        document.getElementById("lapdipcolorChange").style.color = "white";
    }
}
// Warning system
// window.onchange = function () {
// 	var day = new Date();
// 	var hr = day.getHours();
// 	let totalHours = 24 * 7;

// 	let planDate = document.getElementById("plan_date").value;
// 	let today =
// 		day.getDate() + "/" + (day.getMonth() + 1) + "/" + day.getFullYear();
// 	let warningDate = Math.abs(today - planDate).toString();
// 	// var diff = Math.abs(date1 - date2);
// 	// if (warningDate <= 7) {
// 	// 	let lab_dip_warning = (document.getElementById(
// 	// 		"lab_dip_warning"
// 	// 	).style.backgroundColor = "red");
// 	// 	alert(warningDate);
// 	// }
// 	//alert(warningDate).toString();
// };

// warning();
// setTimeout(warning, 1000);

// 02 Actual Date disabled to enable system
window.onload = function () {
    var plan_date = document.querySelector(".plan_date");
    var actual_date = document.querySelector(".actual_date");

    var approved = document.querySelector("lapdipcolorChange0");
    var approved_date = document.querySelector("approved_date");
    // 03
    var fitpldate = document.getElementById("fitpldate");
    var fitacdate = document.getElementById("fitacdate");

    var fitstatus10 = document.getElementById("fitstatus10");
    var fitapdate = document.getElementById("fitapdate");
    // 04
    var pp_pldate = document.getElementById("pp_pldate");
    var pp_acdate = document.getElementById("pp_acdate");

    var pp_status10 = document.getElementById("pp_status10");
    var pp_apdate = document.getElementById("pp_apdate");
    // 02
    plan_date.onchange = function () {
        if (this.value != "") {
            // actual_date.disabled = ;
            actual_date.removeAttribute("disabled");
        } else {
            //if there isn't a value
            actual_date.setAttribute("disabled", "");
        }
    };
    approved.oninput = function () {
        if (this.value == "2") {
            approved_date.disabled = false;
        } else {
            //if there isn't a value
            approved_date.disabled = true;
        }
    };
    // 03
    fitpldate.onchange = function () {
        if (this.value != "") {
            fitacdate.disabled = false;
        } else {
            //if there isn't a value
            fitacdate.disabled = true;
        }
    };
    fitstatus10.oninput = function () {
        if (this.value == "2") {
            fitapdate.disabled = false;
        } else {
            //if there isn't a value
            fitapdate.disabled = true;
        }
    };
    // 04
    pp_pldate.onchange = function () {
        if (this.value != "") {
            pp_acdate.disabled = false;
        } else {
            //if there isn't a value
            pp_acdate.disabled = true;
        }
    };
    pp_status10.oninput = function () {
        if (this.value == "2") {
            pp_apdate.disabled = false;
        } else {
            //if there isn't a value
            pp_apdate.disabled = true;
        }
    };
}; //end function
// 05 Checking box showHideRow toggle button
function showHideRow() {
    // print_show
    var print_show = document.getElementById("print_show");
    if (print_show.style.display === "block") {
        print_show.style.display = "none";
    } else {
        print_show.style.display = "block";
    }
}
function showEmbroidary() {
    // embroidery_show
    var embroidery_show = document.getElementById("embroidery_show");
    if (embroidery_show.style.display === "block") {
        embroidery_show.style.display = "none";
    } else {
        embroidery_show.style.display = "block";
    }
}
function showhandEmbroidary() {
    // embroidery_show
    var hand_embroidery_show = document.getElementById("hand_embroidery_show");
    if (hand_embroidery_show.style.display === "block") {
        hand_embroidery_show.style.display = "none";
    } else {
        hand_embroidery_show.style.display = "block";
    }
}
function showEstablishment() {
    // embroidery_show
    var establishment_show = document.getElementById("establishment_show");
    if (establishment_show.style.display === "block") {
        establishment_show.style.display = "none";
    } else {
        establishment_show.style.display = "block";
    }
}
/****************Approved color change start********************/
function labdipcolorchange(e) {
    var labdipid = document.getElementById("lapdipcolorChange" + e).value;
    //alert(labdipid);
    if (labdipid == 1) {
        document.getElementById("lapdipcolorChange" + e).style.backgroundColor =
            "#ffbf00";
        document.getElementById("lapdipcolorChange" + e).style.color = "black";
    } else {
        document.getElementById("lapdipcolorChange" + e).style.backgroundColor =
            "green";
        document.getElementById("lapdipcolorChange" + e).style.color = "white";
    }
}

function fitprotocolorchange(e) {
    var labdipid = document.getElementById("fitstatus1" + e).value;
    //alert(labdipid);
    if (labdipid == 1) {
        document.getElementById("fitstatus1" + e).style.backgroundColor =
            "#ffbf00";
        document.getElementById("fitstatus1" + e).style.color = "black";
    } else {
        document.getElementById("fitstatus1" + e).style.backgroundColor =
            "green";
        document.getElementById("fitstatus1" + e).style.color = "white";
    }
}

function p_p_samplecolorchange(e) {
    var labdipid = document.getElementById("pp_status1" + e).value;
    //alert(labdipid);
    if (labdipid == 1) {
        document.getElementById("pp_status1" + e).style.backgroundColor =
            "#ffbf00";
        document.getElementById("pp_status1" + e).style.color = "black";
    } else {
        document.getElementById("pp_status1" + e).style.backgroundColor =
            "green";
        document.getElementById("pp_status1" + e).style.color = "white";
    }
}

function accessoriescolorchange(e) {
    var labdipid = document.getElementById("acc_status" + e).value;
    //alert(labdipid);
    if (labdipid == 1) {
        document.getElementById("acc_status" + e).style.backgroundColor =
            "#ffbf00";
        document.getElementById("acc_status" + e).style.color = "black";
    } else {
        document.getElementById("acc_status" + e).style.backgroundColor =
            "green";
        document.getElementById("acc_status" + e).style.color = "white";
    }
}
function yarninhousecolorchange(e) {
    var labdipid = document.getElementById("yarn_inhouse_status" + e).value;
    //alert(labdipid);
    if (labdipid == 1) {
        document.getElementById(
            "yarn_inhouse_status" + e
        ).style.backgroundColor = "#ffbf00";
        document.getElementById("yarn_inhouse_status" + e).style.color =
            "black";
    } else {
        document.getElementById(
            "yarn_inhouse_status" + e
        ).style.backgroundColor = "green";
        document.getElementById("yarn_inhouse_status" + e).style.color =
            "white";
    }
}

// Check Inhouse Status Color Change
// 07 Yarn inhouse status color change
// function yarninhousecolorchange() {
// 	let yarnid = document.getElementById("yarn_inhouse_status").value;

// 	if (yarnid == 1) {
// 		document.getElementById("yarn_inhouse_status").style.backgroundColor =
// 			"#ffbf00";
// 		document.getElementById("yarn_inhouse_status").style.color = "black";
// 	} else {
// 		document.getElementById("yarn_inhouse_status").style.backgroundColor =
// 			"green";
// 		document.getElementById("yarn_inhouse_status").style.color = "white";
// 	}
// }
// 08 accessories inhouse status color change
function accessinhousecolorchange() {
    let accessid = document.getElementById("acc_inhouse_status").value;

    if (accessid == 1) {
        document.getElementById("acc_inhouse_status").style.backgroundColor =
            "yellow";
        document.getElementById("acc_inhouse_status").style.color = "black";
    } else {
        document.getElementById("acc_inhouse_status").style.backgroundColor =
            "green";
        document.getElementById("acc_inhouse_status").style.color = "white";
    }
}
// 14 Dyeing inhouse status color change
function dyeinginhousecolorchange() {
    let dyeingid = document.getElementById("dyeing_inhouse_status").value;

    if (dyeingid == 1) {
        document.getElementById("dyeing_inhouse_status").style.backgroundColor =
            "yellow";
        document.getElementById("dyeing_inhouse_status").style.color = "black";
    } else {
        document.getElementById("dyeing_inhouse_status").style.backgroundColor =
            "green";
        document.getElementById("dyeing_inhouse_status").style.color = "white";
    }
}
