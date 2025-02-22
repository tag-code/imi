<?php

declare(strict_types=1);

namespace Imi\Model\Annotation\Relation;

use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * 关系注解基类.
 *
 * @Parser("Imi\Bean\Parser\NullParser")
 *
 * @property bool          $with       关联预加载查询
 * @property string[]|null $withFields 设置结果模型的序列化字段
 */
abstract class RelationBase extends Base
{
}
