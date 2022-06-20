<?

    /**
     * Абстрактный класс для обоих типов таблиц квартир - сгруппированных и разгруппированных
     */
    abstract class HouseFlat extends AbstractTable
    {
        /**
         * Исходное название таблицы
         * @return string
         */
        static function get_table_name(): string
        {
            return "SD_HOUSE_FLAT";
        }

        /**
         * Сортировка для таблицы
         * @return array
         */
        static function get_order_by(): array {
            return ["SD_HOUSE_FLAT_COST_TOTAL", "SD_HOUSE_FLAT_AREA_FULL", "SD_HOUSE_FLAT_AREA_LIVE"];
        }

        public static $limit = 6;

        public $house = null;
        public $section = null;
        public $area_full = null;
        public $area_live = null;
        public $area_rooms = null;
        public $area_kitchen = null;
        public $rooms = null;
        public $floor = null;
        public $cost_total = null;
        public $plan_img = null;
        // Переменные для отображения
        public $title = null;
        public $cost_m2 = null;
        public $cost_total_display = null;
        public $cost_m2_display = null;
        public $area_full_display = null;
        public $area_live_display = null;
        public $area_rooms_display = null;
        public $area_kitchen_display = null;

        /**
         * HouseFlat constructor.
         * @param array $row
         * @throws Exception
         */
        function __construct(array $row)
        {
            parent::__construct($row);

            $this->house = new House($row);
            $this->section = new Section($row);
            $this->area_full = $row["SD_HOUSE_FLAT_AREA_FULL"];
            $this->area_live = $row["SD_HOUSE_FLAT_AREA_LIVE"];
            $this->area_rooms = $row["SD_HOUSE_FLAT_AREA_ROOMS"];
            $this->area_kitchen = $row["SD_HOUSE_FLAT_AREA_KITCHEN"];
            $this->rooms = $row["SD_HOUSE_FLAT_ROOMS"];
            $this->floor = $row["SD_HOUSE_FLAT_FLOOR"];
            $this->cost_total = $row["SD_HOUSE_FLAT_COST_TOTAL"];
            $this->plan_img = $row["SD_HOUSE_FLAT_PLAN_IMG"];

            $this->area_full_display = float_format($this->area_full, true);
            $this->area_live_display = float_format($this->area_live, true);
            $this->area_rooms_display = float_format($this->area_rooms, true);
            $this->area_kitchen_display = float_format($this->area_kitchen, true);
            if ($this->cost_total) {
                $this->cost_total_display = currency_format($this->cost_total);
                $this->cost_m2_display = currency_format($this->cost_m2) . "/м²";
            } else {
                $this->cost_total_display = "-";
                $this->cost_m2_display = "-";
            }

            $this->title = "{$this->rooms}-комнатная квартира {$this->area_full_display} в {$this->house->full}";
        }
    }
