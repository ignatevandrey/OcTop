<?

    /**
     * Класс секций/подъездов домов
     */
    class Section extends AbstractTable
    {
        /**
         * Название view для таблицы (или той же таблицы, если view нет)
         * @return string
         */
        static function get_view_name(): string
        {
            return "SD_HOUSE_SECTION";
        }

        /**
         * Исходное название таблицы
         * @return string
         */
        static function get_table_name(): string
        {
            return "SD_HOUSE_SECTION";
        }

        /**
         * Сортировка для таблицы
         * @return array
         */
        static function get_order_by(): array {
            return ["SD_HOUSE_FLAT_SECTION", "SD_HOUSE_FLAT_ENTRANCE"];
        }

        public $section = null;
        public $entrance = null;
        public $short = null;
        public $full = null;
        public $top = null;
        public $bottom = null;
        public $map = null;
        public $address = null;
        public $built_date = null;
        // Переменные для отображения
        public $built_date_display = null;

        /**
         * House constructor.
         * @param array $row
         * @throws Exception
         */
        function __construct(array $row)
        {
            parent::__construct($row);
            $this->section = $row["SD_HOUSE_FLAT_ENTRANCE"];
            $this->entrance = $row["SD_HOUSE_FLAT_SECTION"];
            $this->short = $row["SD_HOUSE_SECTION_NAME"];
            $this->full = $row["SD_HOUSE_SECTION_SHORT"];
            $this->top = $row["SD_HOUSE_SECTION_TOP"];
            $this->bottom = $row["SD_HOUSE_SECTION_BOTTOM"];
            $this->map = $row["SD_HOUSE_SECTION_MAP"];
            $this->address = $row["SD_HOUSE_SECTION_ADDRESS"];
            if ($row["SD_HOUSE_SECTION_BUILT_DATE"]) {
                $this->built_date = $row["SD_HOUSE_SECTION_BUILT_DATE"];
                $this->built_date_display = date_from_db($this->built_date);
            }
        }
    }
