function pay(){
  var handler = PaystackPop.setup({
    key: 'pk_test_956779cb36fc5af80f619243eac1c0b5c0256904',
    email: document.getElementById("email").value,
    amount: document.getElementById("total").value * 100,
    currency: 'GHS',
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    metadata: {
       custom_fields: [
          {
              display_name: "Mobile Number",
              variable_name: "mobile_number",
              value: "+2348012345678"
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