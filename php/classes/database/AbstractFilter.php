<?

    /**
     * Class AbstractFilter
     */
    abstract class AbstractFilter
    {
        /**
         * Получает условия AND для where части запроса
         * @return string
         */
        abstract function get_where(): string;
    }
