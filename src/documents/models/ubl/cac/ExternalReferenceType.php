<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CharacterSetCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DocumentHash;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EncodingCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FileName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FormatCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HashAlgorithmMethod;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MimeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\URI;

class ExternalReferenceType
{
    use HandlesObjectFlags;

    /**
     * @var URI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\URI")
     * @JMS\Expose
     * @JMS\SerializedName("URI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getURI", setter="setURI")
     */
    private $uRI;

    /**
     * @var DocumentHash|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DocumentHash")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentHash")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDocumentHash", setter="setDocumentHash")
     */
    private $documentHash;

    /**
     * @var HashAlgorithmMethod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HashAlgorithmMethod")
     * @JMS\Expose
     * @JMS\SerializedName("HashAlgorithmMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHashAlgorithmMethod", setter="setHashAlgorithmMethod")
     */
    private $hashAlgorithmMethod;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ExpiryDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExpiryDate", setter="setExpiryDate")
     */
    private $expiryDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ExpiryTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExpiryTime", setter="setExpiryTime")
     */
    private $expiryTime;

    /**
     * @var MimeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MimeCode")
     * @JMS\Expose
     * @JMS\SerializedName("MimeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMimeCode", setter="setMimeCode")
     */
    private $mimeCode;

    /**
     * @var FormatCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FormatCode")
     * @JMS\Expose
     * @JMS\SerializedName("FormatCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFormatCode", setter="setFormatCode")
     */
    private $formatCode;

    /**
     * @var EncodingCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EncodingCode")
     * @JMS\Expose
     * @JMS\SerializedName("EncodingCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEncodingCode", setter="setEncodingCode")
     */
    private $encodingCode;

    /**
     * @var CharacterSetCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CharacterSetCode")
     * @JMS\Expose
     * @JMS\SerializedName("CharacterSetCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCharacterSetCode", setter="setCharacterSetCode")
     */
    private $characterSetCode;

    /**
     * @var FileName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FileName")
     * @JMS\Expose
     * @JMS\SerializedName("FileName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFileName", setter="setFileName")
     */
    private $fileName;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @return URI|null
     */
    public function getURI(): ?URI
    {
        return $this->uRI;
    }

    /**
     * @return URI
     */
    public function getURIWithCreate(): URI
    {
        $this->uRI = is_null($this->uRI) ? new URI() : $this->uRI;

        return $this->uRI;
    }

    /**
     * @param URI|null $uRI
     * @return self
     */
    public function setURI(?URI $uRI = null): self
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetURI(): self
    {
        $this->uRI = null;

        return $this;
    }

    /**
     * @return DocumentHash|null
     */
    public function getDocumentHash(): ?DocumentHash
    {
        return $this->documentHash;
    }

    /**
     * @return DocumentHash
     */
    public function getDocumentHashWithCreate(): DocumentHash
    {
        $this->documentHash = is_null($this->documentHash) ? new DocumentHash() : $this->documentHash;

        return $this->documentHash;
    }

