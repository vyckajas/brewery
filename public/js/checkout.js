/**
 * Created by macbook on 20/05/2017.
 */
Stripe.setPublishableKey('pk_test_rV8wBCKP3qNGzf0u1lFWSPDf');

var $form = $('#checkout-form');

$form.submit(function (event) {
    $('charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('charge-error').removeClass('hidden');
        $('charge-error').text(response.error.massage);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        // Insert the token into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        // Submit the form:
        $form.get(0).submit();
    }
}