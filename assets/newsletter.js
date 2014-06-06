$('.ipWidget-NewsletterRegistration form').on('ipSubmitResponse', function(e, response) {
    var $this = $(this);
    var $widget = $this.closest('.ipWidget-NewsletterRegistration');

    if (response.status == 'ok') {
        $widget.find('.ipsNewsletterForm').addClass('hidden');
        $widget.find('.ipsThankYou').removeClass('hidden');
    }
});
