<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Entity\Category;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210217163922 extends AbstractMigration
{
    const TABLE = 'category';

    public function getDescription() : string
    {
        return 'Add content to Category table';
    }

    public function up(Schema $schema) : void
    {
        foreach ($this->getData() as $datum) {
            $this->connection->insert(self::TABLE, [
                'name' => $datum['name'],
                'description' => $datum['description'],
                'type' => $datum['type']
            ]);
        }
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM ' . self::TABLE);
    }

    private function getData()
    {
        return [
            [
                'name' => 'Платежи',
                'description' => 'ЖКХ, госпошлины, подписки',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Продукты',
                'description' => 'Продукты питания и бытовые нужды',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Электроника и бытовые приборы',
                'description' => 'Приобретение бытовой техники, электроприборов и гаджетов',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Мебель',
                'description' => 'Покупка мебели',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Одежда и обувь',
                'description' => 'Расходы на одежду и обувь',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Кафе и рестораны',
                'description' => 'Походы в места общепита',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Транспорт',
                'description' => 'Поездки на транспорте и проездные',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Развлечения',
                'description' => 'Кино, музеи, концерты и прочие мероприятия',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Связь и интернет',
                'description' => 'Мобильная связь и интернет',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Авто',
                'description' => 'Расходы на автомобиль',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Подарки',
                'description' => 'Расходы на подарки',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Спорт',
                'description' => 'Спортивные абонементы и товары',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Ремонт',
                'description' => 'Товары для ремонта',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Домашние животны',
                'description' => 'Расходы на домашних животных',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Здоровье',
                'description' => 'Походы к врачу, сдача анализов, косметологические процедуры',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Услуги',
                'description' => 'Услуги парикмахера, салона красоты, ателье и прочие',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Прочие расходы',
                'description' => 'Прочие расходы',
                'type' => Category::TYPE_EXPENDITURE
            ],
            [
                'name' => 'Зарплата',
                'description' => 'Зарплата, аванс, отпускные',
                'type' => Category::TYPE_INCOME
            ],
            [
                'name' => 'Иные начисления',
                'description' => 'Пособия, больничный, пенсия и прочие начисления',
                'type' => Category::TYPE_INCOME
            ],
            [
                'name' => 'Иные начисления',
                'description' => 'Пособия, больничный, пенсия и прочие начисления',
                'type' => Category::TYPE_INCOME
            ],
            [
                'name' => 'Денежные переводы',
                'description' => 'Поступления с переводов',
                'type' => Category::TYPE_INCOME
            ],
            [
                'name' => 'Прочие поступления',
                'description' => 'Прочие поступления',
                'type' => Category::TYPE_INCOME
            ],
        ];
    }
}
