<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Encryption\Algorithm\KeyEncryption;

use Jose\Component\Encryption\Util\RSACrypt;

final class RSAOAEP256 extends RSA
{
    public function getEncryptionMode(): int
    {
        return RSACrypt::ENCRYPTION_OAEP;
    }

    public function getHashAlgorithm(): string
    {
        return 'sha256';
    }

    public function name(): string
    {
        return 'RSA-OAEP-256';
    }
}
