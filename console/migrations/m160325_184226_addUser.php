<?php

use yii\db\Migration;

class m160325_184226_addUser extends Migration
{

    public function safeUp()
    {
        try {
            //тут сам код миграции вверх
            $this->addColumn('user', [
                'name' => $this->string(30),
                'firstname' => $this->string(30),
                'phone' => $this->string(30),
                'country' => $this->string(30),
                'city' => $this->string(30),
                'postaddress' => $this->string(10),
                'address' => $this->string(200),
            ]);
        } catch (\Exception $e) {
            echo Console::output(Console::ansiFormat($e->getMessage(), [Console::FG_RED]) . PHP_EOL);
            return false;
        }
        return true;
    }

    public function safeDown()
    {
        try {
            //тут сам код миграции отмены
            $this->dropColumn('user', ['name', 'firstname', 'phone', 'country', 'city', 'postaddress', 'address']);
        } catch (\Exception $e) {
            echo Console::output(Console::ansiFormat($e->getMessage(), [Console::FG_RED]) . PHP_EOL);
            return false;
        }
        return true;
    }

    /*public function up()
    {

    }

    public function down()
    {
        echo "m160325_184226_addUser cannot be reverted.\n";

        return false;
    }*/

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
