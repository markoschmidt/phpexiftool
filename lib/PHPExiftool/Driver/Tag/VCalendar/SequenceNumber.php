<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\VCalendar;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SequenceNumber extends AbstractTag
{

    protected $Id = 'Sequence';

    protected $Name = 'SequenceNumber';

    protected $FullName = 'VCard::VCalendar';

    protected $GroupName = 'VCalendar';

    protected $g0 = 'VCard';

    protected $g1 = 'VCalendar';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Sequence Number';

}
