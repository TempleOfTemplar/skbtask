<?php

use yii\db\Migration;

class m161107_075533_initial_migration extends Migration
{
    public function up()
    {

        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('city', $tables))  {
            if ($dbType == "mysql") {
                $this->createTable('{{%city}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'city_name' => 'VARCHAR(200) NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('register_form', $tables))  {
            if ($dbType == "mysql") {
                $this->createTable('{{%register_form}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'name' => 'VARCHAR(45) NULL',
                    'surname' => 'VARCHAR(45) NULL',
                    'patronymic' => 'VARCHAR(45) NULL',
                    'birth_date' => 'DATE NOT NULL',
                    'phone' => 'VARCHAR(12) NULL',
                    'email' => 'VARCHAR(60) NULL',
                    'is_subscribed' => 'TINYINT(1) NOT NULL',
                    'created_at' => 'DATETIME NOT NULL',
                    'city_id' => 'INT(11) NOT NULL',
                    'client_ip' => 'VARCHAR(45) NULL',
                    'client_agent' => 'VARCHAR(255) NULL',
                    'updated_at' => 'DATETIME NULL',
                ], $tableOptions_mysql);
            }
        }


        $this->createIndex('idx_city_id_4278_00','register_form','city_id',0);

        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_city_4267_00','{{%register_form}}', 'city_id', '{{%city}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->execute('SET foreign_key_checks = 1;');

        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%city}}',['id'=>'1','city_name'=>'Екатеринбург']);
        $this->insert('{{%city}}',['id'=>'2','city_name'=>'Москва']);
        $this->insert('{{%city}}',['id'=>'3','city_name'=>'Абакан']);
        $this->insert('{{%city}}',['id'=>'4','city_name'=>'Алапаевск']);
        $this->insert('{{%city}}',['id'=>'5','city_name'=>'Апатиты']);
        $this->insert('{{%city}}',['id'=>'6','city_name'=>'Арамиль']);
        $this->insert('{{%city}}',['id'=>'7','city_name'=>'Артемовский']);
        $this->insert('{{%city}}',['id'=>'8','city_name'=>'Архангельск']);
        $this->insert('{{%city}}',['id'=>'9','city_name'=>'Асбест']);
        $this->insert('{{%city}}',['id'=>'10','city_name'=>'Астрахань']);
        $this->insert('{{%city}}',['id'=>'11','city_name'=>'Белгород']);
        $this->insert('{{%city}}',['id'=>'12','city_name'=>'Белоярский']);
        $this->insert('{{%city}}',['id'=>'13','city_name'=>'Березовский']);
        $this->insert('{{%city}}',['id'=>'14','city_name'=>'Богданович']);
        $this->insert('{{%city}}',['id'=>'15','city_name'=>'Братск']);
        $this->insert('{{%city}}',['id'=>'16','city_name'=>'Бузулук']);
        $this->insert('{{%city}}',['id'=>'17','city_name'=>'ВеликийНовгород']);
        $this->insert('{{%city}}',['id'=>'18','city_name'=>'ВерхняяПышма']);
        $this->insert('{{%city}}',['id'=>'19','city_name'=>'ВерхняяСалда']);
        $this->insert('{{%city}}',['id'=>'20','city_name'=>'Владивосток']);
        $this->insert('{{%city}}',['id'=>'21','city_name'=>'Волгоград']);
        $this->insert('{{%city}}',['id'=>'22','city_name'=>'Волгодонск']);
        $this->insert('{{%city}}',['id'=>'23','city_name'=>'Волжский']);
        $this->insert('{{%city}}',['id'=>'24','city_name'=>'Вологда']);
        $this->insert('{{%city}}',['id'=>'25','city_name'=>'Воркута']);
        $this->insert('{{%city}}',['id'=>'26','city_name'=>'Воронеж']);
        $this->insert('{{%city}}',['id'=>'27','city_name'=>'Губкинский']);
        $this->insert('{{%city}}',['id'=>'28','city_name'=>'Екатеринбург']);
        $this->insert('{{%city}}',['id'=>'29','city_name'=>'Заречный']);
        $this->insert('{{%city}}',['id'=>'30','city_name'=>'Ижевск']);
        $this->insert('{{%city}}',['id'=>'31','city_name'=>'Ирбит']);
        $this->insert('{{%city}}',['id'=>'32','city_name'=>'Иркутск']);
        $this->insert('{{%city}}',['id'=>'33','city_name'=>'Казань']);
        $this->insert('{{%city}}',['id'=>'34','city_name'=>'Калининград']);
        $this->insert('{{%city}}',['id'=>'35','city_name'=>'Калуга']);
        $this->insert('{{%city}}',['id'=>'36','city_name'=>'Каменск-Уральский']);
        $this->insert('{{%city}}',['id'=>'37','city_name'=>'Камышлов']);
        $this->insert('{{%city}}',['id'=>'38','city_name'=>'Кемерово']);
        $this->insert('{{%city}}',['id'=>'39','city_name'=>'Когалым']);
        $this->insert('{{%city}}',['id'=>'40','city_name'=>'Краснодар']);
        $this->insert('{{%city}}',['id'=>'41','city_name'=>'Краснотурьинск']);
        $this->insert('{{%city}}',['id'=>'42','city_name'=>'Красноуфимск']);
        $this->insert('{{%city}}',['id'=>'43','city_name'=>'Красноярск']);
        $this->insert('{{%city}}',['id'=>'44','city_name'=>'Курган']);
        $this->insert('{{%city}}',['id'=>'45','city_name'=>'Курск']);
        $this->insert('{{%city}}',['id'=>'46','city_name'=>'Лангепас']);
        $this->insert('{{%city}}',['id'=>'47','city_name'=>'Липецк']);
        $this->insert('{{%city}}',['id'=>'48','city_name'=>'Людиново']);
        $this->insert('{{%city}}',['id'=>'49','city_name'=>'Магадан']);
        $this->insert('{{%city}}',['id'=>'50','city_name'=>'Магнитогорск']);
        $this->insert('{{%city}}',['id'=>'51','city_name'=>'Мегион']);
        $this->insert('{{%city}}',['id'=>'52','city_name'=>'Миасс']);
        $this->insert('{{%city}}',['id'=>'53','city_name'=>'Мирный']);
        $this->insert('{{%city}}',['id'=>'54','city_name'=>'Москва']);
        $this->insert('{{%city}}',['id'=>'55','city_name'=>'Муравленко']);
        $this->insert('{{%city}}',['id'=>'56','city_name'=>'Мурманск']);
        $this->insert('{{%city}}',['id'=>'57','city_name'=>'НабережныеЧелны']);
        $this->insert('{{%city}}',['id'=>'58','city_name'=>'Надым']);
        $this->insert('{{%city}}',['id'=>'59','city_name'=>'Невьянск']);
        $this->insert('{{%city}}',['id'=>'60','city_name'=>'Нерюнгри']);
        $this->insert('{{%city}}',['id'=>'61','city_name'=>'Нефтеюганск']);
        $this->insert('{{%city}}',['id'=>'62','city_name'=>'Нижневартовск']);
        $this->insert('{{%city}}',['id'=>'63','city_name'=>'НижнийНовгород']);
        $this->insert('{{%city}}',['id'=>'64','city_name'=>'НижнийТагил']);
        $this->insert('{{%city}}',['id'=>'65','city_name'=>'НижняяТура']);
        $this->insert('{{%city}}',['id'=>'66','city_name'=>'Новокузнецк']);
        $this->insert('{{%city}}',['id'=>'67','city_name'=>'Новокуйбышевск']);
        $this->insert('{{%city}}',['id'=>'68','city_name'=>'Новороссийск']);
        $this->insert('{{%city}}',['id'=>'69','city_name'=>'Новосибирск']);
        $this->insert('{{%city}}',['id'=>'70','city_name'=>'НовыйУренгой']);
        $this->insert('{{%city}}',['id'=>'71','city_name'=>'Ноябрьск']);
        $this->insert('{{%city}}',['id'=>'72','city_name'=>'Омск']);
        $this->insert('{{%city}}',['id'=>'73','city_name'=>'Оренбург']);
        $this->insert('{{%city}}',['id'=>'74','city_name'=>'Орск']);
        $this->insert('{{%city}}',['id'=>'75','city_name'=>'Первоуральск']);
        $this->insert('{{%city}}',['id'=>'76','city_name'=>'Пермь']);
        $this->insert('{{%city}}',['id'=>'77','city_name'=>'Петрозаводск']);
        $this->insert('{{%city}}',['id'=>'78','city_name'=>'Петропавловск-Камчатский']);
        $this->insert('{{%city}}',['id'=>'79','city_name'=>'Печора']);
        $this->insert('{{%city}}',['id'=>'80','city_name'=>'Полевской']);
        $this->insert('{{%city}}',['id'=>'81','city_name'=>'Ревда']);
        $this->insert('{{%city}}',['id'=>'82','city_name'=>'Реж']);
        $this->insert('{{%city}}',['id'=>'83','city_name'=>'Рефтинский']);
        $this->insert('{{%city}}',['id'=>'84','city_name'=>'Ростов-на-Дону']);
        $this->insert('{{%city}}',['id'=>'85','city_name'=>'Рязань']);
        $this->insert('{{%city}}',['id'=>'86','city_name'=>'Самара']);
        $this->insert('{{%city}}',['id'=>'87','city_name'=>'Санкт-Петербург']);
        $this->insert('{{%city}}',['id'=>'88','city_name'=>'Северодвинск']);
        $this->insert('{{%city}}',['id'=>'89','city_name'=>'Серов']);
        $this->insert('{{%city}}',['id'=>'90','city_name'=>'Смоленск']);
        $this->insert('{{%city}}',['id'=>'91','city_name'=>'Сочи']);
        $this->insert('{{%city}}',['id'=>'92','city_name'=>'Сургут']);
        $this->insert('{{%city}}',['id'=>'93','city_name'=>'СухойЛог']);
        $this->insert('{{%city}}',['id'=>'94','city_name'=>'Сызрань']);
        $this->insert('{{%city}}',['id'=>'95','city_name'=>'Сыктывкар']);
        $this->insert('{{%city}}',['id'=>'96','city_name'=>'Сысерть']);
        $this->insert('{{%city}}',['id'=>'97','city_name'=>'Таганрог']);
        $this->insert('{{%city}}',['id'=>'98','city_name'=>'Талица']);
        $this->insert('{{%city}}',['id'=>'99','city_name'=>'Тобольск']);
        $this->insert('{{%city}}',['id'=>'100','city_name'=>'Тольятти']);
        $this->insert('{{%city}}',['id'=>'101','city_name'=>'Томск']);
        $this->insert('{{%city}}',['id'=>'102','city_name'=>'Троицк']);
        $this->insert('{{%city}}',['id'=>'103','city_name'=>'Туринск']);
        $this->insert('{{%city}}',['id'=>'104','city_name'=>'Тюмень']);
        $this->insert('{{%city}}',['id'=>'105','city_name'=>'Улан-Удэ']);
        $this->insert('{{%city}}',['id'=>'106','city_name'=>'Усинск']);
        $this->insert('{{%city}}',['id'=>'107','city_name'=>'Ухта']);
        $this->insert('{{%city}}',['id'=>'108','city_name'=>'Хабаровск']);
        $this->insert('{{%city}}',['id'=>'109','city_name'=>'Ханты-Мансийск']);
        $this->insert('{{%city}}',['id'=>'110','city_name'=>'Чебоксары']);
        $this->insert('{{%city}}',['id'=>'111','city_name'=>'Челябинск']);
        $this->insert('{{%city}}',['id'=>'112','city_name'=>'Череповец']);
        $this->insert('{{%city}}',['id'=>'113','city_name'=>'Черкесск']);
        $this->insert('{{%city}}',['id'=>'114','city_name'=>'Шахты']);
        $this->insert('{{%city}}',['id'=>'115','city_name'=>'Югорск']);
        $this->insert('{{%city}}',['id'=>'116','city_name'=>'Якутск']);
        $this->insert('{{%city}}',['id'=>'117','city_name'=>'Ярославль']);
        $this->execute('SET foreign_key_checks = 1;');

    }

    public function down()
    {
        echo "m161107_075533_initial_migration reverting...\n";
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `city`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `register_form`');
        $this->execute('SET foreign_key_checks = 1;');
        return false;
    }

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
