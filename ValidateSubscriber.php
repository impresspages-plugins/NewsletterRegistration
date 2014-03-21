<?php
namespace Plugin\NewsletterRegistration;

class ValidateSubscriber extends \Ip\Form\Validator {

    public function getError($values, $valueKey, $environment) {

        if (empty($values[$valueKey])) {
            return false;
        }
        $value = $values[$valueKey];

        if (Model::isRegistered($value)){
            $errorText = __('E-mail already subscribed.', 'NewsletterRegistration');
            return $errorText;
        } else {
            return false;
        }
    }

}