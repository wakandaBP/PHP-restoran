var rowCount = "";
var idmen = "";
var param;
var arpes = [];
var nomor;  

$(document).ready(function(){
	$("tbody").on("click","#tambah",(function(){
		var id = $(this).data("id");

		arpes.push(id);
		param = false;
		nomor++;

		tutuptombol(param);
		ambilmenu(id);
	}))

	$("tbody").on("click","#hapus",(function(){
		var id = $(this).data("id");
		arpes.splice(id,1);

		$(this).parents("tr").remove();
		rowCount = $("#pesanan tr").length;

		if (rowCount==1){
			param = true;
			tutuptombol(param);
		}
	}))

	$("input#clear").click(function(){
		nomor = 1;
		$("tbody#pesan").empty();
		param = true;

		tutuptombol(param);
	})

	$("input#order").click(function(){
		simpanpesanan();
		alert("Pesanan diterima!");
	})
})

function tutuptombol(e){
	if (e == true){
		$("input#clear").attr("disabled",true);
		$("input#order").attr("disabled",true);
	} else {
		$("input#clear").attr("disabled",false);
		$("input#order").attr("disabled",false);
	}
}

function ambilmenu(e){
	$.post("pelayan/tambahmenu/"+e,function(data){
	
		var html = "";

		$.each(data,function(index,item){
			html += "<tr>"+
					"<td>"+ item.nama +"</td>"+
					"<td><input hidden type='text' name='idmenu[]' value='"+ item.idmenu + "'>" +
					"<button id='hapus' class='btn btn-danger btn-block' data-id='" + item.idmenu + "'>" +
	                               "Hapus</button></td></tr>";
		})
		$("tbody#pesan").append(html);
	},"json");
}

function simpanpesanan(){
	$.ajax({
		url: "pelayan/simpanmenu",
		type: "POST",
		data: $("form").serialize(),
		dataType: "JSON",
		success: function(data){}
	})
}
