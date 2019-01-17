<?php

namespace Vitalybaev\LaravelDkim;

use Swift_Signers_DKIMSigner;

class Message extends \Illuminate\Mail\Message
{
    /**
     * @param $selector
     * @param $domain
     * @param $privateKey
     * @param $passphrase
     *
     * @return $this
     */
    public function attachDkim($selector, $domain, $privateKey, $passphrase = '')
    {
        $signer = new Swift_Signers_DKIMSigner($privateKey, $domain, $selector, $passphrase);
        $signer->setHashAlgorithm(config('mail.dkim_algo', 'rsa-sha256'));
        if (config('mail.dkim_identity')) {
            $signer->setSignerIdentity(config('mail.dkim_identity'));
        }
        $this->swift->attachSigner($signer);

        return $this;
    }
}