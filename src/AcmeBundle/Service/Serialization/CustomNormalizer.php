<?php

namespace AcmeBundle\Service\Serialization;

use AcmeBundle\Entity\ScalarValues;
use AcmeBundle\Service\Factory\ClientFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CustomNormalizer implements DenormalizerInterface, NormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $client = $this->clientFactory->findOrCreateByExternalIdentifier($data);

        return $client;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === ScalarValues::class && is_string($data);
    }

    /**
     * @inheritdoc
     */
    public function normalize($object, $format = null, array $context = array())
    {
        /** @var ScalarValues $object */
        return $object->getExternalClientIdentifier();
    }

    /**
     * @inheritdoc
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof ScalarValues;
    }
}
