<?

    /**
     * Класс таблицы сгруппированных квартир
     */
    class HouseFlatGrouped extends HouseFlat
    {
        /**
         * Название view для таблицы (или той же таблицы, если view нет)
         * @return string
         */
        static function get_view_name(): string
        {
            return "sd_view_house_flat_grouped";
        }

        /**
         * HouseFlat constructor.
         * @param array $row
         * @throws Exception
         */
        function __construct(array $row)
        {
            parent::__construct($row);
        }

    }
