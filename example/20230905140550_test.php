<?php

use think\migration\Migrator;
use yzh52521\migrate\Schema;
use yzh52521\migrate\Blueprint;

class Test extends Migrator
{

    public function up()
    {
        Schema::create($this->getAdapter(), 'test', function (Blueprint $table) {
            $table->id();
            $table->string('username', 64)->comment('用户名');
            $table->string('password', 255)->comment('登录密码');
            $table->integer('integer', false, true);
            $table->integer('integer2', false, false);
            $table->decimal('money', 11, 2);
            $table->decimal('money2', 10, 2, true);

            $table->string('avatar', 255)->comment('头像');
            $table->tinyInteger('sex')->default(0);
            $table->bigInteger('bigInt')->comment('大整数');
            $table->date('date')->nullable();
            $table->timestamps();

            $table->uuid();

            $table->index(['username', 'sex']);
        }, ['comment' => '表注释']);
    }

    public function down()
    {
        Schema::drop($this->getAdapter(),'test');
    }
}