    /**
     * @param DocumentHash|null $documentHash
     * @return self
     */
    public function setDocumentHash(?DocumentHash $documentHash = null): self
    {
        $this->documentHash = $documentHash;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDocumentHash(): self
    {
        $this->documentHash = null;

        return $this;
    }

    /**
     * @return HashAlgorithmMethod|null
     */
    public function getHashAlgorithmMethod(): ?HashAlgorithmMethod
    {
        return $this->hashAlgorithmMethod;
    }

    /**
     * @return HashAlgorithmMethod
     */
    public function getHashAlgorithmMethodWithCreate(): HashAlgorithmMethod
    {
        $this->hashAlgorithmMethod = is_null($this->hashAlgorithmMethod) ? new HashAlgorithmMethod() : $this->hashAlgorithmMethod;

        return $this->hashAlgorithmMethod;
    }

    /**
     * @param HashAlgorithmMethod|null $hashAlgorithmMethod
     * @return self
     */
    public function setHashAlgorithmMethod(?HashAlgorithmMethod $hashAlgorithmMethod = null): self
    {
        $this->hashAlgorithmMethod = $hashAlgorithmMethod;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetHashAlgorithmMethod(): self
    {
        $this->hashAlgorithmMethod = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getExpiryDate(): ?DateTimeInterface
    {
        return $this->expiryDate;
    }

    /**
     * @param DateTimeInterface|null $expiryDate
     * @return self
     */
    public function setExpiryDate(?DateTimeInterface $expiryDate = null): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExpiryDate(): self
    {
        $this->expiryDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getExpiryTime(): ?DateTimeInterface
    {
        return $this->expiryTime;
    }

    /**
     * @param DateTimeInterface|null $expiryTime
     * @return self
     */
    public function setExpiryTime(?DateTimeInterface $expiryTime = null): self
    {
        $this->expiryTime = $expiryTime;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetExpiryTime(): self
    {
        $this->expiryTime = null;

        return $this;
    }

    /**
     * @return MimeCode|null
     */
    public function getMimeCode(): ?MimeCode
    {
        return $this->mimeCode;
    }

    /**
     * @return MimeCode
     */
    public function getMimeCodeWithCreate(): MimeCode
    {
        $this->mimeCode = is_null($this->mimeCode) ? new MimeCode() : $this->mimeCode;

        return $this->mimeCode;
    }

    /**
     * @param MimeCode|null $mimeCode
     * @return self
     */
    public function setMimeCode(?MimeCode $mimeCode = null): self
    {
        $this->mimeCode = $mimeCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetMimeCode(): self
    {
        $this->mimeCode = null;

        return $this;
    }

    /**
     * @return FormatCode|null
     */
    public function getFormatCode(): ?FormatCode
    {
        return $this->formatCode;
    }

    /**
     * @return FormatCode
     */
    public function getFormatCodeWithCreate(): FormatCode
    {
        $this->formatCode = is_null($this->formatCode) ? new FormatCode() : $this->formatCode;

        return $this->formatCode;
    }

    /**
     * @param FormatCode|null $formatCode
     * @return self
     */
    public function setFormatCode(?FormatCode $formatCode = null): self
    {
        $this->formatCode = $formatCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFormatCode(): self
    {
        $this->formatCode = null;

        return $this;
    }

    /**
     * @return EncodingCode|null
     */
    public function getEncodingCode(): ?EncodingCode
    {
        return $this->encodingCode;
    }

    /**
     * @return EncodingCode
     */
    public function getEncodingCodeWithCreate(): EncodingCode
    {
        $this->encodingCode = is_null($this->encodingCode) ? new EncodingCode() : $this->encodingCode;

        return $this->encodingCode;
    }

    /**
     * @param EncodingCode|null $encodingCode
     * @return self
     */
    public function setEncodingCode(?EncodingCode $encodingCode = null): self
    {
        $this->encodingCode = $encodingCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetEncodingCode(): self
    {
        $this->encodingCode = null;

        return $this;
    }

    /**
     * @return CharacterSetCode|null
     */
    public function getCharacterSetCode(): ?CharacterSetCode
    {
        return $this->characterSetCode;
    }

    /**
     * @return CharacterSetCode
     */
    public function getCharacterSetCodeWithCreate(): CharacterSetCode
    {
        $this->characterSetCode = is_null($this->characterSetCode) ? new CharacterSetCode() : $this->characterSetCode;

        return $this->characterSetCode;
    }

    /**
     * @param CharacterSetCode|null $characterSetCode
     * @return self
     */
    public function setCharacterSetCode(?CharacterSetCode $characterSetCode = null): self
    {
        $this->characterSetCode = $characterSetCode;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetCharacterSetCode(): self
    {
        $this->characterSetCode = null;

        return $this;
    }

    /**
     * @return FileName|null
     */
    public function getFileName(): ?FileName
    {
        return $this->fileName;
    }

    /**
     * @return FileName
     */
    public function getFileNameWithCreate(): FileName
    {
        $this->fileName = is_null($this->fileName) ? new FileName() : $this->fileName;

        return $this->fileName;
    }

    /**
     * @param FileName|null $fileName
     * @return self
     */
    public function setFileName(?FileName $fileName = null): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetFileName(): self
    {
        $this->fileName = null;

        return $this;
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return self
     */
    public function setDescription(?array $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return self
     */
    public function unsetDescription(): self
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return self
     */
    public function clearDescription(): self
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addToDescription(Description $description): self
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return self
     */
    public function addOnceToDescription(Description $description): self
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }
}
