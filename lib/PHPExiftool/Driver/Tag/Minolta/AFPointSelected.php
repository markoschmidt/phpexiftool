<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFPointSelected extends AbstractTag
{

    protected $Id = 13;

    protected $Name = 'AFPointSelected';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Point Selected';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Center',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Top-right',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Right',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Bottom-right',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Bottom',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Bottom-left',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Left',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Top-left',
        ),
    );

}
