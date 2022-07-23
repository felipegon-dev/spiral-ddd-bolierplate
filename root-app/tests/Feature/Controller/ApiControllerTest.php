<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Kairee Wu (krwu)
 */

declare(strict_types=1);

namespace Tests\Feature\Controller;

use Tests\TestCase;

class ApiControllerTest extends TestCase
{
    public function testDefaultActionWorks(): void
    {
        $this
            ->fakeHttp()
            ->get('/')
            ->assertOk()
            ->assertBodyContains('Hello world!');
    }
}
