<?

    /**
     * Класс таблицы домов
     */
    class House extends AbstractTable
    {
        /**
         * Название view для таблицы (или той же таблицы, если view нет)
         * @return string
         */
        static function get_view_name(): string
        {
            return "SD_HOUSE";
        }

        /**
         * Исходное название таблицы
         * @return string
         */
        static function get_table_name(): string
        {
            return "SD_HOUSE";
        }

        /**
         * Сортировка для таблицы
         * @return array
         */
        static function get_order_by(): array {
            return ["SD_HOUSE_SORT"];
        }

        public $short = null;
        public $full = null;
        public $sections_count = null;
        public $entrances_count = null;
        public $floors_count = null;
        public $sort = null;
        public $num_over = null;
        public $address_region = null;
        public $address_city = null;
        public $site = null;
        public $is_active = null;

        /**
         * House constructor.
         * @param array $row
         * @throws Exception
         */
        function __construct(array $row)
        {
            parent::__construct($row);
            $this->short = $row["SD_HOUSE_SHORT"];
            $this->full = $row["SD_HOUSE_NAME"];
            $this->sections_count = $row["SD_HOUSE_SECTIONS_COUNT"];
            $this->entrances_count = $row["SD_HOUSE_ENTRANCES_COUNT"];
            $this->floors_count = $row["SD_HOUSE_FLOORS_COUNT"];
            $this->sort = $row["SD_HOUSE_SORT"];
            $this->num_over = $row["SD_HOUSE_NUM_OVER"];
            $this->address_region = $row["SD_HOUSE_ADDRESS_REGION"];
            $this->address_city = $row["SD_HOUSE_ADDRESS_CITY"];
            $this->site = $row["SD_HOUSE_SITE"];
            $this->is_active = bool_from_db($row["SD_HOUSE_ACTIVE"]);
        }
    }
