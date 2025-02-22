<?php

declare(strict_types=1);

namespace Imi\Test\Component\Tests\Db\Pdo;

use Imi\Test\Component\Tests\Db\QueryCurdBaseTest;

/**
 * @testdox PdoQueryCurd
 */
class QueryCurdTest extends QueryCurdBaseTest
{
    /**
     * 连接池名.
     *
     * @var string
     */
    protected $poolName = 'maindb';

    /**
     * 测试 whereEx 的 SQL.
     *
     * @var string
     */
    protected $expectedTestWhereExSql = 'select * from `tb_article` where (`id` = :p1 and (`id` in (:p2) ) )';

    /**
     * 测试 JSON 查询的 SQL.
     *
     * @var string
     */
    protected $expectedTestJsonSelectSql = 'select * from `tb_test_json` where `json_data`->"$.uid" = :p1';
}
