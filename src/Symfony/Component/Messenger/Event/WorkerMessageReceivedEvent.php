<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Event;

/**
 * Dispatched when a message was received from a transport but before sent to the bus.
 *
 * The event name is the class name.
 *
 * @experimental in 4.3
 */
class WorkerMessageReceivedEvent extends AbstractWorkerMessageEvent
{
}
