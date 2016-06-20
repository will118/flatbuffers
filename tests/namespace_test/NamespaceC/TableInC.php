<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace NamespaceC;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class TableInC extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return TableInC
     */
    public static function getRootAsTableInC(ByteBuffer $bb)
    {
        $obj = new TableInC();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return TableInC
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getReferToA1()
    {
        $obj = new TableInFirstNS();
        $o = $this->__offset(4);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    public function getReferToA2()
    {
        $obj = new SecondTableInA();
        $o = $this->__offset(6);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startTableInC(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return TableInC
     */
    public static function createTableInC(FlatBufferBuilder $builder, $refer_to_a1, $refer_to_a2)
    {
        $builder->startObject(2);
        self::addReferToA1($builder, $refer_to_a1);
        self::addReferToA2($builder, $refer_to_a2);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addReferToA1(FlatBufferBuilder $builder, $referToA1)
    {
        $builder->addOffsetX(0, $referToA1, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addReferToA2(FlatBufferBuilder $builder, $referToA2)
    {
        $builder->addOffsetX(1, $referToA2, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endTableInC(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}