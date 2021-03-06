<?php
namespace PhpPicPay\Suport\Payload;

use PhpPicPay\Payment\BuyerInterface;
use PhpPicPay\Payment\PayloadInterface;

class Payment implements PayloadInterface
{
    /**
     * @var string
     */
    private $referenceId;

    /**
     * @var string
     */
    private $callbackUrl;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var float
     */
    private $value;

    /**
     * @var BuyerInterface
     */
    private $buyer;

    /**
     * Identificador único do seu pedido. Este campo precisa ter um valor diferente a cada requisição.
     * Este também será o ID exibido ao cliente no momento do pagamento e também será o ID que sua loja
     * utilizará para ver status de pagamento, solicitar cancelamento, etc.
     *
     * @param string $referenceId
     * @return void
     */
    public function setReferenceId(string $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return string
     */
    public function getReferenceId(): string
    {
        return $this->referenceId;
    }

    /**
     * Url para o qual o PicPay irá retornar a situação do pagamento.
     *
     * @param string $callbackUrl
     * @return void
     */
    public function setCallbackUrl(string $callbackUrl): void
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return string
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * Url para a qual o cliente será redirecionado após o pagamento.
     *
     * @param string $returnUrl
     * @return void
     */
    public function setReturnUrl(string $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * Valor do pagamento em reais.
     *
     * @param float $value
     * @return void
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Objeto contendo as informações do comprador.
     *
     * @param \PhpPicPay\Payment\BuyerInterface $buyer
     * @return void
     */
    public function setBuyer(BuyerInterface $buyer): void
    {
        $this->buyer = $buyer;
    }

    /**
     * @return \PhpPicPay\Payment\BuyerInterface
     */
    public function getBuyer(): BuyerInterface
    {
        return $this->buyer;
    }
}