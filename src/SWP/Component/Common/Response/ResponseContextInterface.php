<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Core Bundle.
 *
 * Copyright 2016 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2016 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Component\Common\Response;

interface ResponseContextInterface
{
    const INTENTION_API = 'api';
    const INTENTION_TEMPLATE = 'template';

    /**
     * @return string
     */
    public function getIntention(): string;

    /**
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * @return array
     */
    public function getHeaders(): array;

    /**
     * @return array
     */
    public function getClearedCookies(): array;

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function clearCookie(string $key);
}
