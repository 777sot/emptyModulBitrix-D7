<?
// пространство имен для класса Test
namespace Hmarketing\D7;
// пространство имен для подключения класса с ORM таблицы hmarketing_test
use Hmarketing\D7\DataTable;

class Test
{
    // метод для получения строки из таблицы базы данных hmarketing_test
    public static function get()
    {
        // запрос к базе
        $result = DataTable::getList(
            array(
                'select' => array('*')
            )
        );
        // преобразование запроса от базы
        $row = $result->fetch();
        // распечатываем массив с ответом на экран
        print "<pre>";
        print_r($row);
        print "</pre>";
        // возвращаем ответ от баззы
        return $row;
    }
}
