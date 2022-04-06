  /*
const paymentForm = document.getElementById('paystack');
	paymentForm.addEventListener("submit", pay, false);

	
	function pay() {

  var handler = PaystackPop.setup({
    key: 'pk_test_956779cb36fc5af80f619243eac1c0b5c0256904',
    email: document.getElementById("email").value,
    amount: document.getElementById("total").value * 100,
    currency: 'GHS',
    metadata: {
       custom_fields: [
          {
              display_name: "Mobile Number",
              variable_name: "mobile_number",
              value: "+2338012345678"
          }
       ]
    },
    callback: function(response){
        alert('success. transaction ref is ' + response.reference);

    },
    onClose: function(){
        alert('window closed');
    }
  });
  handler.openIframe();


  }
  
  */



 const paymentForm = document.getElementById('paystack');
 paymentForm.addEventListener("submit", pay, false);

 function pay() {

   let handler = PaystackPop.setup({
    key: 'pk_test_956779cb36fc5af80f619243eac1c0b5c0256904',
    email: document.getElementById("email").value,
    amount: document.getElementById("total").value * 100,
    currency: 'GHS',
     onClose: function(){
     alert('Window closed.');
     },
     callback: function(response){
     
    
        $.ajax({
         url: "./orders.php", 
         type:"get",
         data:{'email':document.getElementById("email").value, 'amount':document.getElementById("total").value * 100, 'reference':response.reference},
         success: function(response){
           alert(response)
         },
         error: function(error){
           alert(error)
         }
       });

     }
   });
   handler.openIframe();
 }
 