<?php
/**
 * @copyright
 */

namespace Ufocms\AdminModules\News;

/**
 * Widget class
 */
class Widget extends \Ufocms\AdminModules\Widget
{
    use Authors;
    
    /**
     * @see parent
     */
    protected function setFields()
    {
        $this->fields = array(
            array('Type' => 'int',      'Name' => 'ItemsStart',     'Value' => 0,   'Title' => 'Пропустить эл-ов',          'Edit' => true),
            array('Type' => 'int',      'Name' => 'ItemsCount',     'Value' => 5,   'Title' => 'Вывести эл-ов',             'Edit' => true),
            array('Type' => 'int',      'Name' => 'AnnounceLength', 'Value' => 100, 'Title' => 'Кол-во символов анонса',    'Edit' => true),
            array('Type' => 'int',      'Name' => 'DaysLimit',      'Value' => 0,   'Title' => 'Выводить за, дней',         'Edit' => true),
            array('Type' => 'list',     'Name' => 'SortOrder',      'Value' => 0,   'Title' => 'Сортировка',                'Edit' => true,     'Items' => 'getSort'),
            array('Type' => 'slist',    'Name' => 'Author',         'Value' => '',  'Title' => 'Автор',                     'Edit' => true,     'Items' => $this->getAuthors(true)),
        );
    }
    
    /**
     * @return array
     */
    protected function getSort()
    {
        return array(
            array('Value' => 0, 'Title' => 'По дате, по убыванию'),
            array('Value' => 1, 'Title' => 'По дате, по возрастанию'),
            array('Value' => 2, 'Title' => 'По заголовку, по возрастанию'),
            array('Value' => 3, 'Title' => 'По заголовку, по убыванию'),
            array('Value' => 4, 'Title' => 'По просмотрам, по убыванию'),
            array('Value' => 5, 'Title' => 'По просмотрам, по возрастанию'),
        );
    }
}
