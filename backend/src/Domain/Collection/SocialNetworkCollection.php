<?php

namespace App\Domain\Collection;

use Ramsey\Collection\AbstractCollection;

final class SocialNetworkCollection extends AbstractCollection
{
    public function getType()
    {
        return 'App\\Domain\\ValueObject\\SocialNetwork';
    }
}