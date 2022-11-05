$(document).ready(function(){
	getCustomerOrders();


	function getCustomerOrders(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){

						customerOrderHTML +='<tr>'+
								              '<td>#</th>'+
								              '<td>'+ value.order_id +'</td>'+
								              '<td>'+ value.product_id +'</td>'+
								              '<td>'+ value.product_title +'</td>'+
								              '<td>'+ value.qty +'</td>'+
								              '<td>'+ value.trx_id +'</td>'+
								              '<td>'+ value.p_status +'</td>'+
								            '</tr>';

					});

					$("#customer_order_list").html(customerOrderHTML);

				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}

			}
		})
		
	}


});