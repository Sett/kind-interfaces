<?php
namespace funcraft\kind\interfaces;

/**
 * Interface IKind
 * @package funcraft\kind\interfaces
 * @author Funcraft <what4me@yandex.ru>
 */
interface IKind
{
    const TABLE_NAME = 'funcraft__kind';

    const FIELD_ID   = 'id';
    const FIELD_KIND = 'kind';

    /**
     * @return int
     */
    public function getId():int;

    /**
     * @return string
     */
    public function getKind():string;
}
