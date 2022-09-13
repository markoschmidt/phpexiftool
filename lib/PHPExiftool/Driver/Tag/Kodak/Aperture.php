<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Aperture extends AbstractTag
{

    protected $Id = 'Aperture';

    protected $Name = 'Aperture';

    protected $FullName = 'Kodak::TextualInfo';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Aperture';

    protected $flag_Permanent = true;

}
