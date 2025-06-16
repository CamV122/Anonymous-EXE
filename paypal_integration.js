paypal.Buttons({
  createOrder: function(data, actions) {
    return actions.order.create({ purchase_units: [{ amount: { value: '19.99' } }] });
  },
  onApprove: function(data, actions) {
    return actions.order.capture().then(function(details) {
      alert("Purchase successful!");
    });
  }
}).render("#paypal-button-container");
