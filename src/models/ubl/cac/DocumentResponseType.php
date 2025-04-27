<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;

class DocumentResponseType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\Response
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\Response")
     * @JMS\Expose
     * @JMS\SerializedName("Response")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResponse", setter="setResponse")
     */
    private $response;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\DocumentReference>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\IssuerParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\IssuerParty")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssuerParty", setter="setIssuerParty")
     */
    private $issuerParty;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\RecipientParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\RecipientParty")
     * @JMS\Expose
     * @JMS\SerializedName("RecipientParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRecipientParty", setter="setRecipientParty")
     */
    private $recipientParty;

    /**
     * @var array<\horstoeko\invoicesuite\models\ubl\cac\LineResponse>
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\models\ubl\cac\LineResponse>")
     * @JMS\Expose
     * @JMS\SerializedName("LineResponse")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="LineResponse", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getLineResponse", setter="setLineResponse")
     */
    private $lineResponse;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Response|null
     */
    public function getResponse(): ?Response
    {
        return $this->response;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\Response
     */
    public function getResponseWithCreate(): Response
    {
        $this->response = is_null($this->response) ? new Response() : $this->response;

        return $this->response;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\Response $response
     * @return self
     */
    public function setResponse(Response $response): self
    {
        $this->response = $response;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\DocumentReference> $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference): self
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDocumentReference(): self
    {
        $this->documentReference = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DocumentReference $documentReference
     * @return self
     */
    public function addToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\DocumentReference $documentReference
     * @return self
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\IssuerParty|null
     */
    public function getIssuerParty(): ?IssuerParty
    {
        return $this->issuerParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\IssuerParty
     */
    public function getIssuerPartyWithCreate(): IssuerParty
    {
        $this->issuerParty = is_null($this->issuerParty) ? new IssuerParty() : $this->issuerParty;

        return $this->issuerParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(IssuerParty $issuerParty): self
    {
        $this->issuerParty = $issuerParty;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RecipientParty|null
     */
    public function getRecipientParty(): ?RecipientParty
    {
        return $this->recipientParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\RecipientParty
     */
    public function getRecipientPartyWithCreate(): RecipientParty
    {
        $this->recipientParty = is_null($this->recipientParty) ? new RecipientParty() : $this->recipientParty;

        return $this->recipientParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\RecipientParty $recipientParty
     * @return self
     */
    public function setRecipientParty(RecipientParty $recipientParty): self
    {
        $this->recipientParty = $recipientParty;

        return $this;
    }

    /**
     * @return array<\horstoeko\invoicesuite\models\ubl\cac\LineResponse>|null
     */
    public function getLineResponse(): ?array
    {
        return $this->lineResponse;
    }

    /**
     * @param array<\horstoeko\invoicesuite\models\ubl\cac\LineResponse> $lineResponse
     * @return self
     */
    public function setLineResponse(array $lineResponse): self
    {
        $this->lineResponse = $lineResponse;

        return $this;
    }

    /**
     * @return self
     */
    public function clearLineResponse(): self
    {
        $this->lineResponse = [];

        return $this;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\LineResponse $lineResponse
     * @return self
     */
    public function addToLineResponse(LineResponse $lineResponse): self
    {
        $this->lineResponse[] = $lineResponse;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\LineResponse
     */
    public function addToLineResponseWithCreate(): LineResponse
    {
        $this->addTolineResponse($lineResponse = new LineResponse());

        return $lineResponse;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\LineResponse $lineResponse
     * @return self
     */
    public function addOnceToLineResponse(LineResponse $lineResponse): self
    {
        $this->lineResponse[0] = $lineResponse;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\LineResponse
     */
    public function addOnceToLineResponseWithCreate(): LineResponse
    {
        if ($this->lineResponse === []) {
            $this->addOnceTolineResponse(new LineResponse());
        }

        return $this->lineResponse[0];
    }
}
