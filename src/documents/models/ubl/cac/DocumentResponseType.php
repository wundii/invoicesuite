<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class DocumentResponseType
{
    use HandlesObjectFlags;

    /**
     * @var Response|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Response")
     * @JMS\Expose
     * @JMS\SerializedName("Response")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResponse", setter="setResponse")
     */
    private $response;

    /**
     * @var array<DocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var IssuerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\IssuerParty")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssuerParty", setter="setIssuerParty")
     */
    private $issuerParty;

    /**
     * @var RecipientParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RecipientParty")
     * @JMS\Expose
     * @JMS\SerializedName("RecipientParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRecipientParty", setter="setRecipientParty")
     */
    private $recipientParty;

    /**
     * @var array<LineResponse>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\LineResponse>")
     * @JMS\Expose
     * @JMS\SerializedName("LineResponse")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="LineResponse", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getLineResponse", setter="setLineResponse")
     */
    private $lineResponse;

    /**
     * @return Response|null
     */
    public function getResponse(): ?Response
    {
        return $this->response;
    }

    /**
     * @return Response
     */
    public function getResponseWithCreate(): Response
    {
        $this->response = is_null($this->response) ? new Response() : $this->response;

        return $this->response;
    }

    /**
     * @param Response|null $response
     * @return self
     */
    public function setResponse(?Response $response = null): self
    {
        $this->response = $response;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetResponse(): self
    {
        $this->response = null;

        return $this;
    }

    /**
     * @return array<DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<DocumentReference>|null $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null): self
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentReference(): self
    {
        $this->documentReference = null;

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
     * @return DocumentReference|null
     */
    public function firstDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = reset($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @return DocumentReference|null
     */
    public function lastDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = end($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addToDocumentReference(DocumentReference $documentReference): self
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return self
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): self
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return IssuerParty|null
     */
    public function getIssuerParty(): ?IssuerParty
    {
        return $this->issuerParty;
    }

    /**
     * @return IssuerParty
     */
    public function getIssuerPartyWithCreate(): IssuerParty
    {
        $this->issuerParty = is_null($this->issuerParty) ? new IssuerParty() : $this->issuerParty;

        return $this->issuerParty;
    }

    /**
     * @param IssuerParty|null $issuerParty
     * @return self
     */
    public function setIssuerParty(?IssuerParty $issuerParty = null): self
    {
        $this->issuerParty = $issuerParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetIssuerParty(): self
    {
        $this->issuerParty = null;

        return $this;
    }

    /**
     * @return RecipientParty|null
     */
    public function getRecipientParty(): ?RecipientParty
    {
        return $this->recipientParty;
    }

    /**
     * @return RecipientParty
     */
    public function getRecipientPartyWithCreate(): RecipientParty
    {
        $this->recipientParty = is_null($this->recipientParty) ? new RecipientParty() : $this->recipientParty;

        return $this->recipientParty;
    }

    /**
     * @param RecipientParty|null $recipientParty
     * @return self
     */
    public function setRecipientParty(?RecipientParty $recipientParty = null): self
    {
        $this->recipientParty = $recipientParty;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetRecipientParty(): self
    {
        $this->recipientParty = null;

        return $this;
    }

    /**
     * @return array<LineResponse>|null
     */
    public function getLineResponse(): ?array
    {
        return $this->lineResponse;
    }

    /**
     * @param array<LineResponse>|null $lineResponse
     * @return self
     */
    public function setLineResponse(?array $lineResponse = null): self
    {
        $this->lineResponse = $lineResponse;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetLineResponse(): self
    {
        $this->lineResponse = null;

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
     * @return LineResponse|null
     */
    public function firstLineResponse(): ?LineResponse
    {
        $lineResponse = $this->lineResponse ?? [];
        $lineResponse = reset($lineResponse);

        if ($lineResponse === false) {
            return null;
        }

        return $lineResponse;
    }

    /**
     * @return LineResponse|null
     */
    public function lastLineResponse(): ?LineResponse
    {
        $lineResponse = $this->lineResponse ?? [];
        $lineResponse = end($lineResponse);

        if ($lineResponse === false) {
            return null;
        }

        return $lineResponse;
    }

    /**
     * @param LineResponse $lineResponse
     * @return self
     */
    public function addToLineResponse(LineResponse $lineResponse): self
    {
        $this->lineResponse[] = $lineResponse;

        return $this;
    }

    /**
     * @return LineResponse
     */
    public function addToLineResponseWithCreate(): LineResponse
    {
        $this->addTolineResponse($lineResponse = new LineResponse());

        return $lineResponse;
    }

    /**
     * @param LineResponse $lineResponse
     * @return self
     */
    public function addOnceToLineResponse(LineResponse $lineResponse): self
    {
        if (!is_array($this->lineResponse)) {
            $this->lineResponse = [];
        }

        $this->lineResponse[0] = $lineResponse;

        return $this;
    }

    /**
     * @return LineResponse
     */
    public function addOnceToLineResponseWithCreate(): LineResponse
    {
        if (!is_array($this->lineResponse)) {
            $this->lineResponse = [];
        }

        if ($this->lineResponse === []) {
            $this->addOnceTolineResponse(new LineResponse());
        }

        return $this->lineResponse[0];
    }
}
