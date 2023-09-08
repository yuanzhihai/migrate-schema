## 安装
```shell
composer require yzh52521/migrate-schema
```
## 使用
```php
// 创建表
Schema::create($this->getAdapter(), '表名', function (Blueprint $table) {
    // 迁移代码
});

// 修改表
Schema::table($this->getAdapter(), '表名', function (Blueprint $table) {
    // 迁移代码
});
```
## 可用的字段定义方法

| 命令                                       | 描述                                         |
|------------------------------------------|--------------------------------------------|
| $table->id();                            | 定义一个bigint 并命名为id的主键                       |
| $table->bigInteger('votes');             | 相当于 BIGINT                                 |
| $table->binary('data');                  | 相当于 BLOB                                   |
| $table->boolean('confirmed');            | 相当于 BOOLEAN                                |
| $table->char('name', 100);               | 相当于带有长度的 CHAR                              |
| $table->date('created_at');              | 相当于 DATE                                   |
| $table->dateTime('created_at');          | 相当于 DATETIME                               |
| $table->decimal('amount', 8, 2);         | 相当于带有精度与基数 DECIMAL                         |
|$table->double('amount', 8, 2); | 相当于带有精度与基数 DOUBLE (think-migration 3.1.x)  |
|$table->float('amount', 8, 2);| 相当于带有精度与基数 FLOAT   (think-migration 3.1.x) |
| $table->enum('level', ['easy', 'hard']); | 相当于 ENUM                                   |
| $table->set('level', ['easy', 'hard']);  | 相当于 SET     (think-migration 3.1.x)        |
| $table->geometry('positions');           | 相当于 GEOMETRY                               |
| $table->integer('votes');                | 相当于 INTEGER                                |
| $table->json('options');                 | 相当于 JSON                                   |
| $table->jsonb('options');                | 相当于 JSONB                                  |
| $table->lineString('positions');         | 相当于 LINESTRING                             |
| $table->longText('description');         | 相当于 LONGTEXT                               |
| $table->mediumInteger('votes');          | 相当于 MEDIUMINT                              |
| $table->mediumText('description');       | 相当于 MEDIUMTEXT                             |
| $table->point('position');               | 相当于 POINT                                  |
| $table->polygon('positions');            | 相当于 POLYGON                                |
| $table->smallInteger('votes');           | 相当于 SMALLINT                               |
| $table->softDeletes();                   | 相当于为软删除添加一个可空的 delete_time 字段              |
| $table->string('name', 100);             | 相当于带长度的 VARCHAR                            |
| $table->text('description');             | 相当于 TEXT                                   |
| $table->time('sunrise');                 | 相当于 TIME                                   |
| $table->timestamp('added_on');           | 相当于 TIMESTAMP                              |
| $table->timestamps();                    | 相当于可空的 create_time 和 update_time TIMESTAMP |
| $table->tinyInteger('votes');            | 相当于 TINYINT                                |
| $table->unsignedBigInteger('votes');     | 相当于 Unsigned BIGINT                        |
| $table->unsignedDecimal('amount', 8, 2); | 相当于带有精度和基数的 UNSIGNED DECIMAL               |
| $table->unsignedInteger('votes');        | 相当于 Unsigned INT                           |
| $table->unsignedMediumInteger('votes');  | 相当于 Unsigned MEDIUMINT                     |
| $table->unsignedSmallInteger('votes');   | 相当于 Unsigned SMALLINT                      |
| $table->unsignedTinyInteger('votes');    | 相当于 Unsigned TINYINT                       |
| $table->uuid('id');                      | 相当于 UUID                                   |
| $table->year('birth_year');              | 相当于 YEAR                                   |

[查看使用示例](./example/20230905140550_test.php)