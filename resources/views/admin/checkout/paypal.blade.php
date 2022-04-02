<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

    paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AfU31rIKl-d_vy18bxiG38l6PyF6IVYSpO-ttq9itQODrURnGMaHTCq1DUJsVF8CthF0Nntt_symQy4O',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        var ajaxFunc = $.ajax({
            method: 'POST',
            url: '/admin/checkout/total',
            dataType: "json",
            async: !1,
            error: function() {
                alert("Error occured")
            }
        });
        
        var dataCart = JSON.parse(ajaxFunc.responseText);

        if($('#admin_customer_id').val() == "") alert('Please enter customer id');
        else return actions.payment.create({
                transactions: [{
                    amount: {
                        total: dataCart.total,
                        currency: 'USD'
                    }
                }]
        })
            
    },
        

    // Execute the payment
    onAuthorize: function(data, actions) {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
            method: 'POST',
            url: '/admin/checkout/completed/1/'+data.paymentID,
            error: function(e){
                alert('Lỗi! Xin vui lòng thử lại');
            }
        })

        return actions.payment.execute().then(function() {
            // Show a confirmation message to the buyer
            window.alert('Thank you for your purchase! Your receiption ID is '+data.paymentID);
        });
    }
  }, '#paypal-button');
</script>