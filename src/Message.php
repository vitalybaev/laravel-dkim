<?php

namespace Vitalybaev\LaravelDkim;

use Swift_Signers_DKIMSigner;

class Message extends \Illuminate\Mail\Message
{
    /**
     * @param $selector
     * @param $domain
     * @param $privateKey
     *
     * @return $this
     */
    public function attachDkim($selector, $domain, $privateKey)
    {
        $signer = new Swift_Signers_DKIMSigner($privateKey, $domain, $selector);
        $this->swift->attachSigner($signer);

        return $this;
    }
}