<?php
/**
 * Created by PhpStorm.
 * User: Y.Kalinde
 * Date: 5/7/2017
 * Time: 3:29 PM
 */

namespace TNM\OCS;

trait Arrayable
{
    public function toArray(\stdClass $object)
    {
        return json_decode(json_encode($object), true);
    }
}